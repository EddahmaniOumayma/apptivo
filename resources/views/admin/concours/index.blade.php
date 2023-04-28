
@extends('admin.layouts.master')


@section('contenu')
<div class="d-sm-flex justify-content-between align-items-center mb-4">
    <h3 class="text-dark mb-0"></h3>
    <a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="{{route('concours.create')}}">&nbsp;Ajouter concours</a>
</div>

        <div class="container-fluid">
            <h3 class="text-dark mb-4">Lise Des concours</h3>
            <div class="card shadow">
                <div class="card-header py-3">
                    <p class="text-primary m-0 fw-bold">concours Info</p>
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
                                    <th>Libelle</th>
                                    <th>Date D'examination</th>
                                    <th>Grade</th>
                                    <th>action</th>
                                 
                                </tr>
                        
                            </thead>
                            <tbody>
                              

                                @foreach ($concours as $concour)
                                <tr>
                                    <td> {{ $concour->libelle}} </td>
                                    <td> {{ $concour->date_examination}}</td>
                                  
                                    <td>{{$concour->grade->libelle_g }}</td>
                                    {{-- <td>{{$indice->libelle_i}}</td> --}}
                                    
                                    <td style="background-color: rgba(128, 128, 128, 0.062)
                                    ;text-align: center;">
                                        <!-- <a style="color:rgba(20, 73, 173, 0.849);text-decoration: none;" href="#"><i class="fas fa-info-circle"></i> info</a> -->



                                        <form method="POST" action="{{ route('concours.destroy', $concour->id) }}" >
                                            @csrf
                                            @method('DELETE')
                                           
                                            <a style="color:rgba(20, 74, 173, 0.849);text-decoration: none;" href="{{route('concours.edit',$concour->id)}}"><i class="fas fa-edit"></i></a>  
                                            <Button type="submit" style="color:rgba(173, 20, 20, 0.849)" onclick="confirmDelete('{{ $concour->libelle }}', {{ $concour->id }})"><i style="margin-left: 10px;" class="fas fa-trash " ></i></Button>


                                           
                                        </form>

                                        
                                        <!-- <div class="dropdown">
                                            <button type="button" class="btn dropdown-toggle"
                                                data-bs-toggle="dropdown">test</button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#" class="dropdown-item">link 1</a></li>
                                                <li><a href="#" class="dropdown-item">link 2</a></li>
                                                <li><a href="#" class="dropdown-item">link 3</a></li>
                                            </ul>
                                        </div> -->
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                
                                <tr>
                                    <th>Libelle</th>
                                    <th>Date D'examination</th>
                                    <th>Grade</th>
                                    <th>action</th>
                                
                                </tr>
                        </table>
                    </div>
                    <div class="row">
                        <div class="row">
                            <div class="col-md-6 align-self-center">
                                <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of {{$concours->count()}}</p>
                            </div>
                            <div class="col-md-6">
                                <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                    <ul class="pagination">
                                        {{$concours->links()}}
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <script>
                            function confirmDelete(libelle, id) {
                        Swal.fire({
                            title: 'vous êtes sûre?',
                            text:"Vous êtes sur le point de supprimer " + libelle + " . Cette action ne peut pas être annulée.",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#d33',
                            cancelButtonColor: '#3085d6',
                            confirmButtonText: 'Oui, supprimez-le!'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                // Submit the form
                                document.querySelector(`#delete-form-${id}`).submit();
                            }
                        });
                    }
                    
                            </script>


@endsection

