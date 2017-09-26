@extends('layouts.app')

@section('hero-body')
<div class="hero-body">
    <div class="container is-fluid">
        <h1 class="title">Dashboard</h1>
        <h1 class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo cumque nesciunt nobis dolores doloremque assumenda dolorem, laboriosam reprehenderit.</h1>
    </div>
</div>
@endsection

@section('content')
@include('partials.nested-columns')

<section class="section">
    <div class="container is-fluid">
        <b-tabs>
            <b-tab-item label="Logos">
                <section class="section">
                    {{-- @include('partials.logos') --}}
                </section>
            </b-tab-item>

            <b-tab-item label="Dayparts">
                <section class="section">
                    {{-- @include('partials.dayparts') --}}
                </section>
            </b-tab-item>

            <b-tab-item label="Gallery">
                <section class="section">
                    {{-- @include('partials.gallery') --}}
                </section>
            </b-tab-item>


            <b-tab-item label="One">
                <section class="section">
                    <div class="tile is-ancestor">
                        <div class="tile is-vertical is-8">
                            <div class="tile">
                                <div class="tile is-parent is-vertical">

                                    @include('partials.articles.political')

                                    <article class="tile is-child box">
                                        <!-- -->
                                    </article>
                                </div>

                                <div class="tile is-parent">
                                    @include('partials.articles.featured.component')
                                </div>
                            </div>
                            <div class="tile is-parent">
                                <article class="tile is-child box">
                                    <!-- -->
                                </article>
                            </div>
                        </div>
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <!-- -->
                            </article>
                        </div>
                    </div>
                </section>
            </b-tab-item>

            <b-tab-item label="Two">
                <section class="section">
                    <div class="tile is-ancestor">
                        <div class="tile is-4 is-vertical is-parent">
                            <div class="tile is-child box">
                                {{-- @include('partials.popular') --}}
                            </div>
                            <div class="tile is-child box">

                            </div>
                        </div>
                        <div class="tile is-parent">
                            <div class="tile is-child box">
                                <p class="title">Three</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at pulvinar felis blandit. Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut. Morbi maximus, leo sit amet vehicula eleifend, nunc dui porta orci, quis semper odio felis ut quam.</p>
                                <p>Suspendisse varius ligula in molestie lacinia. Maecenas varius eget ligula a sagittis. Pellentesque interdum, nisl nec interdum maximus, augue diam porttitor lorem, et sollicitudin felis neque sit amet erat. Maecenas imperdiet felis nisi, fringilla luctus felis hendrerit sit amet. Aenean vitae gravida diam, finibus dignissim turpis. Sed eget varius ligula, at volutpat tortor.</p>
                                <p>Integer sollicitudin, tortor a mattis commodo, velit urna rhoncus erat, vitae congue lectus dolor consequat libero. Donec leo ligula, maximus et pellentesque sed, gravida a metus. Cras ullamcorper a nunc ac porta. Aliquam ut aliquet lacus, quis faucibus libero. Quisque non semper leo.</p>
                            </div>
                        </div>
                    </div>
                </section>
            </b-tab-item>

            <b-tab-item label="Three">
                <section class="section">
                    <div class="tile is-ancestor">
                        <div class="tile is-parent">
                            @include('partials.articles.agile')
                        </div>
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <p class="title">Foo</p>
                                <p class="subtitle">Bar</p>
                            </article>
                        </div>
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <p class="title">Third column</p>
                                <p class="subtitle">With some content</p>
                                <div class="content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
                                </div>
                            </article>
                        </div>
                    </div>

                    <div class="tile is-ancestor">
                        <div class="tile is-vertical is-8">
                            <div class="tile">
                                <div class="tile is-parent is-vertical">
                                    <article class="tile is-child box">
                                        <p class="title">Vertical tiles</p>
                                        <p class="subtitle">Top box</p>
                                    </article>
                                    <article class="tile is-child box">
                                        <p class="title">Vertical tiles</p>
                                        <p class="subtitle">Bottom box</p>
                                    </article>
                                </div>
                                <div class="tile is-parent">
                                    <article class="tile is-child box">
                                        <p class="title">Middle box</p>
                                        <p class="subtitle">With an image</p>
                                        <figure class="image is-4by3">
                                            <img src="http://bulma.io/images/placeholders/640x480.png">
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="tile is-parent">
                                <article class="tile is-child box">
                                    <p class="title">Wide column</p>
                                    <p class="subtitle">Aligned with the right column</p>
                                    <div class="content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <div class="content">
                                    <p class="title">Tall column</p>
                                    <p class="subtitle">With even more content</p>
                                    <div class="content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at pulvinar felis blandit. Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut. Morbi maximus, leo sit amet vehicula eleifend, nunc dui porta orci, quis semper odio felis ut quam.</p>
                                        <p>Suspendisse varius ligula in molestie lacinia. Maecenas varius eget ligula a sagittis. Pellentesque interdum, nisl nec interdum maximus, augue diam porttitor lorem, et sollicitudin felis neque sit amet erat. Maecenas imperdiet felis nisi, fringilla luctus felis hendrerit sit amet. Aenean vitae gravida diam, finibus dignissim turpis. Sed eget varius ligula, at volutpat tortor.</p>
                                        <p>Integer sollicitudin, tortor a mattis commodo, velit urna rhoncus erat, vitae congue lectus dolor consequat libero. Donec leo ligula, maximus et pellentesque sed, gravida a metus. Cras ullamcorper a nunc ac porta. Aliquam ut aliquet lacus, quis faucibus libero. Quisque non semper leo.</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>

                    <div class="tile is-ancestor">
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <p class="title">Side column</p>
                                <p class="subtitle">With some content</p>
                                <div class="content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
                                </div>
                            </article>
                        </div>
                        <div class="tile is-parent is-8">
                            <article class="tile is-child box">
                                <p class="title">Main column</p>
                                <p class="subtitle">With some content</p>
                                <div class="content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
                                </div>
                            </article>
                        </div>
                    </div>
                </section>
            </b-tab-item>

            <b-tab-item label="Four">
                <section class="section">
                    <div class="tile is-ancestor">
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <p class="title">One</p>
                                <p class="subtitle">Subtitle</p>
                            </article>
                        </div>
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <p class="title">Two</p>
                                <p class="subtitle">Subtitle</p>
                            </article>
                        </div>
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <p class="title">Three</p>
                                <p class="subtitle">Subtitle</p>
                            </article>
                        </div>
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <p class="title">Four</p>
                                <p class="subtitle">Subtitle</p>
                            </article>
                        </div>
                    </div>

                    <div class="tile is-ancestor">
                        <div class="tile is-vertical is-9">
                            <div class="tile">
                                <div class="tile is-parent">
                                    <article class="tile is-child box">
                                        <p class="title">Five</p>
                                        <p class="subtitle">Subtitle</p>
                                        <div class="content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at pulvinar felis blandit. Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut. Morbi maximus, leo sit amet vehicula eleifend, nunc dui porta orci, quis semper odio felis ut quam.</p>
                                        </div>
                                    </article>
                                </div>
                                <div class="tile is-8 is-vertical">
                                    <div class="tile">
                                        <div class="tile is-parent">
                                            <article class="tile is-child box">
                                                <p class="title">Six</p>
                                                <p class="subtitle">Subtitle</p>
                                            </article>
                                        </div>
                                        <div class="tile is-parent">
                                            <article class="tile is-child box">
                                                <p class="title">Seven</p>
                                                <p class="subtitle">Subtitle</p>
                                            </article>
                                        </div>
                                    </div>
                                    <div class="tile is-parent">
                                        <article class="tile is-child box">
                                            <p class="title">Eight</p>
                                            <p class="subtitle">Subtitle</p>
                                        </article>
                                    </div>
                                </div>
                            </div>
                            <div class="tile">
                                <div class="tile is-8 is-parent">
                                    <article class="tile is-child box">
                                        <p class="title">Nine</p>
                                        <p class="subtitle">Subtitle</p>
                                        <div class="content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
                                        </div>
                                    </article>
                                </div>
                                <div class="tile is-parent">
                                    <article class="tile is-child box">
                                        <p class="title">Ten</p>
                                        <p class="subtitle">Subtitle</p>
                                        <div class="content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <div class="content">
                                    <p class="title">Eleven</p>
                                    <p class="subtitle">Subtitle</p>
                                    <div class="content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at pulvinar felis blandit. Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut. Morbi maximus, leo sit amet vehicula eleifend, nunc dui porta orci, quis semper odio felis ut quam.</p>
                                        <p>Integer sollicitudin, tortor a mattis commodo, velit urna rhoncus erat, vitae congue lectus dolor consequat libero. Donec leo ligula, maximus et pellentesque sed, gravida a metus. Cras ullamcorper a nunc ac porta. Aliquam ut aliquet lacus, quis faucibus libero. Quisque non semper leo.</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>

                    <div class="tile is-ancestor">
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <p class="title">Twelve</p>
                                <p class="subtitle">Subtitle</p>
                                <div class="content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut.</p>
                                </div>
                            </article>
                        </div>
                        <div class="tile is-parent is-6">
                            <article class="tile is-child box">
                                <p class="title">Thirteen</p>
                                <p class="subtitle">Subtitle</p>
                                <div class="content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
                                </div>
                            </article>
                        </div>
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <p class="title">Fourteen</p>
                                <p class="subtitle">Subtitle</p>
                                <div class="content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut.</p>
                                </div>
                            </article>
                        </div>
                    </div>
                </section>
            </b-tab-item>

            <b-tab-item label="Five">
                <section class="section">
                    <div class="tile is-ancestor">
                        <div class="tile is-vertical is-8">
                            <div class="tile">
                                <div class="tile is-parent is-vertical">
                                    <article class="tile is-child notification is-primary">
                                        <p class="title">Vertical...</p>
                                        <p class="subtitle">Top tile</p>
                                    </article>
                                    <article class="tile is-child notification is-warning">
                                        <p class="title">...tiles</p>
                                        <p class="subtitle">Bottom tile</p>
                                    </article>
                                </div>
                                <div class="tile is-parent">
                                    <article class="tile is-child notification is-info">
                                        <h1 class="title">The Best Interface is No Interface</h1>
                                        <p class="subtitle">by Golden Krishna</p>

                                        <figure class="image is-4by3">
                                            <img src="http://bulma.io/images/placeholders/640x480.png">
                                        </figure>

                                        <div class="content">
                                            <blockquote>
                                                <p>When you specifically hire someone to generate UI, you won't get new, innovative solutions. You'll get more UI, not better UX</p>
                                            </blockquote>
                                            <h3>This is UI</h3>
                                            <p><a href="{{route('tables')}}">Data Tables</a>, Navigation, subnavigation, menus, dropdowns, buttons, links, windows, rounded corners, shadowing, error messages, alerts, updates, checkboxes, password fields, search fields, text inputs, radio buttons, textareas, hover states, selection states, pressed states, tolltips, banner ads, embedded videos, swipe animations, scrolling, clicking, iconography, colors, lists, slideshows, alt text, badges, notifications, gradients, pop-ups, carousels, OK/Cancel, etc., etc. etc.</p>
                                            <h3>This is UX</h3>
                                            <p>People, happiness, solving problems, understanding needs, love, efficiency, entertainment, pleasure, delight, smiles, soul, warmth, personality, joy, satisfaction, gratification, elation, exhilaration, bliss, euphoria, convience, enchantment, magic, productivity, effectiveness, etc. etc. etc.</p>
                                            <hr>

                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="tile is-parent">
                                <article class="tile is-child notification is-danger">
                                    <p class="title">Wide tile</p>
                                    <p class="subtitle">Aligned with the right tile</p>
                                    <div class="content">
                                        <!-- Content -->
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="tile is-parent">
                            <article class="tile is-child notification is-success">
                                <div class="content">
                                    <p class="title">Tall tile</p>
                                    <p class="subtitle">With even more content</p>
                                    <div class="content">
                                        <!-- Content -->

                                        <span class="tag">not started</span>
                                        <span class="tag is-success">in progress</span>
                                        <span class="tag is-info">complete</span>

                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </section>
            </b-tab-item>
        </b-tabs>
    </div>
</section>
@endsection
