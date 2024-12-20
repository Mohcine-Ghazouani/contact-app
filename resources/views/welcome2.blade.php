<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>

<body class="bg-body-secondary">
    @include('nav')

    <div class="container border p-5 mt-5 rounded bg-white" style="width: 50%;">
        <div class="text-center p-5">
            <h1>Welcome to contact app page </h1>
            <p class="lead">Join us today to explore amazing features and opportunities.</p>
                    <br>
            <a href="https://theuselessweb.com/" class="btn btn-outline-secondary">
                Learn more about us
            </a>
        </div>
    </div>
    <footer class="bg-dark text-white text-center py-3 fixed-bottom">
        <div class="container">
            <p class="mb-0">© 2024 Your Company Name. All rights reserved.</p>
            <ul class="list-inline">
                <li class="list-inline-item">
                    <a href="#" class="text-white">Privacy Policy</a>
                </li>
                <li class="list-inline-item">
                    <a href="#" class="text-white">Terms of Service</a>
                </li>
                <li class="list-inline-item">
                    <a href="#" class="text-white">Contact Us</a>
                </li>
            </ul>
        </div>
    </footer>
</body>

</html>