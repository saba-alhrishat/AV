

@extends('welcome')

@section('title','signup')

@section('content')

<div class="auth-wrapper">
        <!-- Art Section -->
        <div class="art-section">
            <img src="paint-colors-Cover-22-03ar2432021.jpg" alt="Art Background">
            <div class="art-overlay">
                <h2>Create Your Artistic Journey</h2>
                <p>Join ArtVerse and showcase your creativity to the world.</p>
            </div>
        </div>

        <!-- Sign Up Form -->
        <div class="auth-container">
            <div class="auth-form">
                <h2>Create Your Account</h2>
                <p>Join ArtVerse and start exploring the world of digital art.</p>
                <form>
                    <div class="input-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" placeholder="Enter your full name" required>
                    </div>
                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" placeholder="Enter your email" required>
                    </div>
                    <div class="input-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" placeholder="Enter your password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign Up</button>
                </form>
                <p class="auth-link">Already have an account? <a href="login.html">Login</a></p>
            </div>
        </div>
    </div>

@endsection