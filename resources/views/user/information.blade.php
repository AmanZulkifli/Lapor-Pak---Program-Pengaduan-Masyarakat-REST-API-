@extends('templates.app')

@section('content')
    <style>
        .halo {
            display: flex;
            justify-content: center;
            width: 100%;
            height: fit-content;
            background-color: #f2520d;
            border-radius: 12px;
            padding: 20px;
            color: #041A34;
            z-index: 1;
        }

        .titel {
            background-color: #f
        }
        .content-wrapper {
            flex-direction: column;
        }
    </style>

<style id="report-information-card">
    .card {
    position: relative;
    display: flex;
    width: 100%;
    background-color: #fffff3;
    padding: 10px;
    border-radius: 6px;
    gap: 0.5rem;
    flex-direction: row;
    flex-wrap: nowrap;
    height: max-content;
    }
    .bar {
    width: 10px;
    border-radius: 5px;
    background-color: #041A34;
    transition: all 0.5s ease-in-out;
    }
    .card:hover .bar {
    margin-right: 5px;
    }
    .card_form {
    position: relative;
    min-width: 5em;
    min-height: 5em;
    border-radius: 4px;
    background-color: #041A34;
    transition: 0.2s ease-in-out;
    width: 250px;
    }
    .card_data {
    display: flex;
    flex-direction: row
    width: 100%;
    justify-content: space-between;
    }
    .card_data span {
    color: #041A34;
    margin-top: auto;
    font-size: 0.9em;
    transition: 0.2s ease-in-out;
    cursor: pointer;
    }
    .card_data span:hover {
    color: #28aea5;
    text-decoration: underline;
    }
    .text {
    display: flex;
    justify-content: center;
    flex-direction: column;
    margin-left: 0.5em;
    color: #041A34;
    }
    .text_m {
    color: #041A34;
    }
    .text_s {
    color: #041A34;
    font-size: 0.6em;
    }
    .text_d {
    margin-top: 20px;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 3;
    overflow: hidden;
    }
    .cube {
    width: max-content;
    height: 10px;
    transition: all 0.2s;
    transform-style: preserve-3d;
    }
    .card:hover .cube {
    transform: rotateX(90deg);
    }
    .side {
    width: max-content;
    height: 1em;
    display: flex;
    justify-content: center;
    align-items: center;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    font-weight: bold;
    }
    .top {
    transform: rotateX(-90deg) translate3d(0, 0, 0em);
    }
    .front {
    transform: translate3d(0, 0, 1em);
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
                        <div class="sort d-flex mb-3">
                            <select class="form-control sortir" name="sortOrder" id="sortOrder">
                                <option value="" selected disabled>Pilih berdasarkan voting</option>
                                <option value="asc">Voting terbesar ke terkecil</option>
                                <option value="desc" selected>Voting terkecil ke terbesar</option>
                            </select>
                            <button id="searchButton" class="btn searchi">Cari</button>
                        </div>
                        
                        @foreach ($reports as $report)
                            @if ($report->user_id == auth()->user()->id)
                            <div class="card">
                                <div class="bar"></div>
                            <div class="card_form" style="border-radius:15px;">
                                <img data-bs-toggle="modal" data-bs-target="#modalImage-{{ $report->id }}" style="border-radius:15px;" alt="Report image" class="me-2" height="250"
                                src="{{ asset('storage/' . $report->image) }}" width="250" />
                            </div>
                            <div class="card_data">
                                <div class="data" style="width : 700px;">
                                    <div class="text">
                                    <h1 class="text_m">#{{$report->id}} {{ $report->title }} dari {{ $report->province }}</h1> <i class="fas fa-heart text-dark"><span>{{ count(json_decode($report->voting, true) ?? []) }}</span></i> 
                                    <div class="cube text_s">
                                        <h3 class="side front" style="color: #041A34;">Status Tanggapan: 
                                            @if ($report->responses && $report->responses->response_status === 'ON_PROCESS')
                                            Sedang Diproses
                                        @elseif ($report->responses && $report->responses->response_status === 'REJECT')
                                            Ditolak
                                        @elseif ($report->responses && $report->responses->response_status === 'DONE')
                                            Selesai
                                        @else
                                            Belum Ditanggapi
                                        @endif
                                        
                                        </h3>
                                        <h3 class="side top" style="color: #041A34;">{{ $report->created_at->format('l, H:i') }}</h3>

                                    </div>
                                        <h4 class="text_d" style="color: #041A34">
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
                                        </h4>
                                    </div>
                                </div>
                                <div class="icons d-flex justify-content-end m-2" style="width: 150px; align-items: flex-end;">
                                    <div class="tes d-flex justify-content-baseline align-items-center">
                                            <a data-bs-toggle="modal" data-bs-target="#modalDetail-{{ $report->id }}" style="margin-bottom: 15px; margin-right: 15px;">
                                                <i class="fas fa-info" style="scale: 2"></i>
                                            </a>
                                        @if ($report->responses && $report->responses->response_status === 'ON_PROCESS')
                                            <button class="btn btn-secondary" disabled>Laporan Tidak Dapat Dihapus</button>
                                        @elseif ($report->responses && $report->responses->response_status === 'DONE')
                                            <button class="btn btn-secondary" disabled>Laporan Tidak Dapat Dihapus</button>
                                        @elseif ($report->responses && $report->responses->response_status === 'REJECT')
                                            <button class="btn btn-secondary" disabled>Laporan Tidak Dapat Dihapus</button>
                                        @else
                                            <form action="{{ route('reports.delete', $report->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn"><i class="fas fa-trash" style="scale: 2"></i></button>
                                            </form>
                                        @endif
                                    </div>
                                </div>
                                </div>
                            </div>
                            @endif

                            <div class="modal fade" id="modalImage-{{ $report->id }}" tabindex="-1"
                                aria-labelledby="modalLabel-{{ $report->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-m">
                                    <div class="modal-content">
                                        <img src="{{ asset('storage/' . $report->image) }}" width="100%" height="100%" alt="fullimage-{{ $report->id }}">
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="modalDetail-{{ $report->id }}" tabindex="-1"
                                aria-labelledby="modalLabel-{{ $report->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalLabel-{{ $report->id }}">
                                                Status untuk {{ $report->title }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        @if ($report->responses)
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
                                                        <div class="tracking-date">
                                                            {{ $progress->created_at->format('d F Y') }}<span>{{ $progress->created_at->format('H:i') }}</span>
                                                        </div>
                                                        <div class="tracking-content">{{ $textonly }}</div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            @endif
                                        </div>
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

    <script>
        document.getElementById('searchButton').addEventListener('click', function() {
        var sortOrder = document.getElementById('sortOrder').value;

        var currentUrl = new URL(window.location.href);
        currentUrl.searchParams.set('sortOrder', sortOrder);

        window.location.href = currentUrl.toString();
        });
    </script>
@endsection