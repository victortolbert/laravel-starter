@extends('layouts.app')
@section('title', 'Layout &mdash; Level')
@section('content')
<header class="hero is-light">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('level') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Level</h1>
            <h2 class="subtitle">A multi-purpose <strong>horizontal level</strong>, which can contain almost any other element</h2>
        </div>
    </div>
</header>
<section class="section">
  <div class="container is-fluid">
    <div class="content">
      <p>The <strong>structure</strong> of a level is the following:</p>
      <ul>
        <li>
          <code>level</code>: main container
          <ul>
            <li><code>level-left</code> for the left side. This element is <em>required</em>, even if it is empty</li>
            <li>
              <code>level-right</code> for the right side
              <ul>
                <li><code>level-item</code> for each individual element</li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
      <p>In a <code>level-item</code>, you can then insert almost <em>anything</em> you want: a title, a button, a text input, or just simple text. No matter what elements you put inside a Bulma <code>level</code>, they will always be <strong>vertically centered</strong>.</p>
    </div>

    <div class="bd-structure">
      <nav class="level bd-structure-item bd-is-structure-container" title="level">
        <div class="level-left bd-structure-item" title="level-left">
          <div class="level-item">
            <p class="subtitle is-5">
              <strong>123</strong> posts
            </p>
          </div>
          <div class="level-item">
            <div class="field has-addons">
              <p class="control">
                <input class="input" type="text" placeholder="Find a post">
              </p>
              <p class="control">
                <button class="button">
                  Search
                </button>
              </p>
            </div>
          </div>
        </div>
        <div class="level-right bd-structure-item" title="level-right">
          <p class="level-item">
            <strong>All</strong>
          </p>
          <p class="level-item">
            <a>Published</a>
          </p>
          <p class="level-item">
            <a>Drafts</a>
          </p>
          <p class="level-item">
            <a>Deleted</a>
          </p>
          <p class="level-item">
            <a class="button is-success">
              New
            </a>
          </p>
        </div>
      </nav>
    </div>

    <div class="bd-example">

<!-- Main container -->
<nav class="level">
  <!-- Left side -->
  <div class="level-left">
    <div class="level-item">
      <p class="subtitle is-5">
        <strong>123</strong> posts
      </p>
    </div>
    <div class="level-item">
      <div class="field has-addons">
        <p class="control">
          <input class="input" type="text" placeholder="Find a post">
        </p>
        <p class="control">
          <button class="button">
            Search
          </button>
        </p>
      </div>
    </div>
  </div>

  <!-- Right side -->
  <div class="level-right">
    <p class="level-item"><strong>All</strong></p>
    <p class="level-item"><a>Published</a></p>
    <p class="level-item"><a>Drafts</a></p>
    <p class="level-item"><a>Deleted</a></p>
    <p class="level-item"><a class="button is-success">New</a></p>
  </div>
</nav>

    </div>
    <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- Main container --&gt;</span>
<span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"level"</span><span class="nt">&gt;</span>
  <span class="c">&lt;!-- Left side --&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"level-left"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"level-item"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"subtitle is-5"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;strong&gt;</span>123<span class="nt">&lt;/strong&gt;</span> posts
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"level-item"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field has-addons"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Find a post"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"button"</span><span class="nt">&gt;</span>
            Search
          <span class="nt">&lt;/button&gt;</span>
        <span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>

  <span class="c">&lt;!-- Right side --&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"level-right"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"level-item"</span><span class="nt">&gt;&lt;strong&gt;</span>All<span class="nt">&lt;/strong&gt;&lt;/p&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"level-item"</span><span class="nt">&gt;&lt;a&gt;</span>Published<span class="nt">&lt;/a&gt;&lt;/p&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"level-item"</span><span class="nt">&gt;&lt;a&gt;</span>Drafts<span class="nt">&lt;/a&gt;&lt;/p&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"level-item"</span><span class="nt">&gt;&lt;a&gt;</span>Deleted<span class="nt">&lt;/a&gt;&lt;/p&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"level-item"</span><span class="nt">&gt;&lt;a</span> <span class="na">class=</span><span class="s">"button is-success"</span><span class="nt">&gt;</span>New<span class="nt">&lt;/a&gt;&lt;/p&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre><button class="button is-small bd-copy">Copy</button><button class="button is-small bd-expand">Expand</button></figure>

    <hr style="margin-bottom: 0;">

<h3 id="centered-level" class="title is-4 is-spaced bd-anchor-title">
  Centered level
  <a class="bd-anchor-link" href="#centered-level">
    #
  </a>
