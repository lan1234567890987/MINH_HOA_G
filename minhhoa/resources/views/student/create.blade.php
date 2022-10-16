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
        <div class="row justify-content-center">
            <div class="col-md-6">
   
                @if (session('status'))
                    <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif
   
                <div class="card">
                    <div class="card-header">
                        <h4>Add Student</h4>
                    </div>
                    <div class="card-body">
   
                        <form action="{{ url('add-student') }}" method="POST">
                            @csrf
   
                            <div class="form-group mb-3">
                                <label for="">Student Name</label>
                                <input type="text" name="fullname" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Student Birthday</label>
                                <input type="date" name="birthday" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Student Address</label>
                                <input type="text" name="address" class="form-control">
                            </div>
                           
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Save Student</button>
                            </div>
   
                        </form>
   
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>