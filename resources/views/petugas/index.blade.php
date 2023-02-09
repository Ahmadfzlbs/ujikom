@extends('layouts.app')
@section('contents')
<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
    <div class="row">
        <form class="row g-3 needs-validation" method="post" action="{{ route('penumpang.custom') }}" novalidate>
            @csrf
            <div class="col-12">
                <label for="Nama Petugas" class="form-label">Nama Penumpang</label>
                <input type="text" name="nama_penumpang" class="form-control" id="nama_penumpang" required>
                <div class="invalid-feedback">Nama Petugas harus diisi!</div>
            </div>

            <div class="col-12">
                <label for="Nama Petugas" class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="alamat" required>
                <div class="invalid-feedback">Nama Petugas harus diisi!</div>
            </div>

            <div class="col-12">
                <label for="Nama Petugas" class="form-label">Jenis Kelamin</label>
                <div class="input-group input-group-merge">
                    <select id="jenis_kelamin" class="form-control" name="jenis_kelamin">
                        <option value="">...</option>
                        <option value="Perempuan">Perempuan</option>
                        <option value="Laki-laki">Laki-laki</option>
                    </select>
                </div>
                <div class="invalid-feedback">Nama Petugas harus diisi!</div>
            </div>

            <div class="col-12">
                <label for="Username" class="form-label">Tanggal Lahir</label>
                <div class="input-group has-validation">
                    <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" required>
                    <div class="invalid-feedback">Username harus diisi!</div>
                </div>
            </div>

            <div class="col-12">
                <label for="Password" class="form-label">Telepon</label>
                <input type="number" name="telepon" class="form-control" id="telepon" required>
                <div class="invalid-feedback">Password harus diisi!</div>
            </div>

            <div class="col-12">
                <label for="Password" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="username" required>
                <div class="invalid-feedback">Password harus diisi!</div>
            </div>

            <div class="col-12">
                <label for="Password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" required>
                <div class="invalid-feedback">Password harus diisi!</div>
            </div>

            <div class="col-12">
                <button class="btn btn-primary w-100" type="submit">Buat Akun</button>
            </div>
            <div class="col-12">
                <p class="small mb-0">Sudah mempunyai akun? <a href="pages-login.html">Masuk</a></p>
            </div>
        </form>
    </div>
</section>
@endsection
