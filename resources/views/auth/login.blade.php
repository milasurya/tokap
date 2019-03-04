@extends('auth.main')
@section('title','Login')
@section('content')
<div class="card card-register mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
          <form method="POS" action="{{route('login') }}">
          {{csrf_field()}}  
            <div class="form-group">
              <div class="form-label-group">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="firstName" class="form-control" placeholder="First name" required="required" autofocus="autofocus">
                    <label for="firstName">First name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="lastName" class="form-control" placeholder="Last name" required="required">
                    <label for="lastName">Last name</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" 
                class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" 
                name="email" 
                placeholder="Email address" required="required">
                <label for="inputEmail">Email address</label>
                @if($errors->has('email'))
                <div class="invalid-feedback">{{$errors->first('email')}}</div>
                @endif
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="inputPassword" 
                    class="form-control {{$errors->has('password') ? 'is-invalid' : ''}}"
                    name="password" 
                    placeholder="Password" required="required">
                    <label for="inputPassword">Password</label>
                    @if($errors->has('password'))
                    <div class="invalid-feedback">{{$errors->first('password')}}</div>
                    @endif
                  </div>
                </div>
                <div class="form-group">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name= "remember" {{ old('remember') ? 'checked' : ''}}>
                      Remember Password
                    </label>
                    <input type="password" id="confirmPassword" class="form-control" placeholder="Confirm password" required="required">
                    <label for="confirmPassword">Confirm password</label>
                  </div>
                </div>
              </div>
            </div>
            <button class="btn btn-primary btn-block" type="submit">Login</button>
          </form>
          <div class="text-center">
            <a class="d-block small" href="{{route('password.request')}}">forgot password?</a>
          </div>
        </div>
</div>
@endsection
