<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exam</title>
</head>
<body>

    <div class="container">
        <h1>Exams</h1>

        <table class="table" border="1">
            <thead>
                <tr>
                    <th>Exam</th>
                    <th>Description</th>
                    <th>Questions</th>
                    <th>Resultas</th>
                    <th>Action</th>
                </tr>
            </thead>-
            <tbody>
                @foreach ($exams as $exam)
                    <tr>
                        <td>{{ $exam->libelle }}</td>
                        <td>{{ $exam->description }}</td>
                        <td>{{ $exam->questions()->count() }}</td>
                        <td>{{ $exam->results()->count() }}</td>
                        <td>
                            <a href="{{ route('exams.edit', $exam->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('exams.destroy', $exam->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('exams.create') }}" class="btn btn-success">Create Exam</a>
    </div>

</body>
</html>