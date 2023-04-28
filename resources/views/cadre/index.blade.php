
@extends('admin.layouts.master')


@section('contenu')
<div class="d-sm-flex justify-content-between align-items-center mb-4">
    <h3 class="text-dark mb-0"></h3>
    <a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="{{route('cadres.create')}}">&nbsp;Ajouter cadre</a>
</div>

        <div class="container-fluid">
            <h3 class="text-dark mb-4">Lise Des cadres</h3>
            <div class="card shadow">
                <div class="card-header py-3">
                    <p class="text-primary m-0 fw-bold">cadres Info</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 text-nowrap">
                          
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-end dataTables_filter" id="dataTable_filter"><label class="form-label"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                        </div>
                    </div>
                    <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table my-0" id="dataTable">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>cadre</th>
                            <th>corp</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                    
              
                          
                          
                          
                        </tr>
                       
                        @foreach ($cadres as $cadre)
                        <tr>
                          <th scope="row">{{$cadre->id}}</th>
                          
                          <td>{{$cadre->libelle_c}}</td>
                          <td>{{$cadre->libelle}}</td>

                            <td style="background-color: rgba(128, 128, 128, 0.062)
                            ;text-align: center;">
                                <!-- <a style="color:rgba(20, 73, 173, 0.849);text-decoration: none;" href="#"><i class="fas fa-info-circle"></i> info</a> -->
                     
                            <form method="POST" action="{{ route('cadres.destroy', $cadre->id) }}" onsubmit="return confirm('Êtes-vous sûre de vouloir supprimer cet enregistrement ? ')">
                              @csrf
                              @method('DELETE')

                                <a style="color:rgba(20, 74, 173, 0.849);text-decoration: none;cursor: pointer;"
                                    id="modal-btn__" href=""><i class="fas fa-edit"></i></a>

                                <button type="submit" style="color:rgba(173, 20, 20, 0.849);text-decoration: none;"
                                    href="#"><i style="margin-left: 10px;" class="fas fa-trash"></i></button> 

                            </form>


                            </td>
                            <!-- The Modal -->
                            <div id="myModal__" class="modal__">

                                <!-- Modal content -->
                                <div class="modal-content__ card shadow">
                                    <span class="close__" onclick="close__Modal()">&times;</span>
                                    <div class="form__">
                                        <form action="{{Route('cadres.update',$cadre->id)}}"method="POST">
  
                                            @csrf
                                            @method('PUT')
                                            <div  class="col">
                                                <div  class="has-float-label mb-4"><label class="form-label" ><strong>ID</strong></label><input disabled class="form-control" type="text"  placeholder="ID" ></div>
                                            </div>
                                            <div  class="col">
                                                <div class="has-float-label mb-4"><label class="form-label" for="username">
                                                    <strong>Cadre</strong>
                                                </label>
                                                <input class="form-control" type="text"  placeholder="Cadre" name="libelle_c" value={{$cadre->libelle_c}}></div>
                                            </div>
                                            <div class="has-float-label mb-4">
                                                <label class="form-label" >
                                                    <strong>Corp</strong>
                                                </label>
                                                <select class="form-control" name="corp_id"  name="corp_id" >
                                                    @foreach($corps as $corp)
                                                        <option value="{{$corp->id}}"> {{$corp->libelle}} </option>
                                                    @endforeach
                                        
                                                </select>
                                      
                                           
                                            </div>
                                            <div class="text-center mb-3"><button class="btn btn-primary btn-sm" type="submit">Enregistrer</button></div>

                                        </form>
                                    </div>
                                </div>

                            </div>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>

                        <tr>
                            <td><strong>id</strong></td>
                            <td><strong>cadre</strong></td>
                            <td><strong>corp</strong></td>

                            <td><strong>action</strong></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">
                        Showing 1 to 10 of {{$cadres->count()}}</p>
                </div>
                <div class="col-md-6">
                    <nav
                        class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                        <ul class="pagination">
                            <li class="page-item disabled"><a class="page-link" aria-label="Previous"
                                    href="#"><span aria-hidden="true">«</span></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" aria-label="Next" href="#"><span
                                        aria-hidden="true">»</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
            
                              

                               


@endsection

