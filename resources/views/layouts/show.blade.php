<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-body-secondary">
@include('components.navbar')
<div class="container border p-3 mt-3 rounded bg-white">
    <div class="navbar navbar-expand-lg navbar-light bg-primary rounded">
        <div class="container-fluid">
            <h1 class="navbar-brand text-light"  href="#">Contact info of {{ $users->first_name }}</h1>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                </ul>
            </div>
            <a href="/list" class="btn btn-outline-dark ms-3 text-light">Contacts</a>
        </div>
    </div>
    <table class=" table table-striped">
        <tbody>
            <tr>
                <th>First Name :</th>
                <td>{{$users->first_name}}</td>
            </tr>
            <tr>
                <th>Last Name :</th>
                <td>{{ $users->last_name }}</td>
            </tr>
            <tr>
                <th>Phone :</th>
                <td>{{ $users->phone }}</td>
            </tr>
            <tr>
                <th>Email :</th>
                <td>{{ $users->email }}</td>
            </tr>
            <tr>
                <th>Address :</th>
                <td>{{ $users->adress}}</td>
            </tr>
        </tbody>
    </table>

</div>
</body>

</html>