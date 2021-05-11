@extends('template.template')
@section('title','Daftar')

@section('isi')
    <div class="mt-5 ms-4" id="bor">
        <h1 class="formulir mb-4">Daftar</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group row mb-3">
                <label for="username" class=""><p class="formulir">Username</p></label>

                <div class="col-md-6">
                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row mb-3">
                <label for="email" class=""><p class="formulir">Email</p></label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row mb-3">
                <label for="password" class=""><p class="formulir">Password</p></label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <p class="formulir mb-1">Jenis akun</p>
                <div>
                    <input type="radio" id="opsi1" name="jenis_akun" value="opsi1">
                    <label for="male"><p class="formulir" style="font-size: 17px; font-weight: lighter">Pemberi saja</p></label>

                    <input class="ms-4" type="radio" id="opsi2" name="jenis_akun" value="opsi2">
                    <label for="female"><p class="formulir" style="font-size: 17px; font-weight: lighter">Pemberi dan Penerima</p></label>
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4 mt-4">
                    <button type="submit" class="button2 shadow">
                        Daftar
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
