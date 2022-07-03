<link rel="stylesheet" href="{{ asset('/css/app.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@extends('layaout')
@section('content')
    <section class="section__login">
        <div class="div__login">
        <form class="container container__login" method="POST" action="">
            <h4>Porfavor ingresa tus datos:</h4>
            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="email" id="form2Example1" class="form-control" id="email"/>
                <label class="form-label" for="form2Example1">Email address</label>
            </div>
            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password" id="form2Example2" class="form-control" id="password" />
                <label class="form-label" for="form2Example2">Password</label>
            </div>
            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                        <label class="form-check-label" for="form2Example31"> Remember me </label>
                    </div>
                </div>
                <div class="col">
                    <!-- Simple link -->
                    <a href="#!">Forgot password?</a>
                </div>
            </div>
            <!-- Submit button -->
            <button type="submit" class="button__login btn btn-primary btn-block mb-4">Sign in</button>
            <!-- Register buttons -->
            <div class="text-center">
                <p>Not a member? <a href="#!">Register</a></p>
            </div>
        </form>
    </div>
    </section>
@endsection
