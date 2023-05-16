@extends('layouts.default')
@section('content')

<!-- ================> Banner section start here <================== -->
<section id="home" class="banner" style="background-image: url({{ asset('css/bootstrap.min.css') }}assets/images/banner/banner-bg.jpg);">
    <div class="container">
        <div class="banner__wrapper">
            <div class="row g-5 align-items-center justify-content-center">
                <div class="col">
                    <div class="banner__content text-center" data-aos="fade-up" data-aos-duration="2000">
                        <h1 class="text--3d text-uppercase"> <span class="color--gradient-y">JEET</span> <br>
                            INU</h1>
                        <p>JEET ALWAYS WIN</p>

                        <ul class="social justify-content-center mb-5">
                            <li class="social__item">
                                <a href="#" class="social__link"><img src="{{ asset('images/social/discord.png') }}"
                                        alt="Discord"></a>
                            </li>
                            <li class="social__item">
                                <a href="https://twitter.com/JeetInuOfficial" class="social__link"><img src="{{ asset('images/social/twitter.png') }}"
                                        alt="Twitter"></a>
                            </li>
                            <li class="social__item">
                                <a href="#" class="social__link"><img src="{{ asset('images/social/instagram.png') }}"
                                        alt="Instagram"></a>
                            </li>
                            <li class="social__item">
                                <a href="#" class="social__link"><img src="{{ asset('images/social/twitch.png') }}"
                                        alt="Twitch"></a>
                            </li>
                            <li class="social__item">
                                <a href="#" class="social__link"><img src="{{ asset('images/social/youtube.png') }}"
                                        alt="Youtube"></a>
                            </li>
                        </ul>
                        <a href="#" class="default-btn">JOIN OUR TELEGRAM GROUP</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <ul class="banner__apes">
        <li class="banner__apes-item aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500">
            <img src="{{ asset('images/banner/jeet/01.png') }}" alt="Jeet Image">
        </li>
        <li class="banner__apes-item aos-init aos-animate" data-aos="fade-right" data-aos-duration="1000">
            <img src="{{ asset('images/banner/jeet/02.png') }}" alt="Jeet Image">
        </li>
        <li class="banner__apes-item aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500">
            <img src="{{ asset('images/banner/jeet/03.png') }}" alt="Jeet Image">
        </li>
        <li class="banner__apes-item aos-init aos-animate" data-aos="fade-left" data-aos-duration="1000">
            <img src="{{ asset('images/banner/jeet/04.png') }}" alt="Jeet Image">
        </li>
    </ul>
</section>
<!-- ================> Banner section end here <================== -->


<!-- ================> Mint section start here <================== -->
<section id="tokenomics" class="mint padding-top padding-bottom bg--cover"
    style="background-image: url({{ asset('images/mint/bg.jpg') }});">
    <div class="container">
        <div class="mint__wrapper">
            <div class="row g-5 align-items-end">
                <div class="col-lg-6">
                    <div class="mint__content aos-animate aos-init" data-aos="fade-right" data-aos-duration="1000">
                        <div class="row gy-5 gx-4 align-items-center">
                            <div class="col-6">
                                <div class="mint__item">
                                    <div class="mint__inner">
                                        <h6 class="mint__sub-title">Total Supply</h6>
                                        <h2 class="mint__numbers">100 Million</h2>
                                        <h4 class="mint__name text-uppercase">$JEET</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mint__item">
                                    <div class="mint__inner">
                                        <h6 class="mint__sub-title">Tax</h6>
                                        <h2 class="mint__numbers">0% | 0%</h2>
                                        <h4 class="mint__name text-uppercase">Buy/Sell</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mint__item">
                                    <div class="mint__inner">
                                        <h6 class="mint__sub-title">Max</h6>
                                        <h2 class="mint__numbers">2%</h2>
                                        <h4 class="mint__name text-uppercase">Bag / Tx</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-start">
                                    <a href="https://pancakeswap.finance/swap?outputCurrency=0x16f3DE540144610ffb1949589E4B6B8C20D6383D" class="default-btn">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mint__thumb aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
                        <img src="{{ asset('images/jeet.png') }}" alt="Logo Image" style="max-width:50%">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="monkey-icon">
        <img src="{{ asset('images/mint/jeet.png') }}" alt="Jeet Icon">
    </div>
</section>
<!-- ================> Mint section end here <================== -->


<!-- ================>Roadmap section start here <================== -->
<section class="roadmap padding-top padding-bottom" id="roadmap">
    <div class="container">
        <div class="section-header aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
            <div class="section-header__content">
                <h2> <span class="color--gradient-y"> JEET INU</span> Roadmap</h2>
                <p>This is our roadmap so far, but this is only the beginning
                    we want to build our project around our community, so if
                    you have more ideas we are all ears</p>
            </div>
        </div>
        <div class="roadmap__wrapper">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="roadmap__item aos-animate aos-init" data-aos="fade-left" data-aos-duration="1000">
                        <div class="roadmap__inner">
                            <div class="roadmap__thumb">
                                <img src="{{ asset('images/roadmap/01.png') }}" alt="Roadmap Icon">
                            </div>
                            <div class="roadmap__content">
                                <h4>Launch Initiated</h4>
                                <p>Fair launch on Pancakeswap</p>
                                <p>Website V1 Released</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="roadmap__item aos-animate aos-init" data-aos="fade-left" data-aos-duration="1000"
                        data-aos-delay="400">
                        <div class="roadmap__inner">
                            <div class="roadmap__thumb">
                                <img src="{{ asset('images/roadmap/02.png') }}" alt="Roadmap Icon">
                            </div>
                            <div class="roadmap__content">
                                <h4>Post Launch Marketing</h4>
                                <p>Initial Telegram Calls/Channels</p>
                                <p>Twitter Promotion</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="roadmap__item aos-animate aos-init" data-aos="fade-left" data-aos-duration="1000"
                        data-aos-delay="800">
                        <div class="roadmap__inner">
                            <div class="roadmap__thumb">
                                <img src="{{ asset('images/roadmap/03.png') }}" alt="Roadmap Icon">
                            </div>
                            <div class="roadmap__content">
                                <h4>Trending</h4>
                                <p>BSC Trending</p>
                                <p>Dextools Trending</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="roadmap__item aos-animate aos-init" data-aos="fade-up" data-aos-duration="1000">
                        <div class="roadmap__inner">
                            <div class="roadmap__thumb">
                                <img src="{{ asset('images/roadmap/04.png') }}" alt="Roadmap Icon">
                            </div>
                            <div class="roadmap__content">
                                <h4>Audit</h4>
                                <p>Smart Contract Audit</p>
                                <p>Team KYC</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="roadmap__item aos-animate aos-init" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="400">
                        <div class="roadmap__inner">
                            <div class="roadmap__thumb">
                                <img src="{{ asset('images/roadmap/05.png') }}" alt="Roadmap Icon">
                            </div>
                            <div class="roadmap__content">
                                <h4>Products</h4>
                                <p>JEET Swap & Wallet</p>
                                <p>Upcoming JEET Tools</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="roadmap__item aos-animate aos-init" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="800">
                        <div class="roadmap__inner">
                            <div class="roadmap__thumb">
                                <img src="{{ asset('images/roadmap/06.png') }}" alt="Roadmap Icon">
                            </div>
                            <div class="roadmap__content">
                                <h4>Listing</h4>
                                <p>CG & CMC Listing</p>
                                <p>CEX Listing</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================>Roadmap section end here <================== -->

@stop
