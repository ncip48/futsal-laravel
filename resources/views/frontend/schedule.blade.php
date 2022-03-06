@extends('frontend.layouts.app')

@section('title', 'Jadwal')

@section('content')
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="breadcrumb-wrap">
                        <h2>Jadwal Booking</h2>
                        <ul class="breadcrumb-links">
                            <li>
                                <a href="/">Home</a>
                                <i class="bx bx-chevron-right"></i>
                            </li>
                            <li>Jadwal</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="package-details-wrapper pt-120 pb-120">
        @php
            $countEmpty = 0;
            $countAvailable = 0;
        @endphp
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="package-details">
                        <div class="package-thumb">
                            <img src="{{ $product->image }}" alt="" style="max-height: 385px">
                        </div>
                        <div class="package-header">
                            <div class="package-title">
                                <h3>Lapangan {{ $product->name }}</h3>
                                <strong>
                                    @currency($product->price)/jam
                                </strong>
                            </div>
                            <div class="pd-review">
                                <p>Excellent</p>
                                <ul>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bx-star'></i></li>
                                </ul>
                                <p>800 Review</p>
                            </div>
                        </div>
                        <div class="p-short-info">
                            <div class="single-info">
                                <i class="flaticon-clock"></i>
                                <div class="info-texts">
                                    <strong>Lapangan Tersedia</strong>
                                    <p>{{ $countAvailable }}</p>
                                </div>
                            </div>
                            <div class="single-info">
                                <i class="flaticon-footprints"></i>
                                <div class="info-texts">
                                    <strong>Tour Type</strong>
                                    <p>4 Days</p>
                                </div>
                            </div>
                            <div class="single-info">
                                <i class="flaticon-traveller"></i>
                                <div class="info-texts">
                                    <strong>Group Size</strong>
                                    <p>30 People</p>
                                </div>
                            </div>
                            <div class="single-info">
                                <i class="flaticon-translate"></i>
                                <div class="info-texts">
                                    <strong>Languages</strong>
                                    <p>Any Language</p>
                                </div>
                            </div>
                        </div>
                        <div class="package-tab">
                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                @foreach ($time as $t)
                                    @php
                                        $dateCheck = $date . ' ' . $t;
                                        $check = App\Http\Controllers\ScheduleController::checkSchedule($dateCheck, $type);
                                        if ($check == 1) {
                                            $className = 'active';
                                            $disabled = true;
                                            $countEmpty++;
                                        } else {
                                            $className = '';
                                            $disabled = false;
                                            $countAvailable++;
                                        }
                                    @endphp
                                    @if (!$disabled)
                                        <a id="{{ $t }}" class="button-schedule" style="cursor: pointer;"
                                            id="{{ $t }}">
                                    @endif
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link {{ $className }}">
                                            {{ $t }}</button>
                                    </li>
                                    @if (!$disabled)
                                        </a>
                                    @endif
                                @endforeach
                            </ul>
                            <div class="tab-content p-tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                    aria-labelledby="pills-home-tab">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="tab-content-1">
                                                <div class="p-overview">
                                                    <h5>Deskripsi</h5>
                                                    <p>{{ $product->description }}</p>
                                                </div>
                                                <div class="p-rationg">
                                                    <h5>Rating</h5>
                                                    <div class="rating-card">
                                                        <div class="r-card-avarag">
                                                            <h2>4.9</h2>
                                                            <h5>Excellent</h5>
                                                        </div>
                                                        <div class="r-card-info">
                                                            <ul>
                                                                <li>
                                                                    <strong>Accommodation</strong>
                                                                    <ul class="r-rating">
                                                                        <li>
                                                                            <i class='bx bxs-star'></i>
                                                                            <i class='bx bxs-star'></i>
                                                                            <i class='bx bxs-star'></i>
                                                                            <i class='bx bxs-star'></i>
                                                                            <i class='bx bxs-star'></i>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <strong>Transport</strong>
                                                                    <ul class="r-rating">
                                                                        <li>
                                                                            <i class='bx bxs-star'></i>
                                                                            <i class='bx bxs-star'></i>
                                                                            <i class='bx bxs-star'></i>
                                                                            <i class='bx bx-star'></i>
                                                                            <i class='bx bx-star'></i>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <strong>Comfort</strong>
                                                                    <ul class="r-rating">
                                                                        <li>
                                                                            <i class='bx bxs-star'></i>
                                                                            <i class='bx bxs-star'></i>
                                                                            <i class='bx bxs-star'></i>
                                                                            <i class='bx bxs-star'></i>
                                                                            <i class='bx bx-star'></i>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <strong>Hospitality</strong>
                                                                    <ul class="r-rating">
                                                                        <li>
                                                                            <i class='bx bxs-star'></i>
                                                                            <i class='bx bxs-star'></i>
                                                                            <i class='bx bxs-star'></i>
                                                                            <i class='bx bxs-star'></i>
                                                                            <i class='bx bx-star'></i>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <strong>Food</strong>
                                                                    <ul class="r-rating">
                                                                        <li>
                                                                            <i class='bx bxs-star'></i>
                                                                            <i class='bx bxs-star'></i>
                                                                            <i class='bx bx-star'></i>
                                                                            <i class='bx bx-star'></i>
                                                                            <i class='bx bx-star'></i>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-review">
                                                    <ul>
                                                        <li class="p-review-card">
                                                            <div class="p-review-info">
                                                                <div class="p-reviewr-img">
                                                                    <img src="assets/images/package/pr-1.png" alt="">
                                                                </div>
                                                                <div class="p-reviewer-info">
                                                                    <strong>Bertram Bil</strong>
                                                                    <p>2 April, 2021 10.00PM</p>
                                                                    <ul class="review-star">
                                                                        <li> <i class='bx bxs-star'></i> </li>
                                                                        <li> <i class='bx bxs-star'></i> </li>
                                                                        <li> <i class='bx bxs-star'></i> </li>
                                                                        <li> <i class='bx bxs-star'></i> </li>
                                                                        <li> <i class='bx bxs-star'></i> </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="p-review-texts">
                                                                <p>Morbi dictum pulvinar velit, id mollis lorem faucibus
                                                                    acUt sed
                                                                    lacinia ipsum. Suspendisse massa augue lorem faucibus
                                                                    acUt
                                                                    sed lacinia ipsum. Suspendisse </p>
                                                            </div>
                                                            <a href="#" class="r-reply-btn"><i class='bx bx-reply'></i>
                                                                Reply</a>
                                                        </li>
                                                        <li class="p-review-card">
                                                            <div class="p-review-info">
                                                                <div class="p-reviewr-img">
                                                                    <img src="assets/images/package/pr-1.png" alt="">
                                                                </div>
                                                                <div class="p-reviewer-info">
                                                                    <strong>Bertram Bil</strong>
                                                                    <p>2 April, 2021 10.00PM</p>
                                                                    <ul class="review-star">
                                                                        <li> <i class='bx bxs-star'></i> </li>
                                                                        <li> <i class='bx bxs-star'></i> </li>
                                                                        <li> <i class='bx bxs-star'></i> </li>
                                                                        <li> <i class='bx bxs-star'></i> </li>
                                                                        <li> <i class='bx bxs-star'></i> </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="p-review-texts">
                                                                <p>Morbi dictum pulvinar velit, id mollis lorem faucibus
                                                                    acUt sed
                                                                    lacinia ipsum. Suspendisse massa augue lorem faucibus
                                                                    acUt
                                                                    sed lacinia ipsum. Suspendisse </p>
                                                            </div>
                                                            <a href="#" class="r-reply-btn"><i class='bx bx-reply'></i>
                                                                Reply</a>
                                                        </li>
                                                        <li class="p-review-card">
                                                            <div class="p-review-info">
                                                                <div class="p-reviewr-img">
                                                                    <img src="assets/images/package/pr-1.png" alt="">
                                                                </div>
                                                                <div class="p-reviewer-info">
                                                                    <strong>Bertram Bil</strong>
                                                                    <p>2 April, 2021 10.00PM</p>
                                                                    <ul class="review-star">
                                                                        <li> <i class='bx bxs-star'></i> </li>
                                                                        <li> <i class='bx bxs-star'></i> </li>
                                                                        <li> <i class='bx bxs-star'></i> </li>
                                                                        <li> <i class='bx bxs-star'></i> </li>
                                                                        <li> <i class='bx bxs-star'></i> </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="p-review-texts">
                                                                <p>Morbi dictum pulvinar velit, id mollis lorem faucibus
                                                                    acUt sed
                                                                    lacinia ipsum. Suspendisse massa augue lorem faucibus
                                                                    acUt
                                                                    sed lacinia ipsum. Suspendisse </p>
                                                            </div>
                                                            <a href="#" class="r-reply-btn"><i class='bx bx-reply'></i>
                                                                Reply</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="p-review-input">
                                                    <form>
                                                        <h5>Leave Your Comment</h5>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <input type="text" placeholder="Your Full Name">
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <input type="text" placeholder="Your Email">
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <input type="text" placeholder="Tour Type">
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <textarea cols="30" rows="7"
                                                                    placeholder="Write Message"></textarea>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <ul class="input-rating">
                                                                    <li><i class='bx bx-star'></i></li>
                                                                    <li><i class='bx bx-star'></i></li>
                                                                    <li><i class='bx bx-star'></i></li>
                                                                    <li><i class='bx bx-star'></i></li>
                                                                    <li><i class='bx bx-star'></i></li>
                                                                </ul>
                                                                <input type="submit" value="Submit Now">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="package-d-sidebar">
                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <div class="p-sidebar-form">
                                    <form>
                                        <h5 class="package-d-head">Booking Lapangan Ini</h5>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <input type="text" placeholder="Your Full Name">
                                            </div>
                                            <div class="col-lg-12">
                                                <input type="email" placeholder="Your Email">
                                            </div>
                                            <div class="col-lg-12">
                                                <input type="tel" placeholder="Phone">
                                            </div>
                                            <div class="col-lg-12">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Tickets Type</option>
                                                    <option value="1">Travel With Bus</option>
                                                    <option value="2">Travel With Plane</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Adult</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Child</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="calendar-input">
                                                    <input type="text" name="date" class="input-field date"
                                                        value="{{ $date }}" readonly style="cursor: default">
                                                    <i class="flaticon-calendar"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="calendar-input">
                                                    <input type="text" name="start" class="input-field" readonly
                                                        style="cursor: default" id="start" placeholder="Jam Mulai">
                                                    <i class="flaticon-clock"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="calendar-input">
                                                    <input type="text" name="end" class="input-field check-out" id="end"
                                                        placeholder="Jam Selesai">
                                                    <i class="flaticon-clock"></i>
                                                </div>
                                            </div>
                                            <input type="hidden" class="form-control" value="{{ $date }}"
                                                id="tgl" name="tgl" aria-describedby="emailHelp" placeholder="Tanggal"
                                                required readonly>
                                            <input type="hidden" name="date" class="input-field" id="date">
                                            <h4 id="result-date" class="text-center">
                                            </h4>
                                            <div class="col-lg-12">
                                                <input type="submit" value="Book Now">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
