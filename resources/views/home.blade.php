<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body class="bg-body-secondary">


@include('components.navbar')
    
    
    <div class="container-fluid border p-2 mt-5 rounded bg-white" style="width: 75%;">
        <div class="text-center p-2">
            <h1>Welcome {{auth()->user()->name}}</h1>
            <p class="lead">explore amazing features and opportunities.</p>
                    
            <a href="/list" class="btn btn-outline-primary">Contacts</a>
            <a href="form" class="btn btn-outline-success">Add Contact</a>
        </div>
    </div>

    
</body>

</html>