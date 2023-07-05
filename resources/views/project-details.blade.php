@extends('layouts.master')

@section('title')
    Portfolio | Home
@endsection

@section('content')
    <main id="main">

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">

                                <div class="swiper-slide">
                                    <img src="assets/img/portfolio-details-1.jpg" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="assets/img/portfolio-details-2.jpg" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="assets/img/portfolio-details-3.jpg" alt="">
                                </div>

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h3>Project information</h3>
                            <ul>
                                <li><strong>Category</strong>: Laravel</li>
                                <li><strong>Client</strong>: Michal Clark</li>
                                <li><strong>Project date</strong>: 01 February, 2020</li>
                                <li><strong>Project URL</strong>: <a href="https://dev3dao.com/" target="_blank">https://dev3dao.com/</a></li>
                            </ul>
                        </div>
                        <div class="portfolio-description">
                            <h2>About Project Details</h2>
                            <p>
                                Dev3DAO is a top tier agency focusing on design and development in Web3 ecosystem . We are deep into bleeding edge of technologies / concepts including Smart contract, DApp, DAO and everything around it.
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Details Section -->

    </main>
@endsection
