@extends('layouts.app')
@section('title', 'Layout &mdash; Tiles')
@section('content')
<header class="hero is-light">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('tiles') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Tiles</h1>
            <h2 class="subtitle">A <strong>single tile</strong> element to build 2-dimensional Metro-like, Pinterest-like, or whatever-you-like grids</h2>
        </div>
    </div>
</header>
<section class="section">
  <div class="container is-fluid">
    <div class="content">
      <p>To build intricate 2-dimensional layouts, you only need a <strong>single element</strong>: the <code>tile</code>:</p>
    </div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile"</span><span class="nt">&gt;</span>
  <span class="c">&lt;!-- The magical tile element! --&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre><button class="button is-small bd-copy">Copy</button></figure>

    <hr style="margin-bottom: 0;">

<h3 id="example" class="title is-4 is-spaced bd-anchor-title">
  Example
  <a class="bd-anchor-link" href="#example">
    #
  </a>
</h3>


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
              <p class="title">Middle tile</p>
              <p class="subtitle">With an image</p>
              <figure class="image is-4by3">
                <img src="http://bulma.io/images/placeholders/640x480.png">
              </figure>
            </article>
          </div>
        </div>
        <div class="tile is-parent">
          <article class="tile is-child notification is-danger">
            <p class="title">Wide tile</p>
            <p class="subtitle">Aligned with the right tile</p>
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
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
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at pulvinar felis blandit. Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut. Morbi maximus, leo sit amet vehicula eleifend, nunc dui porta orci, quis semper odio felis ut quam.</p>
              <p>Suspendisse varius ligula in molestie lacinia. Maecenas varius eget ligula a sagittis. Pellentesque interdum, nisl nec interdum maximus, augue diam porttitor lorem, et sollicitudin felis neque sit amet erat. Maecenas imperdiet felis nisi, fringilla luctus felis hendrerit sit amet. Aenean vitae gravida diam, finibus dignissim turpis. Sed eget varius ligula, at volutpat tortor.</p>
              <p>Integer sollicitudin, tortor a mattis commodo, velit urna rhoncus erat, vitae congue lectus dolor consequat libero. Donec leo ligula, maximus et pellentesque sed, gravida a metus. Cras ullamcorper a nunc ac porta. Aliquam ut aliquet lacus, quis faucibus libero. Quisque non semper leo.</p>
            </div>
          </div>
        </article>
      </div>
    </div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-ancestor"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-vertical is-8"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-parent is-vertical"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"tile is-child notification is-primary"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>Vertical...<span class="nt">&lt;/p&gt;</span>
          <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"subtitle"</span><span class="nt">&gt;</span>Top tile<span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;/article&gt;</span>
        <span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"tile is-child notification is-warning"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>...tiles<span class="nt">&lt;/p&gt;</span>
          <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"subtitle"</span><span class="nt">&gt;</span>Bottom tile<span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;/article&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-parent"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"tile is-child notification is-info"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>Middle tile<span class="nt">&lt;/p&gt;</span>
          <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"subtitle"</span><span class="nt">&gt;</span>With an image<span class="nt">&lt;/p&gt;</span>
          <span class="nt">&lt;figure</span> <span class="na">class=</span><span class="s">"image is-4by3"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"http://bulma.io/images/placeholders/640x480.png"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;/figure&gt;</span>
        <span class="nt">&lt;/article&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-parent"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"tile is-child notification is-danger"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>Wide tile<span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"subtitle"</span><span class="nt">&gt;</span>Aligned with the right tile<span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"content"</span><span class="nt">&gt;</span>
          <span class="c">&lt;!-- Content --&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/article&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-parent"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"tile is-child notification is-success"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"content"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>Tall tile<span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"subtitle"</span><span class="nt">&gt;</span>With even more content<span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"content"</span><span class="nt">&gt;</span>
          <span class="c">&lt;!-- Content --&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/article&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre><button class="button is-small bd-copy">Copy</button><button class="button is-small bd-expand">Expand</button></figure>

    <hr style="margin-bottom: 0;">

