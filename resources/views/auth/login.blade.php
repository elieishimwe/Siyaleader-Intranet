@extends('app')

@section('content')



        <div class="container">
            <div class="text-center">
                <img src="{{ asset('/assets/img/siyaleader-logos/300x293.png') }}" alt="Siyaleader Logo">
            </div>
            <div class="tab-content">
                <div id="login" class="tab-pane active">
                    <form method="POST" action="{{ url('/auth/login') }}" class="form-signin">
                    	<input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <p class="muted text-center">
                            Enter your username and password
                        </p>
                        <input type="email" class="input-block-level" name="email" value="{{ old('email') }}">
                        <input type="password" class="input-block-level" name="password">
                        <button class="btn btn-metis-3 btn-block btn-large" type="submit">Sign in</button>
                    </form>
                </div>
                <div id="forgot" class="tab-pane">
                    <form action="{{ url('/auth/login') }}" class="form-signin" method="POST">
                        <p class="muted text-center">
                            Enter your valid e-mail
                        </p>
                        <input type="email" placeholder="mail@domain.com" required="required" class="input-block-level">
                        <br>
                        <br>
                        <button class="btn btn-large btn-danger btn-block" type="submit">Recover Password</button>
                    </form>
                </div>
                <div id="signup" class="tab-pane">
                    <form action="index.html" class="form-signin">
                        <input type="text" placeholder="username" class="input-block-level">
                        <input type="email" placeholder="mail@domain.com" class="input-block-level">
                        <input type="password" placeholder="password" class="input-block-level">
                        <button class="btn btn-large btn-success btn-block" type="submit">Register</button>

                    </form>
                </div>
            </div>
            <div class="text-center">
                <ul class="inline">
                    <li><a class="muted" href="{{ url('/auth/login') }}">Login</a></li> |
                    <li><a class="muted" href="#">Forgot Password</a></li> |
                    <li><a  class="muted" href="{{ url('/auth/register') }}">Signup</a></li>
                </ul>
            </div>


        </div> <!-- /container -->
@endsection


