// testimonials.js - Client Testimonials Slider Functionality

document.addEventListener('DOMContentLoaded', function() {
    // DOM Elements
    const testimonialCards = document.getElementById('testimonialCards');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const navDots = document.getElementById('navDots');

    // Testimonials data
    let testimonials = [
        {
            id: 1,
            name: "Sarah Johnson",
            position: "CEO, Tech Solutions",
            quote: "Working with this team has been an absolute pleasure. Their attention to detail is remarkable.",
            rating: 5,
            avatar: "https://randomuser.me/api/portraits/women/44.jpg"
        },
        {
            id: 2,
            name: "Michael Chen",
            position: "Marketing Director",
            quote: "We saw a 40% increase in engagement after implementing their strategies.",
            rating: 4,
            avatar: "https://randomuser.me/api/portraits/men/32.jpg"
        },
        {
            id: 3,
            name: "Emily Rodriguez",
            position: "Founder & Designer",
            quote: "I was skeptical at first, but they proved me wrong. Their team transformed our brand identity completely.",
            rating: 5,
            avatar: "https://randomuser.me/api/portraits/women/63.jpg"
        },
        {
            id: 4,
            name: "David Wilson",
            position: "Product Manager",
            quote: "Exceptional service from start to finish. They understood our vision and delivered beyond expectations.",
            rating: 5,
            avatar: "https://randomuser.me/api/portraits/men/75.jpg"
        }
    ];

    // Slider state
    let currentSlide = 0;
    let slidesPerView = 2;

    // Initialize the slider
    function initTestimonials() {
        updateSlidesPerView();
        renderTestimonials();
        
        // Load testimonials from localStorage if available
        const savedTestimonials = localStorage.getItem('clientTestimonials');
        if (savedTestimonials) {
            try {
                const parsedTestimonials = JSON.parse(savedTestimonials);
                if (Array.isArray(parsedTestimonials) && parsedTestimonials.length > 0) {
                    testimonials = [...parsedTestimonials, ...testimonials];
                    renderTestimonials();
                }
            } catch (e) {
                console.error('Error loading saved testimonials:', e);
            }
        }
    }

    // Update slides per view based on screen size
    function updateSlidesPerView() {
        slidesPerView = window.innerWidth < 768 ? 1 : 2;
    }

    // Render testimonials to the DOM
    function renderTestimonials() {
        testimonialCards.innerHTML = '';
        navDots.innerHTML = '';

        if (testimonials.length === 0) {
            testimonialCards.innerHTML = '<p class="no-testimonials">No testimonials yet.</p>';
            return;
        }

        // Calculate number of slides needed
        const totalSlides = Math.ceil(testimonials.length / slidesPerView);
        currentSlide = Math.min(currentSlide, totalSlides - 1);

        // Create navigation dots
        createNavigationDots(totalSlides);

        // Update navigation buttons state
        updateNavigationButtons(totalSlides);

        // Create cards for current slide
        createTestimonialCards();
    }

    // Create navigation dots
    function createNavigationDots(totalSlides) {
        for (let i = 0; i < totalSlides; i++) {
            const dot = document.createElement('div');
            dot.className = `dot ${i === currentSlide ? 'active' : ''}`;
            dot.dataset.index = i;
            dot.addEventListener('click', () => {
                currentSlide = i;
                renderTestimonials();
            });
            navDots.appendChild(dot);
        }
    }

    // Update navigation buttons state
    function updateNavigationButtons(totalSlides) {
        prevBtn.disabled = currentSlide === 0;
        nextBtn.disabled = currentSlide === totalSlides - 1;
    }

    // Create testimonial cards for current slide
    function createTestimonialCards() {
        const startIndex = currentSlide * slidesPerView;
        const endIndex = startIndex + slidesPerView;
        const currentTestimonials = testimonials.slice(startIndex, endIndex);

        currentTestimonials.forEach(testimonial => {
            const card = document.createElement('div');
            card.className = 'testimonial-card';
            card.innerHTML = `
                <div class="client-avatar-bg" style="background-image: url(${testimonial.avatar})"></div>
                <div class="client-rating">
                    ${'★'.repeat(testimonial.rating)}${'☆'.repeat(5 - testimonial.rating)}
                </div>
                <p class="client-quote">${testimonial.quote}</p>
                <div class="client-info">
                    <h4 class="client-name">${testimonial.name}</h4>
                    <p class="client-position">${testimonial.position}</p>
                </div>
            `;
            testimonialCards.appendChild(card);
        });
    }

    // Event Listeners
    prevBtn.addEventListener('click', function() {
        if (currentSlide > 0) {
            currentSlide--;
            renderTestimonials();
        }
    });

    nextBtn.addEventListener('click', function() {
        const totalSlides = Math.ceil(testimonials.length / slidesPerView);
        if (currentSlide < totalSlides - 1) {
            currentSlide++;
            renderTestimonials();
        }
    });

    window.addEventListener('resize', function() {
        updateSlidesPerView();
        renderTestimonials();
    });

    // Public API to add new testimonials
    window.addTestimonial = function(newTestimonial) {
        testimonials.unshift(newTestimonial);
        
        // Save to localStorage
        try {
            localStorage.setItem('clientTestimonials', JSON.stringify(testimonials));
        } catch (e) {
            console.error('Error saving testimonials:', e);
        }
        
        renderTestimonials();
    };

    // Initialize the testimonials slider
    initTestimonials();
});















