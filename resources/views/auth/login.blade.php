<div class="modal modal-login display-none">
    <span class="modal__close"><box-icon name='minus'></box-icon></span>
    <h3 class="modal__title">Login</h3>
    <div class="modal__body">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="auth__info">
                <label for="email" class="">Email:</label>
                <div>
                    <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email"
                           value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="auth__info">
                <label for="password">Password:</label>
                <div>
                    <input id="password" type="password"
                           class="@error('password') is-invalid @enderror" name="password" required
                           autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>
            <div class="modal__body__bottom">
                <div>
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember">Remember me
                    </label>
                </div>
                @if (Route::has('password.request'))
                    <a class="" href="{{ route('password.request') }}">
                        Forgot your password?
                    </a>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            <a class="btn btn-primary" href="javascript:">Not a member yet?</a>
        </form>
    </div>
</div>

