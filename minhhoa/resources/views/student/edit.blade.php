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
   
                @if (session('status'))
                    <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif
   
                <div class="card">
                    <div class="card-header">
                        <h4>Edit & Update Student
                            <a href="{{ url('students_manage') }}" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
   
                        <form action="{{ url('update-student/'.$student->id) }}" method="POST">
                            @csrf
                            @method('PUT')
   
                            <div class="form-group mb-3">
                                <label for="">Student Name</label>
                                <input type="text" name="fullname" value="{{$student->fullname}}" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Student Birthday</label>
                                <input type="date" name="birthday" value="{{$student->birthday}}" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Student Address</label>
                                <input type="text" name="address" value="{{$student->address}}" class="form-control">
                            </div>
                           
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Update Student</button>
                            </div> 
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
