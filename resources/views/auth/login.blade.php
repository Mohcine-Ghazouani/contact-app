<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body class="bg-body-secondary">
@include('components.HomeNav')
<div class="container-fluid border p-2 mt-5 rounded bg-white" style="width: 75% ;">
    <form action="{{route('login')}}" method="POST">
        @csrf
        <div class="text-center">
            <h1>LOGIN</h1>
        </div>
        @if(session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
        @endif
        <div class="container">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" />
            @error('email')
            <div class="text-danger">{{$message}}</div>
            @enderror
            <br />

            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password" />
            @error('password')
            <div class="text-danger">{{$message}}</div>
            @enderror
            <br />

            <div class="d-flex justify-content-between">
                <div>
                    <input type="checkbox" name="remember" id="remember" class="form-check-input">
                    <label for="remember" class="form-check-label">Remember me</label>
                </div>
                <a class="underline" href="{{ route('password.request') }}">
                    Forgot your password?
                </a>
            </div>
            <br>
            
            <div class="d-grid mu-2">
                <input class="btn btn-primary" type="submit" value="Submit" />
            </div>
            
        </div>
    </form>
</div>
</body>

</html>