<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student</h4>
                    </div>
                    <div class="card-body">
   
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Fullname</th>
                                    <th>Birthday</th>
                                    <th>Address</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($student as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->fullname }}</td>
                                    <td>{{ $item->birthday }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>
                                        <a href="{{ url('edit-student/'.$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    </td>
                                    <td>
                                        <a href="{{ url('delete-student/'.$item->id) }}" class="btn btn-danger btn-sm">Delete</a>
                                  </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
   
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
