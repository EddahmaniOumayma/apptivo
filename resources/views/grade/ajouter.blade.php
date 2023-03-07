<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ajouter</title>
</head>
<body>
    <h2>Ajouter grade</h2>
    <form action="{{route('grades.store') }}"  method="POST">
  
      @csrf
      <div class="form-group mt-3">
        <label for="exampleFormControlSelect1">Corp</label>
        <select class="form-control" id="exampleFormControlSelect1" name="cadre_id">

            @foreach($cadre as $c)
                <option value="{{$c->id}}"> {{$c->libelle_c}} </option>
            @endforeach

        </select>
      </div>
      <div class="">
        <label >libelle </label>
        <input type="text" class="form-control"   name="libelle_g" >
      </div>
      <div class="form-group">
      <div class="">
        <label >salaire_de_base </label>
        <input type="number" class="form-control"   name="salaire_de_base" >
      </div>
      <div class="form-group">
        <div class="form-group">

          <label for="besoin_concours">besoin du  concours?</label>
          <div class="form-check">
              <input type="radio" name="besoin_concours" id="yes" value="1" class="form-check-input" @if(old('besoin_concours') == '1') checked @endif required>
              <label for="yes" class="form-check-label">oui</label>
          </div>
          <div class="form-check">
              <input type="radio" name="besoin_concours" id="no" value="0" class="form-check-input" @if(old('besoin_concours') == '0') checked @endif required>
              <label for="no" class="form-check-label">Non</label>
          </div>
    </div>


             <input  type="submit"  class="btn btn-primary "  value="ajouter">

    </form>

</body>
</html>





        
           
       
            
    
    


    
