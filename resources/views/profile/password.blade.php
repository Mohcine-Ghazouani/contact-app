<div class="container-fluid border p-2 mt-2 rounded bg-white" style="width: 75%;">

    <form method="POST" action="{{route('user-password.update')}}" class="mt-6 space-y-6">
        @csrf
        @method('put')
        <div class="text-center">
            <h1>UPDATE PASSWORD</h1>
        </div>

        @if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
        @endif
        <div class="container">
            
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
        </div>
    </form>
</div>
