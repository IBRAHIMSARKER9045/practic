<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Student</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container" style="margin-top: 20px">
        <div class="row">
            <div class="col-md-12">
                <h1>Add Student</h1>
                @if (Session::has('success'))
                <div class="alert alert-success"role="alert">
                    {{ Session::get('success') }}
                </div>
                @endif
                <hr>
                <form action="{{ url('add-student') }}" method="post">
                    @csrf
                    <div class="md-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                    <div class="md-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                    <div class="md-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" name="phone" id="phone">
                    </div>
                    <div class="md-3">
                        <label for="address" class="form-label">Address</label>
                        <textarea class="form-control" name="address" id="address" cols="10" rows="5"></textarea>
                    </div>
                    <br>
                    <div class="md-3">
                        <button type="submit" class="btn btn-primary">Submit</button>|
                        |<a href="{{url('student-list')}}" class="btn btn-danger">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>

</html>
