
<!-- في نهاية body أو في head مع defer -->
<script src="../js/testimonial.js"></script>
<script src="../js/testimonial-formhome.js"></script>


        
     <!-- JavaScript Libraries -->
     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
     <script src="lib/easing/easing.min.js"></script>
     <script src="lib/slick/slick.min.js"></script>

     <script src="../js/testimonial.js"></script>


<!-- testimonial -->

     <script>
     document.addEventListener('DOMContentLoaded', function() {
            // DOM Elements
            const form = document.getElementById('testimonialForm');
            const testimonialCards = document.getElementById('testimonialCards');
            const stars = document.querySelectorAll('.rating-stars i');
            const ratingInput = document.getElementById('rating');
            const avatarInput = document.getElementById('avatar');
            const avatarPreview = document.querySelector('.avatar-preview');
            const successAlert = document.getElementById('successAlert');
            const successAlertAction = document.getElementById('successAlertAction');
            const ratingAlert = document.getElementById('ratingAlert');
            const ratingAlertAction = document.getElementById('ratingAlertAction');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            const navDots = document.getElementById('navDots');

            // Testimonials data
            let testimonials = [];
            let currentSlide = 0;
            let slidesPerView = 2;
            let avatarUrl = '';

            // Update slides per view based on screen size
            function updateSlidesPerView() {
                slidesPerView = window.innerWidth < 768 ? 1 : 2;
                renderTestimonials();
            }

            // Star Rating Interaction
            stars.forEach(star => {
                // Click event
                star.addEventListener('click', function() {
                    const rating = parseInt(this.dataset.rating);
                    ratingInput.value = rating;
                    
                    stars.forEach((s, index) => {
                        if (index < rating) {
                            s.classList.add('active');
                            s.classList.remove('far');
                            s.classList.add('fas');
                        } else {
                            s.classList.remove('active');
                            s.classList.remove('fas');
                            s.classList.add('far');
                        }
                    });
                });

                // Hover events
                star.addEventListener('mouseover', function() {
                    const hoverRating = parseInt(this.dataset.rating);
                    stars.forEach((s, index) => {
                        if (index < hoverRating) {
                            s.classList.add('hovered');
                        } else {
                            s.classList.remove('hovered');
                        }
                    });
                });

                star.addEventListener('mouseout', function() {
                    stars.forEach(s => s.classList.remove('hovered'));
                });
            });

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
                const name = form.name.value;
                const position = form.position.value || 'Customer';
                const testimonialText = form.testimonial.value;
                const rating = parseInt(ratingInput.value);
                const avatar = avatarUrl || 'https://randomuser.me/api/portraits/lego/5.jpg';

                const newTestimonial = {
                    id: Date.now(),
                    name,
                    position,
                    quote: testimonialText,
                    rating,
                    avatar
                };

                // Add to beginning of array
                testimonials.unshift(newTestimonial);
                
                // Render testimonials
                renderTestimonials();
                
                // Reset form
                form.reset();
                ratingInput.value = 0;
                avatarUrl = '';
                avatarPreview.style.backgroundImage = '';
                avatarPreview.classList.remove('has-image');
                stars.forEach(star => {
                    star.classList.remove('active', 'fas');
                    star.classList.add('far');
                });
                
                // Show success alert
                showSuccessAlert();
            });

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

            // Render testimonials
            function renderTestimonials() {
                testimonialCards.innerHTML = '';
                navDots.innerHTML = '';

                if (testimonials.length === 0) {
                    testimonialCards.innerHTML = '<p class="no-testimonials">No testimonials yet. Be the first to share your experience!</p>';
                    return;
                }

                // Calculate number of slides needed
                const totalSlides = Math.ceil(testimonials.length / slidesPerView);
                currentSlide = Math.min(currentSlide, totalSlides - 1);

                // Create dots
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

                // Update navigation buttons
                prevBtn.disabled = currentSlide === 0;
                nextBtn.disabled = currentSlide === totalSlides - 1;

                // Create cards for current slide
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

                // Adjust container scroll position
                testimonialCards.scrollLeft = 0;
            }

            // Navigation buttons
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

            // Handle window resize
            window.addEventListener('resize', updateSlidesPerView);

            // Initialize
            updateSlidesPerView();

            // Sample testimonials (for demo)
            testimonials = [
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
            renderTestimonials();
        });

        </script>

<!-- products -->

