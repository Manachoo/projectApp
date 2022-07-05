<link rel="stylesheet" href="{{ asset('/css/app.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@extends('layaout')
@section('content')
    <section class="vh-100" style="background-color: #eee;">
        <div class="container pt-2">
            <div class="row d-flex justify-content-center align-items-center ">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-3">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Iniciar Session</p>
                                    <form method="POST" action="">
                                        @csrf
                                        <div class="form-outline mb-4">
                                            <input type="email" id="form3Example3" class="form-control form-control-lg"
                                                placeholder="Ingrese su email" id="email" name="email" />
                                            <label class="form-label" for="form3Example3">Email</label>
                                        </div>


                                        <div class="form-outline mb-3">
                                            <input type="password" id="form3Example4" class="form-control form-control-lg"
                                                placeholder="ingrese su contraseña" id="password" name="password" />
                                            <label class="form-label" for="form3Example4">Contraseña</label>
                                        </div>

                                        <div class="d-flex justify-content-between align-items-center">

                                            <div class="form-check mb-0">
                                                <input class="form-check-input me-2" type="checkbox" value=""
                                                    id="form2Example3" />
                                                <label class="form-check-label" for="form2Example3">
                                                    Remember me
                                                </label>
                                            </div>
                                            <a href="#!" class="text-body">Forgot password?</a>
                                        </div>

                                        <div class="text-center text-lg-start mt-4 pt-2">
                                            <button type="submit" class="btn btn-primary btn-lg"
                                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                                            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                                                    class="link-danger">Register</a></p>
                                        </div>
                                    </form>

                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                                        class="img-fluid" alt="Sample image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
