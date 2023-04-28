@extends('admin.layouts.master')
@section('contenu')

    <div class="container-fluid">
                    
        <div class="row card  shadow">
            <div class="card-header ">
                <h3 class="text-gray-600 display-7">Ajouter Indice</h3>
            </div>


    <!-- ////////////////////////////// form start ///////////////////////////////// -->
    <form class="add" method="POST" action=" {{route("indices.store")}} " >
      @csrf   

                  
                  
                        <div class="card-body ">
                                
                                    <div class="row">
                                        <div style="min-width: 30%;" class="col">
                                            <div class="has-float-label mb-4">
                                                <div class="has-float-label md-4">                                        
                                                    <label class="form-label" for="username"><strong>libelle</strong></label>
                                                    <input class="form-control" type="text" id="Nom" placeholder="Libelle" name="libelle_i">
                                                    @error('libelle_i')<span class="text-danger">{{ $message }}</span>@enderror
    
                                            </div>
    
                                            </div>
                                        </div>

                                     
                                        
                            
                                 
                                  
                                    <div class="row">
                                      

                                        
                                            <div class="has-float-label mb-4">
                                              <div class="col">
                                                <label class="form-label" >
                                                    <strong>grade</strong>
                                                </label>
                                                <select class="form-control" name="grade_id" id="">
                                                  
                                                    @foreach( $grades as $grade)
                                         
                                                    <option value=" {{$grade->id}} "> {{$grade->libelle_g}} </option>
                                                    @endforeach
                                                </select>
                                                @error('grade_id')<span class="text-danger">{{ $message }}</span>@enderror
                                              </div>
                                            </div>
                                        

                                    
                                        
                                    </div>
                            

                                
                                   <center> <button class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" type="submit">&nbsp;Ajouter cadre</button></center>




                                    
                               
                            </div>
    </form>
   
    
  
    
@endsection

