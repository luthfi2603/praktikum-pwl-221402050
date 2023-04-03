@extends('admin.layout')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="h3 mb-0 text-gray-800">Lagu-lagu</h1>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <p class="mb-0">
                            Beberapa lagu yang sering saya dengar.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <section class="marginBawah">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-interval="228000">
                        <div class="card cardBawah keTengah panjangKartu2" style="width: 18rem;">
                            <img src="{{asset('assets2/img/ano_yume.jpg')}}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Ano Yume wo Nazotte <br> あの 夢 を なぞって </h5>
                                <p class="card-text">
                                    Bercerita tentang seseorang yang bermimpi, dan di dalam mimpinya itu
                                    dia sedang berada di festival bersama pasangannya. Ketika kembang api 
                                    di nyalakan, pasangannya itu berkata "aku mencintaimu"
                                </p>
                                <audio controls id="aud" class="audio" style="width: 100%; margin: 0 auto;">
                                    <source src="{{asset('src/YOASOBI - Ano Yume Wo Nazotte (あの 夢 を なぞって).mp3')}}" type="audio/mpeg">
                                    Browser tidak mendukung!
                                </audio>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-interval="228000">
                        <div class="card cardBawah keTengah panjangKartu2" style="width: 18rem;">
                            <img src="{{ asset('assets2/img/omokage.png') }}"
                                class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Omokage <br> おもかげ</h5>
                                <p class="card-text">
                                    Bercerita tentang seseorang yang sedang sangat bersedih
                                </p>
                                <audio controls id="aud" class="audio" style="width: 100%; margin: 0 auto;">
                                    <source src="{{asset('src/millet x aimer x lilas ikuta - Omokage.mp3')}}" type="audio/mpeg">
                                    Browser tidak mendukung!
                                </audio>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-interval="228000">
                        <div class="card cardBawah keTengah panjangKartu2" style="width: 18rem;">
                            <img src="{{ asset('assets2/img/YOASOBI - Harujion.jpg') }}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Halzion <br> ハルジオン </h5>
                                <p class="card-text">
                                    Lagu ini bercerita tentang sepasang kekasih yang menyesal telah berpisah di masa
                                    lalu.
                                </p>
                                <audio controls id="aud" class="audio" style="width: 100%; margin: 0 auto;">
                                    <source src="{{ asset('src/YOASOBI - Halzion (ハルジオン).mp3') }}" type="audio/mpeg">
                                    Browser tidak mendukung!
                                </audio>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev border-0 p-0 bg-transparent" type="button" data-target="#carouselExampleIndicators"
                    data-slide="prev">
                    <span class="carousel-control-prev-icon bg-success" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next border-0 p-0 bg-transparent" type="button" data-target="#carouselExampleIndicators"
                    data-slide="next" id="btn1">
                    <span class="carousel-control-next-icon bg-success" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </button>
            </div>
        </section>
    </div>
    <!-- /.container-fluid -->
@endsection('content')
