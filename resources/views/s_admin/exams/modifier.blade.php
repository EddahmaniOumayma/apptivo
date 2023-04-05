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
        <h1>Create Exam</h1>

        <div class="container">
            <h1>Edit Exam</h1>
    
            <form action="{{ route('exams.update', $exam->id) }}" method="POST">
                @csrf
                @method('PUT')
    
                <div class="form-group">
                    <label for="libelle">Exam Nom</label>
                    <input type="text" name="libelle" id="libelle" class="form-control" value="{{ $exam->libelle }}" required>
                 
                    <label for="libelle">description</label>
                    <input type="text" name="description" id="description" class="form-control" value="{{ $exam->description }}" required>
                </div>
    
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</body>
</html>