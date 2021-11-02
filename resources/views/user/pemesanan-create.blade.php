@extends('user.layouts.app')

@section('css')
    <link href="{{ asset('css/user/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/user/pemesanan-create.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div id="ulasan-produk">
        <div class="container">
            <div class="row col-12">
                <div class="detail-box col-10 offset-1 mt-5 p-0 pb-4">
                    <h4 class="text-center head-produk py-2">Detail Pemesanan</h4>
                    <div class="content-wrapper px-2">
                        <div class="row">
                            <div class="col-6">
                                <img src="{{ asset('image/avanza.jpeg') }}" alt="" srcset="" class="w-100">
                            </div>
                            <div class="col-6">
                                <h5 class="nama text-center">Toyota Avanza</h5>
                                <p class="jenis text-center">Mini MPV</p>
                                <div class="rent-car-box mb-2">
                                    <p class="m-0"><b>CAR RENT- Muhammad</b></p>
                                    <select name="cars" id="cars" class="mb-2 w-100">
                                    <option value="volvo">Tanpa Sopir</option>
                                    <option value="saab">Dengan Sopir</option>
                                </select>
                                </div>
                                <p class="m-0">Alamat</p>
                                <select name="cars" id="cars" class="mb-2">
                                    <option value="volvo">Volvo</option>
                                    <option value="saab">Saab</option>
                                    <option value="mercedes">Mercedes</option>
                                    <option value="audi">Audi</option>
                                </select>
                                <p class="m-0">Tanggal</p>
                                <input type="date" name="" id="">
                                <p>Alamat</p>
                                <select name="cars" id="cars">
                                    <option value="volvo">Volvo</option>
                                    <option value="saab">Saab</option>
                                    <option value="mercedes">Mercedes</option>
                                    <option value="audi">Audi</option>
                                </select>
                                <p>total</p>
                                <div class="rent-car-box">
                                    <p><span>Rp. 280.000</span>/ 1 Hari</p>
                                    <p>total- Rp. 280.000</p>
                                </div>
                                <hr class="hr-detail">
                                <h5>Konfirmasi Data diri pemesan</h5>
                                <p>Nama Lengkap</p>
                                <input type="text" name="" id="" placeholder="Masukkan nama">
                                <p>No Telepon</p>
                                <input type="text" name="" id="" placeholder="Masukkan telp">
                                <p>Nomor Induk Kependudukan</p>
                                <input type="text" name="" id="" placeholder="Masukkan NIK">
                                <p>Upload Foto KTP</p>
                                <input type="file" name="" id="">
                                <hr>
                                <h5 class="text-center">Pilih Sopir</h5>
                                <div class="row">
                                    <div class="col-6">
                                       <div class="supir-box py-2 active">
                                       <div class="box-img-supir mx-auto">
                                            <img src="{{ asset('image/profil.png') }}" class="img-responsive w-100" alt="">
                                        </div>
                                        <p class="m-0 text-center">Asep</p>
                                        <p class="m-0 text-center"><i class="fa-solid fa-star star-active"></i>4,2</p>
                                       </div>
                                    </div>
                                    <div class="col-6">
                                       <div class="supir-box py-2">
                                       <div class="box-img-supir mx-auto">
                                            <img src="{{ asset('image/profil.png') }}" class="img-responsive w-100" alt="">
                                        </div>
                                        <p class="m-0 text-center">Asep</p>
                                        <p class="m-0 text-center"><i class="fa-solid fa-star star-active"></i> 4,2</p>
                                       </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fa-solid fa-wallet base-color"></i>
                                    </div>
                                    <div class="col-10">
                                        <p><b>Saldo Anda</b></p>
                                        <p>Rp. 500.000</p>
                                    </div>
                                </div>
                                <p class="text-center">Pembayaran dengan dompetksu</p>
                                <div class="row">
                                    <div class="col-12">
                                        <a href="" class="btn button-base">Pesan Sekarang</a>
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

@section('js')

@endsection
