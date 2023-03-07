<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <a class="btn btn-primary  sm" href="{{ route('indices.create') }}">Ajouter</a>
    <table class="table table-bordred ">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">libelle</th>
            <th scope="col">grade</th>

         
          </tr>
        </thead>
       
            
        {{-- idApp, typeAppareil , dateAchat , dateFinGarantie, --}}
        <tbody>
          @foreach ($data as $indice)
          <tr>
            <th scope="row">{{$indice->id}}</th>
            
            <td>{{$indice->libelle_i}}</td>
            <td>{{$indice->libelle_g}}</td>

            
            
            <td>
                <form action="{{ route('indices.destroy', $indice->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger  sm" type="submit">supprimer</button>
                    <a class="btn btn-primary  sm" href="{{ route('indices.edit', $indice->id) }}">modifier</a>
               
                </form>
                
                
            </td>
            
          </tr>
          @endforeach
        </tbody>

      </table>
</body>
</html>