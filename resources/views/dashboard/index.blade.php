<!DOCTYPE html>
<html lang="en">
   @extends('layout.head')

    <body>
        <div id="app">
            @extends('layout.sidebar')
            <div id="main">
                <header class="mb-3">
                    <a href="#" class="burger-btn d-block d-xl-none">
                        <i class="bi bi-justify fs-3"></i>
                    </a>
                </header>
                <div class="page-heading">
                    <h3>Dashboard</h3>
                </div>
                <div class="page-content">
                    <section class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>SPK Pemilihan Bibit Unggul Jagung Pipil</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p class="card-text">
                                            Metode Simple Additive Weighting (SAW) sering juga dikenal istilah metode
                                            penjumlahan terbobot. Konsep dasar metode SAW adalah mencari penjumlahan
                                            terbobot dari rating kinerja pada setiap alternatif pada semua atribut
                                            (Fishburn 1967). SAW dapat dianggap sebagai cara yang paling mudah dan
                                            intuitif untuk menangani masalah Multiple Criteria Decision-Making MCDM,
                                            karena fungsi linear additive dapat mewakili preferensi pembuat keputusan
                                            (Decision-Making, DM). Hal tersebut dapat dibenarkan, namun, hanya ketika
                                            asumsi preference independence (Keeney & Raiffa 1976) atau preference
                                            separability (Gorman 1968) terpenuhi.
                                        </p>
                                        <hr>
                                        <p class="card-text">
                                            Langkah Penyelesaian Simple Additive Weighting (SAW) adalah sebagai berikut
                                            :
                                        </p>
                                        <ol type="1">
                                            <li>Menentukan kriteria-kriteria yang akan dijadikan acuan dalam pengambilan
                                                keputusan</i>
                                            <li>Menentukan rating kecocokan setiap alternatif pada setiap kriteria.
                                            </li>
                                            <li>Membuat perhitungan untuk menentukan nilai normalisasi</li>
                                            <li>Hasil akhir diperoleh dari proses SPK yang menampilkan perangkingan nilai 
                                                terbaik dari beberapa alternatif yang telah ditentukan.
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                @extends('layout.footer')
            </div>
        </div>
        @extends('layout.js')
    </body>

</html>