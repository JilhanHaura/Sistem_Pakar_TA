@extends('LandingPage.layout.main')
@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>LOGIN</h2>
                </div>
                <div class="col-12">
                    <a href="">Home</a>
                    <a href="">Login</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <center>
        <div class="login-container">
            <h2>Login</h2>
            <form action="/login" method="post">
                @csrf

                <label for="email">Email</label>
                <input type="text" id="email" name="email" required>
                <br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <button type="submit">Login</button>
            </form>
        </div>
    @endsection
