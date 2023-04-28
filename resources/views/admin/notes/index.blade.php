
@extends('admin.layouts.master')


@section('contenu')
<div class="d-sm-flex justify-content-between align-items-center mb-4">
    <h3 class="text-dark mb-0"></h3>

</div>

        <div class="container-fluid">
            <h3 class="text-dark mb-4">Liste Des Notes</h3>
            <div class="card shadow">
                <div class="card-header py-3">
                    <p class="text-primary m-0 fw-bold">Notes Info</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 text-nowrap">
                            <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label class="form-label">Show&nbsp;<select class="d-inline-block form-select form-select-sm">
                                        <option value="10" selected="">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select>&nbsp;</label></div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-end dataTables_filter" id="dataTable_filter"><label class="form-label"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                        </div>
                    </div>
                    <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                        <table class="table my-0" id="dataTable">

                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Cin</th>
                                    <th>Concours</th>
                                    <th>Note</th>
                                    <th>action</th>
                                 
                                </tr>
                      
                           
                             
                            
                            </thead>
                        
                            <tbody>
                                @foreach ($users as $user)
                                    @foreach ($user as $u)
                                        @foreach ($u->concours as $concours)
                                            <tr>
                                                <td>{{ $u->nom }}  {{ $u->prenom }} </td>
                                                <td>{{ $u->cin }}</td>
                                                <td>{{ $concours->libelle }}</td>
                                                <td>
                                                    @if (isset($concours->pivot->note))
                                                        {{ $concours->pivot->note }}
                                                    @else
                                                        No note available
                                                    @endif
                                                </td>
                                                <td style="background-color: rgba(128, 128, 128, 0.062)
                                                ;text-align: center;">
                                                
            
            
                                                <form method="POST" action="" onsubmit="return confirm('Êtes-vous sûre de vouloir supprimer cet enregistrement ? ')">
                                                    @csrf
                                                    @method('DELETE')
                                                  
                                                <a style="color:rgba(20, 74, 173, 0.849);text-decoration: none;cursor: pointer;"
                                                id="modal-btn__"><i class="fas fa-edit"></i></a>
                                                 <button style="color:rgba(173, 20, 20, 0.849);text-decoration: none;" href="#"><i style="margin-left: 10px;" class="fas fa-trash"></i></button>

        
                                                   
                                                </form>
                                                <div id="myModal__" class="modal__">

                                                    <!-- Modal content -->
                                                    <div class="modal-content__ card shadow">
                                                        <span class="close__" onclick="close__Modal()">&times;</span>
                                                        <div class="form__">
                                                            <form action="{{Route('UpdateNote',$u->id)}}"method="POST">
  
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="row">

                                                                    <div  class="col">
                                                                        <div  class="has-float-label mb-4"><label class="form-label" ><strong>Nom</strong></label>
                                                                            <input disabled class="form-control" type="text"  placeholder="ID" value={{ $u->nom }} @disabled(true)></div>
                                                                    </div>
                                                                    <div  class="col">
                                                                        <div  class="has-float-label mb-4"><label class="form-label" ><strong>Prenom</strong></label>
                                                                            <input disabled class="form-control" type="text"  placeholder="ID" value={{ $u->prenom  }} @disabled(true)></div>
                                                                    </div>
                                                                </div>
                                                               
                                                                <div class="row">
                                                                <div  class="col">
                                                                    <div class="has-float-label mb-4"><label class="form-label" for="username"><strong>Cin</strong></label>
                                                                        <input class="form-control" type="text"  placeholder="Cin"  value={{ $u->cin }}   name="cin"></div>
                                                                </div>
                                                                <div class="has-float-label mb-4">
                                                                    <label class="form-label" >
                                                                        <strong>Concours</strong>
                                                                    </label>
                                                                    <select class="form-control" name="corp_id" id="" @disabled(true)>
                                                                        <option value="test">{{ $concours->libelle}}</option>
                                                                    </select>
                                                                </div>
                                                                </div>
                                                                <div  class="col">
                                                                    <div  class="has-float-label mb-4"><label class="form-label" ><strong>Note</strong></label>
                                                                        <input  class="form-control" type="number" name="note"  placeholder="Note"  ></div>
                                                                </div

                                                                <div class="text-center py-3 mb-3"><button class="btn btn-primary btn-sm" type="submit">Enregistrer</button></div>
                            
                                                            </form>
                                                        </div>
                                                    </div>
                            
                                                </div>
            
                                                 
                                                </td>
                                            

                                            </tr>
                                        @endforeach
                                    @endforeach
                              
                                @endforeach
                            </tbody>
                            <tfoot>
                                
                                <tr>
                                    <th>Nom</th>
                                    <th>Cin</th>
                                    <th>Concours</th>
                                    <th>Note</th>
                                    <th>action</th>
                                </tr>
                        </table>
    
                    </div>
                    <div class="row">
                        <div class="row">
                            <div class="col-md-6 align-self-center">
                                <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of{{$users->count()}} </p>
                            </div>
                            <div class="col-md-6">
                                <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                    <ul class="pagination">
                                        <li class="page-item disabled"><a class="page-link" aria-label="Previous" href="#"><span aria-hidden="true">«</span></a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" aria-label="Next" href="#"><span aria-hidden="true">»</span></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>


@endsection

