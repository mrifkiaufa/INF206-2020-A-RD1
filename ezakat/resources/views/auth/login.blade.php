@extends('template.template')
@section('title','Login')

@section('isi')
    <div class="mt-5 ms-4">
        <h1 class="formulir mb-4">Masuk</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group row mb-3">
                <label for="email" class=""><p class="formulir">Email</p></label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="formulir"><p class="formulir">Password</p></label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            {{-- <div class="form-group row mt-3">
                <div class="">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            <p class="formulir" style="font-size: 18px">Remember me</p>
                        </label>
                    </div>
                </div>
            </div> --}}

            <div class="form-group row mb-0">
                <p class="formulir mt-5">Belum memiliki akun? <a href="{{ url('register') }}"><b>Daftar</b></a></p>
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="button2 shadow">
                        Masuk
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
