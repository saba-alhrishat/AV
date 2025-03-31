@extends('welcome')

@section('title','artists')
@section('content')


        <!-- Contact Form -->
        <div class="auth-container">
            <div class="auth-form">
                <h2>Contact Us</h2>
                <p>Fill out the form below, and we'll get back to you as soon as possible.</p>
                <form>
                    <div class="input-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" placeholder="Enter your name" required>
                    </div>
                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" placeholder="Enter your email" required>
                    </div>
                    <div class="input-group">
                        <label for="message">Message</label>
                        <textarea id="message" rows="5" placeholder="Enter your message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Map Section -->
    <section class="map-section">
        <h2>Our Location</h2>
        <div class="map-container">
            <!-- خريطة من Google Maps -->
           
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3471.3379173178714!2d35.01494722467548!3d29.53565197518374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x150071875a9fca41%3A0xf5d61d999f967371!2sOrange%20Digital%20Village%20Aqaba!5e0!3m2!1sar!2sjo!4v1740171879185!5m2!1sar!2sjo" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                width="600"
                height="450"
                style="border:0;"
                allowfullscreen=""
                loading="lazy">
            </iframe>
        </div>
    </section>

@endsection