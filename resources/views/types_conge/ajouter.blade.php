@extends('admin.layouts.master')
@section('contenu')

    <div class="container-fluid">
                    
        <div class="row card  shadow">
            <div class="card-header ">
                <h3 class="text-gray-600 display-7">Ajouter type</h3>
            </div>


    <!-- ////////////////////////////// form start ///////////////////////////////// -->
    <form class="add" method="POST" action=" {{route("types_conge.store")}} " >
      @csrf   

                  
                  
                        <div class="card-body ">
                                
                                    <div class="row">
                                        <div style="min-width: 30%;" class="col">
                                            <div class="has-float-label mb-4">
                                                <div class="has-float-label md-4">                                        
                                                    <label class="form-label" for="username"><strong>libelle</strong></label>
                                                    <input class="form-control" type="text" id="Nom" placeholder="Libelle" name="libelle_type">
                                                    @error('libelle_type')<span class="text-danger">{{ $message }}</span>@enderror
    
                                                </div>
    
                                            </div>
                                        </div>
                                    </div>
                                
                                    
                                    
                                    
                                        <div class="row">
                                            <div class="has-float-label mb-4">
                                              <div class="col">
                                                <label class="form-label" >
                                                    <strong>Nombre des jours</strong>
                                                </label>
                                                <input class="form-control" type="text"name="Nbr_jrs" ></div>
                                               
                                                @error('Nbr_jrs')<span class="text-danger">{{ $message }}</span>@enderror
                                            </div>
                                        </div>
                                           
                                          
                                    
                                        
                                    </div>
                            

                                
                                   <center> <button class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" type="submit">&nbsp;Ajouter type</button></center>




                                    
                               
                            </div>
    </form>
   
    
  
    
@endsection

