<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - Apptivo</title>
    
    <link rel="icon" type="image/png" sizes="80x80" href="{{asset('build/assets/img/avatars/apptivo.png')}}">
    <link rel="icon" type="image/png" sizes="80x80" href="{{asset('build/assets/img/avatars/apptivo.png')}}">
    <link rel="stylesheet" href="{{asset('build/assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="manifest" href="manifest.json">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="{{asset('build/assets/fonts/fontawesome-all.min.css')}}">
</head>

<body class="bg-gradient-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-flex">
                                <div class="flex-grow-1 bg-login-image" style="background-image:
                                 url(&quot;build/assets/img/images/login.jpg&quot;);"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-4">Bienvenue !</h4>
                                    </div>
                                    <form class="user" method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __(' Address Email') }}</label>
                                        <div class="mb-3"><input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Entrez Votre  Address Email..." name="email"  @error('email') is-invalid @enderror"  value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            </div>
                                            @error('email')
                                            <h6 style="color:red"> {{ $message }}</h6>
                                               
                                            
                                            @enderror
                                            
                                        <label for="password" class="col-md-4 col-form-label ">{{ __('Mot de passe') }}</label>
                                        <div class="mb-3"><input class="form-control form-control-user" type="password" id="exampleInputPassword" placeholder="Mot de passe" name="password" @error('password') is-invalid @enderror"  required autocomplete="current-password"></div>
                                        @error('password')
                                        
                                        <h6 style="color:red">
                                            
                                          {{ $message }}
                                        </h6>
                                        
                                          @enderror
                                        <div class="mb-3">
                                            <div class="custom-control custom-checkbox small">
                                                <div class="form-check"><input class="form-check-input custom-control-input" type="checkbox" id="formCheck-1">
                                                    <label class="form-check-label custom-control-label" for="formCheck-1"  name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>    {{ __('Souvenez-vous de moi') }}</label></div>
                                            </div>
                                        </div><button class="btn btn-primary d-block btn-user w-100" type="submit"> {{ __('Connectez-vous') }}</button>
                                        <hr>
                                    </form>
                                    @if (Route::has('password.request'))
                                    <div class="text-center"><a class="small" href="{{ route('password.request') }}">  {{ __('Vous avez oublié votre mot de passe ?') }}</a></div>
                                    </a>
                                @endif
                                   
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('build/assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('build/assets/js/bs-init.js')}}"></script>
    <script src="{{asset('build/assets/js/theme.js')}}"></script>
</body>

</html>