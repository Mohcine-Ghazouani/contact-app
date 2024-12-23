<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>
@include('layouts.navbar')
<body class="bg-body-secondary">
    <div class="container border p-3 mt-5 rounded bg-white" style="width: 30%;">

        <form method="POST" action="{{route('user-password.update')}}" class="mt-6 space-y-6">
            @csrf
            @method('put')
            <div class="mb-4 center">
                <h1>UPDATE PASSWORD</h1>
            </div>

            @if (session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
            @endif

            
            <label for="update_password_current_password" class="form-label"  :value="__('Current Password')" >Current Password</label>
            <input id="update_password_current_password" name="current_password" type="password"  class="form-control" autocomplete="current-password" />
            <error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
            <br>

            
            <label for="update_password_password" class="form-label" :value="__('New Password')" >New Password</label>
            <input id="update_password_password" name="password" type="password"  class="form-control" autocomplete="new-password" />
            <error :messages="$errors->updatePassword->get('password')" class="mt-2" />

            <br>
            
            <label for="update_password_password_confirmation" class="form-label" :value="__('Confirm Password')" >Confirm Password</label>
            <input id="update_password_password_confirmation" name="password_confirmation" type="password"  class="form-control" autocomplete="new-password" />
            <error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
            <br>

            <div class="d-grid mu-2">
                <button class="btn btn-primary bg-primary btn-block">
                    Update Password
                </button>
            </div>
        </form>



        <!-- <form method="POST" action="{{route('user-password.update')}}">
            @csrf
            @method('PUT')
            <div class="mb-4 center">
                <h1>UPDATE PASSWORD</h1>
            </div>

            @if(session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
            @endif

            <label for="current_password" class="form-label">Current Password : </label>
            <input id="current_password" class="form-control" type="password" name="password"  />
            @error('current_password','updatePassword')
            <div class="danger">{{$message}}</div>
            @enderror
            <br />

            <label for="password" class="form-label">New Password:</label>
            <input id="password" class="form-control" type="password" name="password" @error('password','updatePassword') @enderror required />
            @error('password','updatePassword')
            <div class="danger">{{$message}}</div>
            @enderror
            <br />
        
            <label for="password_confirmation" class="form-label">Confirm New Password :</label>

            <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required
                autocomplete="new-password" />
            @error('password_confirmation','updatePassword')
            <div class="danger">{{$message}}</div>
            @enderror  
            <br />

            <div class="d-grid mu-2">
                <button class="btn btn-primary bg-primary btn-block">
                    Update Password
                </button>
            </div>

        </form> -->
    </div>
</body>

</html>