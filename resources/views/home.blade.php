@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
                <div>
                    <div>
                        This is Home. You can access it whether or not you are logged in.
                        However, if you are logged in, you're required to complete the onboarding steps first.
                    </div>
                    @auth
                    You are logged in and have completed all onboarding steps!
                    @else
                    You are not logged in.
                    @endauth
                </div>

                <!--
                @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                    <a href="{{ url('/') }}">Home</a>
                    @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                    @endif
                    @endauth
                </div>
                @endif
                -->

            </div>
        </div>
    </div>
</div>
@endsection
