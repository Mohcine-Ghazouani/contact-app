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
        <form method="POST" action="{{route('password.update')}}">
            @csrf
            <div class="mb-4 text-center">
                <h1>RESET PASSWORD</h1>
            </div>

            <input type="hidden" name="token" value="{{ $request->route('token') }}" />

            <label for="email" class="form-label">Email : </label>
            <input id="email" class="form-control" type="email" name="email" :value="old('email', $request->email)"
                required autofocus autocomplete="username" />
            @error('email')
            <div class="text-danger">{{$message}}</div>
            @enderror
            <br />

            <label for="password" class="form-label">Password:</label>
            <input id="password" class="form-control" type="password" name="password" required
                autocomplete="new-password" />
            @error('password')
            <div class="text-danger">{{$message}}</div>
            @enderror
            <br />
        
            <label for="password_confirmation" class="form-label">Confirm Password :</label>

            <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required
                autocomplete="new-password" />
            @error('password_confirmation')
            <div class="text-danger">{{$message}}</div>
            @enderror  
            <br />

            <div class="d-grid mu-2">
                <button class="btn btn-primary bg-primary btn-block">
                    Reset Password
                </button>
            </div>
        </form>
    </div>
</body>

</html>