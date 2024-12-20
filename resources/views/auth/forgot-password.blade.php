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
@include('nav')
    <div class="container border p-4 mt-5 rounded bg-white" style="width: 30%;">
        
        <div class="mb-4 text-center">
            <h1>RESET PASSWORD</h1>
            <h6>Forgot your password? No problem. Just let us know your email
                address and we will email you a password reset link that will
                allow you to choose a new one.</h6>
        </div>
        @if(session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
        @endif


        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            
                <label for="email" class="form-label">Email :</label>
                <input id="email" class="form-control" type="email" name="email" :value="old('email')" required
                    autofocus />
                @error('email')
                <div class="text-danger">{{$message}}</div>
                @enderror
          
            <br />
            <div class="d-grid mu-2">
                <button class="btn btn-primary bg-primary btn-block">
                    Email Password Reset Link
                </button>
            </div>
        </form>
    </div>
</body>

</html>