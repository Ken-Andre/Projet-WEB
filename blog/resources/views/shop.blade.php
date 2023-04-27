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
        <!--<nav class="site-nav mb-5"> -->
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
                                        <li><a href="{{route('events')}}">event's mont</a></li>
                                        <li><a href="#">past events</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="active"><a href="{{route('products')}}">Shop</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                        <li ><a href="{{route('admin')}}">Admin</a></li>
                    </ul>
                    <div class="menu-icons">
                        <a href="#" class="btn-custom-search" id="btn-search">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
                                <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                            </svg>
                        </a>
                        <a  class="user-profile" onclick="checkUserLogin()">
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
    <!-- Fin Navbar -->



    <div class="untree_co-hero" style="background-image: url('images/hero_bg_5.jpg');">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-8 text-center text-lg-center">
                    <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100">Shop in our Store</h1>
                    <p class="mb-0" data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-black">Explore now</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="untree_co-hero" style="background-image: url('images/hero_bg_5.jpg');">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-8 text-center text-lg-center">
                    <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100">Shop in our Store</h1>
                    <p class="mb-0" data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-black">Explore now</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="untree_co-section">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-lg-8">
                    <h2 class="mb-3 mb-lg-0">Shop</h2>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex sort align-items-center justify-content-lg-end">
                        <strong class="mr-3">Sort by:</strong>
                        <form method="GET" action="{{ url('shop') }}">
                            <select class="form-select" name="type_filter" required onchange="this.form.submit()">
                                <option value="">All Items</option>
                                <option value="1" @if(request()->get('type_filter') == '1') selected @endif>Newest Items</option>
                                <option value="2" @if(request()->get('type_filter') == '2') selected @endif>Best Selling</option>
                                <option value="3" @if(request()->get('type_filter') == '3') selected @endif>Price: Ascending</option>
                                <option value="4" @if(request()->get('type_filter') == '4') selected @endif>Price: Descending</option>
                            </select>
                        </form>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <ul class="list-unstyled categories">
                        <li><a href="{{route('category_products',['category'=>"accesories"])}}">Accesories<span></span></a></li>
                        <li><a href="{{route('category_products',['category'=>"electronics"])}}">Electronics<span></span></a></li>
                        <li><a href="{{route('category_products',['category'=>"drink"])}}">Drink<span></span></a></li>
                        <li><a href="{{route('category_products',['category'=>"alimentation"])}}">alimentation <span></span></a></li>

                    </ul>
                </div>


                <div class="col-md-9">
                    <div class="row">
                        @foreach($products as $product)
                            <div class="col-6 col-sm-6 col-md-6 mb-4 col-lg-4">

                            <div class="product-item">
                                <a href="{{route('shop_single')}}" class="product-img">
                                    <span class="custom-badge sale">{{$product->category}}</span>
                                    <img src="{{asset($product->image)}}" alt="Image" class="img-fluid" style="height: 200px; width: 250px;">
                                </a>
                                <h3 class="title"><a href="#">{{$product->designation}}</a></h3>
                                <div class="price">
                                    <span>{{$product->price}} fcfa</span>
                                </div>
                                <button class="bg-black-500 text-orange p-2">Ajouter au panier</button>
                            </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-12">
                            <div class="custom-pagination">
                                {{$products->appends(['type_filter' => request()->get('type_filter')]) ->links()}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="untree_co-section">
            <div class="container">
                <div class="row mb-5 align-items-center">
                    <div class="col-md-6">
                        <h2>Popular Items</h2>
                    </div>
                    <div class="col-sm-6 carousel-nav text-sm-right">
                        <a href="#" class="prev js-custom-prev-v2">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path fill-rule="evenodd" d="M8.354 11.354a.5.5 0 0 0 0-.708L5.707 8l2.647-2.646a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708 0z" />
                                <path fill-rule="evenodd" d="M11.5 8a.5.5 0 0 0-.5-.5H6a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5z" />
                            </svg>
                        </a>
                        <a href="#" class="next js-custom-next-v2">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path fill-rule="evenodd" d="M7.646 11.354a.5.5 0 0 1 0-.708L10.293 8 7.646 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z" />
                                <path fill-rule="evenodd" d="M4.5 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="owl-3-slider owl-carousel">
                    <div class="item">
                        <div class="product-item">
                            <a href="{{route('shop_single')}}" class="product-img">
                                <span class="custom-badge new">New</span>
                                <img src="images/cloth_1.jpg" alt="Image" class="img-fluid">
                            </a>
                            <h3 class="title"><a href="#">Kiko Linen Slip Dress, Brown</a></h3>
                            <div class="price">
                                <span>£69.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-item">
                            <a href="{{route('shop_single')}}" class="product-img">
                                <span class="custom-badge sale">Sale</span>
                                <img src="images/cloth_2.jpg" alt="Image" class="img-fluid">
                            </a>
                            <h3 class="title"><a href="#">Sleeve Dress, White</a></h3>
                            <div class="price">
                                <del>£99.00</del> &mdash; <span>£69.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-item">
                            <a href="{{route('shop_single')}}" class="product-img">
                                <img src="images/watch_1.jpg" alt="Image" class="img-fluid">
                            </a>
                            <h3 class="title"><a href="#">Hodina Watch</a></h3>
                            <div class="price">
                                <span>£29.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-item">
                            <a href="{{route('shop_single')}}" class="product-img">
                                <img src="images/shoe_2.jpg" alt="Image" class="img-fluid">
                            </a>
                            <h3 class="title"><a href="#">Triangle Low White-Black</a></h3>
                            <div class="price">
                                <span>£29.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-item">
                            <a href="{{route('shop_single')}}" class="product-img">
                                <span class="custom-badge sale">Sale</span>
                                <img src="images/cloth_3.jpg" alt="Image" class="img-fluid">
                            </a>
                            <h3 class="title"><a href="#">Kid Dress, White</a></h3>
                            <div class="price">
                                <del>£99.00</del> &mdash; <span>£69.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-item">
                            <a href="{{route('shop_single')}}" class="product-img">
                                <span class="custom-badge sale">Sale</span>
                                <img src="images/shoe_1.jpg" alt="Image" class="img-fluid">
                            </a>
                            <h3 class="title"><a href="#">Lady Shoes, Brown</a></h3>
                            <div class="price">
                                <del>£99.00</del> &mdash; <span>£69.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
