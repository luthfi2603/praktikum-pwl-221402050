@extends('admin.layout')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="h3 mb-0 text-gray-800">Game</h1>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <p class="mb-0">
                            Beberapa game yang saya mainkan.
                        </p>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <p>
                            1. Genshin Impact <br>
                            <div class="row">
                                <div class="col text-center">
                                    <img src="{{ asset('assets2/img/genshin.jpg') }}" alt="genshin" width="100px"> <br>
                                </div>
                            </div>
                            <div class="justi">
                                Genshin Impact merupakan game berpetualang rpg yang memiliki cerita yang sangat
                                bagus di dalamnya.
                            </div>
                        </p>
                    </div>
                    <div class="col">
                        <p>
                            2. Minecraft <br>
                            <div class="row">
                                <div class="col text-center">
                                    <img src="{{ asset('assets2/img/minecraft.jpg') }}" alt="genshin" width="100px"> <br>
                                </div>
                            </div>
                            <div class="justi">
                                Minecraft merupakan game casual yang memiliki 2 mode, mode 1 adalah mode survival 
                                yang mana kita akan bertahan hidup di dunia yang kita buat, siang hari mengumpulkan
                                sumber daya, dan di malam hari akan muncul mob-mob, seperti zombie, skeleton,
                                creeper, ender man, dll.
                                Mode kedua adalah mode creative, di mode ini kita dapat terbang dan sumber daya kita
                                tidak terbatas, kita bebas melakukan apa saja, seperti membangung dan menghancurkan.
                            </div>
                        </p>
                    </div>
                    <div class="col">
                        <p>
                            2. Mobile Legend <br>
                            <div class="row">
                                <div class="col text-center">
                                    <img src="{{ asset('assets2/img/ml.png') }}" alt="genshin" width="100px"> <br>
                                </div>
                            </div>
                            <div class="justi">
                                Merupakan game 5 vs 5 yang menangnya ketika kita menghancurkan base paling akhir
                                musuh.
                            </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection('content')