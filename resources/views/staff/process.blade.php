@extends('templates.app')

@section('content')
<style>
        .status-badge {
                background-color: #28a745;
                color: white;
                padding: 5px 10px;
                border-radius: 5px;
            }
            .timeline {
                list-style: none;
                padding: 0;
            }
            .timeline li {
                position: relative;
                padding-left: 20px;
                margin-bottom: 10px;
            }
            .timeline li::before {
                content: '';
                position: absolute;
                left: 0;
                top: 5px;
                width: 10px;
                height: 10px;
                background-color: #6c757d;
                border-radius: 50%;
            }
            .timeline li.active::before {
                background-color: #28a745;
            }
            .timeline li span {
                color: #ffc107;
            }
            .btn-custom {
                background-color: #28a745;
                color: white;
            }

            .post-card {
            background-color: #fff;
            border: 1px solid #e3e6f0;
            border-radius: 0.35rem;
            padding: 1rem;
            width: 50%;
            height: 50%;
            margin-bottom: 1rem;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .post-card .post-header {
            font-size: 0.875rem;
            color: #6c757d;
        }

        .post-card .post-title {
            font-size: 1rem;
            font-weight: bold;
            color: #007bff;
        }

        .post-card .post-content {
            font-size: 0.875rem;
            color: #212529;
        }

        .kontener {
        width:100%;
        height: 80dvh;
        }

        .kontinir {
            width:50%;
            height: 50%;
        }
   </style>
   <style>

.tracking-detail {
 padding:3rem 0
}
#tracking {
 margin-bottom:1rem
}
[class*=tracking-status-] p {
 margin:0;
 font-size:1.1rem;
 color:#fff;
 text-transform:uppercase;
 text-align:center
}
[class*=tracking-status-] {
 padding:1.6rem 0
}
.tracking-status-intransit {
 background-color:#65aee0
}
.tracking-status-outfordelivery {
 background-color:#f5a551
}
.tracking-status-deliveryoffice {
 background-color:#f7dc6f
}
.tracking-status-delivered {
 background-color:#4cbb87
}
.tracking-status-attemptfail {
 background-color:#b789c7
}
.tracking-status-error,.tracking-status-exception {
 background-color:#d26759
}
.tracking-status-expired {
 background-color:#616e7d
}
.tracking-status-pending {
 background-color:#ccc
}
.tracking-status-inforeceived {
 background-color:#214977
}
.tracking-list {
 border:1px solid #e5e5e5
}
.tracking-item {
 border-left:1px solid #e5e5e5;
 position:relative;
 padding:2rem 1.5rem .5rem 2.5rem;
 font-size:.9rem;
 margin-left:3rem;
 min-height:5rem
}
.tracking-item:last-child {
 padding-bottom:4rem
}
.tracking-item .tracking-date {
 margin-bottom:.5rem
}
.tracking-item .tracking-date span {
 color:#888;
 font-size:85%;
 padding-left:.4rem
}
.tracking-item .tracking-content {
 padding:.5rem .8rem;
 background-color:#f4f4f4;
 border-radius:.5rem
}
.tracking-item .tracking-content span {
 display:block;
 color:#888;
 font-size:85%
}
.tracking-item .tracking-icon {
 line-height:2.6rem;
 position:absolute;
 left:-1.3rem;
 width:2.6rem;
 height:2.6rem;
 text-align:center;
 border-radius:50%;
 font-size:1.1rem;
 background-color:#fff;
 color:#fff
}
.tracking-item .tracking-icon.status-sponsored {
 background-color:#f68
}
.tracking-item .tracking-icon.status-delivered {
 background-color:#4cbb87
}
.tracking-item .tracking-icon.status-outfordelivery {
 background-color:#f5a551
}
.tracking-item .tracking-icon.status-deliveryoffice {
 background-color:#f7dc6f
}
.tracking-item .tracking-icon.status-attemptfail {
 background-color:#b789c7
}
.tracking-item .tracking-icon.status-exception {
 background-color:#d26759
}
.tracking-item .tracking-icon.status-inforeceived {
 background-color:#214977
}
.tracking-item .tracking-icon.status-intransit {
 color:#e5e5e5;
 border:1px solid #e5e5e5;
 font-size:.6rem
}
@media(min-width:992px) {
 .tracking-item {
  margin-left:10rem
 }
 .tracking-item .tracking-date {
  position:absolute;
  left:-10rem;
  width:7.5rem;
  text-align:right
 }
 .tracking-item .tracking-date span {
  display:block
 }
 .tracking-item .tracking-content {
  padding:0;
  background-color:transparent
 }
}
   </style>
    <body class="wrapperes">
        <div class="patternbos">
            <div class="background">
                <div class="ergono">
                    <div class="content-wrapper">
                        <div class="row">
                            <div class="col">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h4>
                                        {{ $report->user->email }}
                                        </h4>
                                        <a href="{{ route('userreports') }}" class="btn btn-custom">
                                        Kembali
                                        </a>
                                    </div>
                                    <div class="mb-3">
                                        <span>
                                        {{ $report->created_at->format('d F Y') }}
                                        </span>
                                        <span>
                                        Status tanggapan :
                                        </span>
                                        <span class="status-badge">
                                        {{ $responses->response_status }}
                                        </span>
                                    </div>
                                    <div class="row">
                                        <div class="d-flex kontener">
                                            <div class="post-card">
                                            
                                                <div class="d-flex align-items-center mb-2">
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
                                                            <div class="post-header">
                                                                Terlapor masuk laporan dari <strong>{{$report->regency}}, {{$report->subdistrict}}, {{$report->village}}, {{$report->province}}</strong>
                                                            </div>
                                                            <div class="post-header">
                                                                pada {{ $report->created_at->format('l, H:i') }} </i> <i class="fas fa-clock"></i> {{ $report->created_at->diffForHumans() }}
                                                            </div>
                                                        </div>
                                                </div>
        
                                                    <div class="post-header">
                                                        Terdiposisi ke <strong>{{ $report->type }}</strong>
                                                    </div>
        
                                                    <div class="post-title">
                                                        {{ $report->title }}
                                                    </div>
        
                                                    <div class="post-content d-flex flex-wrap"
                                                        style="word-wrap: break-word; overflow: hidden; text-overflow: ellipsis; white-space:normal;">
                                                        @if (strlen($report->description) > 50)
                                                            <span id="short-description-{{ $report->id }}"
                                                                style="display: inline">
                                                                {{ Str::limit(strip_tags($report->description), 50) }}
                                                            </span>
                                                            <span id="full-description-{{ $report->id }}"
                                                                class="d-none text-break" style="display: block;">
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
        
                                                    @if ($report->image)
                                                        <div class="d-flex mt-2">
                                                            <img data-bs-toggle="modal" data-bs-target="#modalImage-{{ $report->id }}" alt="Report image" class="me-2" height="200"
                                                                src="{{ asset('storage/' . $report->image) }}" width="200" />
                                                        </div>
                                                    @endif
                                            </div>

                                            <div class="modal fade" id="modalImage-{{ $report->id }}" tabindex="-1"
                                                aria-labelledby="modalLabel-{{ $report->id }}" aria-hidden="true">
                                                <div class="modal-dialog modal-m">
                                                    <div class="modal-content">
                                                        <img src="{{ asset('storage/' . $report->image) }}" width="100%" height="100%" alt="fullimage-{{ $report->id }}">
                                                    </div>
                                                </div>
                                            </div>
    
                                        
                                        <div class="col-md-4 kontinir">
                                        @foreach ($progresses as $progress)
                                        @php
                                            $textonly = implode(', ', json_decode($progress->histories, true));
                                        @endphp
                                                <div class="tracking-list">
                                                    <div class="tracking-item">
                                                        <div class="tracking-icon status-intransit">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                                <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path>
                                                            </svg>
                                                        </div>
                                                        <button data-bs-toggle="modal" data-bs-target="#showDeleteProgress-{{ $progress->id }}" class="tracking-date" style="border: none">
                                                            {{ $progress->created_at->format('d F Y') }}<span>{{ $progress->created_at->format('H:i') }}</span>
                                                            </button>
                                                        <div class="tracking-content">{{ $textonly }}</div>
                                                    </div>
                                                </div>

                                                <div class="modal fade" id="showDeleteProgress-{{ $progress->id }}" tabindex="-1"
                                            aria-labelledby="modalLabel-{{ $progress->id }}" aria-hidden="true">
                                            <div class="modal-dialog modal-m">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5>Apakah anda yakin ingin menghapus progress pada tanggal {{ $progress->created_at->format('d F Y') }}</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{route('progress.delete', $progress->id)}}" method="post">
                                                            @csrf
                                                        @method('delete')
                                                            <button type="submit" class="btn btn-primary">Iya</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        
                                        
                                        <div class="d-flex justify-content-end">
                                            <form action="{{ route('progress.done', $report->id, $responses->id) }}" method="POST" style="">
                                                @csrf
                                                @method('patch')
                                                <button type="submit" class="btn btn-primary">Selesai ditangani</button>
                                            </form>
                                                @if ($responses->response_status != "DONE")
                                                <button data-bs-toggle="modal" data-bs-target="#showForm" type="submit" class="btn btn-primary">
                                                    Tambah Progres
                                                </button>
                                                @else
                                                <button data-bs-toggle="modal" data-bs-target="#showForm" type="submit" class="btn btn-primary" disabled>
                                                    Tambah Progres
                                                </button>

                                                @endif
                                        </div>

                                        <div class="modal fade" id="showForm" tabindex="-1"
                                            aria-labelledby="modalLabel-{{ $report->id }}" aria-hidden="true">
                                            <div class="modal-dialog modal-m">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5>Tambah Progres</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('progress.create', $responses->id) }}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="report_id" value="{{ $report->id }}">
                                                            <div class="form-group">
                                                                <label for="histories">Tanggapan :</label>
                                                                <textarea class="form-control" name="histories[]" rows="3" required></textarea>
                                                            </div> <br/>
                                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        
                                    </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection