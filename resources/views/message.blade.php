@extends('layouts.base')

@section('content')
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
<h1>Send a Message</h1>
<form method="post" action="/message">
@csrf
<label for="number">Where to send? <input name="number" id="number" type="text" size="20" /></label>
<input type="submit" />
</form>
            </div>
        </div>


@endsection

   