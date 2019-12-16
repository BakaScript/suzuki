@extends('layouts.app')

@section('carousel')
    <!-- Slider -->
    <div class="main-carousel">
            <div class="carousel-cell">
                <img src="images/banners/1.webp" data-flickity-lazyload="images/banners/1.webp" class="carousel-img" alt="">
            </div>
            <div class="carousel-cell">
                <img src="images/banners/2.webp" data-flickity-lazyload="images/banners/2.webp" class="carousel-img" alt="">
            </div>
            <div class="carousel-cell">
                <img src="images/banners/3.webp" data-flickity-lazyload="images/banners/3.webp" class="carousel-img" alt="">
            </div>
            
        </div>
        <!-- Slider End -->
        
@endsection

@section('content')
    <div class="container">
        <div class="main__border-left pl-md-3" data-aos="fade-right">
            <h4 class="main__tagline">Berkendara bukan hanya sebuah perjalanan, namun cerita dan kebanggaan.</h4>
            <p class="main__subtagline">Temukan berbagai mobil pilihan Suzuki yang dirancang khusus dengan presisi melalui teknologi modern dan desain stylish sesuai gaya Anda.</p>
        </div>
        
        <div class="main__header text-center mt-2 mt-md-5" data-aos="fade-up">
            <small>Temukan</small>
            <h3>Mobil Suzuki</h3>
            <p>Yang Tepat Untuk Anda</p>
        </div>

    </div>

    <div class="container-fluid">
        <div class="main-content">
            <h4 class="text-primary-suzuki text-center" data-aos="fade-up">PASSENGER CAR</h4>

            <div class="row px-0 px-md-5 justify-content-center">
                <div class="col-12 col-md-6 col-lg-3 mt-2 mt-md-4 text-center" data-aos="fade-up">
                    <div class="card">
                        <a href="" class="card-link">
                            <div class="card-body">
                                <h5>All New Ertiga</h5>
                                <img src="{{ asset('images/cars/all-new-ertiga-thumb.jpg')}}" class="car_thumb" alt="all new ertiga">
                                <p>DP</p>
                                <h2 class="text_price"><span class="rp">Rp.</span> 13.000.000,-</h2>
                                <small class="text-muted mt-3">Jelajahi > </small>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mt-2 mt-md-4 text-center" data-aos="fade-up">
                    <div class="card">
                        <a href="" class="card-link">
                            <div class="card-body">
                                <h5>All New Ertiga Suzuki Sport</h5>
                                <img src="{{ asset('images/cars/ertiga-sport-thumb.jpg')}}" class="car_thumb" alt="all new ertiga">
                                <p>DP</p>
                                <h2 class="text_price"><span class="rp">Rp.</span> 17.000.000,-</h2>
                                <small class="text-muted mt-3">Jelajahi > </small>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mt-2 mt-md-4 text-center" data-aos="fade-up">
                    <div class="card">
                        <a href="" class="card-link">
                            <div class="card-body">
                                <h5>Karimun Wagon R</h5>
                                <img src="{{ asset('images/cars/wagon-r-thumb.jpg')}}" class="car_thumb" alt="all new ertiga">
                                <p>DP</p>
                                <h2 class="text_price"><span class="rp">Rp.</span> 7.000.000,-</h2>
                                <small class="text-muted mt-3">Jelajahi > </small>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mt-2 mt-md-4 text-center" data-aos="fade-up">
                    <div class="card">
                        <a href="" class="card-link">
                            <div class="card-body">
                                <h5>Karimun Wagon R GS</h5>
                                <img src="{{ asset('images/cars/b6244-mun-rgs-thumb.jpg')}}" class="car_thumb" alt="all new ertiga">
                                <p>DP</p>
                                <h2 class="text_price"><span class="rp">Rp.</span> 7.000.000,-</h2>
                                <small class="text-muted mt-3">Jelajahi > </small>
                            </div>
                        </a>
                    </div>
                </div>
                {{-- <div class="col-12 col-md-6 col-lg-3 mt-2 mt-md-4 text-center" data-aos="fade-up">
                    <div class="card">
                        <a href="" class="card-link">
                            <div class="card-body">
                                <h5>Apv New Luxury</h5>
                                <img src="{{ asset('images/cars/APV-New-Luxury-thumb.jpg')}}" class="car_thumb" alt="all new ertiga">
                                <p>DP</p>
                                <h2 class="text_price"><span class="rp">Rp.</span> 234.000.000,-</h2>
                                <small class="text-muted mt-3">Jelajahi > </small>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mt-2 mt-md-4 text-center" data-aos="fade-up">
                    <div class="card">
                        <a href="" class="card-link">
                            <div class="card-body">
                                <h5>Apv Arena</h5>
                                <img src="{{ asset('images/cars/APV-ARENA-thumb.jpg')}}" class="car_thumb" alt="all new ertiga">
                                <p>DP</p>
                                <h2 class="text_price"><span class="rp">Rp.</span> 185.500.000,-</h2>
                                <small class="text-muted mt-3">Jelajahi > </small>
                            </div>
                        </a>
                    </div>
                </div> --}}
                <div class="col-12 col-md-6 col-lg-3 mt-2 mt-md-4 text-center" data-aos="fade-up">
                    <div class="card">
                        <a href="" class="card-link">
                            <div class="card-body">
                                <h5>Ignis</h5>
                                <img src="{{ asset('images/cars/ignis-thumb.jpg')}}" class="car_thumb" alt="all new ertiga">
                                <p>DP</p>
                                <h2 class="text_price"><span class="rp">Rp.</span> 12.000.000,-</h2>
                                <small class="text-muted mt-3">Jelajahi > </small>
                            </div>
                        </a>
                    </div>
                </div>
                {{-- <div class="col-12 col-md-6 col-lg-3 mt-2 mt-md-4 text-center" data-aos="fade-up">
                    <div class="card">
                        <a href="" class="card-link">
                            <div class="card-body">
                                <h5>Ignis Sport Edition</h5>
                                <img src="{{ asset('images/cars/ignis-sport-plain-thumb.jpg')}}" class="car_thumb" alt="all new ertiga">
                                <p>DP</p>
                                <h2 class="text_price"><span class="rp">Rp.</span> 185.000.000,-</h2>
                                <small class="text-muted mt-3">Jelajahi > </small>
                            </div>
                        </a>
                    </div>
                </div> --}}
                <div class="col-12 col-md-6 col-lg-3 mt-2 mt-md-4 text-center" data-aos="fade-up">
                    <div class="card">
                        <a href="" class="card-link">
                            <div class="card-body">
                                <h5>New SX4 S-Cross</h5>
                                <img src="{{ asset('images/cars/scross-thumb.jpg')}}" class="car_thumb" alt="all new ertiga">
                                <p>DP</p>
                                <h2 class="text_price"><span class="rp">Rp.</span> 14.000.000,-</h2>
                                <small class="text-muted mt-3">Jelajahi > </small>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mt-2 mt-md-4 text-center" data-aos="fade-up">
                    <div class="card">
                        <a href="" class="card-link">
                            <div class="card-body">
                                <h5>Baleno</h5>
                                <img src="{{ asset('images/cars/baleno-thumb.jpg')}}" class="car_thumb" alt="all new ertiga">
                                <p>DP</p>
                                <h2 class="text_price"><span class="rp">Rp.</span> 20.000.000,-</h2>
                                <small class="text-muted mt-3">Jelajahi > </small>
                            </div>
                        </a>
                    </div>
                </div>
                {{-- <div class="col-12 col-md-6 col-lg-3 mt-2 mt-md-4 text-center" data-aos="fade-up">
                    <div class="card">
                        <a href="" class="card-link">
                            <div class="card-body">
                                <h5>Jimny</h5>
                                <img src="{{ asset('images/cars/jimny-thumb.jpg')}}" class="car_thumb" alt="all new ertiga">
                                <p>DP</p>
                                <h2 class="text_price"><span class="rp">Rp.</span> 340.500.000,-</h2>
                                <small class="text-muted mt-3">Jelajahi > </small>
                            </div>
                        </a>
                    </div>
                </div> --}}
            </div>
            
            {{-- <h4 class="text-primary-suzuki text-center mt-3" data-aos="fade-up">Commercials Car</h4>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3 mt-2 mt-md-4 mx-auto text-center" data-aos="fade-up">
                    <div class="card">
                        <a href="" class="card-link">
                            <div class="card-body">
                                <h5>New Carry Pick-Up</h5>
                                <img src="{{ asset('images/cars/new-carry-thumb.jpg')}}" class="car_thumb" alt="all new ertiga">
                                <p>DP</p>
                                <h2 class="text_price"><span class="rp">Rp.</span> 141.800.000,-</h2>
                                <small class="text-muted mt-3">Jelajahi > </small>
                            </div>
                        </a>
                    </div>
                </div>
            </div> --}}
        </div>   
    </div>
    


    <div style="width: 100%;height:450px" class="mt-5">
        <iframe width="100%" height="450" src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=Jl.%20Dr.%20Setiabudi%20No.78%2C%20Pasteur%2C%20Kec.%20Sukajadi%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040141+(Dealer%20Resmi)&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no">
        </iframe>
        <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
    </div>
    
@endsection