@extends('layout')

@section('container')

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Riwayat Pengukuran</h1>
    <div class=" card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pengukuran</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="btn-group" role="group">
                    <h5 class="card-title" style="font-size: xx-large; text-align: left;">
                        <a href="{{url('measurement/excel')}}">
                            <button class="btn btn-md bg-success" style="color: white;">Export Excel <i
                                    class="fas fa-file-excel ml-2"></i></button>
                        </a>
                    </h5>
                    <h5 class="card-title" style="font-size: xx-large; text-align: left;">
                        <a href="{{url('measurement/delete')}}">
                            <button class="btn btn-danger btn-icon-splitd" data-toggle="modal" data-target="#konfirmasi"
                                style="color: white;">Hapus Data <i class="fas fa-trash"></i></button>
                        </a>
                    </h5>

                </div>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Suhu</th>
                            <th scope="col">Susut</th>
                            <th scope="col">waktu pengukuran</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach ($measurement as $row)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$row->suhu}}</td>
                            <td>{{$row->panjang}}</td>
                            <td>{{$row->created_at}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="modal fade" id="konfirmasi" data-backdrop="static" data-keyboard="false" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <h5 class="mt-3">Data sudah benar ?</h5>
                            </div>
                            <div class="modal-footer">
                                <button data-target="#inputperdiksi" type="submit" value="daftar" class="btn btn-md"
                                    style="color: white; background-color: #1a174d">Benar</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- End of Main Content -->
@endsection