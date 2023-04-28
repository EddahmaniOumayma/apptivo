
@extends('admin.layouts.master')


@section('contenu')
<div class="d-sm-flex justify-content-between align-items-center mb-4">
    <h3 class="text-dark mb-0"></h3>
    <a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="{{route('grades.create')}}">&nbsp;Ajouter grade</a>
</div>

        <div class="container-fluid">
            <h3 class="text-dark mb-4">Lise Des grades</h3>
            <div class="card shadow">
                <div class="card-header py-3">
                    <p class="text-primary m-0 fw-bold">grades Info</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 text-nowrap">
                          
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-end dataTables_filter" id="dataTable_filter">
                                <label class="form-label">
                                    <input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search">
                                </label></div>
                        </div>
                    </div>
                    <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table my-0" id="dataTable">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">libelle</th>
                            <th scope="col">cadre</th>
                            <th scope="col">salaire_de_base</th>
                            <th scope="col">besoin_concours</th>
                        </tr>
                    </thead>
                    <tbody>
                    
              
                          
                          
                          
                        </tr>
                        @foreach ($grades as $grade)
                        <tr>
                          <th scope="row">{{$grade->id}}</th>
              
                          <td>{{$grade->libelle_g}}</td>
                          <td>{{$grade->libelle_c}}</td>
                          <td>{{$grade->salaire_de_base}}</td>
                          <td>{{$grade->besoin_concours}}</td>
                    

                            <td style="background-color: rgba(128, 128, 128, 0.062)
                            ;text-align: center;">
                                <!-- <a style="color:rgba(20, 73, 173, 0.849);text-decoration: none;" href="#"><i class="fas fa-info-circle"></i> info</a> -->
                     
                            <form method="POST" action="{{ route('grades.destroy', $grade->id) }}" onsubmit="return confirm('Êtes-vous sûre de vouloir supprimer cet enregistrement ? ')">
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
                                        <form action="{{Route('grades.update',$grade->id)}}"method="POST">
  
                                            @csrf
                                            @method('PUT')
                                            <div  class="col">
                                                <div  class="has-float-label mb-4"><label class="form-label" ><strong>ID</strong></label><input disabled class="form-control" type="text"  placeholder="ID" ></div>
                                            </div>
                                            <div  class="col">
                                                <div class="has-float-label mb-4"><label class="form-label" for="username">
                                                    <strong>grade</strong>
                                                </label>
                                                <input class="form-control" type="text"  placeholder="grade" name="libelle_c" value={{$grade->libelle_g}}></div>
                                            </div>
                                            <div class="has-float-label mb-4">
                                                <label class="form-label" >-
                                                    <strong>cadre</strong>
                                                </label>
                                                <select class="form-control" name="cadre_id"  name="cadre_id" >
                                                    @foreach($cadres as $cadre)
                                                        <option value="{{$cadre->id}}"> {{$cadre->libelle_c}} </option>
                                                    @endforeach
                                        
                                                </select>
                                      
                                           
                                            </div>
                                            <div class="has-float-label mb-4">
                                              
                                                <label for="besoin_concours"><strong>Concours</strong>?</label>
                                                <div class="input_group">
                                                    <div class="input_group">
                                                        <input type="radio" id="hh" name="besoin_concours" value="1"  @if ($grade->besoin_concours == 1 ) checked @endif class="form-check-input" @if(old('besoin_concours') == '1') checked @endif required>
                                                        <span class="sexe_label" for="hh">OUI</span>
                                                 
                                                
                                                        <input type="radio" id="mm" name="besoin_concours" value="0"  @if ($grade->besoin_concours == 0 ) checked @endif class="form-check-input" @if(old('besoin_concours') == '0') checked @endif required>
                                                        <span class="sexe_label" for="mm">NON</span>
                                                    </div>
                                                </div>
                                                <div  class="col">
                                                    <div class="has-float-label mb-4"><label class="form-label" for="username">
                                                        <strong>Salaire de base</strong></label>
                                                        <input class="form-control" type="text"name="salaire_de_base" value={{$grade->salaire_de_base}}></div>
                                                    </div>
                                                
                                               
                                           
                                            
                                      
                                           
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
                            <td><strong>grade</strong></td>
                            <td><strong>cadre</strong></td>

                            <td><strong>action</strong></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">
                        Showing 1 to 10 of {{$grades->count()}}</p>
                </div>
                <div class="col-md-6">
                    <nav
                        class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                        <ul class="pagination">
                            {{$grades->links()}}
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
            
                              

                               


@endsection

