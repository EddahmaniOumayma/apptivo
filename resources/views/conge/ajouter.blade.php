@extends('Fonctionnaire.layouts.master')
@section('contenu')

    <div class="container-fluid">
                    
        <div class="row card  shadow">
            <div class="card-header ">
                <h3 class="text-gray-600 display-7">Demander un conge</h3>
            </div>


    <!-- ////////////////////////////// form start ///////////////////////////////// -->
    <form class="add" method="POST" action=" {{route('conges.store')}} " >
      @csrf   

                <div class="row ">

                   
                  
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
                                              <input class="form-control" type="text"  placeholder="Prénom" name="prenom"value={{$user->prenom}}></div>
                                              @error('prenom')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>

                                        
                                        
                                    </div>
                                    <div class="row">
                                        <div style="min-width: 30%;" class="col">
                                            <div class="has-float-label mb-4"><label class="form-label" ><strong>CIN</strong></label>
                                              <input class="form-control" type="text"  placeholder="CIN" name="cin" value={{$user->cin}}></div>
                                              @error('cin')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>

                                        <div class="col">
                                            <div class="has-float-label mb-4"><label class="form-label" ><strong>D.Naissance </strong></label>
                                              <input class="form-control" type="date" name="date_naissance" value={{$user->date_naissance}}></div>
                                              @error('date_naissance')<span class="text-danger">{{ $message }}</span>@enderror
                                              
                                        </div>

                                        
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="has-float-label mb-4"><label class="form-label" ><strong>Date Debut </strong></label>
                                              <input class="form-control" type="date" name="date_debut" ></div>
                                              @error('date_debut')<span class="text-danger">{{ $message }}</span>@enderror
                                              
                                        </div>

                                        <div class="col">
                                            <div class="has-float-label mb-4"><label class="form-label" ><strong>Date Fin </strong></label>
                                              <input class="form-control" type="date" name="date_fin"></div>
                                              @error('date_fin')<span class="text-danger">{{ $message }}</span>@enderror
                                              
                                        </div>

                                        
                                    </div>
                                    
                                                    <div style="min-width: 30%;" class="col">
                                                        <div class="has-float-label mb-4">
                                                            <label class="form-label" >
                                                                <strong>type</strong>
                                                            </label>
                                                            <select class="form-control" name="type_conge_id" id="">
                                                              @foreach( $types_conge as $type)
                                                              
                                                  
                                                              <option value=" {{$type->id}} "> {{$type->libelle_type}} </option>
                                                              @endforeach
                                                            </select>
                                                            @error('type_conge_id')<span class="text-danger">{{ $message }}</span>@enderror
                                                        </div>
                                                    </div>
                                                   
                                            
                                    </div>
                                   <center> <button class="btn btn-primary btn-sm d-sm-inline-block mb-2" role="button" type="submit">&nbsp;Demander</button></center>




                                    
                               
                            </div>

                </div>
    </form>                      
   
    
  
    
@endsection

