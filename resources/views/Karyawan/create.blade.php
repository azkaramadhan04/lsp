@extends('Layout.main')

@section('content')
    <div class="col-12 ps-4">
        <h4>>> Tambah Data Karyawan</h4>
        <a href="/Karyawan/index" class="btn btn-info btn-md p-2 mb-3">Kembali</a>
    </div>
    <div class="col-12 ps-4">
        <div class="col-12 bg-light p-2 rounded-3 shadow-sm">
            <form action="/Karyawan/store" method="POST">
                @csrf
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Jabatan</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="comboJabatan" id="combo1">
                            <option value=""></option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Nama Karyawan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="jumlah_gaji_pokok">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">No Hp</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="jumlah_gaji_pokok">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="jumlah_gaji_pokok">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="jumlah_gaji_pokok">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="comboJabatan" id="combo1">
                            <option value=""></option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="comboJabatan" id="combo1">
                            <option value=""></option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Jumlah Anak</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="jumlah_gaji_pokok">
                    </div>
                </div>
                <div class="d-grid text-end">
                    <div class="col-sm-12">
                        <button class="btn btn-primary btn-sm" type="submit">CREATE</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection