<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ajouter</title>
</head>
<body>
    <h2>Ajouter cadres</h2>
    <form action="{{route('indices.store') }}"  method="POST">
  
      @csrf
      <div class="form-group mt-3">
        <label for="exampleFormControlSelect1">grade</label>
        <select class="form-control" id="exampleFormControlSelect1" name="grade_id">

            @foreach($grade as $g)
                <option value="{{$g->id}}"> {{$g->libelle_g}} </option>
            @endforeach

        </select>
      </div>
      <div class="">
        <label >libelle </label>
        <input type="text" class="form-control"   name="libelle_i" >
      </div>
             <input  type="submit"  class="btn btn-primary "  value="ajouter">

    </form>

</body>
</html>





        
           
       
            
    
    


    