<h3 id="modifiers" class="title is-4 is-spaced bd-anchor-title">
  Modifiers
  <a class="bd-anchor-link" href="#modifiers">
    #
  </a>
</h3>



    <div class="content">
      <p>The <code>tile</code> element has <strong>16 modifiers</strong>:</p>
      <ul>
        <li>
          <strong>3 contextual</strong> modifiers
          <ul>
            <li><code>is-ancestor</code></li>
            <li><code>is-parent</code></li>
            <li><code>is-child</code></li>
          </ul>
        </li>
        <li>
          <strong>1 directional</strong> modifier
          <ul>
            <li><code>is-vertical</code></li>
          </ul>
        </li>
        <li>
          <strong>12 horizontal size</strong> modifiers
          <ul>
            <li>from <code>is-1</code></li>
            <li>to <code>is-12</code></li>
          </ul>
        </li>
      </ul>
    </div>

    <hr style="margin-bottom: 0;">

<h3 id="how-it-works-nesting" class="title is-4 is-spaced bd-anchor-title">
  How it works: Nesting
  <a class="bd-anchor-link" href="#how-it-works-nesting">
    #
  </a>
</h3>


    <div class="content">
      <p>Everything is a tile! To create a grid of tiles, you only need to <strong>nest</strong> <code>tile</code> elements.</p>
    </div>

    <div class="columns">
      <div class="column is-one-third">
        <p>Start with an <strong>ancestor</strong> tile that will wrap all other tiles:</p>
      </div>
      <div class="column is-two-thirds">
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-ancestor"</span><span class="nt">&gt;</span>
  <span class="c">&lt;!-- All other tile elemnts --&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre><button class="button is-small bd-copy">Copy</button></figure>
      </div>
    </div>

    <div class="columns">
      <div class="column is-one-third">
        <p>Add tile elements that will distribute themselves <strong>horizontally</strong>:</p>
      </div>
      <div class="column is-two-thirds">
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-ancestor"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile"</span><span class="nt">&gt;</span>
    <span class="c">&lt;!-- Add content or other tiles --&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile"</span><span class="nt">&gt;</span>
    <span class="c">&lt;!-- Add content or other tiles --&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre><button class="button is-small bd-copy">Copy</button></figure>
      </div>
    </div>

    <div class="columns">
      <div class="column is-one-third">
        <p>
          You can <strong>resize</strong> any tile according to a <strong>12 column</strong> grid.
          <br>
          For example, <code>is-4</code> will take up 1/3 of the horizontal space:
        </p>
      </div>
      <div class="column is-two-thirds">
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-ancestor"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-4"</span><span class="nt">&gt;</span>
    <span class="c">&lt;!-- 1/3 --&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile"</span><span class="nt">&gt;</span>
    <span class="c">&lt;!-- This tile will take the rest: 2/3 --&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre><button class="button is-small bd-copy">Copy</button></figure>
      </div>
    </div>

    <div class="columns">
      <div class="column is-one-third">
        <p>If you want to stack tiles <strong>vertically</strong>, add <code>is-vertical</code> on the parent tile:</p>
      </div>
      <div class="column is-two-thirds">
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-ancestor"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-4 is-vertical"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile"</span><span class="nt">&gt;</span>
      <span class="c">&lt;!-- Top tile --&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile"</span><span class="nt">&gt;</span>
      <span class="c">&lt;!-- Bottom tile --&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile"</span><span class="nt">&gt;</span>
    <span class="c">&lt;!-- This tile will take up the whole vertical space --&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre><button class="button is-small bd-copy">Copy</button></figure>
      </div>
    </div>

    <div class="columns">
      <div class="column is-one-third">
        <div class="content">
          <p>As soon as you want to add <strong>content</strong> to a tile, just:</p>
          <ul>
            <li>add <em>any</em> class you want, like <code>box</code></li>
            <li>add the <code>is-child</code> modifier on the tile</li>
            <li>add the <code>is-parent</code> modifier on the <em>parent</em> tile</li>
          </ul>
        </div>
      </div>
      <div class="column is-two-thirds">
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-ancestor"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-4 is-vertical is-parent"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-child box"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>One<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-child box"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>Two<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-parent"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-child box"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>Three<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre><button class="button is-small bd-copy">Copy</button></figure>
      </div>
    </div>

    <div class="tile is-ancestor">
      <div class="tile is-4 is-vertical is-parent">
        <div class="tile is-child box">
          <p class="title">One</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
        </div>
        <div class="tile is-child box">
          <p class="title">Two</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
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

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-ancestor"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-4 is-vertical is-parent"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-child box"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>One<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-child box"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>Two<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-parent"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-child box"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>Three<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at pulvinar felis blandit. Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut. Morbi maximus, leo sit amet vehicula eleifend, nunc dui porta orci, quis semper odio felis ut quam.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p&gt;</span>Suspendisse varius ligula in molestie lacinia. Maecenas varius eget ligula a sagittis. Pellentesque interdum, nisl nec interdum maximus, augue diam porttitor lorem, et sollicitudin felis neque sit amet erat. Maecenas imperdiet felis nisi, fringilla luctus felis hendrerit sit amet. Aenean vitae gravida diam, finibus dignissim turpis. Sed eget varius ligula, at volutpat tortor.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p&gt;</span>Integer sollicitudin, tortor a mattis commodo, velit urna rhoncus erat, vitae congue lectus dolor consequat libero. Donec leo ligula, maximus et pellentesque sed, gravida a metus. Cras ullamcorper a nunc ac porta. Aliquam ut aliquet lacus, quis faucibus libero. Quisque non semper leo.<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre><button class="button is-small bd-copy">Copy</button><button class="button is-small bd-expand">Expand</button></figure>

    <hr style="margin-bottom: 0;">

