@extends('layouts.index')

@section('content')


    <body class="gradient-background">
    <!-- Conteneur principal -->
    <div class="container-fluid d-flex flex-column h-100 justify-content-center align-items-center">
        <!-- Formulaire de login -->
        <div class="row">
            <div class="col-md-auto col-lg-12">
                <form class="card p-4">
                    <!-- Logo -->
                    <div class="text-center mb-4">
                        <!-- <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp" alt="" width="72" height="57"> -->
                        <h1 class="h3 mb-3 fw-normal">SignIn</h1>
                    </div>
                    <!-- Champ "Name" -->
                    <div class="form-floating mb-3">Name
                        <input type="text" class="form-control" id="name" placeholder="Your Name ...">
                    </div>

                    <!-- Champ "Lastname" -->
                    <div class="form-group mb-3">Lastname
                        <input type="text" class="form-control" id="lastname" placeholder="Your lastname ...">
                    </div>

                    <!-- Champ "E-mail" -->
                    <div class="form-floating mb-3">
                        <label for="signin-email">E-mail</label>
                        <input type="email" class="form-control" id="e-mail" placeholder="example@mail.com">
                    </div>

                    <!-- Champ "Username" -->
                    <div class="form-floating mb-3">Username
                        <input type="text" class="form-control" id="username" placeholder="Username">
                    </div>

                    <!-- Champ "Location" -->
                    <div class="form-floating mb-3">
                        <label for="signin-select">Location</label>
                        <select class="form-control" id="signin-select">
                            <option>Cesi</option>
                            <option>Ucac-Icam</option>
                            <option>Icam</option>
                        </select>
                    </div>

                    <!-- Champ "Password" -->
                    <div class="form-floating mb-3">Password

                        <input type="password" class="form-control" id="password" placeholder="Password">
                    </div>

                    <!-- Champ "Confirm Password" -->
                    <div class="form-floating mb-3">Confirm Password

                        <input type="password" class="form-control" id="confirmpassword" placeholder="Password">
                    </div>

                    <!-- Bouton de login -->
                    <button class="w-75 btn btn-primary" type="submit">Sign in</button>
                    <!-- Lien "Create new" -->
                    <div class="mb-4 text-center">
                        Already have an account ?<a href="{{route('login')}}">Log In</a>
                    </div>

                </form>

            </div>
        </div>
    </div>

    <!-- Chargement des fichiers JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js" integrity="sha512-p7wKJOQOuS7YY1xRiR6jFmO9MzV4m3deW8kNlKw6Kf0v0pZ6W0C7VrjByxJh7bX9JZu1H4y+Df4t7dNtMn1J8Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.min.js" integrity="sha512-lJzNbl6jA+jNiTJY6TcqRZ/2JZVjGq3d3L9Ev9fZKj7eJrbwA2QzVLLAeZu+7VrNbB+uE7VX9+4vz8bI4wY+Yw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </body>

@endsection
