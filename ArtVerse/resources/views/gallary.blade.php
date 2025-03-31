@extends('welcome')

@section('title','gallary')
@section('content')



    <!-- Gallery Start -->
    <div class="container-fluid gallery py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5" style="max-width: 800px;">

<p class="fs-4 text-uppercase text-primary" style="color: #ff6b6b!important">Our Gallery</p>
                <h1 class="display-4 mb-4">Let's See Our Gallery</h1>
            </div>
            <div class="tab-class text-center">
                <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
                    <li class="nav-item">
                        <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill active" data-bs-toggle="pill" href="gallary.html">
                            <span class="text-dark" style="width: 150px">All Gallery</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex py-2 mx-3 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="acrylic.html">
                            <span class="text-dark" style="width: 150px ">Acrylic colors</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="oilc.html">
                            <span class="text-dark" style="width: 150px;">Oil colours </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="gouache.html">
                            <span class="text-dark" style="width: 150px;">Gouache colours</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="Waterc.html">
                            <span class="text-dark" style="width: 150px;">Watercolor</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="../img/rimg/r1.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary" style="  color: #ff6b6b!important;">Acrylic colors</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="../img/rimg/r1.jpg" data-lightbox="Gallery-1" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="../img/rimg/r2.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary" style="  color: #ff6b6b!important;">Acrylic colors</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="../img/rimg/r2.jpg" data-lightbox="Gallery-2" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="../img/rimg/r6.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary" style="  color: #ff6b6b!important;">Oil colors</h4>


                                            </div>
                                            <div class="search-icon">
                                                <a href="../img/rimg/r6.jpg" data-lightbox="Gallery-3" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="../img/rimg/r4.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary" style="  color: #ff6b6b!important;">Oil colors</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="../img/rimg/r4.jpg" data-lightbox="Gallery-4" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="../img/rimg/r5.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary" style="  color: #ff6b6b!important;">Gouache colours</h4>


                                            </div>
                                            <div class="search-icon">
                                                <a href="../img/rimg/r5.jpg" data-lightbox="Gallery-5" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="../img/rimg/r3.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary" style="  color: #ff6b6b!important;">Gouache colours</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="../img/rimg/r3.jpg" data-lightbox="Gallery-6" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="../img/rimg/w2.jpg" alt="">
                                            <div class="gallery-overlay p-4">

                                                <h4 class="text-secondary" style="  color: #ff6b6b!important;">Watercolor</h4>

                                            </div>
                                            <div class="search-icon">
                                                <a href="../img/rimg/w2.jpg" data-lightbox="Gallery-7" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="../img/rimg/w1.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary" style="  color: #ff6b6b!important;">Watercolor</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="../img/rimg/w1.jpg" data-lightbox="Gallery-8" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
             
            </div>
        </div>
        </div>
    </div>
    <!-- gallery End -->
@endsection













