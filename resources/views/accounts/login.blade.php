<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Lapor PAK!</title>
        <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
        <style>
            html,
            body {
                height: 100%;
                margin: 0;
                padding: 0;
            }

            .wrapper {
                height: 100%;
                width: 100%;
            }

            .background {
                position: absolute;
                top: 0;
                left: 0;
                height: 100%;
                width: 100%;
                background-color: rgba(242, 82, 13, 0.8);
                z-index: 1;
            }

            .patternbos {
                width: 100%;
                height: 100%;
                --s: 194px;
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
            }

            .container {
                z-index: 2;
                position: relative;
            }

            .card {
                margin-top: 50px;
                padding: 20px;
                border-radius: 10px;
                z-index: 2;
            }
        </style>
    </head>

    <body class="patternbos">
        <div class="wrapper">
            <div class="background"></div>
            <div class="container container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="text-center mb-4 mt-4">
                            <a href="{{ route('landingpage') }}">
                                <img alt="Logo" src="{{ asset('assets/images/LogoLapor.png') }}" width="150" />
                            </a>
                        </div>
                        <div class="card shadow">
                            <h3 class="text-center mb-3">Masuk</h3>
                            @if (session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>
                            @elseif (session()->has('error'))
                                <div class="alert alert-danger">
                                    {{ session()->get('error') }}
                                </div>
                            @elseif (session()->has('failed'))
                            <div class="alert alert-danger">
                                {{ session()->get('failed') }}
                            </div>
                            @endif
                            <form action="{{ route('login.store') }}" method="POST">
                                @csrf
                                <div class="col gx-3">
                                    <div class="col mb-3">
                                        <label class="form-label" for="email">Email <span style="color: red">*</span></label>
                                        <input class="form-control" name="email" id="email" placeholder="Email" type="email" value="{{ old('email') }}"/>
                                        @error('email')
                                            <small style="color:red">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col mb-3">
                                        <label class="form-label" for="password">Password <span style="color: red">*</span></label>
                                        <input class="form-control" name="password" id="password" placeholder="Password" type="password" />
                                        @error('password')
                                            <small style="color:red">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mt-4 d-flex justify-content-end">
                                    <button class="btn btn-primary" type="submit">Masuk</button>
                                </div>
                            </form>
                        </div>

                        <div class="konten mt-4 d-flex justify-content-between">
                            <div>
                                <a href="{{ route('landingpage') }}" class="btn btn-outline-light">Kembali</a>
                            </div>
                            <div></div>
                            <a href="{{ route('register') }}" class="btn btn-outline-light">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>
