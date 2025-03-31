@extends('welcome')
@section('title' ,'homepage')
@section('content')
   <!-- Hero Section -->
   <section class="hero" id="home">
        <div class="hero-content">
            <h2>Discover a World of  Art</h2>
            <p>A global platform to buy and sell artworks.</p>
            <a href="gallary.html" class="btn btn-primary">Explore Artworks</a>
        </div>
        <div class="hero-image">
            
            <!-- <img src="queen logo.webp" alt="Digital Art"> -->
        </div>
    </section>

<!-- About Us Section -->
<section class="about-us" id="about-us">
    <h2>About Us</h2>
    <div class="about-content">
        <div class="about-text">
            <h3>Connecting Artists with Buyers Worldwide</h3>
            <p>
                ArtVerse is a global platform designed to bridge the gap between talented artists and art enthusiasts. 
                Whether you're an artist looking to showcase your work or a buyer searching for unique digital art, 
                ArtVerse provides a secure and user-friendly environment to connect, explore, and transact.
            </p>
            <ul>
                <li><i class="fas fa-paint-brush"></i> Showcase your creativity to a global audience.</li>
                <li><i class="fas fa-shopping-cart"></i> Buy and sell digital art with ease.</li>
                <li><i class="fas fa-globe"></i> Reach art lovers from all around the world.</li>
            </ul>
            <a href="signup.html" class="btn btn-primary">Join Our Community</a>
        </div>
        <div class="about-image">
            <img style="width: 300px; height:400px;" src="../img/himg/h1.jpg" alt="About Us">
        </div>
    </div>
</section>

     <!-- Featured Artworks Section -->
     <section class="featured-artworks" id="featured-artworks">
        <h2 style="color: white !important;">Featured Artworks</h2>
        <div class="artworks-grid">
            <div class="artwork">
                <img style="width: 300px; height: 400px;" src="../img/fimg/f14.jpg" alt="Artwork 3">
                <h3>Artwork Title 1</h3>
                <p>Artist: John Doe</p>
                <br>
                <a href="cart.html" class="btn">Buy Now</a>
            </div>
            <div class="artwork">
                <img style="width: 300px; height: 400px;" src="../img/fimg/f11.jpg" alt="Artwork 3">
                <h3>Artwork Title 2</h3>
                <p>Artist: Jane Smith</p>
                <br>
                <a href="cart.html" class="btn">Buy Now</a>
            </div>
            <div class="artwork">
                <img style="width: 300px; height: 400px;" src="../img/fimg/f12.jpg" alt="Artwork 3">
                <h3>Artwork Title 3</h3>
                <p>Artist: Alex Brown</p>
                <br>
                <a href="cart.html" class="btn">Buy Now</a>
            </div>
        </div>
    </section>

  <br>
  
    <!-- Featured Artists Section -->
    <section class="featured-artists" id="featured-artists">
        <h2>Featured Artists</h2>
        <div class="artists-grid">
            <div class="artist">
                <img src="../img/artists/artist1.png" alt="Artist 1">
                <h3>John Doe</h3>
                <p>Digital Illustrator</p>
            </div>
            <div class="artist">
                <img src="../img/artists/artist1.png" alt="Artist 1">
                <h3>Jane Smith</h3>
                <p>Graphic Designer</p>
            </div>
            <div class="artist">
                <img src="../img/artists/artist1.png" alt="Artist 1">
                <h3>Alex Brown</h3>
                <p>Abstract Artist</p>
            </div>
        </div>
    </section>

    <br><br>






<!-- Testimonials Section -->
<section class="testimonials-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title" style="color: white !important;">Client Testimonials</h2>
            <p class="section-subtitle">What our valued clients say about us</p>
            <div class="divider"></div>
        </div>

        <div class="testimonials-container">
            <div class="testimonial-cards" id="testimonialCards">
                <!-- Testimonials will be added here dynamically -->
            </div>

            <div class="testimonial-nav">
                <button class="nav-btn prev-btn" id="prevBtn"><i class="fas fa-chevron-left"></i></button>
                <div class="nav-dots" id="navDots"></div>
                <button class="nav-btn next-btn" id="nextBtn"><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>
    </div>
</section>

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   



@endsection