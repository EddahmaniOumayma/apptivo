<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>question</title>
</head>
<body>

    <div class="container">
        <h1>questions</h1>

        <table class="table" border="1">
            <thead>
                <tr>
                    <th>Question</th>
                    <th>exam</th>
                    <th>correct</th>
                    <th>Action</th>
                </tr>
            </thead>-
            <tbody>
       
                @foreach ($Questions as $Question)
          
                    <tr>
                        <td>{{$Question->question}}</td>
                      <td>{{$Question->exam->libelle }}</td>
                      <td>{{$Question->correct}}</td>
                    
                      
                        <td>
                            <a href="{{ route('questions.edit', $Question->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('questions.destroy', $Question->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{route('questions.create')}}" class="btn btn-success">Create question</a>
    </div>

</body>
</html>