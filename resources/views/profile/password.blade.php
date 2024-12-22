<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>
@include('nav')
<body class="bg-body-secondary">
    <div class="container border p-3 mt-5 rounded bg-white" style="width: 30%;">
        <form method="POST" action="{{route('user-password.update')}}">
            @csrf
            @method('PUT')
            <div class="mb-4 text-center">
                <h1>UPDATE PASSWORD</h1>
            </div>

            @if(session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
            @endif

            <label for="current_password" class="form-label">Current Password : </label>
            <input id="current_password" class="form-control" type="password" name="email" @error('current_password','updatePassword') is-invalid @enderror required autofocus />
            @error('current_password','updatePassword')
            <div class="text-danger">{{$message}}</div>
            @enderror
            <br />

            <label for="password" class="form-label">New Password:</label>
            <input id="password" class="form-control" type="password" name="password" @error('password','updatePassword') is-invalid @enderror required
                autocomplete="new-password" />
            @error('password','updatePassword')
            <div class="text-danger">{{$message}}</div>
            @enderror
            <br />
        
            <label for="password_confirmation" class="form-label">Confirm New Password :</label>

            <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required
                autocomplete="new-password" />
            @error('password_confirmation','updatePassword')
            <div class="text-danger">{{$message}}</div>
            @enderror  
            <br />

            <div class="d-grid mu-2">
                <button class="btn btn-primary bg-primary btn-block">
                    Update Password
                </button>
            </div>
        </form>
    </div>
</body>

</html>