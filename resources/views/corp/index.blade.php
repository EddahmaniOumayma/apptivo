<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <a class="btn btn-primary  sm" href="{{ route('corps.create') }}">Ajouter</a>
    <table class="table table-bordred " border="1">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">libelle</th>

         
          </tr>
        </thead>
       
            
        {{-- idApp, typeAppareil , dateAchat , dateFinGarantie, --}}
        <tbody>
          @foreach ($data as $corp)
          <tr>
            <th scope="row">{{$corp->id}}</th>
            
            <td>{{$corp->libelle}}</td>

            
            
            <td>
                <form action="{{ route('corps.destroy', $corp->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger  sm" type="submit">supprimer</button>
                    <a class="btn btn-primary  sm" href="{{ route('corps.edit', $corp->id) }}">modifier</a>
               
                </form>
                
                
            </td>
            
          </tr>
          @endforeach
        </tbody>

      </table>
</body>
</html>