@extends('layouts.index')

@section('content')


    <!-- Debut Navbar -->

    <div class="search-form" id="search-form">
        <form action="">
            <input type="search" class="form-control" placeholder="Enter keyword to search...">
            <button class="button">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
                    <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                </svg>
            </button>
            <button class="button">
                <div class="close-search">
                    <span class="icofont-close js-close-search"></span>
                </div>
            </button>
        </form>
    </div>

    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>
    <nav class="site-nav mb-5">
        <div class="sticky-nav js-sticky-header">
            <div class="container position-relative">
                <div class="site-navigation text-center dark">
                    <a href="{{route('welcome')}}" class="logo menu-absolute m-0">BDE<span class="text-primary">.</span></a>
                    <ul class="js-clone-nav pl-0 d-none d-lg-inline-block site-menu">
                        <li ><a href="{{route('welcome')}}">Welcome</a></li>
                        <li class="has-children">
                            <a href="#">Activities</a>
                            <ul class="dropdown">
                                <li><a href="{{route('suggestions_box')}}">suggestions box</a></li>
                                <li class="has-children">
                                    <a href="{{route('events')}}">Events</a>
                                    <ul class="dropdown">
                                        <li><a href="{{route('events')}}">events's month</a></li>
                                        <li><a href="#"past events</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="{{route('products')}}">Shop</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                        <li class="active"><a href="{{route('admin')}}">Admin</a></li>
                    </ul>
                    <div class="menu-icons">
                        <a href="#" class="btn-custom-search" id="btn-search">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
                                <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                            </svg>
                        </a>
                        <a href="#" class="user-profile">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            </svg>
                        </a>
                        <a href="{{route('cart')}}" class="cart">
                            <span class="item-in-cart">2</span>
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                            </svg>
                        </a>
                    </div>
                    <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
                        <span></span>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Fin Navbar-->



    <!-- Section Admin -->
    <div class="untree_co-hero bg-light">
        <div class="container">
            <div class="justify-content-center">
                <ul class="list-unstyled">
                    <li><a href="#products">Produits</a></li>
                    <li><a href="#orders">Commandes</a></li>
                    <li><a href="#users">Utilisateurs</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Fin Section Admin -->
    <nav class="admin-nav">
        <div class="container">
            <ul>
                <li><a href="#products">Produits</a></li>
                <li><a href="#orders">Commandes</a></li>
                <li><a href="#users">Utilisateurs</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div id="products">
            <h2>Produits</h2>
            <table>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Prix</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody id="product-table">
                <!-- Les produits seront affichés ici -->
                </tbody>
            </table>
            <h3>Ajouter un produit</h3>
            <form id="product-form">
                <label for="name">Nom :</label>
                <input type="text" id="name" name="name" required>
                <label for="description">Description :</label>
                <input type="text" id="description" name="description" required>
                <label for="price">Prix :</label>
                <input type="text" id="price" name="price" required>
                <input type="submit" value="Ajouter">
            </form>
        </div>
        <hr>
        <div id="orders">
            <h2>Commandes</h2>
            <table>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Client</th>
                    <th>Produits</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody id="order-table">
                <!-- Les commandes seront affichées ici -->
                </tbody>
            </table>
        </div>
        <hr>
        <div id="users">
            <h2>Utilisateurs</h2>
            <table>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Mot de passe</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody id="user-table">
                <!-- Les utilisateurs seront affichés ici -->
                </tbody>
            </table>
            <h3>Ajouter un utilisateur</h3>
            <form id="user-form">
                <label for="user-name">Nom :</label>
                <input type="text" id="user-name" name="name" required>
                <label for="user-email">Email :</label>
                <input type="text" id="user-email" name="email"required>
                <label for="user-password">Mot de passe :</label>
                <input type="password" id="user-password" name="password" required>
                <input type="submit" value="Ajouter">
            </form>
        </div>
    </div>
    <!-- Fin Nabar -->


@endsection
