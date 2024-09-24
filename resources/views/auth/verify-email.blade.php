@extends('layouts.app')

@section('title', 'Verify Email')

@section('content')
<div class="container">
    <h3 class="text-center my-4">Verify Your Email Address</h3>
    <p class="text-center">Before proceeding, please check your email for a verification link.</p>
    <form method="POST" action="{{ route('verification.resend') }}">
        @csrf
        <button type="submit" class="btn btn-primary btn-block">Resend Verification Email</button>
    </form>
</div>
@endsection
