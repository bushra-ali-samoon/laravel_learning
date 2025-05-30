@extends('layouts.app')

@section('content')
<div class="home-container">
  <div class="hero-section">
    <h1>Welcome to LearnGo</h1>
    <p>Your learning partner in web development and digital skills.</p>
    <a href="http://localhost/laravel12/public/about" class="cta-button">Learn More About Us</a>
  </div>

  <div class="features-section">
    <h2>What We Offer</h2>
    <div class="features">
      <div class="feature-box">
        <h3>HTML & CSS</h3>
        <p>Learn how to structure and style beautiful websites from scratch.</p>
      </div>
      <div class="feature-box">
        <h3>Laravel</h3>
        <p>Master backend development with Laravel and build real-world apps.</p>
      </div>
      <div class="feature-box">
        <h3>WordPress</h3>
        <p>Design professional websites easily with the power of WordPress.</p>
      </div>
    </div>
  </div>
</div>
<style>
  .home-container {
    font-family: 'Segoe UI', sans-serif;
    padding: 40px 20px;
    max-width: 1200px;
    margin: auto;
  }

  .hero-section {
    text-align: center;
    margin-bottom: 60px;
  }

  .hero-section h1 {
    font-size: 48px;
    color: #2c3e50;
    margin-bottom: 10px;
  }

  .hero-section p {
    font-size: 20px;
    color: #666;
  }

  .cta-button {
    display: inline-block;
    margin-top: 20px;
    background-color: #3498db;
    color: #fff;
    padding: 12px 24px;
    border-radius: 5px;
    text-decoration: none;
    font-weight: bold;
    transition: background-color 0.3s ease;
  }

  .cta-button:hover {
    background-color: #2980b9;
  }

  .features-section h2 {
    text-align: center;
    font-size: 32px;
    margin-bottom: 40px;
    color: #2c3e50;
  }

  .features {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    gap: 20px;
  }

  .feature-box {
    flex: 1 1 300px;
    background: #f9f9f9;
    padding: 20px;
  }
@endsection