<h3 id="nesting-requirements" class="title is-4 is-spaced bd-anchor-title">
  Nesting requirements
  <a class="bd-anchor-link" href="#nesting-requirements">
    #
  </a>
</h3>



    <article class="message is-danger">
      <div class="message-header">
        3 levels deep at least...
      </div>
      <div class="message-body">
        <div class="content">
          <p>You need at least <strong>3 levels</strong> of hierarchy:</p>
<figure class="highlight"><pre><code class="language-markdown" data-lang="markdown">tile is-ancestor
|
└───tile is-parent
    |
    └───tile is-child</code></pre><button class="button is-small bd-copy">Copy</button></figure>
        </div>
      </div>
    </article>

    <article class="message is-success">
      <div class="message-header">
        ...but more levels if you want!
      </div>
      <div class="message-body">
        <div class="content">
          <p>You can, however, nest tiles deeper than that, and mix it up!</p>
<figure class="highlight"><pre><code class="language-markdown" data-lang="markdown">tile is-ancestor
|
├───tile is-vertical is-8
|   |
|   ├───tile
|   |   |
|   |   ├───tile is-parent is-vertical
|   |   |   ├───tile is-child
|   |   |   └───tile is-child
|   |   |
|   |   └───tile is-parent
|   |       └───tile is-child
|   |
|   └───tile is-parent
|       └───tile is-child
|
└───tile is-parent
    └───tile is-child</code></pre><button class="button is-small bd-copy">Copy</button></figure>
        </div>
      </div>
    </article>

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

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-ancestor"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-vertical is-8"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-parent is-vertical"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"tile is-child box"</span><span class="nt">&gt;</span>
          <span class="c">&lt;!-- Put any content you want --&gt;</span>
        <span class="nt">&lt;/article&gt;</span>
        <span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"tile is-child box"</span><span class="nt">&gt;</span>
          <span class="c">&lt;!-- Put any content you want --&gt;</span>
        <span class="nt">&lt;/article&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-parent"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"tile is-child box"</span><span class="nt">&gt;</span>
          <span class="c">&lt;!-- Put any content you want --&gt;</span>
        <span class="nt">&lt;/article&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-parent"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"tile is-child box"</span><span class="nt">&gt;</span>
        <span class="c">&lt;!-- Put any content you want --&gt;</span>
      <span class="nt">&lt;/article&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-parent"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"tile is-child box"</span><span class="nt">&gt;</span>
      <span class="c">&lt;!-- Put any content you want --&gt;</span>
    <span class="nt">&lt;/article&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre><button class="button is-small bd-copy">Copy</button><button class="button is-small bd-expand">Expand</button></figure>

    <hr style="margin-bottom: 0;">

