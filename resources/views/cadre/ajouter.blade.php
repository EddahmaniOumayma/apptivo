@extends('admin.layouts.master')
@section('contenu')

    <div class="container-fluid">
                    
        <div class="row card  shadow">
            <div class="card-header ">
                <h3 class="text-gray-600 display-7">Ajouter cadre</h3>
            </div>


    <!-- ////////////////////////////// form start ///////////////////////////////// -->
    <form class="add" method="POST" action=" {{route("cadres.store")}} " >
      @csrf   

                  
                  
                        <div class="card-body ">
                                
                                    <div class="row">
                                        <div style="min-width: 30%;" class="col">
                                            <div class="has-float-label mb-4">
                                                <div class="has-float-label md-4">                                        
                                                    <label class="form-label" for="username"><strong>libelle</strong></label>
                                                    <input class="form-control" type="text" id="Nom" placeholder="Libelle" name="libelle">
                                                    @error('libelle')<span class="text-danger">{{ $message }}</span>@enderror
    
                                            </div>
    
                                            </div>
                                        </div>

                                     
                                        
                            
                                 
                                  
                                    <div class="row">
                                      

                                        
                                            <div class="has-float-label mb-4">
                                              <div class="col">
                                                <label class="form-label" >
                                                    <strong>corp</strong>
                                                </label>
                                                <select class="form-control" name="corp_id" id="">
                                                  
                                                    @foreach( $corps as $corp)
                                         
                                                    <option value=" {{$corp->id}} "> {{$corp->libelle}} </option>
                                                    @endforeach
                                                </select>
                                                @error('corp_id')<span class="text-danger">{{ $message }}</span>@enderror
                                              </div>
                                            </div>
                                        

                                    
                                        
                                    </div>
                            

                                
                                   <center> <button class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" type="submit">&nbsp;Ajouter cadre</button></center>




                                    
                               
                            </div>
    </form>
   
    
  
    
@endsection

