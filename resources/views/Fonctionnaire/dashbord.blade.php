@extends('Fonctionnaire.layouts.master')
@section('contenu')

<div class="row">
    <div class="col-md-6 col-xl-3 mb-4">
        <div class="card shadow border-start-primary py-2">
            <div class="card-body">
                <div class="row align-items-center no-gutters">
                    <div class="col me-2">
                        <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span>solde (moi)</span></div>
                        <div class="text-dark fw-bold h5 mb-0"><span>25000 dh</span></div>
                    </div>
                    <div class="col-auto"><i class="fas fa-calendar fa-2x text-gray-300"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3 mb-4">
        <div class="card shadow border-start-success py-2">
            <div class="card-body">
                <div class="row align-items-center no-gutters">
                    <div class="col me-2">
                        <div class="text-uppercase text-success fw-bold text-xs mb-1"><span>solde</span></div>
                        <div class="text-dark fw-bold h5 mb-0"><span>2500dh</span></div>
                    </div>
                    <div class="col-auto"><i class="fas fa-dollar-sign fa-2x text-gray-300"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3 mb-4">
        <div class="card shadow border-start-info py-2">
            <div class="card-body">
                <div class="row align-items-center no-gutters">
                    <div class="col me-2">
                        <div class="text-uppercase text-info fw-bold text-xs mb-1"><span>taches</span></div>
                        <div class="row g-0 align-items-center">
                            <div class="col-auto">
                                <div class="text-dark fw-bold h5 mb-0 me-3"><span>50%</span></div>
                            </div>
                            <div class="col">
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-info" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"><span class="visually-hidden">50%</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto"><i class="fas fa-clipboard-list fa-2x text-gray-300"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3 mb-4">
        <div class="card shadow border-start-warning py-2">
            <div class="card-body">
                <div class="row align-items-center no-gutters">
                    <div class="col me-2">
                        <div class="text-uppercase text-warning fw-bold text-xs mb-1"><span>Notifications</span></div>
                        <div class="text-dark fw-bold h5 mb-0"><span>18</span></div>
                    </div>
                    <div class="col-auto"><i class="fas fa-comments fa-2x text-gray-300"></i></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-7 col-xl-8">
        <div class="card shadow mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h6 class="text-primary fw-bold m-0">Aperçu des gains</h6>
                <div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button">
                    <i class="fas fa-ellipsis-v text-gray-400"></i></button>
                    <div class="dropdown-menu shadow dropdown-menu-end animated--fade-in">
                        <p class="text-center dropdown-header">dropdown header:</p><a class="dropdown-item" href="#">&nbsp;Action</a>
                        <a class="dropdown-item" href="#">&nbsp;Another action</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">&nbsp;Something else here</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="chart-area"><canvas data-bss-chart="{&quot;type&quot;:&quot;line&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;Jan&quot;,&quot;Feb&quot;,&quot;Mar&quot;,&quot;Apr&quot;,&quot;May&quot;,&quot;Jun&quot;,&quot;Jul&quot;,&quot;Aug&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;Earnings&quot;,&quot;fill&quot;:true,&quot;data&quot;:[&quot;0&quot;,&quot;10000&quot;,&quot;5000&quot;,&quot;15000&quot;,&quot;10000&quot;,&quot;20000&quot;,&quot;15000&quot;,&quot;25000&quot;],&quot;backgroundColor&quot;:&quot;rgba(78, 115, 223, 0.05)&quot;,&quot;borderColor&quot;:&quot;rgba(78, 115, 223, 1)&quot;}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:false,&quot;labels&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;}},&quot;title&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;},&quot;scales&quot;:{&quot;xAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;zeroLineColor&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;drawBorder&quot;:false,&quot;drawTicks&quot;:false,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;],&quot;drawOnChartArea&quot;:false},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#858796&quot;,&quot;fontStyle&quot;:&quot;normal&quot;,&quot;padding&quot;:20}}],&quot;yAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;zeroLineColor&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;drawBorder&quot;:false,&quot;drawTicks&quot;:false,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;]},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#858796&quot;,&quot;fontStyle&quot;:&quot;normal&quot;,&quot;padding&quot;:20}}]}}}"></canvas></div>
            </div>
        </div>
    </div>
 