<h3 id="3-columns" class="title is-4 is-spaced bd-anchor-title">
  3 columns
  <a class="bd-anchor-link" href="#3-columns">
    #
  </a>
</h3>



    <div class="tile is-ancestor">
      <div class="tile is-parent">
        <article class="tile is-child box">
          <p class="title">Hello World</p>
          <p class="subtitle">What is up?</p>
        </article>
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

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-ancestor"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-parent"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"tile is-child box"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>Hello World<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"subtitle"</span><span class="nt">&gt;</span>What is up?<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/article&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-parent"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"tile is-child box"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>Foo<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"subtitle"</span><span class="nt">&gt;</span>Bar<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/article&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-parent"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"tile is-child box"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>Third column<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"subtitle"</span><span class="nt">&gt;</span>With some content<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"content"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/article&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-ancestor"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-vertical is-8"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-parent is-vertical"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"tile is-child box"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>Vertical tiles<span class="nt">&lt;/p&gt;</span>
          <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"subtitle"</span><span class="nt">&gt;</span>Top box<span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;/article&gt;</span>
        <span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"tile is-child box"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>Vertical tiles<span class="nt">&lt;/p&gt;</span>
          <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"subtitle"</span><span class="nt">&gt;</span>Bottom box<span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;/article&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-parent"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"tile is-child box"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>Middle box<span class="nt">&lt;/p&gt;</span>
          <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"subtitle"</span><span class="nt">&gt;</span>With an image<span class="nt">&lt;/p&gt;</span>
          <span class="nt">&lt;figure</span> <span class="na">class=</span><span class="s">"image is-4by3"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"http://bulma.io/images/placeholders/640x480.png"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;/figure&gt;</span>
        <span class="nt">&lt;/article&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-parent"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"tile is-child box"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>Wide column<span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"subtitle"</span><span class="nt">&gt;</span>Aligned with the right column<span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"content"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.<span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/article&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-parent"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"tile is-child box"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"content"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>Tall column<span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"subtitle"</span><span class="nt">&gt;</span>With even more content<span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"content"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at pulvinar felis blandit. Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut. Morbi maximus, leo sit amet vehicula eleifend, nunc dui porta orci, quis semper odio felis ut quam.<span class="nt">&lt;/p&gt;</span>
          <span class="nt">&lt;p&gt;</span>Suspendisse varius ligula in molestie lacinia. Maecenas varius eget ligula a sagittis. Pellentesque interdum, nisl nec interdum maximus, augue diam porttitor lorem, et sollicitudin felis neque sit amet erat. Maecenas imperdiet felis nisi, fringilla luctus felis hendrerit sit amet. Aenean vitae gravida diam, finibus dignissim turpis. Sed eget varius ligula, at volutpat tortor.<span class="nt">&lt;/p&gt;</span>
          <span class="nt">&lt;p&gt;</span>Integer sollicitudin, tortor a mattis commodo, velit urna rhoncus erat, vitae congue lectus dolor consequat libero. Donec leo ligula, maximus et pellentesque sed, gravida a metus. Cras ullamcorper a nunc ac porta. Aliquam ut aliquet lacus, quis faucibus libero. Quisque non semper leo.<span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/article&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-ancestor"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-parent"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"tile is-child box"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>Side column<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"subtitle"</span><span class="nt">&gt;</span>With some content<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"content"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/article&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-parent is-8"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"tile is-child box"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>Main column<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"subtitle"</span><span class="nt">&gt;</span>With some content<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"content"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/article&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre><button class="button is-small bd-copy">Copy</button><button class="button is-small bd-expand">Expand</button></figure>

    <hr style="margin-bottom: 0;">

<h3 id="4-columns" class="title is-4 is-spaced bd-anchor-title">
  4 columns
  <a class="bd-anchor-link" href="#4-columns">
    #
  </a>
