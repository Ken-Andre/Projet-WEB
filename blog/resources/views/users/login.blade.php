@extends('layouts.index')

@section('content')
    <body class="gradient-background">
    <!-- Conteneur principal -->
    <div class="container d-flex flex-column vh-100 justify-content-center align-items-center">
        <!-- Formulaire de login -->
        <div class="row">
            <div class="col-md-2 col-lg-4">
                <form class="card ">
                    <!-- Logo -->
                    <div class="text-center mb-4">
                        <!-- <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp" alt="" width="72" height="57"> -->
                        <h1 class="h3 mb-3 fw-normal">Login</h1>
                    </div>
                    <!-- Champ "Username" -->Username
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="username" placeholder="Username">
                    </div>
                    <!-- Champ "Password" -->Password
                    <div class="form-floating mb-3">

                        <input type="password" class="form-control" id="password" placeholder="Password">
                    </div>
                    <!-- Bouton de login -->
                    <button class="w-75 btn btn-primary" type="submit">Sign in</button>
                    <!-- Lien "Create new" -->
                    <div class="mb-4 text-center">
                        Don't have an account ?<a href="{{route('sign_in')}}">Create new</a>
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
