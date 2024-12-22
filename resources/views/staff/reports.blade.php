@extends('templates.app')

@section('content')
<style id="report-card">
    .report-card {
            background-color: #fff;
            border: 1px solid #e3e6f0;
            border-radius: 20px;
            padding: 1rem;
            margin-bottom: 1rem;
            width:100%;
            height: fit-content;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

        }

        .report-card .report-header {
            font-size: 0.875rem;
            color: #6c757d;
        }

        .report-card .report-title {
            font-size: 1rem;
            font-weight: bold;
            color: #007bff;
            height: fit-content;
        }

        .report-card .report-content {
            font-size: 0.875rem;
            color: #212529;
        }

        .report-card .report-footer {
            font-size: 0.75rem;
            color: #6c757d;
        }

        .content-wrapper {
            flex-direction: column;
            gap: 10px;
        }

        .kol {
            width: 100%;
        }
        .dropper {
            background-color: #f2520d;
        }
        .dropper::hover {
            background-color: #f2520dcc;
        }

</style>
    <body class="wrapperes">
        <div class="patternbos">
            <div class="background">
                @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @elseif (session('failed'))
                        <div class="alert alert-danger">{{ session('failed') }}</div>
                    @endif
                <div class="ergono">
                    <div class="dropdown">
                        <button class="btn dropdown-toggle dropper" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Export Excel
                        </button>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li>
                                    <form action="{{route('reports.export.all')}}" method="get" style="display: inline;">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Ekspor Semua</button>
                                    </form>
                                </li>
                                <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modalexport" >Ekspor berdasarakan tanggal</button></li>
                            </ul>
                            
                        </div>
                    <div class="row content-wrapper">
                        @foreach ($reports as $report)
                        <div class="report-card">
                            
                        <div class="d-flex align-items-center mb-2 mix">
                            <div class="kol d-flex justify-content-between">
                                <div class="pengunci d-flex">
                                    @if ($report->user->profile_picture)
                                        <img alt="User profile picture" class="rounded-circle me-2"
                                            height="40"
                                            src="{{ asset('storage/' . $report->user->profile_picture) }}"
                                            width="40" />
                                    @else
                                        <img alt="Default profile picture" class="rounded-circle me-2"
                                            height="40"
                                            src="https://via.placeholder.com/40/cccccc/ffffff?text=A"
                                            width="40" />
                                    @endif
                                        <div>
                                            <div class="report-header">
                                                Terlapor masuk laporan dari <strong> {{$report->regency}}, {{$report->subdistrict}}, {{$report->village}}</strong>
                                            </div>
                                            <div class="report-header">
                                                pada {{ $report->created_at->format('l, H:i') }} <i class="fas fa-clock"></i> {{ $report->created_at->diffForHumans() }}
                                            </div>
                                        </div>
                                    </div>

                                    @if ((empty($report->responses)) || (empty($report->responses->response_status)) || $report->responses->response_status === 'ON_PROCESS')
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle dropper" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            Aksi
                                        </button>

                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li>
                                                    <form action="{{ route('reject', $report->id) }}" method="POST" style="display: inline;">
                                                        @csrf
                                                        <button type="submit" class="dropdown-item">Tolak</button>
                                                    </form>
                                                </li>
                                                <li><a class="dropdown-item" href="{{ route('process.show', $report->id) }}">Proses penyelesaian/perbaikan</a></li>
                                            </ul>
                                            
                                        </div>
                                    @elseif ($report->responses && $report->responses->response_status === 'REJECT')
                                        <div class="dropper d-flex align-items-center" style="border-radius: 5px;">
                                            <h5 class="m-2">Telah ditolak</h5>
                                        </div>
                                    @elseif ($report->responses && $report->responses->response_status === 'DONE')
                                    <div class="dropper d-flex align-items-center" style="border-radius: 5px;">
                                        <h5 class="m-2">Telah selesai</h5>
                                    </div>
                                    @endif
                            </div>

                        </div>

                            <div class="report-header">
                                Terdiposisi ke <strong>{{ $report->type }}</strong>
                            </div>
                            <div class="report-content d-flex flex-wrap" style="word-wrap: break-word; overflow: hidden; text-overflow: ellipsis; white-space:normal;">
                                @if ($report->image)
                                <div class="d-flex mt-2">
                                    <img data-bs-toggle="modal" data-bs-target="#modalImage-{{ $report->id }}" alt="Report image" class="me-2" height="100"
                                        src="{{ asset('storage/' . $report->image) }}" width="100" />
                                </div>
                                @endif
                                <div class="textcontain">
                            <div class="report-title">
                                {{ $report->title }}
                            </div>

                                
                                
                            
                                @if (strlen($report->description) > 50)
                                    <span id="short-description-{{ $report->id }}"
                                        style="display: inline">
                                        {{ Str::limit(strip_tags($report->description), 50) }}
                                    </span>
                                    <span id="full-description-{{ $report->id }}"
                                        class="d-none text-break" style="display: inline;">
                                        {{ $report->description }}
                                    </span>
                                    <button id="toggle-btn-{{ $report->id }}" class="btn btn-link p-0"
                                        onclick="toggleDescription({{ $report->id }})">
                                        Selengkapnya
                                    </button>
                                @else
                                    <span>
                                        {{ $report->description }}
                                    </span>
                                @endif
                            </div>

                        </div>

                            <div class="report-footer mt-2 d-flex">
                                <span>#{{ $report->id }}</span>
                                <div class="d-flex justify-content-end col align-items-center">
                                    <a href="#" data-bs-toggle="modal"
                                        data-bs-target="#modalComment-{{ $report->id }}"
                                        class="me-2"><i class="fas fa-comment"></i>
                                        {{ $report->comments->count() }} </a>
                                    <i class="fas fa-heart text-dark px-1"></i>
                                    <span class="voting-count">{{ count(json_decode($report->voting, true) ?? []) }}</span>
                                    


                                    <i class="fas fa-share"></i> Bagikan
                                </div>
                            </div>
                        </div>
                        
                        <div class="modal fade" id="modalComment-{{ $report->id }}" tabindex="-1"
                            aria-labelledby="modalLabel-{{ $report->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalLabel-{{ $report->id }}">
                                            Komentar untuk {{ $report->title }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div id="comment-section-{{ $report->id }}">
                                            @forelse ($report->comments as $comment)
                                                <div class="mb-3">
                                                    <strong>{{ $comment->user->email }}</strong> <small
                                                        class="text-muted">{{ $comment->created_at->diffForHumans() }}</small>
                                                    <p>{{ $comment->comment }}</p>
                                                </div>
                                            @empty
                                                <p>Belum ada komentar. Jadilah yang pertama berkomentar!</p>
                                            @endforelse
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="modalexport" tabindex="-1">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Pilih tanggal ekspor</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route('reports.export.date')}}" method="get">
                                            <div class="mb-4">
                                                <label for="export_date">Tanggal</label>
                                                <input type="date" name="date" id="export_date" class="form-control" required>
                                            </div>
                                        </div>
                                        
                                        <div class="modal-footer">
                                            <button type="submit">Export</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="modalImage-{{ $report->id }}" tabindex="-1"
                            aria-labelledby="modalLabel-{{ $report->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-m">
                                <div class="modal-content">
                                    <img src="{{ asset('storage/' . $report->image) }}" width="100%" height="100%" alt="fullimage-{{ $report->id }}">
                                </div>
                            </div>
                        </div>
                        
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script id="description">
        function toggleDescription(reportId) {
            var shortDescription = document.getElementById('short-description-' + reportId);
            var fullDescription = document.getElementById('full-description-' + reportId);
            var toggleBtn = document.getElementById('toggle-btn-' + reportId);

            if (fullDescription.classList.contains('d-none')) {
                shortDescription.style.display = 'none'; 
                fullDescription.classList.remove('d-none'); 
                toggleBtn.innerText = 'Tutup'; 
            } else {
                shortDescription.style.display = 'inline'; 
                fullDescription.classList.add('d-none');
                toggleBtn.innerText = 'Selengkapnya';
            }
        }
    </script>
@endsection