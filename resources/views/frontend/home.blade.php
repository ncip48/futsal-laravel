@extends('frontend.layouts.app')

@section('title', 'Beranda - Futsal Enjoyers')

@section('content')
    <div class="main-banner-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="main-banner-content-2">
                        <h2>Temukan Lapangan Dengan Tipe <br>
                            <span class="element"></span>
                        </h2>
                        <h3>hanya di Futsal Enjoyers</h3>
                    </div>
                </div>
            </div>
            <div class="find-form-2">
                <form class="findfrom-wrapper" action="{{ url('schedule') }}" method="post" id="form-search">
                    @csrf
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="calendar-input">
                                <input type="text" name="date" class="input-field check-in" placeholder="Pilih Tanggal"
                                    id="check-in" required>
                                <i class="flaticon-calendar"></i>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="custom-select">
                                <select name="type" id="type" required>
                                    <option value="null">--Tipe Lapangan--</option>
                                    @foreach ($products as $p)
                                        <option value="{{ $p->id }}">{{ $p->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="find-btn">
                                <button {{-- href="#" onclick="document.getElementById('form-search').submit();" --}} type="submit" {{-- href=""
                                    onCLick="this.href='schedule?date='+document.getElementById('check-in').value+'&type='+document.getElementById('type').value" --}} class="btn-second"><i
                                        class="bx bx-search-alt"></i>
                                    Cari
                                    Jadwal</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="offer-area pt-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="section-head pb-30">
                        <h5>Special offer</h5>
                        <h2>Our Most Popular And Best Adventures</h2>
                    </div>
                </div>
            </div>
            <div class="offer-slider dark-nav owl-carousel">
                <div class="offer-card">
                    <div class="offer-thumb">
                        <img src="{{ asset('/images/offer-1.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="offer-details">
                        <div class="offer-info">
                            <h5><i class="flaticon-calendar"></i>5 Days/6 night</h5>
                            <ul class="offer-rating">
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                            </ul>
                        </div>
                        <h3>
                            <i class="flaticon-arrival"></i>
                            <a href="package-details.html"> Paris Hill Tour</a>
                        </h3>
                        <strong>$150 <span>$200</span></strong>
                    </div>
                </div>
                <div class="offer-card">
                    <div class="offer-thumb">
                        <img src="{{ asset('/images/offer-2.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="offer-details">
                        <div class="offer-info">
                            <h5><i class="flaticon-calendar"></i>5 Days/6 night</h5>
                            <ul class="offer-rating">
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                            </ul>
                        </div>
                        <h3><i class="flaticon-arrival"></i>
                            <a href="package-details.html">Lake Garda, Spain</a>
                        </h3>
                        <strong>$170 <span>$200</span></strong>
                    </div>
                </div>
                <div class="offer-card">
                    <div class="offer-thumb">
                        <img src="{{ asset('/images/offer-3.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="offer-details">
                        <div class="offer-info">
                            <h5><i class="flaticon-calendar"></i>5 Days/6 night</h5>
                            <ul class="offer-rating">
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                            </ul>
                        </div>
                        <h3><i class="flaticon-arrival"></i>
                            <a href="package-details.html">French Rivira, France</a>
                        </h3>
                        <strong>$150 <span>$200</span></strong>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="achievement-area-2 mt-105 p-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="section-head pb-40">
                        <h5>Why Tourx?</h5>
                        <h2>Why you are travel with tourx</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInLeft animated" data-wow-duration="1500ms"
                    data-wow-delay="0ms">
                    <div class="achievement-card-2">
                        <div class="achieve-img">
                            <img src="{{ asset('/images/e-1.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="achieve-info">
                            <h5>{{ $product }} Tipe Lapangan</h5>
                            <div class="achieve-icon">
                                <i class="flaticon-guide"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInLeft animated" data-wow-duration="1500ms"
                    data-wow-delay="200ms">
                    <div class="achievement-card-2">
                        <div class="achieve-img">
                            <img src="{{ asset('/images/e-2.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="achieve-info">
                            <h5>{{ $transaction }} Transaksi Dilakukan</h5>
                            <div class="achieve-icon">
                                <i class="flaticon-trust"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInLeft animated" data-wow-duration="1500ms"
                    data-wow-delay="400ms">
                    <div class="achievement-card-2">
                        <div class="achieve-img">
                            <img src="{{ asset('/images/e-3.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="achieve-info">
                            <h5>5+ year of travel experience</h5>
                            <div class="achieve-icon">
                                <i class="flaticon-experience"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInLeft animated" data-wow-duration="1500ms"
                    data-wow-delay="600ms">
                    <div class="achievement-card-2">
                        <div class="achieve-img">
                            <img src="{{ asset('/images/e-4.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="achieve-info">
                            <h5>85% of our traveller happy</h5>
                            <div class="achieve-icon">
                                <i class="flaticon-traveller"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="review-area mt-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="section-head pb-40">
                        <h5>Our Traveller Say</h5>
                        <h2>What Oue Traveller Say About Us</h2>
                    </div>
                </div>
            </div>
            <div class="review-slider owl-carousel">
                <div class="review-card ">
                    <div class="reviewer-img">
                        <img src="{{ asset('/images/reviewer-1.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="reviewer-info">
                        <h3>Dina Jems</h3>
                        <h5>Traveller</h5>
                        <p>Fusce aliquam luctus est, eget tincidunt velit scelerisque rhoncus. Aliquam lacinia ipsum
                            ornare, porttitor risus nec,
                            mattis mauris. </p>
                    </div>
                </div>
                <div class="review-card">
                    <div class="reviewer-img">
                        <img src="{{ asset('/images/reviewer-2.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="reviewer-info">
                        <h3>Jahid Hassan</h3>
                        <h5>Traveller</h5>
                        <p>Fusce aliquam luctus est, eget tincidunt velit scelerisque rhoncus. Aliquam lacinia ipsum
                            ornare, porttitor risus nec,
                            mattis mauris. </p>
                    </div>
                </div>
                <div class="review-card">
                    <div class="reviewer-img">
                        <img src="{{ asset('/images/reviewer-3.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="reviewer-info">
                        <h3>Shwan Pull</h3>
                        <h5>Traveller</h5>
                        <p>Fusce aliquam luctus est, eget tincidunt velit scelerisque rhoncus. Aliquam lacinia ipsum
                            ornare, porttitor risus nec,
                            mattis mauris. </p>
                    </div>
                </div>
                <div class="review-card ">
                    <div class="reviewer-img">
                        <img src="{{ asset('/images/reviewer-1.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="reviewer-info">
                        <h3>Dina Jems</h3>
                        <h5>Traveller</h5>
                        <p>Fusce aliquam luctus est, eget tincidunt velit scelerisque rhoncus. Aliquam lacinia ipsum
                            ornare, porttitor risus nec,
                            mattis mauris. </p>
                    </div>
                </div>
                <div class="review-card">
                    <div class="reviewer-img">
                        <img src="{{ asset('/images/reviewer-2.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="reviewer-info">
                        <h3>Jahid Hassan</h3>
                        <h5>Traveller</h5>
                        <p>Fusce aliquam luctus est, eget tincidunt velit scelerisque rhoncus. Aliquam lacinia ipsum
                            ornare, porttitor risus nec,
                            mattis mauris. </p>
                    </div>
                </div>
                <div class="review-card">
                    <div class="reviewer-img">
                        <img src="{{ asset('/images/reviewer-3.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="reviewer-info">
                        <h3>Shwan Pull</h3>
                        <h5>Traveller</h5>
                        <p>Fusce aliquam luctus est, eget tincidunt velit scelerisque rhoncus. Aliquam lacinia ipsum
                            ornare, porttitor risus nec,
                            mattis mauris. </p>
                    </div>
                </div>
                <div class="review-card ">
                    <div class="reviewer-img">
                        <img src="{{ asset('/images/reviewer-1.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="reviewer-info">
                        <h3>Dina Jems</h3>
                        <h5>Traveller</h5>
                        <p>Fusce aliquam luctus est, eget tincidunt velit scelerisque rhoncus. Aliquam lacinia ipsum
                            ornare, porttitor risus nec,
                            mattis mauris. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="blog-area pt-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="section-head pb-30">
                        <h5>Latest Blog</h5>
                        <h2>Stay Updated And new post our Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInLeft animated" data-wow-duration="1500ms"
                    data-wow-delay="0ms">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="{{ asset('/images/b-1.png') }}" alt="" class="img-fluid">
                            <div class="blog-date"><i class="flaticon-calendar"></i> 1 April, 2021</div>
                        </div>
                        <div class="blog-details">
                            <div class="blog-info">
                                <a class="blog-writer" href="#"><i class="flaticon-user"></i>Dina Jems</a>
                                <a class="blog-comment" href="#"><i
                                        class="flaticon-comment"></i><span>(3)</span>Comment</a>
                            </div>
                            <a href="blog-details.html" class="blog-title">Donec egestas orci viverra
                                fermentum risus.</a>
                            <div class="blog-btn">
                                <a href="blog-details.html" class="btn-common-sm">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInLeft animated" data-wow-duration="1500ms"
                    data-wow-delay="300ms">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="{{ asset('/images/b-2.png') }}" alt="" class="img-fluid">
                            <div class="blog-date"><i class="flaticon-calendar"></i> 1 April, 2021</div>
                        </div>
                        <div class="blog-details">
                            <div class="blog-info">
                                <a class="blog-writer" href="#"><i class="flaticon-user"></i>Dina Jems</a>
                                <a class="blog-comment" href="#"><i
                                        class="flaticon-comment"></i><span>(3)</span>Comment</a>
                            </div>
                            <a href="blog-details.html" class="blog-title">Praesent ut mattis ante the Nullam
                                lobortis. </a>
                            <div class="blog-btn">
                                <a href="blog-details.html" class="btn-common-sm">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInLeft animated" data-wow-duration="1500ms"
                    data-wow-delay="600ms">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="{{ asset('/images/b-3.png') }}" alt="" class="img-fluid">
                            <div class="blog-date"><i class="flaticon-calendar"></i> 1 April, 2021</div>
                        </div>
                        <div class="blog-details">
                            <div class="blog-info">
                                <a class="blog-writer" href="#"><i class="flaticon-user"></i>Dina Jems</a>
                                <a class="blog-comment" href="#"><i
                                        class="flaticon-comment"></i><span>(3)</span>Comment</a>
                            </div>
                            <a href="blog-details.html" class="blog-title">Maecenas vehicula risus non neque
                                tincidunt.</a>
                            <div class="blog-btn">
                                <a href="blog-details.html" class="btn-common-sm">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="newsletter-area pt-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="newsletter-wrapper">
                        <h2>Subscribe To Our Newsletter
                            For Latest Update</h2>
                        <form>
                            <div class="input-group newsletter-input">
                                <input type="text" class="form-control" placeholder="Enter Your Email"
                                    aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn btn-outline-secondary" type="button"
                                    id="button-addon2">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
