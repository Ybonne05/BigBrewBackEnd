@extends('layouts.app')

@section('title', 'BigBrew-Login')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="form-container-login">
                <h3 class="text-center font-weight-light my-4 login-heading">Login</h3>
                <form method="POST" action="{{ url('login') }}">
                    @csrf
                    <div>
                        <label for="inputEmail">Email</label>
                        <input class="form-control" id="inputEmail" type="email" name="email" placeholder="name@example.com" value="{{ old('email') }}" required />
                    </div>
                    <div>
                        <label for="inputPassword">Password</label>
                        <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Password" required />
                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0" style="margin-top: 20px;">
                        <a class="small" href="{{ url('password.request') }}" style="color: gray;">Forgot Password?</a>
                    </div>
                    <div>
                        <button type="submit" style="margin-top: 100px;">Login</button>
                    </div>
                </form>

                <!-- Display Validation Errors -->
                @if ($errors->any())
                    <div class="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
    <x-footer />
@endsection
