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
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    </head>
</head>
<body class="bg-body-secondary">
    
    @include('components.navbar')

    <div class="container p-3 mt-3 bg-white border rounded">
        <div class="rounded navbar navbar-expand-lg navbar-light bg-primary">
            <div class="container-fluid">
                <h1 class="navbar-brand text-light"  href="#">All Contacts </h1>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    </ul>
                </div>
                <a href="trushed" class="btn btn-outline-dark ms-3 text-light" >Trush 🗑️</a>
                <a href="form" class="btn btn-outline-dark ms-3 text-light" type="submit">Add new</a>
            </div>
        </div>
      
        <table class="table table-light table-striped">
            <tr>
                <th>#</th>
                <th>Firt Name</th>
                <th>Last Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Address</th>
                <th>Actions</th>
            </tr> 
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->first_name }}</td>
                <td>{{ $user->last_name }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->adress}}</td>
                <td>
                    <a href="/show/{{$user->id}}" class=""> <i class="fas fa-eye"></i></a>
                    <a href="/modifier/{{$user->id}}" class=""><i class="fas fa-edit"></i></a>
                    <a href="/trush/{{$user->id}}" class="text-danger" onclick='return confirm("est ce que vous avaez supprimer!!")'>
                        <i class="fas fa-trash"></i>
                    </a>
                    </td>
            </tr>
            @endforeach
        </table>

        <div class="d-flex justify-content-center">
            {{ $users->onEachSide(1)->links() }}
        </div>
    </div>
</body>

</html>