</div>
<div class="row">
    <div class="col-lg-6 mb-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="text-primary fw-bold m-0">Conges</h6>
            </div>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="text-primary fw-bold m-0">Mes conges</h6>
            </div>
            <ul class="list-group list-group-flush">
                @foreach ($conges as $conge)
                <li class="list-group-item">
                    <div class="row align-items-center no-gutters">
                        <div class="col me-2">
                            <h6 class="mb-0"><strong>conge de type  {{ $conge->type_conge->libelle_type}}  </strong></h6><span class="text-xs">{{$conge->date_debut}}</span>  <span class="text-xs"></span>
                        </div>
                        <div class="col-auto">
                            <div class="form-check"><a style="color:rgba(25, 82, 189, 0.849);text-decoration: none;cursor: pointer;"
                                id="modal-btn__" href=""><i class="fas fa-edit"></i>Annuler la Demande</label></div>
                        </div>
                    </div>

                  <div> <conter> <h6  class="text-danger fw-bold m-8 " >{{$conge->status}}</conter></h6></div> 
                </li>
             
                <div id="myModal__" class="modal__">

                    <!-- Modal content -->
                    <div class="modal-content__ card shadow">
                        <span class="close__" onclick="close__Modal()">&times;</span>
                        <div class="form__">
                            <form action="{{Route('conges.update',$conge->id)}}"method="POST">

                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div style="min-width: 30%;" class="col">
                                        <div class="has-float-label mb-4"><label class="form-label" ><strong>CIN</strong></label>
                                          <input class="form-control" type="text"  placeholder="CIN" name="cin" value={{$user->cin}} @disabled(true)></div>
                                          @error('cin')<span class="text-danger">{{ $message }}</span>@enderror
                                    </div>

                                    <div class="col">
                                        <div class="has-float-label mb-4"><label class="form-label" ><strong>D.Naissance </strong></label>
                                          <input class="form-control" type="date" name="date_naissance" value={{$user->date_naissance}} @disabled(true)></div>
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
                                        <label class="form-label" ><strong>ID</strong></label>
                                        <input disabled class="form-control" type="text"  placeholder="ID" ></div>
                                </div>
                             
                                <div class="has-float-label mb-4">
                                    <label class="form-label" >-
                                        <strong>type</strong>
                                    </label>
                                    <select class="form-control" name="type_id"  name="type_id" @disabled(true)>
                                        @foreach($types_conge as $type)
                                            <option value="{{$type->id}}"> {{$type->libelle_type}} </option>
                                        @endforeach
                            
                                    </select>
                          
                               
                                </div>
                                <div class="has-float-label mb-4">
                                  
                                    <label for="annulation"><strong>Vouler vous annuler </strong>?</label>
                                    <div class="input_group">
                                        <div class="input_group">
                                            <input type="radio" id="hh" name="annulation" value="1"  @if ($conge->annulation == 1 ) checked @endif class="form-check-input" @if(old('annulation') == '1') checked @endif required>
                                            <span class="sexe_label" for="hh">OUI</span>
                                     
                                    
                                            <input type="radio" id="mm" name="annulation" value="0"  @if ($conge->annulation == 0 ) checked @endif class="form-check-input" @if(old('annulation') == '0') checked @endif required>
                                            <span class="sexe_label" for="mm">NON</span>
                                        </div>
                                    </div>
                                    
                                   
                               
                                
                          
                               
                                </div>
                                <div class="text-center mb-3"><button class="btn btn-primary btn-sm" type="submit">garder les modification</button></div>

                            </form>
                        </div>
                    </div>

                </div>
            @endforeach
                
        </div>
    </div>
</div>
    
@endsection