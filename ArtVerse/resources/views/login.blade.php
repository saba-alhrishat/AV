

@extends('welcome')

@section('title','login')
@section('content')

<div class="auth-wrapper">
        <!-- Art Section -->
        <div class="art-section">
            <img src="art-background.jpg" alt="Art Background">
            <div class="art-overlay">
                <h2>Discover the World of Digital Art</h2>
                <p>Join ArtVerse and explore unique artworks from talented artists worldwide.</p>
            </div>
        </div>

        <!-- Login Form -->
        <div class="auth-container">
            <div class="auth-form">
                <h2>Welcome Back!</h2>
                <p>Login to your ArtVerse account.</p>
                <form>
                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" placeholder="Enter your email" required>
                    </div>
                    <div class="input-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" placeholder="Enter your password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
                <p class="auth-link">Don't have an account? <a href="signup.html">Sign Up</a></p>
            </div>
        </div>
    </div>

@endsection