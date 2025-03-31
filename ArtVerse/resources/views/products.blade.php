


@extends('welcome')

@section('title','products')
@section('content')


<div class="container">
        <div class="section-header">
            <h2 class="section-title">Art Gallery</h2>
            <p class="section-subtitle">Discover our exquisite collection of fine art paintings</p>
            <div class="divider"></div>
        </div>

        <div class="gallery-container" id="galleryContainer">
            <!-- Artworks will be added here by JavaScript -->
        </div>

        <div class="gallery-nav">
            <button class="nav-btn prev-btn" id="prevBtn"><i class="fas fa-chevron-left"></i></button>
            <div class="nav-dots" id="navDots"></div>
            <button class="nav-btn next-btn" id="nextBtn"><i class="fas fa-chevron-right"></i></button>
        </div>
    </div>

@endsection