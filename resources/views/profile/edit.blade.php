<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body class="bg-body-secondary">
@include('layouts.navbar')
<div class="container-fluid border p-2 mt-2 rounded bg-white" style="width: 75%;">
    <form action="{{route('user-profile-information.update')}}" method="POST">
        @csrf
        @method('PUT')
        <div class="text-center">
            <h1>Profile</h1>
        </div>
        @if(session('status')==='profile-information-updated')
            <div class="alert alert-success">
                Your profile has been updated.
            </div>
        @endif
        <div class="container">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="{{ old('name',auth()->user()->name)}}"/>
            @error('name')
            <div class="text-danger">{{$message}}</div>
            @enderror
            <br />
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="{{ old('email',auth()->user()->email)}}" />
            @error('email')
            <div class="text-danger">{{$message}}</div>
            @enderror
            <br />

            

            
            
            <div class="d-grid mu-2">
                <input class="btn btn-primary" type="submit" value="Update Profile" />
            </div>
            
        </div>
    </form>
</div>
@include('profile.password')
</body>

</html>