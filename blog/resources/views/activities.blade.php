@extends('layouts.index')

@section('content')



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
                        <li ><a href="{{route('welcome')}}">welcome</a></li>
                        <li class="has-children">
                            <a href="#">Activities</a>
                            <ul class="dropdown">
                                <li><a href="{{route('suggestions_box')}}">suggestions box</a></li>
                                <li class="has-children">
                                    <a href="{{route('events')}}">events</a>
                                    <ul class="dropdown">
                                        <li><a href="{{route('events')}}">event's month</a></li>
                                        <li><a href="#">past events</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="{{route('products')}}">Shop</a></li>
                        <li ><a href="{{route('contact')}}">Contact</a></li>
                        <li ><a href="{{route('admin')}}">Admin</a></li>
                    </ul>
                    <div class="menu-icons">

                        <!-- Sans search btn
                        <a href="#" class="btn-custom-search" id="btn-search">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
                        <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                        </svg>
                        </a> -->

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
    <main>

        <section class="post">
            <div class="post-header">
                <img src="https://picsum.photos/id/1005/50/50" alt="Photo de profil">
                <div class="post-header-info">
                    <h3>Nom d'utilisateur</h3>
                    <p class="post-date">23 avril 2023</p>
                    <p>Description de la publication</p>
                    <button><i class="fa fa-plus"></i> Participer</button>
                </div>
            </div>
            <div class="post-content">
                <img src="https://picsum.photos/id/1011/600/400" alt="Photo du post">

            </div>


            <div class="post-footer">

                <div class="likes">
                    <button><img src="https://via.placeholder.com/20x20" alt="Like">J'aime</button>
                    <button><img src="https://via.placeholder.com/20x20" alt="Signaler">Signaler le post</button>
                </div>
            </div>
        </section>

        <!-- <div class="post-footer">
           <button><i class="fa fa-plus"></i> Participer</button>
           <p class="post-description">Voici la description de ma publication. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ullamcorper est eget sapien fermentum, at ullamcorper turpis dignissim. Sed vitae enim ac elit mollis scelerisque.</p>
         </div>
         -->

        <div class="container">
            <div class="gallery">
                <!-- Afficher les images ajoutées par l'utilisateur -->
            </div>
            <button id="add-photo-btn">+</button>
            <input type="file" id="photo-input" style="display: none;">
        </div>

        <!--<script src="script.js"></script>-->


    </main>

@endsection
