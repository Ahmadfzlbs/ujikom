@extends('layouts.auth')
@section('contents')
<div class="row justify-content-center">
    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

        <div class="d-flex justify-content-center py-4">
            <a href="index.html" class="logo d-flex align-items-center w-auto">
                <img src="/assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">TRA-KAI</span>
            </a>
        </div><!-- End Logo -->

        <div class="card mb-3">

            <div class="card-body">

                <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Buat Akun TRA-KAI</h5>
                </div>

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
        </div>

        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="">Ahmad Fauzi Lubis </a>
        </div>

    </div>
</div>
@endsection
