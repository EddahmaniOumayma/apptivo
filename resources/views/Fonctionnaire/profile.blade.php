@extends('Fonctionnaire.layouts.master')
@section('contenu')

<div class="d-flex flex-column" id="content-wrapper">
    <div id="content">
        <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
            <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ..."><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                </form>
                <ul class="navbar-nav flex-nowrap ms-auto">
                    <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                        <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                            <form class="me-auto navbar-search w-100">
                                <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                    <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                </div>
                            </form>
                        </div>
                    </li>
                    <li class="nav-item dropdown no-arrow mx-1">
                        <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter">3+</span><i class="fas fa-bell fa-fw"></i></a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="me-3">
                                        <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
                                    </div>
                                    <div><span class="small text-gray-500">December 12, 2019</span>
                                        <p>A new monthly report is ready to download!</p>
                                    </div>
                                </a><a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="me-3">
                                        <div class="bg-success icon-circle"><i class="fas fa-donate text-white"></i></div>
                                    </div>
                                    <div><span class="small text-gray-500">December 7, 2019</span>
                                        <p>$290.29 has been deposited into your account!</p>
                                    </div>
                                </a><a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="me-3">
                                        <div class="bg-warning icon-circle"><i class="fas fa-exclamation-triangle text-white"></i></div>
                                    </div>
                                    <div><span class="small text-gray-500">December 2, 2019</span>
                                        <p>Spending Alert: We've noticed unusually high spending for your account.</p>
                                    </div>
                                </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown no-arrow mx-1">
                        <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter">7</span><i class="fas fa-envelope fa-fw"></i></a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar4.jpeg">
                                        <div class="bg-success status-indicator"></div>
                                    </div>
                                    <div class="fw-bold">
                                        <div class="text-truncate"><span>Hi there! I am wondering if you can help me with a problem I've been having.</span></div>
                                        <p class="small text-gray-500 mb-0">Emily Fowler - 58m</p>
                                    </div>
                                </a><a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar2.jpeg">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div class="fw-bold">
                                        <div class="text-truncate"><span>I have the photos that you ordered last month!</span></div>
                                        <p class="small text-gray-500 mb-0">Jae Chun - 1d</p>
                                    </div>
                                </a><a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar3.jpeg">
                                        <div class="bg-warning status-indicator"></div>
                                    </div>
                                    <div class="fw-bold">
                                        <div class="text-truncate"><span>Last month's report looks great, I am very happy with the progress so far, keep up the good work!</span></div>
                                        <p class="small text-gray-500 mb-0">Morgan Alvarez - 2d</p>
                                    </div>
                                </a><a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar5.jpeg">
                                        <div class="bg-success status-indicator"></div>
                                    </div>
                                    <div class="fw-bold">
                                        <div class="text-truncate"><span>Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</span></div>
                                        <p class="small text-gray-500 mb-0">Chicken the Dog · 2w</p>
                                    </div>
                                </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </div>
                        <div class="shadow dropdown-list dropdown-menu dropdown-menu-end" aria-labelledby="alertsDropdown"></div>
                    </li>
                    <div class="d-none d-sm-block topbar-divider"></div>
                    <li class="nav-item dropdown no-arrow">
                        <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                          <span class="d-none d-lg-inline me-2 text-gray-600 small">{{auth()->user()->nom}}  {{auth()->user()->prenom}}</span>
                     
                          <img class="border rounded-circle img-profile"  src="{{asset('storage/'.auth()->user()->image)}}" alt="">
                        </a>
                            <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a>
                                <div class="dropdown-divider"></div>
                                <form action="" method="post"></form>
                                <a class="dropdown-item"  href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>{{ __('Logout') }}</a>
                           
                             
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container-fluid">
            
          <div class="row card  shadow">
              <div class="card-header ">
                  <h3 class="text-gray-600 display-7">Profile</h3>
              </div>
                  <div class="row ">
                      <!-- _______________ profile image start _______________ -->
                      <div class="col-lg-4 p-2">
                          <div class="card-body text-center">
                              <img class="rounded-circle mb-2 " id="preview" src="{{asset("storage/".$user[0]->image)}}" alt="" width="140" height="140">
                              <div class="mb-3">
                                  
                                  <label class="label_profile" for="myFileInput">{{auth()->user()->nom}}  {{auth()->user()->prenom}}</label>
                              </div>
                          </div>
                          <div class="card-body">
                              <p >
                                  
                          </div>
                      </div>
                      <!-- _______________ profile image end _________________ -->
                      <div class="col">
                          <div class="card-body p-3">
                              <table class="user_table table" >
                                  <tr>
                                      <td> <h5 class="text-primary">Nom :</h5></td>
                                      <td> <h6 class="info_user">{{auth()->user()->nom}}</h6> </td>
                                  </tr>
                                  <tr> <td> <h5 class="text-primary">Prenom :</h5></td>
                                    <td> <h6 class="info_user"> {{auth()->user()->prenom}}</h6> </td>
                                  </tr>
                                  <tr>
                                    <td> <h5 class="text-primary">Email :</h5></td>
                                    <td> <h6 class="info_user"> {{auth()->user()->email}} </h6> </td>
                                  </tr>
                                  <tr>
                                    
                                      <td> <h5 class="text-primary">Date de naissance :</h5></td>
                                      <td> <h6 class="info_user"> {{auth()->user()->date_naissance}} </h6> </td>
                                  </tr>
                                  <tr>
                                   
                                      <td> <h5 class="text-primary">situation_familial :</h5></td>
                                      <td> <h6 class="info_user">  {{auth()->user()->situation_familial}}</h6> </td>

                                  </tr>
                                  <tr>
                                    
                                      <td> <h5 class="text-primary">Tel :</h5></td>
                                      <td> <h6 class="info_user"> {{auth()->user()->tel}}</h6> </td>
                                  </tr>
                                  <tr>
                                    <td> <h5 class="text-primary">Cin :</h5></td>
                                    <td> <h6 class="info_user">{{auth()->user()->cin}}</h6> </td>
                                  </tr>
                              </table>
                          </div>    
                      </div>
                     
                  </div>