</h3>



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

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-ancestor"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-parent"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"tile is-child box"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>One<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"subtitle"</span><span class="nt">&gt;</span>Subtitle<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/article&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-parent"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"tile is-child box"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>Two<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"subtitle"</span><span class="nt">&gt;</span>Subtitle<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/article&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-parent"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"tile is-child box"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>Three<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"subtitle"</span><span class="nt">&gt;</span>Subtitle<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/article&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-parent"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"tile is-child box"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>Four<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"subtitle"</span><span class="nt">&gt;</span>Subtitle<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/article&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-ancestor"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-vertical is-9"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-parent"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"tile is-child box"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>Five<span class="nt">&lt;/p&gt;</span>
          <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"subtitle"</span><span class="nt">&gt;</span>Subtitle<span class="nt">&lt;/p&gt;</span>
          <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"content"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at pulvinar felis blandit. Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut. Morbi maximus, leo sit amet vehicula eleifend, nunc dui porta orci, quis semper odio felis ut quam.<span class="nt">&lt;/p&gt;</span>
          <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/article&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-8 is-vertical"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-parent"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"tile is-child box"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>Six<span class="nt">&lt;/p&gt;</span>
              <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"subtitle"</span><span class="nt">&gt;</span>Subtitle<span class="nt">&lt;/p&gt;</span>
            <span class="nt">&lt;/article&gt;</span>
          <span class="nt">&lt;/div&gt;</span>
          <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-parent"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"tile is-child box"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>Seven<span class="nt">&lt;/p&gt;</span>
              <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"subtitle"</span><span class="nt">&gt;</span>Subtitle<span class="nt">&lt;/p&gt;</span>
            <span class="nt">&lt;/article&gt;</span>
          <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-parent"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"tile is-child box"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>Eight<span class="nt">&lt;/p&gt;</span>
            <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"subtitle"</span><span class="nt">&gt;</span>Subtitle<span class="nt">&lt;/p&gt;</span>
          <span class="nt">&lt;/article&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-8 is-parent"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"tile is-child box"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>Nine<span class="nt">&lt;/p&gt;</span>
          <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"subtitle"</span><span class="nt">&gt;</span>Subtitle<span class="nt">&lt;/p&gt;</span>
          <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"content"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.<span class="nt">&lt;/p&gt;</span>
          <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/article&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-parent"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"tile is-child box"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>Ten<span class="nt">&lt;/p&gt;</span>
          <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"subtitle"</span><span class="nt">&gt;</span>Subtitle<span class="nt">&lt;/p&gt;</span>
          <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"content"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.<span class="nt">&lt;/p&gt;</span>
          <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/article&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-parent"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"tile is-child box"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"content"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>Eleven<span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"subtitle"</span><span class="nt">&gt;</span>Subtitle<span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"content"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at pulvinar felis blandit. Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut. Morbi maximus, leo sit amet vehicula eleifend, nunc dui porta orci, quis semper odio felis ut quam.<span class="nt">&lt;/p&gt;</span>
          <span class="nt">&lt;p&gt;</span>Integer sollicitudin, tortor a mattis commodo, velit urna rhoncus erat, vitae congue lectus dolor consequat libero. Donec leo ligula, maximus et pellentesque sed, gravida a metus. Cras ullamcorper a nunc ac porta. Aliquam ut aliquet lacus, quis faucibus libero. Quisque non semper leo.<span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/article&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-ancestor"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-parent"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"tile is-child box"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>Twelve<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"subtitle"</span><span class="nt">&gt;</span>Subtitle<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"content"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/article&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-parent is-6"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"tile is-child box"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>Thirteen<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"subtitle"</span><span class="nt">&gt;</span>Subtitle<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"content"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/article&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-parent"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"tile is-child box"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>Fourteen<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"subtitle"</span><span class="nt">&gt;</span>Subtitle<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"content"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/article&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre><button class="button is-small bd-copy">Copy</button><button class="button is-small bd-expand">Expand</button></figure>
  </div>
</section>
@endsection
