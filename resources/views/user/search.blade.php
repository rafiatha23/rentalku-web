@extends('user.layouts.app')

@section('css')
    <link href="{{ asset('css/user/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/user/search.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="search-container mt-2">
        <div class="search-box-outer mx-auto d-block ">
                <div class="search-box my-3">
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
    </div>
    <div class="tag-container">
        <div class="container">
        <div class="row bg-white py-2">
            <div class="col-6">
                <span class="tag-label p-1">Jakarta</span>
                <span class="tag-label p-1">Termurah</span>
                <span class="tag-label p-1">Rating</span>
                <span class="tag-label p-1"><7</span>
                <span class="tag-label p-1">Mini Mvp</span>
            </div>
            <div class="col-6 d-flex justify-content-end pagination">
                <a href="" class="mx-1"><i class="fa-solid fa-chevron-left base-color"></i></a>
                <a href="" class="mx-1"><i>1</i></a>
                <a href="" class="mx-1 px-2 active"><i>2</i></a>
                <a href="" class="mx-1"><i>3</i></a>
                <a href="" class="mx-1"><i>4</i></a>
                <a href="" class="mx-1"><i>5</i></a>
                <a href="" class="mx-1"><i class="fa-solid fa-chevron-right base-color"></i></a>
            </div>
        </div>
        </div>
    </div>
    <div id="mobil" class="mt-3">
        <div class="container">
            <div class="row col-12">
            @for($i=0;$i<=3;$i++)
                <div class="col-4 mb-3">
                    <div class="box-border" onclick='location.href="{{ route('user.detail-produk',3) }}"'>
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
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-end pagination">
            <a href="" class="mx-1"><i class="fa-solid fa-chevron-left base-color"></i></a>
                <a href="" class="mx-1"><i>1</i></a>
                <a href="" class="mx-1 px-2 active"><i>2</i></a>
                <a href="" class="mx-1"><i>3</i></a>
                <a href="" class="mx-1"><i>4</i></a>
                <a href="" class="mx-1"><i>5</i></a>
                <a href="" class="mx-1"><i class="fa-solid fa-chevron-right base-color"></i></a>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        function detail(){
            alert('s');
        }
    </script>
@endsection
