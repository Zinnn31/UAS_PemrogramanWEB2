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
                    <h3>Edit Kriteria</h3>
                </div>
                <div class="page-content">
                    <section class="row">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Data</h4>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <a href="{{ url('Kriteria') }}" class="btn btn-secondary"><< kembali</a>
                                    <form action="{{ url('Kriteria/'.$dataKr->namaKriteria) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="basicInput">Nama Kriteria</label>
                                        <input type="text" class="form-control" name="namaKriteria" value="{{ $dataKr->namaKriteria}}" id="namaKriteria">
                                    </div>
                                    <div class="form-group">
                                        <label for="basicInput">Atribut</label>
                                        <select class="form-control form-select" name="atribut">
                                            <option value="benefit">Benefit</option>
                                            <option value="cost">Cost</option>
                                          </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="basicInput">Kepentingan</label>
                                        <input type="text" class="form-control" name="kepentingan" value="{{ $dataKr->kepentingan}}" id="kepentingan">
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