@extends('user.layouts.app')

@section('css')
    <link href="{{ asset('css/user/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/user/detail-produk.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div id="detail-produk ">
        <div class="container">
            <div class="row col-12">
                <div class="detail-box col-8 offset-2 mt-5 p-0 pb-4">
                    <h4 class="text-center head-produk py-2">Detail Produk</h4>
                    <div class="image-box p-2">
                        <img src="{{ asset('image/avanza.jpeg') }}" alt="" srcset="" class="image-produk">
                    </div>
                    <p class="name-produk text-center">Avanaza</p>
                    <p class="jenis-produk text-center">Mini MVP</p>
                    <p class="harga-produk text-center">Rp. 300.000/Hari</p>
                    <hr class="hr-detail mx-2">
                    <div class="row col-12">
                        <div class="col-6">
                            <p class="review">Review 4.2/5</p>
                            <p>
                                <i class="fa-solid fa-star star-active"></i>
                                <i class="fa-solid fa-star star-active"></i>
                                <i class="fa-solid fa-star star-active"></i>
                                <i class="fa-solid fa-star star-active"></i>
                                <i class="fa-solid fa-star"></i>
                                <a href="{{ route('user.detail-produk.ulasan',3) }}" class="base-color ulasan-link">Lihat semua ulasan</a>
                            </p>
                        </div>
                        <div class="col-6 pt-3">
                            <a href="{{ route('user.detail-produk.ulasan.pemilik',3) }}" class="btn button-base d-block">Lihat penilaian mobil produk</a>
                        </div>
                    </div>
                    <hr class="hr-detail mx-2">
                    <div class="row col-12 mb-2">
                        <div class="col-6 ">
                            <p class="seat text-right base-color"> 6 Penumpang <i class="fa-solid fa-user"></i></p>
                            <p class="sopir text-right base-color"> Tanpa sopir <i class="fa-solid fa-car"></i></p>
                        </div>
                    <div class="col-6 vertikal-line">
                            <p class="transmisi"><i class="fa-solid fa-car base-color"></i> Transmisi Manual </p>
                            <p class="mesin"><i class="fa-solid fa-car base-color"></i> Mesin 1998 cc</p>
                            <p class="warna"><i class="fa-solid fa-car base-color"></i> Warna Silver</p>
                            <p class="tahun"><i class="fa-solid fa-car base-color"></i> Tahun 2021</p>
                        </div>
                    </div>
                    <div class="text-center">

                        <a href="{{ route('user.pemesanan.create',3) }}" class="btn button-yellow">Lanjut Ke pemesanan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection
