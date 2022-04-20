@extends('layouts.main')

@section('content')
    <div class="container-normal">
        <div class="forgotten-password__wrapper">
            <h2 class="forgotten-password__title">Reset Password</h2>
            <div class="forgotten-password__body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="">
                        <label for="email">Email:</label>
                        <div class="auth__info">
                            <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email"
                                   value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn btn-primary-primary">
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
