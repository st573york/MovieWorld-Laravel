@php
    use App\Http\Controllers\FooterController;
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/user.css') }}" rel="stylesheet" type="text/css"> 

    </head>
    <body>
        <div class="main">
            <form method="POST" action="{{ route('profile.update', [ Auth::user()->id ]) }}">
                @csrf
                <div class="action">Profile</div>
                <div class="movies"><a href="{{ route('movies.user', [ Auth::user()->id ]) }}">Movies</a></div>
                <div class="field">
                    <input id="username" type="text" name="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username', $user->username) }}" required autocomplete="username" autofocus placeholder="Username">
                   
                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
                <div class="field">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $user->email) }}" required autocomplete="email" placeholder="Email Address">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
                <div class="field">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password" placeholder="Password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
                <div class="field">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password" placeholder="Confirm Password">                    
                </div>
                <div class="button">
                    <button class="btn btn-primary btn-sm btn-block" type="submit">Save</button>     
                </div>       
            </form>
        </div>
        <div class="fixed_bottom_panel">
            <div class="fade-bottom"></div>
            <div class="footer">&copy; {{ FooterController::show() }}</div>
        </div>
    </body>
</html>