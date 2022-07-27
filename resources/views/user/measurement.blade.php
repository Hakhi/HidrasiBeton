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
                <h5 class="card-title" style="font-size: xx-large; text-align: left;">
                    <a href="{{url('measurement/excel')}}" class="">
                        <button class="btn btn-md bg-success" style="color: white;">Export <i
                                class="fas fa-file-excel ml-2"></i></button>
                    </a>
                </h5>
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
            </div>
        </div>
    </div>
</div>



<!-- End of Main Content -->
@endsection