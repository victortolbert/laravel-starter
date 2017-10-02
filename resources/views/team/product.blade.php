@extends('layouts.app')
@section('title', 'Team &mdash; Product')
@section('content')
<header class="hero is-light">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('product-team') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Product Team</h1>
            <h1 class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo cumque nesciunt nobis dolores doloremque assumenda dolorem, laboriosam reprehenderit. Illum, quas nostrum? Rem, iste ratione saepe. Perspiciatis sapiente, molestiae iste vel.</h1>
        </div>
    </div>
</header>
<section class="section">
    <div class="container is-fluid">
        <div class="columns">
            <div class="column">
                @include('partials.articles.product-team')
            </div>
        </div>
    </div>
</section>
@endsection
