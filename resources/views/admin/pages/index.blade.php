
@extends('admin.layouts.master')


@section('contenu')
<div class="d-sm-flex justify-content-between align-items-center mb-4">
    <h3 class="text-dark mb-0"></h3>
    <a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="{{route('fonctionnaires.create')}}">&nbsp;Ajouter Fonctionnaire</a>
</div>

        <div class="container-fluid">
            <h3 class="text-dark mb-4">Liste Des Fonctionnaires</h3>
            <div class="card shadow">
                <div class="card-header py-3">
                    <p class="text-primary m-0 fw-bold">Fonctionnaires Info</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 text-nowrap">
                            
                        <div class="col-md-6">
                            <div class="text-md-end dataTables_filter" id="dataTable_filter">
                                <form method="GET" action="{{ route('fonctionnaires.search') }}">
                                    @csrf
                                    
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ..." name="search">
                                            <button class="btn btn-primary py-0" type="submit"><i class="fas fa-search"></i></button></div>
                                  
                                </form>
                                
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                        <table class="table my-0" id="dataTable">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Date D'ambauche</th>
                                    <th>Grade</th>
                                    <th>Indice</th>
                                    <th>action</th>
                                 
                                </tr>
                           
                      
                            
                            </thead>
                            <tbody>
                                @foreach ($data as $fonctionnaire)
                                <tr>
                                    <td><img class="rounded-circle me-2" width="30" height="30"
                                            src="{{asset("storage/".$fonctionnaire->image)}}"> {{ $fonctionnaire->nom}} {{$fonctionnaire->prenom}}</td>
                                    <td> {{ $fonctionnaire->date_ambauche}}</td>
                                    @foreach($fonctionnaire['indices'] as $indice)
                                    <h4 class="title pd">  </h4>
                                
                                    <td>{{$indice['grade']->libelle_g }}</td>
                                    <td>{{$indice->libelle_i}}</td>    @endforeach
                                    
                                    <td style="background-color: rgba(128, 128, 128, 0.062)
                                    ;text-align: center;">


                                        <!-- <a style="color:rgba(20, 73, 173, 0.849);text-decoration: none;" href="#"><i class="fas fa-info-circle"></i> info</a> -->
                                        <form method="POST" action="{{ route('fonctionnaires.destroy', $fonctionnaire->id) }}" >
                                            @csrf
                                            @method('DELETE')
                                           
                                            <a style="color:rgba(20, 74, 173, 0.849);text-decoration: none;" href="{{route('fonctionnaires.edit',$fonctionnaire->id)}}"><i class="fas fa-edit"></i></a>  
                                            
                                                <Button type="submit" style="color:rgba(173, 20, 20, 0.849)" onclick="confirmDelete('{{ $fonctionnaire->nom }}', {{ $fonctionnaire->id }})"><i style="margin-left: 10px;" class="fas fa-trash " ></i></Button>
    
    
                                               
                                            </form>


                                           
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
                                    <td><strong>Nom</strong></td>
                                    <td><strong>Date D'ambauche</strong></td>
                                    <td><strong>Grade</strong></td>
                                    <td><strong>Indice</strong></td>
                                    <td><strong>action</strong></td>
                                </tr>
                        </table>
                    </div>
                    <div class="row">
                        <div class="row">
                            <div class="col-md-6 align-self-center">
                                <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">voir 1 to 10 of {{$data->count()}}</p>
                            </div>
                            <div class="col-md-6">
                                <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                    <ul class="pagination">
                                      {{$data->links()}}
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <script>
                            function confirmDelete(nom, id) {
                        Swal.fire({
                            title: 'vous êtes sûre?',
                            text:"Vous êtes sur le point de supprimer " + nom + " . Cette action ne peut pas être annulée.",
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

