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
@include('components.navbar')
<div class="container-fluid border p-2 mt-5 rounded bg-white" style="width: 75%;">
    <form action="{{route('verification.send')}}" method="POST" >
        @csrf
        <div class="text-center">
            <h1>Welcome {{auth()->user()->name}}</h1>
        </div>
        @if(session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
        @endif
        <div class="container">

            <h6>please verify your email address by clicking on the link we just emailed to you.</h6>
            <h6>If you didn't receive the email, we will gladly send you another.</h6>
            
            <input class="btn btn-primary" type="submit" value="Resend Verification Email" />
            
        </div>
    </form>
</div>
</body>

</html>