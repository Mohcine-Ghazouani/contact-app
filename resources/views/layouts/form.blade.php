<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</head>

<body class="bg-body-secondary">
@include('components.navbar')
<div class="container border p-3 mt-3 rounded bg-white">
    <div class="navbar navbar-expand-lg navbar-light bg-primary rounded">
        <div class="container-fluid">
            <h1 class="navbar-brand text-light"  href="#">Add new contact</h1>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                </ul>
            </div>
            <a href="/list" class="btn btn-outline-dark ms-3 text-light">Contacts</a>
        </div>

    </div>
    <form action="{{route('valider.store')}}" method='post'>
        @csrf
        <div class="mb-3 container">
            <label for="first_name" class="form-label">First Name :</label>
            <input type="text" class="form-control border-dark" id="first_name" name="first_name">
            @error('first_name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="mb-3">
                <label for="last_name" class="form-label">Last Name :</label>
                <input type="text" class="form-control border-dark" id="last_name" name="last_name">
                @error('last_name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone :</label>
                <input type="text" class="form-control border-dark" id="phone" name="phone">
                @error('phone')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email :</label>
                <input type="email" class="form-control border-dark" id="email" name="email">
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="adress" class="form-label">Adresse :</label>
                <textarea class="form-control border-dark" id="adress" name="adress" rows="3"></textarea>
                @error('adress')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class='text-end'>
                <button type="submit" class="btn btn-primary">Valider</button>
            </div>
        </div>
    </form>
</div>
</body>

</html>