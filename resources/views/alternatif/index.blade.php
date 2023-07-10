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
                    <h3>Alternatif</h3>
                </div>
                <div class="page-content">
                    <section class="row">
                        <div class="col-12">
                            <div class="card">

                                <div class="card-header">
                                    <h4 class="card-title">Tabel Alternatif</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p class="card-text">
                                            Data-data mengenai kandidat yang akan dievaluasi di representasikan dalam
                                            tabel berikut:
                                        </p>
                                    </div>

                                    <div class="pb-3">
                                        <a href="{{ url('Alternatif/create') }}" class="btn btn-outline-success btn-sm m-2">+ Tambah Alternatif</a>
                                        <hr>
                                    </div>

                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th class="col-md-1">No</th>
                                                <th class="col-md-2">Simbol</th>
                                                <th class="col-md-3">Nama Alternatif</th>
                                                <th class="col-md-4">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = $dataAl->firstItem() ?>
                                            @foreach ($dataAl as $item)
                                            <tr>
                                                <td><?php echo $i ?></td>
                                                <td>{{ $item->simbol }}</td>
                                                <td>{{ $item->namaAlternatif }}</td>
                                                <td>
                                                    <a href='{{ url('Alternatif/'.$item->simbol.'/edit') }}' class="btn
                                                    btn-warning btn-sm">Edit</a>
                                                    <form onsubmit="return confirm('Yakin akan menghapus data?')" class='d-inline' action="{{ url('Alternatif/'.$item->simbol) }}" method="post">
                                                        @csrf 
                                                        @method('DELETE')
                                                        <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php $i++ ?>
                                            @endforeach        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                @extends('layout.footer')
            </div>
        </div>
        <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel33">Tambah Alternatif</h4>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <form action="{{ url('Alternatif/create')}}" method="POST">
                    @csrf
                        <div class="modal-body">
                            <label>Simbol: </label>
                            <div class="form-group">
                                <input type="text" name="simbol" placeholder="Simbol..." class="form-control"
                                    required>
                            </div>

                            <label>Name: </label>
                            <div class="form-group">
                                <input type="text" name="namaAlternatif" placeholder="Nama Alternatif..." class="form-control"
                                    required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Close</span>
                            </button>
                            <button type="submit" name="submit" class="btn btn-primary ml-1">
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Simpan</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
        @extends('layout.js')
    </body>

</html>