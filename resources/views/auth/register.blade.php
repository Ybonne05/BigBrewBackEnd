@extends('layouts.app')

<<<<<<< HEAD
@section('title', 'BigBrew - Register')
=======
@section('title', 'BigBrew-Register')
>>>>>>> 04fe654d8fb9882ad8e01070e6e12caf6971cc65

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="form-container-register">
                <h3 class="text-center font-weight-light my-4 register-heading">Register</h3>
<<<<<<< HEAD

=======
>>>>>>> 04fe654d8fb9882ad8e01070e6e12caf6971cc65
                <form method="POST" action="{{ url('/register') }}">
                    @csrf
                    <div>
                        <label for="first_name">First Name</label>
                        <input type="text" name="first_name" value="{{ old('first_name') }}" required>
                    </div>
                    <div>
                        <label for="last_name">Last Name</label>
                        <input type="text" name="last_name" value="{{ old('last_name') }}" required>
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input type="email" name="email" value="{{ old('email') }}" required>
                    </div>
                    <div>
                        <label for="password">Password</label>
                        <input type="password" name="password" required>
                    </div>
                    <div>
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" name="password_confirmation" required>
                    </div>
                    <button type="submit" style="margin-top: 20px;">Register</button>
                </form>

                <!-- Show Validation Errors -->
                @if ($errors->any())
<<<<<<< HEAD
                    <div class="alert alert-danger mt-4">
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
=======
                    <div class="alert alert-danger">
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
>>>>>>> 04fe654d8fb9882ad8e01070e6e12caf6971cc65
