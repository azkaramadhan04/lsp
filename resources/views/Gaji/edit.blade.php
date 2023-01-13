@extends('Layout.main')

@section('content')
    <div class="col-12 ps-4">
        <h4>>> Tambah Data Gaji</h4>
        <a href="/Gaji/index" class="btn btn-info btn-md p-2 mb-3">Kembali</a>
    </div>
    <div class="col-12 ps-4">
        <div class="col-12 bg-light p-2 rounded-3 shadow-sm">
            <form action="/jabatan/store" method="POST">
                @csrf
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Karyawan</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="comboJabatan" id="combo1">
                            <option value=""></option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Bulan</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="comboJabatan" id="combo1">
                            <option value="">Januari</option>
                            <option value="">Februari</option>
                            <option value="">Maret</option>
                            <option value="">April</option>
                            <option value="">Mei</option>
                            <option value="">Juni</option>
                            <option value="">Juli</option>
                            <option value="">Agustus</option>
                            <option value="">September</option>
                            <option value="">Oktober</option>
                            <option value="">November</option>
                            <option value="">Desember</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Sakit</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="jumlah_upah_lembur">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Izin</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="jumlah_upah_lembur">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Alpha</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="jumlah_upah_lembur">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Total Tunjangan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="jumlah_upah_lembur">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Gaji Kotor</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="jumlah_upah_lembur">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Pajak</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="jumlah_upah_lembur">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Gaji Bersih</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="jumlah_upah_lembur">
                    </div>
                </div>
                <div class="d-grid text-end">
                    <div class="col-sm-12">
                        <button class="btn btn-primary btn-sm" type="submit">UPDATE</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection