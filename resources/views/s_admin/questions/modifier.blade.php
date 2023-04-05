<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Modifier question</h1>

        <form action="{{ route('questions.update',$Question->id) }}" method="POST">
            @method('PUT')
            @csrf
            
            <div class="form-group">
                <label for="libelle">  </label>
                <input type="text" name="question" id="question" class="form-control" >
                <select class="form-control" id="exampleFormControlSelect1" name="exam_id">

                    @foreach($exams as $exam)
                        <option value="{{$exam->id}}"> {{$exam->libelle}} </option>
                    @endforeach
        
                </select>
            </div>
            <label for="besoin_concours">Correct ?</label>
          <div class="form-check">
              <input type="radio" name="correct" id="yes" value="1" class="form-check-input" @if(old('correct') == '1') checked @endif required>
              <label for="yes" class="form-check-label">oui</label>
          </div>
          <div class="form-check">
              <input type="radio" name="correct" id="no" value="0" class="form-check-input" @if(old('correct') == '0') checked @endif required>
              <label for="no" class="form-check-label">Non</label>
          </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</body>
</html>