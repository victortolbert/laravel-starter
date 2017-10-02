@extends('layouts.app')
@section('title', 'Components &mdash; Tooltip')
@section('content')
<header class="hero is-light">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('tooltip') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Tooltip</h1>
            <h2 class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo cumque nesciunt nobis dolores doloremque assumenda dolorem, laboriosam reprehenderit.</h2>
        </div>
    </div>
</header>
<section class="section">
    <div class="container is-fluid">
        <div class="block">
            <button class="button is-medium is-primary"
                @click="isOpen = !isOpen">
                Toggle
            </button>
        </div>
    </div>

    <button class="button is-primary"
        @click="active = !active">
        Toggle
    </button>
    <hr>

    <b-tooltip label="I'm never closing"
        :active="active"
        always>
        <button class="button">
            Always
        </button>
    </b-tooltip>

    <b-tooltip label="Tooltip right"
        position="is-right"
        :active="active">
        <button class="button is-dark">
            Right
        </button>
    </b-tooltip>

</section>
@endsection
