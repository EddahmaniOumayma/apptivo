<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <a class="btn btn-primary  sm" href="{{ route('grades.create') }}">Ajouter</a>
    <table class="table table-bordred " border="1">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">libelle</th>
            <th scope="col">cadre</th>
            <th scope="col">salaire_de_base</th>
            <th scope="col">besoin_concours</th>

         
          </tr>
        </thead>
       
            
        {{-- idApp, typeAppareil , dateAchat , dateFinGarantie, --}}
        <tbody >
          @foreach ($data as $grade)
          <tr>
            <th scope="row">{{$grade->id}}</th>

            <td>{{$grade->libelle_g}}</td>
            <td>{{$grade->libelle_c}}</td>
            <td>{{$grade->salaire_de_base}}</td>
            <td>{{$grade->besoin_concours}}</td>
      

            
            
            <td>
                <form action="{{ route('grades.destroy', $grade->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger  sm" type="submit">supprimer</button>
                    <a class="btn btn-primary  sm" href="{{ route('grades.edit', $grade->id) }}">modifier</a>
               
                </form>
                
                
            </td>
            
          </tr>
          @endforeach
        </tbody>

      </table>
</body>
</html>