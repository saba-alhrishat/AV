









// testimonial-form.js - Testimonial Form Handling

document.addEventListener('DOMContentLoaded', function() {
    // DOM Elements
    const form = document.getElementById('testimonialForm');
    const stars = document.querySelectorAll('.rating-stars i');
    const ratingInput = document.getElementById('rating');
    const avatarInput = document.getElementById('avatar');
    const avatarPreview = document.querySelector('.avatar-preview');
    const successAlert = document.getElementById('successAlert');
    const successAlertAction = document.getElementById('successAlertAction');
    const ratingAlert = document.getElementById('ratingAlert');
    const ratingAlertAction = document.getElementById('ratingAlertAction');

    let avatarUrl = '';

    // Star Rating Interaction
    stars.forEach(star => {
        // Click event
        star.addEventListener('click', function() {
            const rating = parseInt(this.dataset.rating);
            ratingInput.value = rating;
            updateStarRating(rating);
        });

        // Hover events
        star.addEventListener('mouseover', function() {
            const hoverRating = parseInt(this.dataset.rating);
            highlightStars(hoverRating);
        });

        star.addEventListener('mouseout', function() {
            const currentRating = parseInt(ratingInput.value);
            highlightStars(currentRating);
        });
    });

    // Update star rating display
    function updateStarRating(rating) {
        stars.forEach((s, index) => {
            if (index < rating) {
                s.classList.add('active', 'fas');
                s.classList.remove('far');
            } else {
                s.classList.remove('active', 'fas');
                s.classList.add('far');
            }
        });
    }

    // Highlight stars on hover
    function highlightStars(rating) {
        stars.forEach((s, index) => {
            if (index < rating) {
                s.classList.add('hovered');
            } else {
                s.classList.remove('hovered');
            }
        });
    }

    // Avatar Upload Preview
    avatarInput.addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(event) {
                avatarUrl = event.target.result;
                avatarPreview.style.backgroundImage = `url(${avatarUrl})`;
                avatarPreview.classList.add('has-image');
            };
            reader.readAsDataURL(file);
        }
    });

    // Form Submission
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Validate rating
        if (parseInt(ratingInput.value) < 1) {
            showRatingAlert();
            return;
        }

        // Create testimonial object
        const newTestimonial = {
            id: Date.now(),
            name: form.name.value,
            position: form.position.value || 'Customer',
            quote: form.testimonial.value,
            rating: parseInt(ratingInput.value),
            avatar: avatarUrl || 'https://randomuser.me/api/portraits/lego/5.jpg'
        };

        // Add testimonial (using the public API from testimonials.js)
        if (typeof window.addTestimonial === 'function') {
            window.addTestimonial(newTestimonial);
        } else {
            console.error('Testimonials slider not initialized');
        }
        
        // Reset form
        resetForm();
        
        // Show success alert
        showSuccessAlert();
    });

    // Reset form
    function resetForm() {
        form.reset();
        ratingInput.value = 0;
        avatarUrl = '';
        avatarPreview.style.backgroundImage = '';
        avatarPreview.classList.remove('has-image');
        stars.forEach(star => {
            star.classList.remove('active', 'fas', 'hovered');
            star.classList.add('far');
        });
    }

    // Show success alert
    function showSuccessAlert() {
        successAlert.classList.add('show');
    }

    // Hide success alert
    successAlertAction.addEventListener('click', function() {
        successAlert.classList.remove('show');
    });

    // Show rating alert
    function showRatingAlert() {
        ratingAlert.classList.add('show');
    }

    // Hide rating alert
    ratingAlertAction.addEventListener('click', function() {
        ratingAlert.classList.remove('show');
    });
});