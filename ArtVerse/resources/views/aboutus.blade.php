@extends('welcome')
@section('title' ,'aboutus')
@section('content')


     <!-- About Start -->
     <div class="container-fluid about py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5">
                        <div class="video">
                            <img src="../img/boma.png" class="img-fluid rounded" alt="ArtVerse" style="width: 400px;">
                            <div class="position-absolute rounded border-5 border-top border-start border-white" style="bottom: 0; right: 0;"></div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div>
                            <p class="fs-4 text-uppercase text-primary"  style="color: #ff6b6b !important;">About Us</p>
                            <h1 class="display-4 mb-4">Welcome to ArtVerse - Where Creativity Meets Technology</h1>
                            <p class="mb-4">ArtVerse is a revolutionary platform that bridges the gap between artists and technology. We provide a space where digital artists, illustrators, and designers can showcase their work, connect with a creative community, and even monetize their art through blockchain-powered solutions.</p>
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center">
                                        <i class="fab fa-gitkraken fa-3x text-primary"  style="color: #ff6b6b !important;"></i>
                                        <div class="ms-4">
                                            <h5 class="mb-2">Innovative Features</h5>
                                            <p class="mb-0">We integrate cutting-edge technologies such as AI-powered art recommendations and NFT-based sales.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-gift fa-3x text-primary" style="color: #ff6b6b !important;"></i>
                                        <div class="ms-4">
                                            <h5 class="mb-2">Empowering Artists</h5>
                                            <p class="mb-0">ArtVerse is committed to helping artists gain exposure, network with peers, and turn their passion into a career.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="my-4">Whether you're a beginner or a professional artist, ArtVerse offers a space to express your creativity and connect with like-minded individuals.</p>
                            <p class="mb-4">Join us in redefining the future of digital art by leveraging technology to enhance artistic expression and economic opportunities.</p>
                        </div>
                        <a href="gallary.html" class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-5">Explore More</a>
                    </div> 
                </div>
            </div>
        </div>
        <!-- About End -->




@endsection 