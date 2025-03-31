@extends('welcome')

@section('title','testimonial')
@section('content')

  
<div class="testimonials-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Share Your Experience</h2>
                <p class="section-subtitle">We value your feedback</p>
                <div class="divider"></div>
            </div>

            <!-- Testimonial Form -->
            <form id="testimonialForm" class="testimonial-form">
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="position">Your Position (Optional)</label>
                    <input type="text" id="position" name="position">
                </div>
                <div class="form-group">
                    <label for="testimonial">Your Testimonial</label>
                    <textarea id="testimonial" name="testimonial" required></textarea>
                </div>
                <div class="form-group">
                    <label for="rating">Your Rating</label>
                    <div class="rating-stars">
                        <i class="far fa-star" data-rating="1"></i>
                        <i class="far fa-star" data-rating="2"></i>
                        <i class="far fa-star" data-rating="3"></i>
                        <i class="far fa-star" data-rating="4"></i>
                        <i class="far fa-star" data-rating="5"></i>
                        <input type="hidden" id="rating" name="rating" value="0" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="avatar">Your Photo (Optional)</label>
                    <div class="avatar-upload">
                        <label for="avatar" class="upload-btn">
                            <i class="fas fa-camera"></i> Choose Image
                        </label>
                        <input type="file" id="avatar" name="avatar" accept="image/*">
                        <div class="avatar-preview"></div>
                    </div>
                </div>
                <button type="submit" class="submit-btn">Submit Testimonial</button>
            </form>

            <div class="section-header">
                <h2 class="section-title">Client Testimonials</h2>
                <p class="section-subtitle">What our valued clients say about us</p>
                <div class="divider"></div>
            </div>

            <div class="testimonials-container">
                <div class="testimonial-cards" id="testimonialCards">
                    <!-- Testimonials will be added here -->
                </div>

                <div class="testimonial-nav">
                    <button class="nav-btn prev-btn" id="prevBtn"><i class="fas fa-chevron-left"></i></button>
                    <div class="nav-dots" id="navDots"></div>
                    <button class="nav-btn next-btn" id="nextBtn"><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </div>

    <!-- Success Alert Box -->
    <div id="successAlert" class="alert-box">
        <div class="alert-content">
            <div class="alert-icon success">
                <i class="fas fa-check-circle"></i>
            </div>
            <h3 class="alert-title">Thank You!</h3>
            <p class="alert-message">Your testimonial has been added successfully.</p>
            <button class="alert-action" id="successAlertAction">OK</button>
        </div>
    </div>

    <!-- Rating Alert Box -->
    <div id="ratingAlert" class="alert-box">
        <div class="alert-content">
            <div class="alert-icon warning">
                <i class="fas fa-exclamation-circle"></i>
            </div>
            <h3 class="alert-title">Rating Required</h3>
            <p class="alert-message">Please select a rating between 1 and 5 stars.</p>
            <button class="alert-action" id="ratingAlertAction">OK</button>
        </div>
    </div>




@endsection