
@extends('admin.layouts.master')


@section('contenu')
<div class="d-sm-flex justify-content-between align-items-center mb-4">
    <h3 class="text-dark mb-0"></h3>
    <a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="{{route('indices.create')}}">&nbsp;Ajouter indice</a>
</div>

        <div class="container-fluid">
            <h3 class="text-dark mb-4">Lise Des indices</h3>
            <div class="card shadow">
                <div class="card-header py-3">
                    <p class="text-primary m-0 fw-bold">indices Info</p>
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
                            <th>indice</th>
                            <th>grade</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                    
              
                          
                          
                          
                        </tr>
                       
                        @foreach ($indices as $indice)
                        <tr>
                          <th scope="row">{{$indice->id}}</th>
                          
                          <td>{{$indice->libelle_i}}</td>
                          <td>{{$indice->libelle_g}}</td>

                            <td style="background-color: rgba(128, 128, 128, 0.062)
                            ;text-align: center;">
                                <!-- <a style="color:rgba(20, 73, 173, 0.849);text-decoration: none;" href="#"><i class="fas fa-info-circle"></i> info</a> -->
                     
                            <form method="POST" action="{{ route('indices.destroy', $indice->id) }}" onsubmit="return confirm('Êtes-vous sûre de vouloir supprimer cet enregistrement ? ')">
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
                                        <form action="{{Route('indices.update',$indice->id)}}"method="POST">
  
                                            @csrf
                                            @method('PUT')
                                            <div  class="col">
                                                <div  class="has-float-label mb-4"><label class="form-label" ><strong>ID</strong></label><input disabled class="form-control" type="text"  placeholder="ID" ></div>
                                            </div>
                                            <div  class="col">
                                                <div class="has-float-label mb-4"><label class="form-label" for="username">
                                                    <strong>indice</strong>
                                                </label>
                                                <input class="form-control" type="text"  placeholder="indice" name="libelle_i" value={{$indice->libelle_i}}></div>
                                            </div>
                                            <div class="has-float-label mb-4">
                                                <label class="form-label" >
                                                    <strong>grade</strong>
                                                </label>
                                                <select class="form-control" name="grade_id"  name="grade_id" >
                                                    @foreach($grades as $grade)
                                                        <option value="{{$grade->id}}"> {{$grade->libelle_g}} </option>
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
                            <td><strong>indice</strong></td>
                            <td><strong>grade</strong></td>

                            <td><strong>action</strong></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">
                        Showing 1 to 10 of {{$indices->count()}}</p>
                </div>
                <div class="col-md-6">
                    <nav
                        class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                        <ul class="pagination">
                            {{$indices->links()}}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
            
                              

                               


@endsection

