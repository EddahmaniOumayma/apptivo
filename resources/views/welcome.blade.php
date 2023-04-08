<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Welcome - Apptivo</title>
    <link rel="icon" type="image/jpeg" sizes="60x60" href="assets/img/avatars/avatar1.jpeg">
    <link rel="icon" type="image/jpeg" sizes="60x60" href="assets/img/avatars/avatar4.jpeg">
    <link rel="stylesheet" href="{{asset('build/assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="manifest" href="manifest.json">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="{{asset('build/assets/fonts/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('build/assets/bootstrap/css/style.css')}}">
   
   
</head>

<body class="bg-gradient-primary">
    <div class="container">
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-flex">
                        <div class="flex-grow-1 bg-register-image" style="background-image: url(&quot;build/assets/img/images/welcome.jpeg&quot;);"></div>
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="text-dark mb-4">apptivo</h1>
                            </div>
                           
                                <div class="row mb-3">
                                    <h4 class="text-dark mb-4">       application qui offre une suite complète de fonctionnalités pour
                                        la gestion des ressources humaines. !</h4>
                      
                                </div><button class="btn btn-primary d-block btn-user w-100" type="submit"><a  class="nav-link" href="{{ route('login') }}">Start</a></button>
                        
                                <hr>
                        
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('build/assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('build/assets/js/bs-init.js')}}"></script>
    <script src="{{asset('build/assets/js/theme.js')}}"></script>
    <script src="{{asset('build/assets/bootstrap/js/autoslider.js')}}"></script>
    <script src="{{asset('build/assets/bootstrap/js/text_editor.js')}}"></script>
 
</body>

</html>