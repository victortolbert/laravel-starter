@extends('layouts.app')
@section('title', 'Form &mdash; File')
@section('content')
<header class="hero is-light">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('file') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">File</h1>
            <h2 class="subtitle">A custom file upload input, without JavaScript</h2>
        </div>
    </div>
</header>
<section class="section">

</section>
@endsection
