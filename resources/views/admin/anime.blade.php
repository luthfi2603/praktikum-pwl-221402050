@extends('admin.layout')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="h3 mb-0 text-gray-800">Anime</h1>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <p>
                            Top 3 Anime Spring 2023.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card panjangKartu" style="width: 18rem;">
                            <img src="{{asset('assets2/img/kny_s3.jpg')}}" class="cover" alt="kimetsu_no_yaiba_s3">
                            <div class="card-body">
                                <h5 class="card-title">Kimetsu no Yaiba: Katanakaji no Sato-hen</h5>
                                <p class="card-text">
                                    Kimetsu No Yaiba season 3, Swordsmith Village Arc merupakan kisah 
                                    lanjutan Kamado Tanjiro dkk dalam upaya menyelamatkan adiknya Kamado 
                                    Nezuko untuk kembali menjadi manusia. Kali ini, sang pemburu iblis 
                                    itu berpetualang ke desa penempa pedang untuk mendapatkan senjata barunya.
                                </p>
                                <a href="https://myanimelist.net/anime/51019/Kimetsu_no_Yaiba__Katanakaji_no_Sato-hen" class="btn btn-outline-success">
                                    Info Selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card panjangKartu" style="width: 18rem;">
                            <img src="{{asset('assets2/img/dr_stone_new_world.jpg')}}" class="cover" alt="dr_stone_new_world">
                            <div class="card-body">
                                <h5 class="card-title">Dr. Stone: New World</h5>
                                <p class="card-text">
                                    Merupakan seri lanjutan dari yang sebelumnya, sekarang Senku bekerja sama dengan 
                                    Tsukasa dan menjadi tim terkuat yang pernah ada, mereka akan pergi ke laut.
                                    Senku dan teman-temannya membuat kembali teknologi untuk memecahkan misteri 
                                    di balik pembatuan. Nanami Ryuusui adalah seorang nahkoda yang akan dibangkitkan mereka.
                                </p>
                                <a href="https://myanimelist.net/anime/48549/Dr_Stone__New_World" class="btn btn-outline-success">
                                    Info Selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card panjangKartu" style="width: 18rem;">
                            <img src="{{asset('assets2/img/jigokuraku.jpg')}}" class="cover" alt="jigokuraku">
                            <div class="card-body">
                                <h5 class="card-title">Jigokuraku</h5>
                                <p class="card-text">
                                    menceritakan tentang kehidupan di dunia ninja atau shinobi. Gabimaru
                                    tokoh utama nya adalah seorang ninja pembunuh yang paling ditakuti.
                                    Suatu hari ia ditangkap dan dihukum mati. Tetapi dia mendapat tawaran
                                    misi untuk mencari sebuah ramuan, apakah yang akan terjadi
                                </p>
                                <a href="https://myanimelist.net/anime/46569/Jigokuraku"
                                    class="btn btn-outline-success">Info Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection('content')