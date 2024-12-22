@extends('templates.app')

@section('content')
    <style>
        .card {
            margin: 20px;
            width: 600px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

        }
        .content-wrapper {
            display: flex;
            max-width: 1200px;
            width: 100%;
            justify-content: space-between;
        }
        .report-form-container {
            background-color: #f4f5fe;
            width: fit-content;
            height: fit-content;
            border-radius: 5px;
        }
        .report-form .form-control {
            margin-bottom: 15px;
        }
        report-form .btn-primary {
            background-color: #f2520d;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
        }
        
    </style>
    <body class="wrapperes">
        <div class="patternbos">
            <div class="background">
                <div class="ergono">
                    <div class="content-wrapper">
                        <div class="report-form-container position-relative">

                            @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @elseif (session('failed'))
                                <div class="alert alert-danger">{{ session('failed') }}</div>
                            @endif

                            <div class="col d-flex">
                                    <div class="row kotak">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Akun Staff Daerah {{ Auth::user()->staffprovinces->province }}</h5>
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>id</th>
                                                            <th>Email</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($staffs as $staff) 
                                                        @if ($staff->user->role == 'STAFF')
                                                        <tr>
                                                            <td>{{ $loop->iteration-1 }}</td>
                                                            <td>{{ $staff->id }}</td>
                                                            <td>{{ $staff->user->email }}</td>
                                                            <td>
                                                                <form action="{{ route('staff.reset', $staff->id) }}" method="post">
                                                                @csrf
                                                                @method('patch')
                                                                <button class="btn btn-warning btn-reset">Reset</button>
                                                                </form>
                                                                <button class="btn btn-danger btn-sm"
                                                                    onclick="showModal('{{ $staff->id }}', '{{ $staff->user->email }}')">
                                                                    <i class="fa fa-trash"></i> Delete
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    @endif
                                                    @endforeach
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row kotak">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Buat Akun Staff</h5>
                                                <form method="POST" action="{{ route('staff.create') }}">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="name" class="form-label">Name</label>
                                                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter staff name" value="{{ old('name') }}" required>
                                                        @error('name')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="username" class="form-label">Username</label>
                                                        <input type="text" name="username" class="form-control" id="username" placeholder="Enter staff username" value="{{ old('username') }}"  required>
                                                        @error('username')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="email" class="form-label">Email</label>
                                                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter staff email"  value="{{ old('email') }}" required>
                                                        @error('email')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="password" class="form-label">Sandi</label>
                                                        <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" required>
                                                        @error('password')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                    <button type="submit" class="btn btn-primary btn-create">Buat</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                        </div>

                        <div class="modal fade" id="modalDeleteAkun" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <form id="formDeleteAkun" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus Akun</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah Anda yakin ingin menghapus akun <strong id="name_email"></strong>?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                            <button type="submit" class="btn btn-danger">Ya, Hapus</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection

@push('script')
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script>
                function showModal(id, email) {

                let action = '{{ route('staff.delete', ':id') }}';
                action = action.replace(':id', id);

                $('#formDeleteAkun').attr('action', action);

                $('#modalDeleteAkun').modal('show');

                $('#nama_email').text(email);
                }
            </script>
    @endpush
