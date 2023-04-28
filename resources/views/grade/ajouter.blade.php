@extends('admin.layouts.master')
@section('contenu')

    <div class="container-fluid">
                    
        <div class="row card  shadow">
            <div class="card-header ">
                <h3 class="text-gray-600 display-7">Ajouter grade</h3>
            </div>


    <!-- ////////////////////////////// form start ///////////////////////////////// -->
    <form class="add" method="POST" action=" {{route("grades.store")}} " >
      @csrf   

                  
                  
                        <div class="card-body ">
                                
                                    <div class="row">
                                        <div style="min-width: 30%;" class="col">
                                            <div class="has-float-label mb-4">
                                                <div class="has-float-label md-4">                                        
                                                    <label class="form-label" for="username"><strong>libelle</strong></label>
                                                    <input class="form-control" type="text" id="Nom" placeholder="Libelle" name="libelle_c">
                                                    @error('libelle_c')<span class="text-danger">{{ $message }}</span>@enderror
    
                                                </div>
    
                                            </div>
                                        </div>
                                    </div>
                                
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                        <div class="row">
                                            <div class="has-float-label mb-4">
                                              <div class="col">
                                                <label class="form-label" >
                                                    <strong>cadre</strong>
                                                </label>
                                                <select class="form-control" name="cadre_id" id="">
                                                  
                                                    @foreach( $cadres as $cadre)
                                         
                                                    <option value=" {{$cadre->id}} "> {{$cadre->libelle_c}} </option>
                                                    @endforeach
                                                </select>
                                                @error('cadre_id')<span class="text-danger">{{ $message }}</span>@enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="has-float-label mb-4">
                                              <div class="col">
                                                <label class="form-label" >
                                                    <strong>salaire de base</strong>
                                                </label>
                                                <input class="form-control" type="text"name="salaire_de_base" ></div>
                                               
                                                @error('salaire_de_base')<span class="text-danger">{{ $message }}</span>@enderror
                                            </div>
                                        </div>
                                           
                                            <div class="row">
                                                <div class="has-float-label mb-4"><label class="form-label" ><strong>Besoin de concours</strong></label>
                                                   
                                                        <div class="input_group">
                                                            <input type="radio" id="hh" name="sexe" value="1"  @if(old('besoin_concours') == '1') checked @endif required>
                                                            <span class="sexe_label" for="hh">Oui</span>
                                                            <input type="radio" id="mm" name="sexe" value="0"  @if(old('besoin_concours') == '0') checked @endif required>
                                                            <span class="sexe_label" for="mm">Non</span>
                                                        </div>
                                                      
                                                   
                                                      @error('besoin_concours')<span class="text-danger">{{ $message }}</span>@enderror
                                                        
                                                 
                                                </div>
                                            </div>
                                        

                                    
                                        
                                    </div>
                            

                                
                                   <center> <button class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" type="submit">&nbsp;Ajouter grade</button></center>




                                    
                               
                            </div>
    </form>
   
    
  
    
@endsection