<script>
        document.addEventListener('DOMContentLoaded', function() {
            // Artworks data
            const artworks = [
                {
                    id: 1,
                    title: "Starry Night",
                    artist: "Vincent van Gogh",
                    price: 2500000,
                    image: "../img/gimg/g5.jpg",
                    isFavorite: false
                },
                {
                    id: 2,
                    title: "Mona Lisa",
                    artist: "Leonardo da Vinci",
                    price: 860000000,
                    image: "../img/gimg/g1.jpg",
                    isFavorite: false
                },
                {
                    id: 3,
                    title: "The Persistence of Memory",
                    artist: "Salvador Dalí",
                    price: 1500000,
                    image: "../img/oimg/o1.jpg",
                    isFavorite: false
                },
                {
                    id: 4,
                    title: "The Scream",
                    artist: "Edvard Munch",
                    price: 120000000,
                    image: "../img/aimg/a1.jpg",
                    isFavorite: false
                },
                {
                    id: 5,
                    title: "Girl with a Pearl Earring",
                    artist: "Johannes Vermeer",
                    price: 30000000,
                    image: "../img/gimg/g6.jpg",
                    isFavorite: false
                },
                {
                    id: 6,
                    title: "The Kiss",
                    artist: "Gustav Klimt",
                    price: 24000000,
                    image: "../img/gimg/g3.jpg",

                    isFavorite: false
                }
            ];

            // DOM elements
            const galleryContainer = document.getElementById('galleryContainer');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            const navDots = document.getElementById('navDots');

            // Gallery state
            let currentPage = 0;
            const itemsPerPage = 4;
            let totalPages = Math.ceil(artworks.length / itemsPerPage);

            // Initialize gallery
            function initGallery() {
                renderArtworks();
                updateNavigation();
            }

            // Display artworks
            function renderArtworks() {
                galleryContainer.innerHTML = '';
                
                const startIndex = currentPage * itemsPerPage;
                const endIndex = startIndex + itemsPerPage;
                const currentArtworks = artworks.slice(startIndex, endIndex);

                currentArtworks.forEach(art => {
                    const artCard = document.createElement('div');
                    artCard.className = 'art-card';
                    
                    artCard.innerHTML = `
                        <img src="${art.image}" alt="${art.title}" class="art-image">
                        <div class="art-info">
                            <h3 class="art-title">${art.title}</h3>
                            <div class="artist-name">By ${art.artist}</div>
                            <div class="art-price">$${art.price.toLocaleString()}</div>
                            <div class="art-actions">
                                <button class="add-to-cart" onclick="addToCart(${art.id})">
                                    <i class="fas fa-shopping-cart"></i> Add to Cart
                                </button>
                                <button class="favorite-btn ${art.isFavorite ? 'active' : ''}" 
                                        onclick="toggleFavorite(${art.id}, this)">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                        </div>
                    `;
                    
                    galleryContainer.appendChild(artCard);
                });
            }

            // Update navigation buttons
            function updateNavigation() {
                navDots.innerHTML = '';
                
                for (let i = 0; i < totalPages; i++) {
                    const dot = document.createElement('div');
                    dot.className = `dot ${i === currentPage ? 'active' : ''}`;
                    dot.dataset.page = i;
                    dot.addEventListener('click', () => {
                        currentPage = i;
                        renderArtworks();
                        updateNavigation();
                    });
                    navDots.appendChild(dot);
                }
                
                prevBtn.disabled = currentPage === 0;
                nextBtn.disabled = currentPage === totalPages - 1;
            }

            // Navigation events
            prevBtn.addEventListener('click', () => {
                if (currentPage > 0) {
                    currentPage--;
                    renderArtworks();
                    updateNavigation();
                }
            });

            nextBtn.addEventListener('click', () => {
                if (currentPage < totalPages - 1) {
                    currentPage++;
                    renderArtworks();
                    updateNavigation();
                }
            });

            // Initialize
            initGallery();
        });

        // Add to cart function
        function addToCart(artId) {
            alert(`Added artwork ${artId} to your cart`);
            // Add your cart functionality here
        }

        // Toggle favorite function
        function toggleFavorite(artId, button) {
            button.classList.toggle('active');
            
            // Save favorites to localStorage
            let favorites = JSON.parse(localStorage.getItem('artFavorites')) || [];
            const index = favorites.indexOf(artId);
            
            if (index === -1) {
                favorites.push(artId);
            } else {
                favorites.splice(index, 1);
            }
            
            localStorage.setItem('artFavorites', JSON.stringify(favorites));
        }
    </script>
