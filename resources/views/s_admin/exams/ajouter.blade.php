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

        <form action="{{ route('exams.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="libelle"> Nom Exam</label>
                <input type="text" name="libelle" id="libelle" class="form-control" required>
                <label for="description">  description</label>
                <input type="text" name="description" id="description" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</body>
</html>