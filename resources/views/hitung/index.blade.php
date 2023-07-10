@extends('layout.head')

<section class="table-data">
    @extends('layout.sidebar')
    <!-- Table head options start -->
    <section class="section">
        <div class="row" id="table-head">
            <div class="col-12">
                <div class="card">
                    <div class="card-content mt-3">
                        <h5 class="ps-3">Bobot Kriteria</h5>
                        <!-- table head dark -->
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="ps-3">Kadar Air</th>
                                        <th>Hasil Produksi</th>
                                        <th>Ketahanan Hama</th>
                                        <th>Ukuran Buah</th>
                                        <th>Tanggal Tanam</th>
                                        <th>Tanggal Panen</th>
                                    </tr>
                                </thead>
                                <tbody>
                            
                                    <tr>
                                        <td class="ps-3">{{ $widget1['kriterias'] }}</td>
                                        <td>{{ $widget2['kriterias'] }}</td>
                                        <td>{{ $widget3['kriterias'] }}</td>
                                        <td>{{ $widget4['kriterias'] }}</td>
                                        <td>{{ $widget5['kriterias'] }}</td>
                                        <td>{{ $widget6['kriterias'] }}</td>
                                        <td>{{ $widget1['kriterias'] + $widget2['kriterias'] + $widget3['kriterias'] + $widget4['kriterias'] + $widget5['kriterias'] }}
                                    </tr>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>

<section class="table-data">
    <!-- Table head options start -->
    <section class="section">
        <div class="row" id="table-head">
            <div class="col-12">
                <div class="card">
                    <div class="card-content mt-3">
                        <h5 class="ps-3">Normalisasi</h5>
                        <!-- table head dark -->
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="ps-3">Nama</th>
                                        <th>Kadar Air</th>
                                        <th>Hasil Produksi</th>
                                        <th>Ketahanan Hama</th>
                                        <th>Ukuran Buah</th>
                                        <th>Tanggal Tanam</th>
                                        <th>Tanggal Panen</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                    <tr>
                                        <td class="ps-3">{{$item->namaAlternatif }}</td>
                                        <td>{{$C1min['alternatif'] / $item->kadar_air}}</td>
                                        <td>{{$item->hasil_produksi / $C2max['alternatif']}}</td>
                                        <td>{{$item->ketahanan_hama / $C3max['alternatif']}}</td>
                                        <td>{{$C4min['alternatif'] / $item->ukuran_buah}}</td>
                                        <td>{{$item->tgl_tanam / $C5max['alternatif']}}</td>
                                        <td>{{$item->tgl_panen / $C6max['alternatif']}}</td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
@extends('layout.footer')

<section class="table-data">
    <!-- Table head options start -->
    <section class="section">
        <div class="row" id="table-head">
            <div class="col-12">
                <div class="card">
                    <div class="card-content mt-3">
                        <h5 class="ps-3">Hasil</h5>
                        <!-- table head dark -->
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="ps-3">Jagung Terbaik</th>
                                        <th>Hasil Perhitungan</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                    <tr>
                                        <td class="ps-3">{{$item->namaAlternatif}}</td>
                                        <td>
                                            {{(($C1min['alternatif'] / $item->kadar_air)*$widget1['kriterias'])+
                                            (($item->hasil_produksi / $C2max['alternatif'])*$widget2['kriterias'])+
                                            (($item->ketahanan_hama / $C3max['alternatif'])*$widget3['kriterias'])+
                                            (($C4min['alternatif'] / $item->ukuran_buah)*$widget4['kriterias'])+
                                            (($item->tgl_tanam / $C5max['alternatif'])*$widget5['kriterias'])
                                            (($item->tgl_panen / $C6max['alternatif'])*$widget6['kriterias'])}}
                                        </td>
                                     
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
@extends('layout.js')
@endsection
