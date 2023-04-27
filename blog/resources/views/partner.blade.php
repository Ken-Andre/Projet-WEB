@extends('layouts.index')

@section('content')


    <!-- Section Titre -->
    <div class="page-heading bg-light">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-7">
                    <h1>Partnership</h1>
                    <p class="mb-4"><a href="{{Route('products')}}">Shop</a> / <strong>Partner</strong></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Section titre -->

    <!-- S'inscrire a la newsletter -->
    <div class="col-lg-6">
        <div class="widget">
            <h3>Join our waitlist and become our partner !!</h3>
            <form action="#" class="subscribe">
                <div class="d-flex">
                    <input type="email" class="form-control" placeholder="Email address">
                    <input type="submit" class="btn btn-black" value="Subscribe">
                </div>
            </form>
        </div>
    </div>
    </div>
    <!-- Fin Inscription Newsletter -->

@endsection
