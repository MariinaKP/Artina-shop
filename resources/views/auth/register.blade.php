@extends('layouts.main')

@section('content')
    <div class="modal modal-register display-none">
        <span class="modal__close"><box-icon name='minus'></box-icon></span>
        <h3 class="modal__title">Register</h3>
        <div class="modal__body">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="auth__info">
                    <label for="name">Name:</label>
                    <div>
                        <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name"
                               value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="auth__info">
                    <label for="email">Email:</label>

                    <div>
                        <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email"
                               value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                        <span role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="auth__info">
                    <label for="password">Password:</label>
                    <div class="">
                        <input id="password" type="password" class="@error('password') is-invalid @enderror"
                               name="password" required autocomplete="new-password">
                        @error('password')
                        <span role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="auth__info">
                    <label for="password-confirm" class="">Confirm Password:</label>
                    <div class="">
                        <input id="password-confirm" type="password" name="password_confirmation" required
                               autocomplete="new-password">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn btn-primary-primary">
                    Register
                </button>
                <a class="btn btn-primary" href="javascript:">Already a member?</a>
            </form>
        </div>
    </div>
@endsection