</h3>


    <div class="content">
      If you want a <strong>centered level</strong>, you can use as many <code>level-item</code> as you want, as long as they are <strong>direct</strong> children of the <code>level</code> container.
    </div>

    <div class="bd-example">

<nav class="level">
  <div class="level-item has-text-centered">
    <div>
      <p class="heading">Tweets</p>
      <p class="title">3,456</p>
    </div>
  </div>
  <div class="level-item has-text-centered">
    <div>
      <p class="heading">Following</p>
      <p class="title">123</p>
    </div>
  </div>
  <div class="level-item has-text-centered">
    <div>
      <p class="heading">Followers</p>
      <p class="title">456K</p>
    </div>
  </div>
  <div class="level-item has-text-centered">
    <div>
      <p class="heading">Likes</p>
      <p class="title">789</p>
    </div>
  </div>
</nav>

    </div>

    <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"level"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"level-item has-text-centered"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"heading"</span><span class="nt">&gt;</span>Tweets<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>3,456<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"level-item has-text-centered"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"heading"</span><span class="nt">&gt;</span>Following<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>123<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"level-item has-text-centered"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"heading"</span><span class="nt">&gt;</span>Followers<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>456K<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"level-item has-text-centered"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"heading"</span><span class="nt">&gt;</span>Likes<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>789<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre><button class="button is-small bd-copy">Copy</button><button class="button is-small bd-expand">Expand</button></figure>

    <div class="bd-example">

<nav class="level">
  <p class="level-item has-text-centered">
    <a class="link is-info">Home</a>
  </p>
  <p class="level-item has-text-centered">
    <a class="link is-info">Menu</a>
  </p>
  <p class="level-item has-text-centered">
    <img src="http://bulma.io/images/bulma-type.png" alt="" style="height: 30px;">
  </p>
  <p class="level-item has-text-centered">
    <a class="link is-info">Reservations</a>
  </p>
  <p class="level-item has-text-centered">
    <a class="link is-info">Contact</a>
  </p>
</nav>

    </div>

    <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"level"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"level-item has-text-centered"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"link is-info"</span><span class="nt">&gt;</span>Home<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"level-item has-text-centered"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"link is-info"</span><span class="nt">&gt;</span>Menu<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"level-item has-text-centered"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"http://bulma.io/images/bulma-type.png"</span> <span class="na">alt=</span><span class="s">""</span> <span class="na">style=</span><span class="s">"height: 30px;"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"level-item has-text-centered"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"link is-info"</span><span class="nt">&gt;</span>Reservations<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"level-item has-text-centered"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"link is-info"</span><span class="nt">&gt;</span>Contact<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre><button class="button is-small bd-copy">Copy</button></figure>

    <hr style="margin-bottom: 0;">

<h3 id="mobile-level" class="title is-4 is-spaced bd-anchor-title">
  Mobile level
  <a class="bd-anchor-link" href="#mobile-level">
    #
  </a>
</h3>


    <div class="content">
      By default, for space concerns, the level is vertical on mobile. If you want the level to be horizontal on mobile as well, add the <code>is-mobile</code> modifier on the <code>level</code> container.
    </div>

    <div class="bd-example">

<nav class="level is-mobile">
  <div class="level-item has-text-centered">
    <div>
      <p class="heading">Tweets</p>
      <p class="title">3,456</p>
    </div>
  </div>
  <div class="level-item has-text-centered">
    <div>
      <p class="heading">Following</p>
      <p class="title">123</p>
    </div>
  </div>
  <div class="level-item has-text-centered">
    <div>
      <p class="heading">Followers</p>
      <p class="title">456K</p>
    </div>
  </div>
  <div class="level-item has-text-centered">
    <div>
      <p class="heading">Likes</p>
      <p class="title">789</p>
    </div>
  </div>
</nav>

    </div>

    <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"level is-mobile"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"level-item has-text-centered"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"heading"</span><span class="nt">&gt;</span>Tweets<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>3,456<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"level-item has-text-centered"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"heading"</span><span class="nt">&gt;</span>Following<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>123<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"level-item has-text-centered"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"heading"</span><span class="nt">&gt;</span>Followers<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>456K<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"level-item has-text-centered"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"heading"</span><span class="nt">&gt;</span>Likes<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>789<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre><button class="button is-small bd-copy">Copy</button><button class="button is-small bd-expand">Expand</button></figure>

  </div>
</section>
@endsection