<!-- /////////////////// -->
                  
                      




          </div>

         
              
              <div class="row card shadow  my-2">
                  <div class="card-header ">
                      <h3 class="text-gray-600 display-7">Profile</h3>
                  </div>
                  <div class="card-body p-3">
                          <table style="width: 100%;">
                            @foreach($user[0]['indices'] as $indice)
                            <tr>
                              <td> <h5 class="text-primary">Corp :</h5></td>
                              <td> <h6 class="info_user">{{$indice['grade']->cadre->corp->libelle }} </h6> </td>
                            </tr>
                            <tr>
                              
                                <td> <h5 class="text-primary">Cadre :</h5></td>
                                <td> <h6 class="info_user">{{$indice['grade']->cadre->libelle_c}} </h6> </td>
                            </tr>
                            <tr>
                             
                                <td> <h5 class="text-primary">Grade :</h5></td>
                                <td> <h6 class="info_user">{{$indice['grade']->libelle_g }} </h6> </td>
          
                            </tr>
                            <tr>
                              
                                <td> <h5 class="text-primary">Inidce :</h5></td>
                                <td> <h6 class="info_user">{{$indice->libelle_i}} </h6> </td>
                            </tr>

                           
          
              
                  
                           @endforeach
                           <tr>
                            <td> <h5 class="text-primary">Date Ambauche :</h5></td>
                            <td> <h6 class="info_user">{{$user[0]->date_ambauche}} </h6> </td>
                          </tr>

                          </table>
                  </div>
                          
              </div>
              
              <center>             
                <a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button"  href="{{route('fonctionnaires.edit',auth()->user()->id)}}">&nbsp;Modifier mes information</a>
             </center> 
          
              
          
      </div>
  </div>
    
@endsection