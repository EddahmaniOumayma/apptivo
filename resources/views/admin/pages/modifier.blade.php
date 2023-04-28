@extends('admin.layouts.master')
@section('contenu')
<div class="d-sm-flex justify-content-between align-items-center mb-4">
    <h3 class="text-dark mb-0"></h3>
    <a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="{{route('fonctionnaires.create')}}">&nbsp;Ajouter Fonctionnaires</a>
</div>


        <div class="container-fluid">
            
          <div class="row card  shadow">
              <div class="card-header ">
                  <h3 class="text-gray-600 display-7">Modifier Fonctionnaire</h3>
              </div>


      <!-- ////////////////////////////// form start ///////////////////////////////// -->
      <form class="add" method="POST" action=" {{route("fonctionnaires.update",$user->id)}} " enctype="multipart/form-data">
        @csrf
        @method('PUT')

                  <div class="row ">

                      <!-- _______________ profile image start _______________ -->
                      <div class="row">
                        <div class="card-body  text-center">
                            <img class="rounded-circle mb-2 " id="preview"  src="{{asset("storage/".$user->image)}}" alt="" width="140" height="140">
                            <div class="mb-3">
                                <input type="file" id="myFileInput" onchange="previewImage(event); updateFileName()" name="image" value={{$user->image}}>
                                <label class="label_" for="myFileInput">photo<i  class="fa fa-upload mx-2"></i></label>
                            </div>
                        </div>
                        @error('image')<span class="text-danger">{{ $message }}</span>@enderror


                           
                    </div>
                      <!-- _______________ profile image end _________________ -->
                      <div class="row">
                          <div class="card-body ">
                                  
                                      <div class="row">
                                          <div style="min-width: 30%;"class="col">

                                              <div class="has-float-label md-4">                                        
                                                      <label class="form-label" for="username"><strong>Nom</strong></label>
                                                      <input class="form-control" type="text" id="Nom" placeholder="Nom" name="nom" value={{$user->nom}}>
                                                      @error('nom')<span class="text-danger">{{ $message }}</span>@enderror

                                              </div>

                                          </div>
                                          <div style="min-width: 30%;" class="col">
                                              <div  class="has-float-label mb-4"><label class="form-label" ><strong>Prenom</strong></label>
                                                <input class="form-control" type="text"  placeholder="Prénom" name="prenom" value={{$user->prenom}}></div>
                                                @error('prenom')<span class="text-danger">{{ $message }}</span>@enderror
                                          </div>

                                          <div style="min-width: 35%;" class="col">
                                              <div class="has-float-label mb-4"><label class="form-label" for="username"><strong>Email</strong></label>
                                                <input class="form-control" type="email"  placeholder="user@example.com" name="email" value={{$user->email}}></div>
                                                @error('email')<span class="text-danger">{{ $message }}</span>@enderror
                                          </div>
                                          
                                      </div>
                                      <div class="row">
                                          <div style="min-width: 30%;" class="col">
                                              <div class="has-float-label mb-4"><label class="form-label" ><strong>CIN</strong></label>
                                                <input class="form-control" type="text"  placeholder="CIN" name="cin" value={{$user->cin}}></div>
                                                @error('cin')<span class="text-danger">{{ $message }}</span>@enderror
                                          </div>

                                          <div class="col">
                                              <div class="has-float-label mb-4"><label class="form-label" ><strong>Date de naissance </strong></label>
                                                <input class="form-control" type="date" name="date_naissance" value={{$user->date_naissance}}></div>
                                                @error('date_naissance')<span class="text-danger">{{ $message }}</span>@enderror
                                                
                                          </div>

                                          <div class="col">
                                              <div class="has-float-label mb-4"><label class="form-label" ><strong>lieu de naissance</strong></label>
                                                <input style="margin-right: 100px;" class="form-control" type="text"  placeholder="lieu_naissance" name="lieu_naissance" value={{$user->lieu_naissance}}>
                                                @error('lieu_naissance')<span class="text-danger">{{ $message }}</span>@enderror
                                              </div>
                                          </div>
                                          
                                      </div>
                                      <div class="row">
                                          <div class="col">
                                              <div class="has-float-label mb-4"><label class="form-label" ><strong>Tel</strong></label>
                                                <input class="form-control" type="number"  placeholder="Tel" name="tel" value={{$user->tel}}></div>
                                                @error('tel')<span class="text-danger">{{ $message }}</span>@enderror
                                          </div>

                                          
                                          <div class="col">
                                              <div class="has-float-label mb-4"><label class="form-label" ><strong>Sexe</strong></label>
                                                  <div class="form-control sexe_global_input" >
                                                      <div class="input_group">
                                                          <input type="radio" id="hh" name="sexe" value="1"  @if ($user->sexe == "F" ) checked @endif class="form-check-input" @if(old('sexe') == '1') checked @endif required>
                                                          <span class="sexe_label" for="hh">Femme</span>
                                                      </div>
                                                      <div class="input_group">
                                                          <input type="radio" id="mm" name="sexe" value="0"  @if ($user->sexe == "M" ) checked @endif class="form-check-input" @if(old('sexe') == '0') checked @endif required>
                                                          <span class="sexe_label" for="mm">Homme</span>
                                                      </div>
                                                 
                                                    @error('sexe')<span class="text-danger">{{ $message }}</span>@enderror
                                                      
                                                  </div>

                                              </div>
                                          </div>
                                          
                                          
                                      </div>

                                      <div class="row">
                                          <hr>
                                          <div class="card-body">
                                              <div class="row">
                                                  
                                                      <div class="col">
                                                          <div class="has-float-label mb-4">
                                                              <label class="form-label" >
                                                                  <strong>Date d'ambauche</strong>
                                                              </label>
                                                              <input class="form-control" type="date" name="date_ambauche" value={{$user->date_ambauche}}>
                                                              @error('date_ambauche')<span class="text-danger">{{ $message }}</span>@enderror
                                                          </div>
                                                      </div>
                                                      <div style="min-width: 30%;" class="col">
                                                          <div class="has-float-label mb-4">
                                                              <label class="form-label" >
                                                                  <strong>S.familiale</strong>
                                                              </label>
                                                              <select class="form-control" name="situation_familial" id="" value={{$user->situation_familial}}>
                                                                  <option value="Célibataire">Célibataire</option>
                                                                  <option value="Marié(e)">Marié(e)</option>
                                                                  <option value="Divorcé(e)">Divorcé(e)</option>
                                                              </select>
                                                          </div>
                                                          @error('situation_familial')<span class="text-danger">{{ $message }}</span>@enderror
                                                      </div>
                                                      <div style="min-width: 30%;" class="col">
                                                          <div class="has-float-label mb-4">
                                                              <label class="form-label" >
                                                                  <strong>N° d'enfants</strong>
                                                              </label>
                                                              <input class="form-control" type="number" name="Nbr_enfants" placeholder="N° d'enfants"value={{$user->Nbr_enfants}}>
                                                          </div>
                                                      </div>
                                                      @error('Nbr_enfants')<span class="text-danger">{{ $message }}</span>@enderror
                                                  
                                              </div>
                                              <div class="row">
                                                  
                                                 
                                                      <div style="min-width: 30%;" class="col">
                                                          <div class="has-float-label mb-4">
                                                              <label class="form-label" >
                                                                  <strong>Corp</strong>
                                                              </label>
                                                              <select class="form-control" name="corp_id" id="" value={{$user->corp_id}}>
                                                                @foreach( $corps as $corp)
                                                                
                                                    
                                                                <option value=" {{$corp->id}} "> {{$corp->libelle}} </option>
                                                                @endforeach
                                                              </select>
                                                              @error('corp_id')<span class="text-danger">{{ $message }}</span>@enderror
                                                          </div>
                                                      </div>
                                                     
                                                  
                                              </div>
                                              <div class="row">
                                                  <div style="min-width: 30%;" class="col">
                                                      <div class="has-float-label mb-4">
                                                          <label class="form-label" >
                                                              <strong>Cadre</strong>
                                                          </label>
                                                          <select class="form-control" name="cadre_id" id="" value={{$user->cadre_id}}>
                                                            
                                                              @foreach( $cadres as $cadre)
                                                   
                                                              <option value=" {{$cadre->id}} "> {{$cadre->libelle_c}} </option>
                                                              @endforeach
                                                          </select>
                                                          @error('cadre_id')<span class="text-danger">{{ $message }}</span>@enderror
                                                      </div>
                                                  </div>
                                                  <div style="min-width: 30%;" class="col">
                                                      <div class="has-float-label mb-4">
                                                          <label class="form-label" >
                                                              <strong>Grade</strong>
                                                          </label>
                                                          <select class="form-control" name="grade_id" id="" value={{$user->grade_id}}>
                                                            
                                                              @foreach( $grades as $grade)
                                                   
                                                              <option value=" {{$grade->id}} "> {{$grade->libelle_g}} </option>
                                                              @endforeach
                                                          </select>
                                                          @error('grade_id')<span class="text-danger">{{ $message }}</span>@enderror
                                                      </div>
                                                  </div>
                                                  <div style="min-width: 30%;" class="col">
                                                      <div class="has-float-label mb-4">
                                                          <label class="form-label" >
                                                              <strong>Indice</strong>
                                                          </label>
                                                          <select class="form-control" name="indice_id" id="" value={{$user->indice_id}}>
                                                            @foreach( $indices as $indice)

                                                            <option value=" {{$indice->id}} "> {{$indice->libelle_i}} </option>
                                                            @endforeach
                                                         </select>
                                                         @error('indice_id')<span class="text-danger">{{ $message }}</span>@enderror
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="row">
                                                  <div style="min-width: 30%;" class="col">
                                                      <div class="has-float-label mb-4">
                                                          <label class="form-label" >
                                                              <strong>Roles</strong>
                                                          </label>
                                                          <select class="form-control" name="role" id="" value={{$user->role}}>
                                                            @foreach( $roles as $role)

                                                            <option value=" {{$role->id}} "> {{$role->name}} </option>
                                                            @endforeach
                                                          </select>
                                                          @error('role')<span class="text-danger">{{ $message }}</span>@enderror
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                     <center> <button class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" type="submit">&nbsp;Enregistrer</button></center>




                                      
                                 
                              </div>
                      </div>
                  </div>

                    
                  




              </form>
    <footer class="bg-white sticky-footer">
        <div class="container my-auto">
        
        </div>
    </footer>
</div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    
@endsection

