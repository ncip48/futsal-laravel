@extends('frontend.layouts.app')

@section('title', 'Detail Pesanan')

@section('content')
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="breadcrumb-wrap">
                        <h2>Detail Pesanan</h2>
                        <ul class="breadcrumb-links">
                            <li>
                                <a href="/">Home</a>
                                <i class="bx bx-chevron-right"></i>
                            </li>
                            <li>Booking</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="col-lg-12 text-center pt-120">
        <p class="text-success text-16 line-height-07"><i class="bx bxs-check-circle bx-lg"></i></p>
        <h2 class="text-8" style="margin-bottom: .5rem;">Order Berhasil</h2>
    </div> --}}

    @php
    switch ($result->status) {
        case 0:
            $status = 'Menunggu Pembayaran';
            $textclass = 'text-success';
            break;
        case 1:
            $status = 'Sukses';
            $textclass = 'text-success';
            break;
        case 2:
            $status = 'Sedang Di Proses';
            $textclass = 'text-success';
            break;
        case 3:
            $status = 'Dibatalkan';
            $textclass = 'text-danger';
            break;
        case 4:
            $status = 'Pembayaran Kadaluarsa';
            $textclass = 'text-danger';
            break;
        case 5:
            $status = 'Konfirmasi Pembayaran';
            $textclass = 'text-success';
            break;
        default:
            break;
    }
    @endphp

    <div class="col-md-8 col-lg-6 col-xl-5 mx-auto pt-120 pb-120">
        <div class="container">
            <div class="bg-white shadow-sm rounded p-3 p-sm-4 mb-4">
                <div class="row">
                    <div class="col-sm text-muted">Kode Booking</div>
                    <div class="col-sm text-sm-end fw-bolder">{{ $result->code_booking }}</div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm text-muted">Lapangan</div>
                    <div class="col-sm text-sm-end font-weight-600">{{ $result->product_name }}</div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm text-muted">Tanggal</div>
                    <div class="col-sm text-sm-end font-weight-600">@datetime($result->created_at)</div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm text-muted">Waktu</div>
                    <div class="col-sm text-sm-end font-weight-600">@time($result->start) - @time($result->end)</div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm text-muted">Status</div>
                    <div class="col-sm text-sm-end font-weight-600 {{ $textclass }}">{{ $status }}</div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm text-muted">Nama Pemesan</div>
                    <div class="col-sm text-sm-end font-weight-600">{{ $result->name }}</div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm text-muted">No HP</div>
                    <div class="col-sm text-sm-end font-weight-600">{{ $result->handphone }}</div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm text-muted">Email</div>
                    <div class="col-sm text-sm-end font-weight-600">{{ $result->email }}</div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm text-muted">Total Pembayaran</div>
                    <div class="col-sm text-sm-end text-6 font-weight-500">@currency($result->total_price)</div>
                </div>
            </div>

            <div class="bg-white shadow-sm rounded p-3 p-sm-4 mb-4">
                <div class="row">
                    <div class="col-sm text-muted">Status Pembayaran</div>
                    <div class="col-sm text-sm-end font-weight-600">{{ $midtrans->transaction_status }}</div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm text-muted">Metode Pembayaran</div>
                    <div class="col-sm text-sm-end font-weight-600">{{ $midtrans->payment_type }}</div>
                </div>
                <hr>
                @if (Arr::exists($midtrans, 'settlement_time'))
                    <div class="row">
                        <div class="col-sm text-muted">Tanggal Pembayaran</div>
                        <div class="col-sm text-sm-end font-weight-600">{{ $midtrans->settlement_time }}</div>
                    </div>
                @endif
                @if ($midtrans->transaction_status !== 'settlement')
                    <hr>
                    <div class="row">
                        <div class="col-sm text-muted">QR</div>
                        <div class="col-sm text-sm-end fw-bolder">
                            <img src="https://api.sandbox.midtrans.com/v2/{{ $midtrans->payment_type }}/{{ $midtrans->transaction_id }}/qr-code"
                                alt="" style="height: 250px;width:250px;object-fit:contain" />
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
