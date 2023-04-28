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
    <div  class="cont">
        <div class="card shadow-lg o-hidden border-0 my-4 cont_box">
            <div class="card-body p-0">
                <div style="height: 90vh;" class="row">
                    <div class="col-lg-5 d-none d-lg-flex">
                        <!-- _________________________________auto slider start_______________________________ -->

<div class="slider_">
    <div style="background-image:url(&quot;build/assets/img/images/p1.jpg&quot;);background-size: cover; background-repeat: no-repeat;" class="slide_rx active"></div>
    <div style="background-image:url(&quot;build/assets/img/images/p2.jpg&quot;);background-size: cover; background-repeat: no-repeat;" class="slide_rx "></div>
    <div style="background-image:url(&quot;build/assets/img/images/p3.jpg&quot;);background-size: cover; background-repeat: no-repeat;" class="slide_rx "></div>
    <div style="background-image:url(&quot;build/assets/img/images/p5.jpg&quot;);background-size: cover; background-repeat: no-repeat;" class="slide_rx "></div>
  </div>

<!-- _________________________________auto slider end_______________________________ -->
                    </div>
                    <div class="col-lg-7 d-f">
                        <div class="p-2">
                            {{-- <h1 class="app_h1 py-1 text-center">
                                APPTIVO
                            </h1> --}}
                           <h1 class="app_h1 py-1 text-center">
                                APP<span class="app_span">TIVO</span>
                            </h1> 
                            <div class="faster text-center">
                                Faster.Stronger
                            </div>
                            <div class="text_editor">
                                <div id="code-container text-center">
                                    <pre id="code"></pre>
                                </div>
                            </div>
                            <div class="app_b">
                                <div class="app_b1 text-center">
                                    <a href="{{ route('login') }}" >
                                        <button class="btn btn-primary  btn-user  text-center bbl" type="submit">Commençons<i class="fa fa-arrow-right px-2"></i></button>
                                        <!-- <button class="app_btn_b">let's start<i class="fa fa-arrow-right px-2"></i></button> -->
                                    </a>
                                </div>
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
    <script src="{{asset('build/assets/bootstrap/js/autoslider.js')}}"></script>
    <script src="{{asset('build/assets/bootstrap/js/text_editor.js')}}"></script>
 
</body>

</html>