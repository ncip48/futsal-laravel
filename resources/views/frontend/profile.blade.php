@extends('frontend.layouts.app')

@section('title', 'Profil')

@section('content')
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="breadcrumb-wrap">
                        <h2>Profile</h2>
                        <ul class="breadcrumb-links">
                            <li>
                                <a href="/">Home</a>
                                <i class="bx bx-chevron-right"></i>
                            </li>
                            <li>Profile</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 mx-auto pt-120 pb-120">
        <div class="container">
            <div class="myaccount">
                <nav>
                    <div class="nav nav-tabs myaccount-nav" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-profile-tab" data-bs-toggle="tab" href="#nav-profile"
                            role="tab" aria-controls="nav-profile" aria-selected="true"></i>Profile</a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-bs-toggle="tab" href="#nav-booking"
                            role="tab" aria-controls="nav-booking" aria-selected="false"><i
                                class="fa fa-briefcase"></i>booking</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane active in" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="profile-details">
                            <div class="head-profile">
                                <h3>My Profile</h3>
                            </div>
                            <div class="content-profile">
                                <div class="row">
                                    <div class="col-lg-3 col-md-5">
                                        <img src="http://www.shmai.com/preview/travelco/assets/images/profile.jpg">
                                    </div>
                                    <div class="col-lg-9 col-md-7">
                                        <div class="info">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <p class="title">
                                                        Name:
                                                    </p>
                                                </div>
                                                <div class="col-md-7">
                                                    Moniza
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <p class="title">
                                                        Date of Birth:
                                                    </p>
                                                </div>
                                                <div class="col-md-7">
                                                    25 Jan 1985
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <p class="title">
                                                        Email:
                                                    </p>
                                                </div>
                                                <div class="col-md-7">
                                                    example@example.com
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <p class="title">
                                                        Phone:
                                                    </p>
                                                </div>
                                                <div class="col-md-7">
                                                    +123-456-789
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <p class="title">
                                                        Address:
                                                    </p>
                                                </div>
                                                <div class="col-md-7">
                                                    23 Blok, Lorum Ipsum, Canada
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <p class="title">
                                                        Country
                                                    </p>
                                                </div>
                                                <div class="col-md-7">
                                                    Canada
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-right">
                                        <a href="#" class="button">Edit Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-booking" role="tabpanel" aria-labelledby="nav-booking-tab">
                        <div class="booking-details">
                            <div class="head-booking">
                                <h3>Trips You have Booked!</h3>
                            </div>
                            <div class="content-booking">
                                <div class="booking-info">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-12">
                                            <div class="booking-date">
                                                <p class="date">
                                                    15
                                                </p>
                                                <p class="month">
                                                    august
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-12">
                                            <div class="booking-detail">
                                                <h3>
                                                    Restuarent Details
                                                </h3>
                                                <div class="detail-info">
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <i class="fa fa-calendar-check-o"></i>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <p>
                                                                booking date:
                                                            </p>
                                                        </div>
                                                        <div class="col-md-7">
                                                            28:12:2021 at 3:20 AM
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="detail-info">
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <i class="fa fa-sticky-note"></i>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <p>
                                                                booking details:
                                                            </p>
                                                        </div>
                                                        <div class="col-md-7">
                                                            28:12:2021 at 3:20 AM
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="detail-info">
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <i class="fa fa-user-secret"></i>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <p>
                                                                client:
                                                            </p>
                                                        </div>
                                                        <div class="col-md-7">
                                                            Monica smith
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="detail-info">
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <i class="fa fa-envelope"></i>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <p>
                                                                Email:
                                                            </p>
                                                        </div>
                                                        <div class="col-md-7">
                                                            example@example.com
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="detail-info">
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <i class="fa fa-phone"></i>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <p>
                                                                Phone:
                                                            </p>
                                                        </div>
                                                        <div class="col-md-7">
                                                            +123-456-789
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-12">
                                            <div class="booking-action">
                                                <a class="btn-message bookbtn" href="#">
                                                    Mesage
                                                </a>
                                                <a class="btn-apreove bookbtn" href="#">
                                                    Aprove
                                                </a>
                                                <a class="btn-cancle bookbtn" href="#">
                                                    Cancle
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="booking-info">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-12">
                                            <div class="booking-date">
                                                <p class="date">
                                                    15
                                                </p>
                                                <p class="month">
                                                    august
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-12">
                                            <div class="booking-detail">
                                                <h3>
                                                    Restuarent Details
                                                </h3>
                                                <div class="detail-info">
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <i class="fa fa-calendar-check-o"></i>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <p>
                                                                booking date:
                                                            </p>
                                                        </div>
                                                        <div class="col-md-7">
                                                            28:12:2021 at 3:20 AM
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="detail-info">
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <i class="fa fa-sticky-note"></i>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <p>
                                                                booking details:
                                                            </p>
                                                        </div>
                                                        <div class="col-md-7">
                                                            28:12:2021 at 3:20 AM
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="detail-info">
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <i class="fa fa-user-secret"></i>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <p>
                                                                client:
                                                            </p>
                                                        </div>
                                                        <div class="col-md-7">
                                                            Monica smith
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="detail-info">
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <i class="fa fa-envelope"></i>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <p>
                                                                Email:
                                                            </p>
                                                        </div>
                                                        <div class="col-md-7">
                                                            example@example.com
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="detail-info">
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <i class="fa fa-phone"></i>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <p>
                                                                Phone:
                                                            </p>
                                                        </div>
                                                        <div class="col-md-7">
                                                            +123-456-789
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-12">
                                            <div class="booking-action">
                                                <a class="btn-message bookbtn" href="#">
                                                    Mesage
                                                </a>
                                                <a class="btn-apreove bookbtn" href="#">
                                                    Aprove
                                                </a>
                                                <a class="btn-cancle bookbtn" href="#">
                                                    Cancle
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="booking-info">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-12">
                                            <div class="booking-date">
                                                <p class="date">
                                                    15
                                                </p>
                                                <p class="month">
                                                    august
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-12">
                                            <div class="booking-detail">
                                                <h3>
                                                    Restuarent Details
                                                </h3>
                                                <div class="detail-info">
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <i class="fa fa-calendar-check-o"></i>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <p>
                                                                booking date:
                                                            </p>
                                                        </div>
                                                        <div class="col-md-7">
                                                            28:12:2021 at 3:20 AM
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="detail-info">
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <i class="fa fa-sticky-note"></i>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <p>
                                                                booking details:
                                                            </p>
                                                        </div>
                                                        <div class="col-md-7">
                                                            28:12:2021 at 3:20 AM
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="detail-info">
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <i class="fa fa-user-secret"></i>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <p>
                                                                client:
                                                            </p>
                                                        </div>
                                                        <div class="col-md-7">
                                                            Monica smith
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="detail-info">
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <i class="fa fa-envelope"></i>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <p>
                                                                Email:
                                                            </p>
                                                        </div>
                                                        <div class="col-md-7">
                                                            example@example.com
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="detail-info">
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <i class="fa fa-phone"></i>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <p>
                                                                Phone:
                                                            </p>
                                                        </div>
                                                        <div class="col-md-7">
                                                            +123-456-789
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-12">
                                            <div class="booking-action">
                                                <a class="btn-message bookbtn" href="#">
                                                    Mesage
                                                </a>
                                                <a class="btn-apreove bookbtn" href="#">
                                                    Aprove
                                                </a>
                                                <a class="btn-cancle bookbtn" href="#">
                                                    Cancle
                                                </a>
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
@endsection
