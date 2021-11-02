@extends('user.layouts.app')

@section('css')
    <link href="{{ asset('css/user/dashboard.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div id="head">
        <div class="head-box">

            <img src="{{ asset('image/rectangle205.png') }}" class="img-fluid img-rectangle" alt="">
            <div class="search-box-outer mx-auto d-block">
                <div class="search-box">
                <form action="{{ route('user.search') }}" method="GET">
                    <input class="py-2 px-4 cari-rental d-block" type="text" name="" id="" placeholder="Cari di rentalku">
                    <button class="py-2 px-4 button"><i class="fa-solid fa-search"></i></button>
                
                </div>
                
                <div class="search-toggle-box pt-5 hidden">
                    <p class="text-center mb-0">Pilihan Kota</p>
                    <div class="kategori row px-4">
                        <input class="filter-checkbox pilihanKota-Surabaya" type="checkbox" name="pilihanKota[]" value="Surabaya" checked="checked" />
                        <div class="kategori-outer col-3 p-1">
                            <div class="kategori-box text-center small pilihankota-check" for="pilihanKota-Surabaya" >Surabaya</div>
                        </div>
                        <input class="filter-checkbox pilihanKota-Jogjakarta" type="checkbox" name="pilihanKota[]" value="Jogjakarta" checked="checked" />
                        <div class="kategori-outer col-3 p-1">
                            <div class="kategori-box text-center small pilihankota-check" for="pilihanKota-Jogjakarta">Jogjakarta</div>
                        </div>
                        <input class="filter-checkbox" type="checkbox" name="pilihanKota[]" value="Bandung" />
                        <div class="kategori-outer col-3 p-1">
                            <div class="kategori-box text-center small pilihankota-check">Bandung</div>
                        </div>
                        <input class="filter-checkbox" type="checkbox" name="pilihanKota[]" value="Jakarta" />
                        <div class="kategori-outer col-3 p-1">
                            <div class="kategori-box text-center small pilihankota-check">Jakarta</div>
                        </div>
                    </div>

                    <p class="text-center mb-0">Urutkan menurut</p>
                    <div class="kategori row px-4">
                        <div class="kategori-outer col-3 p-1">
                            <div class="kategori-box text-center small">Surabaya</div>
                        </div>
                        <div class="kategori-outer col-3 p-1">
                            <div class="kategori-box text-center small">Surabaya</div>
                        </div>
                        <div class="kategori-outer col-3 p-1">
                            <div class="kategori-box text-center small">Surabaya</div>
                        </div>
                        <div class="kategori-outer col-3 p-1">
                            <div class="kategori-box text-center small">Surabaya</div>
                        </div>
                    </div>

                    <p class="text-center mb-0">Kapasitas penumpang</p>
                    <div class="kategori row px-4">
                        <div class="kategori-outer col-3 p-1">
                            <div class="kategori-box text-center small">Surabaya</div>
                        </div>
                        <div class="kategori-outer col-3 p-1">
                            <div class="kategori-box text-center small">Surabaya</div>
                        </div>
                        <div class="kategori-outer col-3 p-1">
                            <div class="kategori-box text-center small">Surabaya</div>
                        </div>
                        <div class="kategori-outer col-3 p-1">
                            <div class="kategori-box text-center small">Surabaya</div>
                        </div>
                    </div>

                    <p class="text-center mb-0">Jenis Mobil</p>
                    <div class="kategori row px-4">
                        <div class="kategori-outer col-3 p-1">
                            <div class="kategori-box text-center small">Surabaya</div>
                        </div>
                        <div class="kategori-outer col-3 p-1">
                            <div class="kategori-box text-center small">Surabaya</div>
                        </div>
                        <div class="kategori-outer col-3 p-1">
                            <div class="kategori-box text-center small">Surabaya</div>
                        </div>
                        <div class="kategori-outer col-3 p-1">
                            <div class="kategori-box text-center small">Surabaya</div>
                        </div>
                    </div>

                    <div class="row col-12">
                        <input type="submit" class="submit-search mx-auto" value="Cari">
                    </div>
                </div>
                
                </form>
            </div>
            <div class="text-px">
            <h2 class="text-white text-center text-head mt-4">
            Kami menawarkan Jasa Sewa Mobil Surabaya dan beberapa kota besar lainnya di Indonesia, dengan servis yang aman dan terpercaya bagi setiap orang, baik untuk keperluan bisnis, keluarga maupun liburan
            </h2>
            </div>
            
            <img src="{{ asset('image/mobil-round.png') }}" alt="" class="mobil img-fluid mx-auto d-block">
        </div>
    </div>
    <div id="section-2">
        <div class="container">
            <div class="row col-12 mb-5">
                <div class="col-4">
                    <h4><b>Anda punya mobil nganggur?</b></h4>
                    <h4 class="">Segera daftarin aja di RentalKu!</h4>
                    <a href="" class="btn-daftar  d-inline-block px-5 py-2">Daftar Sekarang</a>
                </div>
                <div class="col-4 offset-4">
                    <h4 class="text-right"><b>Mau liburan keluarga
                    tapi nggak ada mobil?</b></h4>
                    <h4 class="text-right">Buruan rental sekarang juga!</h4>
                    <a href="" class="btn-rental float-right d-inline-block px-5 py-2">Rental Sekarang</a>
                </div>
            </div>
        </div>
    </div>

    <div id="mobil">
        <div class="container">
            <div class="row col-12">
            @for($i=0;$i<=3;$i++)
                <div class="col-4 mb-3">
                    <div class="box-border">
                        <div class="img-box img-box-mobil">
                        <img src="{{ asset('image/avanza.jpeg') }}" alt="" class="h-100 w-100">
                        </div>
                        <div class="row px-3">
                            <div class="text-box text-box-left p-2 col-6">
                                <label for="" class="mb-0">Mini mvp</label>
                                <p class="mb-0"><b>Toyota Avanza</b></p>
                                <p>Tanpa sopir</p>
                            </div>
                            <div class="text-box text-box-right p-2 col-6">
                                <p class="text-right price mb-0">Rp. 300.000/ Hari</p>
                                <p class="text-right mb-0 color-base"><i class="fa-solid fa-star star"></i> 5.0</p>
                                <p class="text-right color-base"><i class=" fa-solid fa-user"></i> 6</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            @endfor
            </div>
        </div>
    </div>

    <div id="artikel mb-2">
        <div class="container">
            <div class="row col-12 mb-2">
                <h1 class="mx-auto">Artikel</h1>
            </div>
            <div class="row col-12 mb-2">
                <div class="col-4 mb-3">
                    <div class="box-border">
                        <div class="img-box">
                            <img src="{{ asset('image/landscape1.png') }}" alt="" class="h-100 w-100">
                        </div>
                        <div class="textbox p-2">
                        <label class="label-produk" for="">otomotif</label>
                        <p><b>Enam Teknik Mencuci Mobil yang Benar, Jangan Asal!</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="box-border">
                    <div class="img-box">
                        <img src="{{ asset('image/landscape2.png') }}" alt="" class="h-100 w-100">
                    </div>
                    <div class="textbox p-2">
                    <label for="">Travel</label>
                    <p><b>Enam Teknik Mencuci Mobil yang Benar, Jangan Asal!</b></p>
                    </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="box-border">
                        <div class="img-box">
                            <img src="{{ asset('image/landscape1.png') }}" alt="" class="h-100 w-100">
                        </div>
                        <div class="textbox p-2">
                        <label class="label-produk" for="">otomotif</label>
                        <p><b>Enam Teknik Mencuci Mobil yang Benar, Jangan Asal!</b></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row col-12">
                <p class="mx-auto"><i><a href="" class="selengkapnya">Lihat selengkapnya</a></i></p>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function(){
                $('.button').click(function(e){
                    if($('.search-toggle-box').hasClass("hidden")){
                        $('.search-toggle-box').removeClass('hidden');
                    }else{
                        $('.search-toggle-box').addClass('hidden');
                    }
                    e.preventDefault();
                });
                $('.cari-rental').focus(function(){
                    $('.search-toggle-box').removeClass('hidden');
                });
                $('.pilihankota-check').click(function(e){
                    nama = $(e.currentTarget).text();
                    var classList = $(e.currentTarget).attr("for");
                    element = '.'+classList;
                    if($(element).is(":checked")){
                        $(element).prop('checked', false);
                    }else{
                        $(element).prop('checked', true);
                    }                 
                });
        });
    </script>
@endsection