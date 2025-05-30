@extends('layouts.app')

@section('content')
  <h1>Our Blog</h1>

<p>Welcome to the LearnGo blog – your go-to place for web development tips, coding tutorials, latest trends, and more!</p>

<div class="blog-post">
  <h2>🚀 Getting Started with Laravel</h2>
  <p><em>Published on: May 25, 2025</em></p>
  <p>Laravel is one of the most powerful and developer-friendly PHP frameworks. In this post, we walk you through how to set up your first Laravel project step-by-step.</p>
  <a href="#">Read More</a>
</div>

<hr>

<div class="blog-post">
  <h2>🎨 CSS Flexbox vs Grid: Which One to Use?</h2>
  <p><em>Published on: May 20, 2025</em></p>
  <p>Both Flexbox and Grid offer powerful layout systems in CSS. We compare them side by side and share where each shines the most.</p>
  <a href="#">Read More</a>
</div>

<hr>

<div class="blog-post">
  <h2>🛠️ Tools Every Web Developer Should Know</h2>
  <p><em>Published on: May 15, 2025</em></p>
  <p>From VS Code extensions to productivity boosters, here’s a list of must-have tools that make your web development faster and smoother.</p>
  <a href="#">Read More</a>
</div>
<style>
  .blog-post {
    margin-bottom: 40px;
  }

  .blog-post h2 {
    color: #2a7ae2;
  }

  .blog-post a {
    color: #007bff;
    text-decoration: none;
    font-weight: bold;
  }

  .blog-post a:hover {
    text-decoration: underline;
  }
</style>

@endsection
