@include('komponen.pesan')

<!DOCTYPE html>
<html lang="en">
@include('layout.head')
    <body>
        <div id="app">
            @include('layout.sidebar')
            <div id="main">
                <header class="mb-3">
                    <a href="#" class="burger-btn d-block d-xl-none">
                        <i class="bi bi-justify fs-3"></i>
                    </a>
                </header>
                <div class="page-heading">
                    <h3>Tambah Alternatif</h3>
                </div>
                <div class="page-content">
                    <section class="row">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tambah Data</h4>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <a href="{{ url('Alternatif') }}" class="btn btn-secondary"><< kembali</a>
                                    <form action="{{ url('Alternatif') }}" method="POST">
                                    @csrf
                                   
                                    <div class="form-group">
                                        <label for="basicInput">Simbol</label>
                                        <input type="text" class="form-control" name="simbol" id="simbol">
                                    </div>
                                    <div class="form-group">
                                        <label for="basicInput">Nama Alternatif</label>
                                        <input type="text" class="form-control" name="namaAlternatif"  id="namaAlternatif">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-info btn-sm">
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    </section>
                </div>
                @include('layout.footer')
            </div>
        </div>
        @include('layout.js')
    </body>

</html>