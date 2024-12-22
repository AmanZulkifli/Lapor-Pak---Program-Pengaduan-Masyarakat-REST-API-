@extends('templates.app')

@section('content')
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="user-authenticated" content="{{ auth()->check() ? 'true' : 'false' }}">
</head>

    <style>

        .container {
            z-index: 1;
            position: relative;
        }

        .report-form {
            flex: 2;
            background-color: white;
            padding: 30px 20px;
            height: fit-content;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .report-form .form-control {
            margin-bottom: 15px;
        }

        .report-form .btn-primary {
            background-color: #f2520d;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
        }

        .checkbox-group {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .checkbox-group input {
            display: none;
        }

        .checkbox-group label {
            padding: 10px 20px;
            border: 2px solid #d32f2f;
            border-radius: 5px;
            cursor: pointer;
            color: #f2520d;
            font-size: 14px;
            background-color: transparent;
            transition: background-color 0.3s, color 0.3s;
        }

        .checkbox-group input:checked+label {
            background-color: #f2520d;
            color: white;
        }

        .sidebar {
            flex: 1;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            height: fit-content;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .sidebar .list-group-item {
            border: none;
            padding: 5px 0;
        }

        .sidebar .list-group-item i {
            margin-right: 10px;
        }

        .report-title {
            background-color: #f2520dcc;
            width: 100%;
            padding: 15px;
            border-radius: 5px;
        }

        .lapor {
            width: fit-content;
        }
    </style>

    <style>
        .post-card {
            background-color: #fff;
            border: 1px solid #e3e6f0;
            border-radius: 0.35rem;
            padding: 1rem;
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

        .post-card .post-footer {
            font-size: 0.75rem;
            color: #6c757d;
        }

        .bar {
            width: 100%;
        }

        .coleague {
            width: 40%;
        }
    </style>

    <style>
        .report-form-container {
            position: relative;
        }

        .overlay-container {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            display: none; 
            justify-content: center;
            align-items: center;
            z-index: 10;
        }

        .report-form-container:hover .report-form.hover-blur {
            filter: blur(5px);
            pointer-events: none;
            transition: ease-in-out;
            transition-delay: 0.1s;
        }

        .report-form-container:hover .overlay-container{
            display: flex;
        }

        .overlay {
            text-align: center;
            color: #041a34;
            transition: 2;
        }

        .overlay-text {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #041a34;
            transition: linear;
            transition-delay: 2s;
        }

        
        .overlay-button {
            padding: 10px 20px;
            font-size: 1rem;
            background-color: #f2520d;
            color: #f4f5fe;
            border: none;
            text-decoration: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .overlay-button:hover {
            background-color: #f2520dcc;
        }

    </style>

    <style id="profile">
        .card__img {
        --s: 75px;
        --c1: #f6edb3;
        --c2: #acc4a3;

        --_l: #0000 calc(25% / 3), var(--c1) 0 25%, #0000 0;
        --_g: conic-gradient(from 120deg at 50% 87.5%, var(--c1) 120deg, #0000 0);

        background: var(--_g), var(--_g) 0 calc(var(--s) / 2),
            conic-gradient(from 180deg at 75%, var(--c2) 60deg, #0000 0),
            conic-gradient(from 60deg at 75% 75%, var(--c1) 0 60deg, #0000 0),
            linear-gradient(150deg, var(--_l)) 0 calc(var(--s) / 2),
            conic-gradient(at 25% 25%,
                #0000 50%,
                var(--c2) 0 240deg,
                var(--c1) 0 300deg,
                var(--c2) 0),
            linear-gradient(-150deg, var(--_l)) #55897c;
        background-size: calc(0.866 * var(--s)) var(--s);
        border-radius: 12px;
    }

    .brick {
        --main-color: #2c3e50;
        --submain-color: #7f8c8d;
        --bg-color: #ecf0f1;

        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        position: relative;
        width: 570px;
        height: 200px;
        display: flex;
        align-items: center;
        border-radius: 20px;
        background: var(--bg-color);
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    .card__img {
        height: 192px;
        width: 200px;
        border-radius: 12px;
        overflow: hidden;
        flex-shrink: 0;
    }

    .card__avatar {
        position: absolute;
        width: 114px;
        height: 114px;
        background: var(--bg-color);
        border-radius: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        top: 50%;
        left: 150px;
        transform: translateY(-50%);
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .card__avatar img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
    }

    .card__content {
        margin-left: 75px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        width: calc(100% - 200px);
        padding-left: 20px;
    }

    .card__title {
        font-weight: 600;
        font-size: 20px;
        color: var(--main-color);
        margin: 0;
    }

    .card__subtitle {
        font-weight: 400;
        font-size: 16px;
        color: var(--submain-color);
        margin-top: 5px;
    }

    .card__btn-container {
        display: flex;
        justify-content: flex-start;
        gap: 10px;
        margin-top: 15px;
    }

    .card__btn {
        width: 100px;
        height: 35px;
        border: 2px solid var(--main-color);
        border-radius: 6px;
        font-weight: 600;
        font-size: 12px;
        color: var(--main-color);
        background: var(--bg-color);
        text-transform: uppercase;
        transition: all 0.3s;
    }

    .card__btn-solid {
        background: var(--main-color);
        color: var(--bg-color);
    }

    .card__btn:hover {
        background: var(--main-color);
        color: var(--bg-color);
    }

    .card__btn-solid:hover {
        background: var(--bg-color);
        color: var(--main-color);
    }

    </style>
    <body class="wrapperes">
        <div class="patternbos">
            <div class="background">
                <div class="ergono">
                    <div class="content-wrapper">
                        <div class="col coleague">
                            <div class="report-form-container position-relative">
                                @if (!auth()->check())
                                    <div class="overlay-container">
                                        <p class="overlay-text text-center">Harap masuk untuk melanjutkan <br>
                                        <a href="{{ route('login') }}" class="btn overlay-button">Masuk</a>
                                    </p>
                                    </div>
                                @endif
                            
                                <div class="report-form {{ !auth()->check() ? 'hover-blur' : '' }}">
                                    @if (session('success'))
                                        <div class="alert alert-success">{{ session('success') }}</div>
                                    @elseif (session('failed'))
                                        <div class="alert alert-danger">{{ session('failed') }}</div>
                                    @endif
                            
                                    <div class="report-title mb-3">
                                        <h3 class="mt-2">Sampaikan keluhan anda</h3>
                                    </div>
                                    <h4>Pilih jenis keluhan anda</h4>
                                    <form id="report-form" action="{{ route('report.store') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="checkbox-group">
                                            <input id="kejahatan" name="type" type="radio" value="KEJAHATAN" />
                                            <label for="kejahatan" class="checkbox-label">Kejahatan</label>
                                    
                                            <input id="pembangunan" name="type" type="radio" value="PEMBANGUNAN" />
                                            <label for="pembangunan" class="checkbox-label">Pembangunan</label>
                                    
                                            <input id="sosial" name="type" type="radio" value="SOSIAL" />
                                            <label for="sosial" class="checkbox-label">Sosial</label>
                                        </div>
                                        @error('type')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    
                                        <h5 class="mt-3 mb-3">Harap isi secara berurutan</h5>
                                    
                                        <label for="province">Pilih Provinsi<span class="text-danger">* </span></label>
                                        <select class="form-control" name="province" id="province">
                                            <option disabled selected>Provinsi</option>
                                        </select>
                                        @error('province')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    
                                        <label for="regency">Pilih Kota/Kabupaten<span class="text-danger">* </span></label>
                                        <select class="form-control" name="regency" id="regency">
                                            <option disabled selected>Kota/Kabupaten</option>
                                        </select>
                                        @error('regency')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    
                                        <label for="subdistrict">Pilih Kecamatan<span class="text-danger">* </span></label>
                                        <select class="form-control" name="subdistrict" id="subdistrict">
                                            <option disabled selected>Kecamatan</option>
                                        </select>
                                        @error('subdistrict')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    
                                        <label for="village">Pilih Kelurahan<span class="text-danger">* </span></label>
                                        <select class="form-control" name="village" id="village">
                                            <option disabled selected>Kelurahan</option>
                                        </select>
                                        @error('village')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    
                                        <label for="title">Ketik Judul Keluhan<span class="text-danger">* </span></label>
                                        <input class="form-control" placeholder="Ketik Judul Keluhan Anda" name="title" type="text" />
                                        @error('title')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    
                                        <label for="description">Ketik Isi Keluhan<span class="text-danger">* </span></label>
                                        <textarea class="form-control" placeholder="Ketik Isi Keluhan Anda" name="description" rows="3"></textarea>
                                        @error('description')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    
                                        <div class="d-flex justify-content-between align-items-center mt-3">
                                            <div class="d-flex flex-column">
                                                <div class="gam">
                                                    <i class="fas fa-paperclip"></i>
                                                    <label for="image">Gambar yang mendukung laporan<span class="text-danger">*</span></label>
                                                </div>
                                                <input type="file" class="form-control-file" name="image" id="image" />
                                                @error('image')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                                <div class="ce mt-2">
                                                    <input type="checkbox" name="statement" id="statement">
                                                    <label for="statement">Laporan yang disampaikan sesuai dengan kebenaran<span class="text-danger">* </span></label>
                                                    @error('statement')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                <button type="submit" class="btn btn-primary mt-3 lapor">LAPOR!</button>
                                            </div>
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                            
                            <div class="container-fluid mt-4 side">
                                <div class="row">
                                    {{-- <nav class="navo bar nav-pills mb-3 d-flex justify-content-between">
                                        <a class="nav-link active" href="#">Semua</a>
                                        <a class="nav-link" href="#">Laporan Saya</a>
                                        <a class="nav-link" href="#">Kawan</a>
                                        <a class="nav-link" href="#">Terhangat</a>
                                    </nav> --}}

                                    
                                    <div class="sort d-flex mb-3">
                                        <select class="form-control sortir" name="searchprov" id="searchprov">
                                            <option disabled selected>Urut berdasarkan provinsi</option>
                                        </select>
                                        <button id="searchButton" class="btn searchi">Cari</button>
                                    </div>
                                    @foreach ($reports as $report)

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
                                                        Terlapor masuk laporan dari <strong>{{$report->province}}</strong>
                                                    </div>
                                                    <div class="post-header">
                                                        pada {{ $report->created_at->format('l, H:i') }} <i
                                                            class="fas fa-globe"></i> <i class="fas fa-clock"></i> 12 jam
                                                        yang lalu
                                                    </div>
                                                </div>
                                        </div>

                                            <div class="post-header">
                                                Terdiposisi ke <strong>{{ $report->type }}</strong>
                                            </div>
                                            <a id="selengkapnya-{{ $report->id }}" onclick="showDetails({{ $report->id }})" class="btn btn-link p-0">Detail</a>  
                                            <div id="content-{{ $report->id }}" class="d-none">                                          
                                            <div class="post-title">
                                                {{ $report->title }}
                                            </div>
                                    
                                            <div class="post-content d-flex flex-wrap"
                                                style="word-wrap: break-word; overflow: hidden; text-overflow: ellipsis; white-space:normal;">
                                                @if (strlen($report->description) > 50)
                                                    <span id="short-description-{{ $report->id }}" style="display: inline">
                                                        {{ Str::limit(strip_tags($report->description), 50) }}
                                                    </span>
                                                    <span id="full-description-{{ $report->id }}" class="d-none text-break" style="display: none;">
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
                                                <div class="d-flex mt-2" style="display: none" id="image-section-{{ $report->id }}">
                                                    <img data-bs-toggle="modal" data-bs-target="#modalImage-{{ $report->id }}" alt="Report image" class="me-2" height="100"
                                                        src="{{ asset('storage/' . $report->image) }}" width="100" />
                                                </div>
                                            @endif
                                            </div>
                                            <div class="post-footer mt-2 d-flex">
                                                <span>#{{ $report->id }}</span>
                                                <div class="d-flex justify-content-end col align-items-center">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalComment-{{ $report->id }}" class="me-2">
                                                        <i class="fas fa-comment"></i>
                                                        {{ $report->comments->count() }}
                                                    </a>
                                                    @if (auth()->check())
                                                        <a href="#" class="me-2 vote-button" data-report-id="{{ $report->id }}">
                                                            <i class="fas fa-heart {{ in_array(auth()->id(), json_decode($report->voting, true) ?? []) ? 'text-danger' : '' }}"></i>
                                                        </a>
                                                    @else
                                                        <a href="{{ route('login') }}" class="me-2">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                    @endif
                                                    <span class="voting-count">{{ count(json_decode($report->voting, true) ?? []) }}</span>
                                    
                                                    <i class="fas fa-eye text-dark" style="margin-left: 5px;"></i>
                                                    <span style='margin-left:5px;' id="viewers-count-{{ $report->id }}">{{ $report->viewers }}</span>

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

                                                        @auth
                                                            <form action="{{ route('comments.store') }}" method="POST"
                                                                id="comment-form-{{ $report->id }}">
                                                                @csrf
                                                                <input type="hidden" name="report_id"
                                                                    value="{{ $report->id }}">
                                                                <div class="mb-3">
                                                                    <textarea name="comment" class="form-control" rows="3" placeholder="Tambahkan komentar..." required></textarea>
                                                                </div>
                                                                <button type="submit" class="btn btn-primary">Kirim</button>
                                                            </form>
                                                        @else
                                                            <p class="text-muted">Anda harus Login untuk memberikan komentar.
                                                            </p>
                                                        @endauth
                                                    </div>
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

                        
                        <div class="sidebar">
                            @if (Auth::check())
                            <div class="brick">
                                <div class="card__img"></div>
                                <div class="card__avatar">
                                    <img alt="Avatar" src="https://via.placeholder.com/100/cccccc/ffffff?text=A" />
                                </div>
                                <div class="card__content">
                                    <div class="card__title">
                                        {{ Auth::user()->name }}
                                    </div>
                                    <div class="card__subtitle">
                                        {{ Auth::user()->username }}
                                    </div>
                                    <div class="card__btn-container">
                                        <button class="card__btn">
                                            Button
                                        </button>
                                        <button class="card__btn card__btn-solid">
                                            Button
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                            @endif
                            <div class="mb-3">
                                <strong>Informasi Pembuatan Pengaduan</strong>
                                <ul class="list-group">
                                    <li class="list-group-item"><i class="fas fa-star"></i> Pembuatan pengaduan hanya bisa
                                        dilakukan jika anda telah memiliki akun</li>
                                    <li class="list-group-item"><i class="fas fa-star"></i> Pastikan data yang akan
                                        dikirim bernilai <strong>BENAR, dan DAPAT DIPERTANGGUNG JAWABKAN</strong> </li>
                                    <li class="list-group-item"><i class="fas fa-star"></i> Seluruh bagian data perlu
                                        diisi</li>
                                    <li class="list-group-item"><i class="fas fa-star"></i> Pengaduan anda akan kami
                                        tanggapi dalam 2x24 Jam</li>
                                    <li class="list-group-item"><i class="fas fa-star"></i> Periksa tanggapan kami, pada
                                        <strong>Dashboard</strong> setelah anda <strong>Login</strong></li>
                                </ul>
                            </div>
                        </div>
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
        function showDetails(reportId) {
            const content = document.getElementById(`content-${reportId}`);
            const viewersCount = document.getElementById(`viewers-count-${reportId}`);
            const isLoggedIn = document.querySelector('meta[name="user-authenticated"]').content === 'true';

            if (content.classList.contains('d-none')) {
                content.classList.remove('d-none');

                if (isLoggedIn) {
                    fetch(`/increment-viewers/${reportId}`, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify({ report_id: reportId }),
                    })
                        .then((response) => response.json())
                        .then((data) => {
                            if (data.success) {
                                viewersCount.textContent = data.new_count;
                            } else {
                                console.error('Error updating viewers count:', data.message);
                            }
                        })
                        .catch((error) => console.error('Error:', error));
                }
            } else {
                content.classList.add('d-none');
            }
        }
    </script>
    <script id="voting">
        document.addEventListener('DOMContentLoaded', () => {
            const voteButtons = document.querySelectorAll('.vote-button');

            voteButtons.forEach(button => {
                button.addEventListener('click', async (e) => {
                    e.preventDefault();

                    const reportId = button.getAttribute('data-report-id');
                    const heartIcon = button.querySelector('i');
                    const voteCount = button.nextElementSibling;

                    try {
                        const response = await fetch(`/vote/${reportId}`, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            },
                        });

                        if (response.ok) {
                            const data = await response.json();

                            
                            if (data.hasVoted) {
                                heartIcon.classList.add('text-danger'); 
                            } else {
                                heartIcon.classList.remove('text-danger'); 
                            }
                            voteCount.textContent = data.votingCount;
                        } else {
                            console.error('Failed to toggle vote:', response.status);
                        }
                    } catch (error) {
                        console.error('Error:', error);
                    }
                });
            });
        });

    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
        const provinsiSelect = document.getElementById("province");
        const kotaSelect = document.getElementById("regency");
        const kecamatanSelect = document.getElementById("subdistrict");
        const kelurahanSelect = document.getElementById("village");

        if (!provinsiSelect || !kotaSelect || !kecamatanSelect || !kelurahanSelect) {
            console.error("Dropdown elements not found in the DOM.");
            return;
        }


        fetch("https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json")
            .then(response => response.json())
            .then(data => {
                provinsiSelect.innerHTML = '<option disabled selected>Pilih Provinsi</option>';
                data.forEach(province => {
                    const option = document.createElement("option");
                    option.value = province.id;
                    option.textContent = province.name;
                    provinsiSelect.appendChild(option);
                });
            })
            .catch(error => {
                console.error("Error fetching provinces:", error);
                alert("Gagal memuat data provinsi.");
            });

        provinsiSelect.addEventListener("change", function() {
            const provId = this.value;
            kotaSelect.innerHTML = '<option disabled selected>Memuat...</option>';
            fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/regencies/${provId}.json`)
                .then(response => response.json())
                .then(data => {
                    kotaSelect.innerHTML = '<option disabled selected>Pilih Kota/Kabupaten</option>';
                    data.forEach(regency => {
                        const option = document.createElement("option");
                        option.value = regency.id;
                        option.textContent = regency.name;
                        kotaSelect.appendChild(option);
                    });
                    kotaSelect.disabled = false;
                })
                .catch(error => {
                    console.error("Error fetching regencies:", error);
                    alert("Gagal memuat data kota/kabupaten.");
                });
        });


        kotaSelect.addEventListener("change", function() {
            const kotaId = this.value;
            kecamatanSelect.innerHTML = '<option disabled selected>Memuat...</option>';
            fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/districts/${kotaId}.json`)
                .then(response => response.json())
                .then(data => {
                    kecamatanSelect.innerHTML = '<option disabled selected>Pilih Kecamatan</option>';
                    data.forEach(district => {
                        const option = document.createElement("option");
                        option.value = district.id;
                        option.textContent = district.name;
                        kecamatanSelect.appendChild(option);
                    });
                    kecamatanSelect.disabled = false;
                })
                .catch(error => {
                    console.error("Error fetching districts:", error);
                    alert("Gagal memuat data kecamatan.");
                });
        });

        kecamatanSelect.addEventListener("change", function() {
            const kecId = this.value;
            kelurahanSelect.innerHTML = '<option disabled selected>Memuat...</option>';
            fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/villages/${kecId}.json`)
                .then(response => response.json())
                .then(data => {
                    kelurahanSelect.innerHTML = '<option disabled selected>Pilih Kelurahan</option>';
                    data.forEach(village => {
                        const option = document.createElement("option");
                        option.value = village.id;
                        option.textContent = village.name;
                        kelurahanSelect.appendChild(option);
                    });
                    kelurahanSelect.disabled = false;
                })
                .catch(error => {
                    console.error("Error fetching villages:", error);
                    alert("Gagal memuat data kelurahan.");
                });
        });


        const form = document.getElementById("report-form"); 
        form.addEventListener("submit", function(event) {
            event.preventDefault(); 


            const selectedProvince = provinsiSelect.selectedOptions[0].textContent;
            const selectedRegency = kotaSelect.selectedOptions[0].textContent;
            const selectedSubdistrict = kecamatanSelect.selectedOptions[0].textContent;
            const selectedVillage = kelurahanSelect.selectedOptions[0].textContent;

            const provinceInput = document.createElement('input');
            provinceInput.type = 'hidden';
            provinceInput.name = 'province';
            provinceInput.value = selectedProvince;
            form.appendChild(provinceInput);

            const regencyInput = document.createElement('input');
            regencyInput.type = 'hidden';
            regencyInput.name = 'regency';
            regencyInput.value = selectedRegency;
            form.appendChild(regencyInput);

            const subdistrictInput = document.createElement('input');
            subdistrictInput.type = 'hidden';
            subdistrictInput.name = 'subdistrict';
            subdistrictInput.value = selectedSubdistrict;
            form.appendChild(subdistrictInput);

            const villageInput = document.createElement('input');
            villageInput.type = 'hidden';
            villageInput.name = 'village';
            villageInput.value = selectedVillage;
            form.appendChild(villageInput);

            form.submit();
        });
    });

    </script>   
@endsection
