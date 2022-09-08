@extends('layout')

@section('container')

<!-- Page content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Prediksi Maturity</h1>

    <!-- /.container-fluid -->
    <div class=" card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pengukuran</h6>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data" action="{{route('inputprediksi')}}">
                @csrf
                <div class=" form-group">
                    <label class="form-control-label" for="input-name">Rentang Waktu Pengukuran (Jam)</label>
                    <input name="rentang" type="text" id="rentang" class="form-control" placeholder="(jam)">
                </div>
                <div class=" form-group">
                    <label class="form-control-label" for="input-name">fc' (MPa)</label>
                    <input name="dfc" type="text" id="dfc'" class="form-control" placeholder="(MPa)">
                </div>
                {{-- <div class="form-group">
                    <label class="form-control-label" for="input-name">Mutu Beton</label>
                    <select name="mutu_beton" id="mutu_beton" class="form-control">
                        <option disabled selected value> -- Rentang Mutu Beton
                            -- </option>
                        <option value="A">
                            < 17.5</option>
                        <option value="B">17.5 - 35</option>
                        <option value="C">35 - 52.5</option>
                        <option value="D">52.5 - 70</option>
                    </select>
                </div> --}}
                <div class="form-group">
                    <label class="form-control-label" for="input-name">Bentuk Sampel </label>
                    <select name="bentuk_sampel" id="bentuk_sampel" class="form-control">
                        <option disabled selected value> -- Pilih Bentuk Sampel
                            -- </option>
                        <option value="silinder">Silinder</option>
                        <option value="kubus">Kubus</option>>
                    </select>
                </div>
                {{-- <div class="form-group">
                    <label for="exampleFormControlFile1">Data Riwayat Pengukuran</label>
                    <input name="data_csv" accept="csv" type="file" class="form-control-file" id="data_csv">
                </div> --}}
                <button type="button" class="btn btn-md" data-toggle="modal" data-target="#submitPrediksi"
                    style="color: white; width: 100%; background-color: #1a174d">Prediksi</button>
                <div class="modal fade" id="submitPrediksi" data-backdrop="static" data-keyboard="false" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <h5 class="mt-3">Apakah Anda yakin ingin menghapus data ?</h5>
                            </div>
                            <div class="modal-footer">
                                <button data-target="#inputperdiksi" type="submit" value="daftar" class="btn btn-md"
                                    style="color: white; background-color: #1a174d">Benar</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection