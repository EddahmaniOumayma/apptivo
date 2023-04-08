@extends('admin.layouts.master')
@section('contenu')

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
                            
                            <label class="label_profile" for="myFileInput">{{$user[0]->nom}} {{$user[0]->prenom}}</label>
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
                                <td> <h6 class="info_user">{{$user[0]->nom}} </h6> </td>
                            </tr>
                            <tr> <td> <h5 class="text-primary">Prenom :</h5></td>
                              <td> <h6 class="info_user">{{$user[0]->nom}} </h6> </td>
                            </tr>
                            <tr>
                              <td> <h5 class="text-primary">Email :</h5></td>
                              <td> <h6 class="info_user">{{$user[0]->email}} </h6> </td>
                            </tr>
                            <tr>
                              
                                <td> <h5 class="text-primary">Date de naissance :</h5></td>
                                <td> <h6 class="info_user">{{$user[0]->date_naissance}} </h6> </td>
                            </tr>
                            <tr>
                             
                                <td> <h5 class="text-primary">situation_familial :</h5></td>
                                <td> <h6 class="info_user">{{$user[0]->situation_familial}} </h6> </td>

                            </tr>
                            <tr>
                              
                                <td> <h5 class="text-primary">Tel :</h5></td>
                                <td> <h6 class="info_user">{{$user[0]->tel}} </h6> </td>
                            </tr>
                            <tr>
                              <td> <h5 class="text-primary">Cin :</h5></td>
                              <td> <h6 class="info_user">{{$user[0]->cin}} </h6> </td>
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
    
</div>
</div>
    
    
@endsection

