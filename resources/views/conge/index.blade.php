
@extends('admin.layouts.master')


@section('contenu')

 <div class="container-fluid">
    <h3 class="text-dark mb-4">Listes des Conges Demandée</h3>
            @foreach ($conges as $conge)
          
            
                <div class="col-sm-6 mb-4 ">
                  <div class="card">
                    <div class="card-body">
                        <h5 class="text-dark fw-bold m-0">{{ $conge->user->nom }} {{ $conge->user->prenom }}</h5>
                        <p class=" text-muted mt-2">
                            une demande d'un conge d'une durée de  {{$conge->duration}} jours
                        </p>
                        
                        <h6  class="text-danger fw-bold "> {{$conge->status}} </h6>
                     
                     <center>
                      
                           
                                <a style="color:rgba(254, 159, 7, 0.849);text-decoration: none;cursor: pointer;"
                                id="modal-btn__" href="">plus d'infos</a>
                           
                        
                     </center>
                    
                    </div>
                  </div>
                </div>
          
                <div id="myModal__" class="modal__">

                    <!-- Modal content -->
                    <div class="modal-content__ card shadow">
                        <span class="close__" onclick="close__Modal()">&times;</span>
                        <div class="form__">
                            <form action="{{Route('ValiderConge',$conge->id)}}"method="POST">

                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div style="min-width: 30%;" class="col">
                                        <div class="has-float-label mb-4"><label class="form-label" ><strong>CIN</strong></label>
                                          <input class="form-control" type="text"  placeholder="CIN" name="cin" value={{$conge->user->cin}} @disabled(true)></div>
                                          @error('cin')<span class="text-danger">{{ $message }}</span>@enderror
                                    </div>

                                    <div class="col">
                                        <div class="has-float-label mb-4"><label class="form-label" ><strong>D.Naissance </strong></label>
                                          <input class="form-control" type="date" name="date_naissance" value={{$conge->user->date_naissance}} @disabled(true)></div>
                                          @error('date_naissance')<span class="text-danger">{{ $message }}</span>@enderror
                                          
                                    </div>

                                    
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="has-float-label mb-4"><label class="form-label" ><strong>Date Debut </strong></label>
                                          <input class="form-control" type="date" name="date_debut"  @disabled(true)></div>
                                          @error('date_debut')<span class="text-danger">{{ $message }}</span>@enderror
                                          
                                    </div>

                                    <div class="col">
                                        <div class="has-float-label mb-4"><label class="form-label" ><strong>Date Fin </strong></label>
                                          <input class="form-control" type="date" name="date_fin" @disabled(true)></div>
                                          @error('date_fin')<span class="text-danger">{{ $message }}</span>@enderror
                                          
                                    </div>

                                    
                                </div>
                                <div  class="col">
                                    <div  class="has-float-label mb-4">
                                        <label class="form-label" ><strong>Duration</strong></label>
                                        <input disabled class="form-control" type="text"  placeholder="ID" name="duration" value={{$conge->duration}}></div>
                                </div>
                             
                                <div class="has-float-label mb-4">
                                    <label class="form-label" >-
                                        <strong>type</strong>
                                    </label>
                                    <select class="form-control" name="type_id"  name="type_id" @disabled(true)>
                                       
                                            <option value=""> {{$conge->type_conge->libelle_type}} </option>
                                      
                            
                                    </select>
                          
                               
                                </div>
                                <div class="has-float-label mb-4">
                                  
                                    <label for="status"><strong>Vouler vous Valider le Conge </strong>?</label>
                                    <div class="input_group">
                                        <div class="input_group">
                                            <input type="radio" id="hh" name="status" value="1"  @if ($conge->status == 1 ) checked @endif class="form-check-input" @if(old('status') == '1') checked @endif required>
                                            <span class="sexe_label" for="hh">OUI</span>
                                     
                                    
                                            <input type="radio" id="mm" name="status" value="0"  @if ($conge->status == 0 ) checked @endif class="form-check-input" @if(old('status') == '0') checked @endif required>
                                            <span class="sexe_label" for="mm">NON</span>
                                        </div>
                                    </div>
                                    
                                   
                               
                                
                          
                               
                                </div>
                                <div class="text-center mb-3"><button class="btn btn-primary btn-sm" type="submit">Valider</button></div>

                            </form>
                        </div>
                    </div>

                </div>
                @endforeach
           
                
        </div>
    </div>
</div>
    
@endsection
          
               
                
            