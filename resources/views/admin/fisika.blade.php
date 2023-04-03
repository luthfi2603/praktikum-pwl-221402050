@extends('admin.layout')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="h3 mb-0 text-gray-800">Fisika</h1>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <p class="mb-0">
                            Beberapa rumus-rumus fisika.
                        </p>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <ol>
                            <li>
                                Ekuivalensi massa-energi
                            </li>
                            <p class="mb-0">
                                Rumus : E = mc<sup>2</sup> <br>
                                <ul>
                                    <li>
                                        E = energi (J)
                                    </li>
                                    <li>
                                        m = massa (kg)
                                    </li>
                                    <li>
                                        c = kecepatan cahaya (m.s<sup>-1</sup>)
                                    </li>
                                </ul>
                            </p>
                            <li>
                                Tekanan Hidrostatis
                            </li>
                            <p class="mb-0">
                                Rumus : P = ρ.g.h <br>
                                <ul>
                                    <li>
                                        P = tekanan hidrostatis (Pa)
                                    </li>
                                    <li>
                                        ρ = massa jenis cairan (kg/m<sup>3</sup>)
                                    </li>
                                    <li>
                                        h = kedalaman (m)
                                    </li>
                                    <li>
                                        g = percepatan gravitasi (m/s<sup>2</sup>)
                                    </li>
                                </ul>
                            </p>
                            <li>
                                Momen Gaya (Torsi)
                            </li>
                            <p class="mb-0">
                                Rumus : τ = F.r <br>
                                <ul>
                                    <li>
                                        τ = momen gaya (Nm)
                                    </li>
                                    <li>
                                        F = Gaya yang bekerja (N)
                                    </li>
                                    <li>
                                        r = panjang lengan (m)
                                    </li>
                                </ul>
                            </p>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection('content')