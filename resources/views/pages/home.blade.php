@extends('layouts.default')

@section('title')
Kita Donasi | Home
@endsection

@section('content')
<main>
    <section class="hero-section hero-section-full-height">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12 col-12 p-0">
                    <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/slide/volunteer-helping-with-donation-box.jpg"
                                    class="carousel-image img-fluid" alt="...">

                                <div class="carousel-caption d-flex flex-column justify-content-end">
                                    <h1>be a Kind Heart</h1>

                                    <p>Professional charity theme based on Bootstrap 5.2.2</p>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <img src="images/slide/volunteer-selecting-organizing-clothes-donations-charity.jpg"
                                    class="carousel-image img-fluid" alt="...">

                                <div class="carousel-caption d-flex flex-column justify-content-end">
                                    <h1>Non-profit</h1>

                                    <p>You can support us to grow more</p>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <img src="images/slide/medium-shot-people-collecting-donations.jpg"
                                    class="carousel-image img-fluid" alt="...">

                                <div class="carousel-caption d-flex flex-column justify-content-end">
                                    <h1>Humanity</h1>

                                    <p>Please tell your friends about our website</p>
                                </div>
                            </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>

                        <button class="carousel-control-next" type="button" data-bs-target="#hero-slide"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-10 col-12 text-center mx-auto">
                    <h2 class="mb-5">Welcome to Kind Heart Charity</h2>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="featured-block d-flex justify-content-center align-items-center">
                        <a href="donate.html" class="d-block">
                            <img src="images/icons/hands.png" class="featured-block-image img-fluid" alt="">

                            <p class="featured-block-text">Become a <strong>volunteer</strong></p>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                    <div class="featured-block d-flex justify-content-center align-items-center">
                        <a href="donate.html" class="d-block">
                            <img src="images/icons/heart.png" class="featured-block-image img-fluid" alt="">

                            <p class="featured-block-text"><strong>Caring</strong> Earth</p>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                    <div class="featured-block d-flex justify-content-center align-items-center">
                        <a href="donate.html" class="d-block">
                            <img src="images/icons/receive.png" class="featured-block-image img-fluid" alt="">

                            <p class="featured-block-text">Make a <strong>Donation</strong></p>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="featured-block d-flex justify-content-center align-items-center">
                        <a href="donate.html" class="d-block">
                            <img src="images/icons/scholarship.png" class="featured-block-image img-fluid" alt="">

                            <p class="featured-block-text"><strong>Scholarship</strong> Program</p>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="cta-section section-padding section-bg">
        <div class="container">
            <div class="row justify-content-center align-items-center">

                <div class="col-lg-5 col-12 ms-auto">
                    <h2 class="mb-0">Make an impact. <br> Save lives.</h2>
                </div>

                <div class="col-lg-5 col-12">
                    <a href="#" class="me-4">Make a donation</a>

                    <a href="#section_4" class="custom-btn btn smoothscroll">Become a volunteer</a>
                </div>

            </div>
        </div>
    </section>


    <section class="section-padding" id="section_3">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 text-center mb-4">
                    <h2>Our Causes</h2>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="custom-block-wrap">
                        <img src="images/causes/group-african-kids-paying-attention-class.jpg"
                            class="custom-block-image img-fluid" alt="">

                        <div class="custom-block">
                            <div class="custom-block-body">
                                <h5 class="mb-3">Children Education</h5>

                                <p>Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito</p>

                                <div class="progress mt-4">
                                    <div class="progress-bar w-75" role="progressbar" aria-valuenow="75"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <div class="d-flex align-items-center my-2">
                                    <p class="mb-0">
                                        <strong>Raised:</strong>
                                        $18,500
                                    </p>

                                    <p class="ms-auto mb-0">
                                        <strong>Goal:</strong>
                                        $32,000
                                    </p>
                                </div>
                            </div>

                            <a href="donate.html" class="custom-btn btn">Donate now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="custom-block-wrap">
                        <img src="images/causes/poor-child-landfill-looks-forward-with-hope.jpg"
                            class="custom-block-image img-fluid" alt="">

                        <div class="custom-block">
                            <div class="custom-block-body">
                                <h5 class="mb-3">Poverty Development</h5>

                                <p>Sed leo nisl, posuere at molestie ac, suscipit auctor mauris. Etiam quis metus
                                    tempor</p>

                                <div class="progress mt-4">
                                    <div class="progress-bar w-50" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <div class="d-flex align-items-center my-2">
                                    <p class="mb-0">
                                        <strong>Raised:</strong>
                                        $27,600
                                    </p>

                                    <p class="ms-auto mb-0">
                                        <strong>Goal:</strong>
                                        $60,000
                                    </p>
                                </div>
                            </div>

                            <a href="donate.html" class="custom-btn btn">Donate now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="custom-block-wrap">
                        <img src="images/causes/african-woman-pouring-water-recipient-outdoors.jpg"
                            class="custom-block-image img-fluid" alt="">

                        <div class="custom-block">
                            <div class="custom-block-body">
                                <h5 class="mb-3">Supply drinking water</h5>

                                <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                                </p>

                                <div class="progress mt-4">
                                    <div class="progress-bar w-100" role="progressbar" aria-valuenow="100"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <div class="d-flex align-items-center my-2">
                                    <p class="mb-0">
                                        <strong>Raised:</strong>
                                        $84,600
                                    </p>

                                    <p class="ms-auto mb-0">
                                        <strong>Goal:</strong>
                                        $100,000
                                    </p>
                                </div>
                            </div>

                            <a href="donate.html" class="custom-btn btn">Donate now</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main>
@endsection
