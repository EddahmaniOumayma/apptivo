<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - Apptivo</title>

    <link rel="icon" type="image/png" sizes="80x80" href="{{asset('build/assets/img/avatars/apptivo.png')}}">
    <link rel="icon" type="image/png" sizes="80x80" href="{{asset('build/assets/img/avatars/apptivo.png')}}">
    <link rel="stylesheet" href="{{asset('build/assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="manifest" href="manifest.json">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="{{asset('build/assets/fonts/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('build/assets/bootstrap/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('build/assets/bootstrap/css/bootstrap-float-label.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" 
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.6/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.6/dist/sweetalert2.min.js"></script>

  
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>apptivo</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link active" href="{{route('dashbord')}}"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('profile')}}"><i class="fas fa-user"></i><span>Profile</span></a></li>
                
                    <li class="nav-item"><a class="nav-link" href="{{route('fonctionnaires.index')}}"><i class="fas fa-table"></i><span>Fonctionnaires</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('concours.index')}}"><i class="fas fa-table"></i><span>Concours</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('ListNotes')}}"><i class="fas fa-table"></i><span>Notes</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('types_conge.index')}}"><i class="fas fa-table"></i><span>Types</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('conges.index')}}"><i class="fas fa-table"></i><span>Conges</span></a></li>
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <span>Corp</span> 
                    </a>
                      <div  class="dropdown-menu dr" aria-labelledby="navbarDropdown">
                        <a class=" dropdown-item" href="{{route('corps.index')}}"><i class="fas fa-table"></i> Corps</a>
                        <a class="dropdown-item" href="{{route('cadres.index')}}"><i class="fas fa-table"></i> cadres</a>
                        <a class="dropdown-item" href="{{route('grades.index')}}"><i class="fas fa-table"></i> grades</a>
                        <a class="dropdown-item" href="{{route('indices.index')}}"><i class="fas fa-table"></i> Indice Eshlon</a>
                       
                      </div>
                    

                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                       
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                  
                                </div>
                            </li>
                            <x-Fonctionnair.Dshbord.notification-menu count='7'/>
                
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                                  <span class="d-none d-lg-inline me-2 text-gray-600 small">{{auth()->user()->nom}}  {{auth()->user()->prenom}}</span>
                             
                                  <img class="border rounded-circle img-profile"  src="{{asset('storage/'.auth()->user()->image)}}" alt="">
                                </a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="{{route('profile')}}"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a>
                                        <div class="dropdown-divider"></div>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                        
                                        <!-- Define the logout link with an onclick event -->
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            {{ __('Déconnexion') }}  <i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>
                                        </a>
                                     
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">


                   @yield('contenu')
                     
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>

    
    
    <script>
        @if(Session::has('success'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.success("{{ session('success') }}");
        @endif
      
        @if(Session::has('error'))
        toastr.options =
        {
            // "closeButton" : true,
            "progressBar" : true,
            "closeButton": false,
            "timeOut": "25000",
        }
                toastr.error("{{ session('error') }}");
        @endif
      
        @if(Session::has('info'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.info("{{ session('info') }}");
        @endif
      
        @if(Session::has('warning'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.warning("{{ session('warning') }}");
        @endif
    </script>

    <script src="{{asset('build/assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('build/assets/js/chart.min.js')}}"></script>
    <script src="{{asset('build/assets/js/bs-init.js')}}"></script>
    <script src="{{asset('build/assets/js/theme.js')}}"></script>
    <script src="{{asset('build/assets/bootstrap/js/text_editor.js')}}"></script>
    <script src="{{asset('build/assets/bootstrap/js/model.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
    
</body>

</html>