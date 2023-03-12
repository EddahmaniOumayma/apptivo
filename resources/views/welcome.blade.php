<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APPTIVO</title>
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
</head>

<body>
    <div class="contai">
        <div class="back">
            <div class="side">
                <div class="side_s1"></div>
                <div class="side_s2"></div>
            </div>
            <div class="image"></div>
        </div>
        <div class="conten">
            <div class="logo">
                <img src="/img/logo.png" alt="">
            </div>
            <div class="g_title">
                <H1>
                    APP<span class="tivo">TIVO</span>
                </H1>
                <div class="faster">Faster.Stronger</div>
            </div>
            <div class="para">
                <span class="apptivo">APPTIVO</span> application qui offre une
                suite complète de fonctionnalités
                pour la gestion des ressources
                humaines.
            </div>
            <div class="btn_box">
                <button>
                    <a  href="{{ route('login') }}" >Login</a>
                    
                </button>
            </div>
        </div>
    </div>
</body>

</html>