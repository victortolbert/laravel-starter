@extends('layouts.app')
@section('content')
<header class="hero is-light" id="home-intro">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('box') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Box</h1>
            <h2 class="subtitle">A white <strong>box</strong> to contain other elements</h2>
        </div>
    </div>
</header>
<section class="section">
  <div class="container is-fluid">
    <div class="content">
      <p>
        The <code>.box</code> element is simply a container with a shadow, a border, a radius, and some padding.
        <br>
        For example, you can include a media object:
      </p>
    </div>


  <div class="
    bd-snippet
    bd-is-vertical

    bd-is-1
    ">
    <div class="bd-snippet-preview">

<div class="box">
  <article class="media">
    <div class="media-left">
      <figure class="image is-64x64">
        <img src="http://bulma.io/images/placeholders/128x128.png" alt="Image">
      </figure>
    </div>
    <div class="media-content">
      <div class="content">
        <p>
          <strong>John Smith</strong> <small>@johnsmith</small> <small>31m</small>
          <br>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
        </p>
      </div>
      <nav class="level is-mobile">
        <div class="level-left">
          <a class="level-item">
            <span class="icon is-small"><i class="fa fa-reply"></i></span>
          </a>
          <a class="level-item">
            <span class="icon is-small"><i class="fa fa-retweet"></i></span>
          </a>
          <a class="level-item">
            <span class="icon is-small"><i class="fa fa-heart"></i></span>
          </a>
        </div>
      </nav>
    </div>
  </article>
</div>

    </div>
    <div class="bd-snippet-code highlight-full">
      <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"box"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"media"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-left"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;figure</span> <span class="na">class=</span><span class="s">"image is-64x64"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"http://bulma.io/images/placeholders/128x128.png"</span> <span class="na">alt=</span><span class="s">"Image"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/figure&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-content"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"content"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;p&gt;</span>
          <span class="nt">&lt;strong&gt;</span>John Smith<span class="nt">&lt;/strong&gt;</span> <span class="nt">&lt;small&gt;</span>@johnsmith<span class="nt">&lt;/small&gt;</span> <span class="nt">&lt;small&gt;</span>31m<span class="nt">&lt;/small&gt;</span>
          <span class="nt">&lt;br&gt;</span>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
        <span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"level is-mobile"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"level-left"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"level-item"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-reply"</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
          <span class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"level-item"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-retweet"</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
          <span class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"level-item"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-heart"</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
          <span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/nav&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/article&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre><button class="button is-small bd-copy">Copy</button></figure>
    </div>
  </div>



    <hr style="margin-bottom: 0;">

<h3 id="variables" class="title is-4 is-spaced bd-anchor-title">
  Variables
  <a class="bd-anchor-link" href="#variables">
    #
  </a>
</h3>


<div class="content">
  <p>
    You can use these variables to <strong>customize</strong> this component. Simply set one or multiple of these variables <em>before</em> importing Bulma. <a href="http://bulma.io/documentation/overview/customize/">Learn how</a>.
  </p>
</div>

<table class="table is-bordered">
  <thead>
    <tr>
      <th>Name</th>
      <th>Default value</th>
    </tr>
  </thead>
  <tfoot>
    <tr>
      <th>Name</th>
      <th>Default value</th>
    </tr>
  </tfoot>
  <tbody>

      <tr>
        <td>
          <code>$box-color</code>
        </td>
        <td>
          <code>$text</code>
        </td>
      </tr>

      <tr>
        <td>
          <code>$box-background-color</code>
        </td>
        <td>
          <code>$white</code>
        </td>
      </tr>

      <tr>
        <td>
          <code>$box-radius</code>
        </td>
        <td>
          <code>$radius-large</code>
        </td>
      </tr>

      <tr>
        <td>
          <code>$box-shadow</code>
        </td>
        <td>
          <code>0 2px 3px rgba($black, 0.1), 0 0 0 1px rgba($black, 0.1)</code>
        </td>
      </tr>

      <tr>
        <td>
          <code>$box-padding</code>
        </td>
        <td>
          <code>1.25rem</code>
        </td>
      </tr>

      <tr>
        <td>
          <code>$box-link-hover-shadow</code>
        </td>
        <td>
          <code>0 2px 3px rgba($black, 0.1), 0 0 0 1px $link</code>
        </td>
      </tr>

      <tr>
        <td>
          <code>$box-link-active-shadow</code>
        </td>
        <td>
          <code>inset 0 1px 2px rgba($black, 0.2), 0 0 0 1px $link</code>
        </td>
      </tr>

  </tbody>
</table>


  </div>
</section>
@endsection
