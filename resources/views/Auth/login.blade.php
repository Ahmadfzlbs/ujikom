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
                    <h5 class="card-title text-center pb-0 fs-4">Masuk Ke TRA-KAI</h5>
                </div>

                <form class="row g-3 needs-validation" method="post" action="{{ route('login.custom') }}" novalidate>
                    @csrf
                    <div class="col-12">
                        <label for="yourUsername" class="form-label">Username</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                            <input type="text" name="username" class="form-control" id="username" placeholder="Username" required>
                            <div class="invalid-feedback">Username harus diisi!</div>
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="yourPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                        <div class="invalid-feedback">Password harus diisi!</div>
                    </div>

                    <div class="col-12">
                        <button class="btn btn-primary w-100" type="submit">Masuk</button>
                    </div>
                    <div class="col-12">
                        <p class="small mb-0">Belum mempunyai akun? <a href="pages-register.html">Buat Akun</a></p>
                    </div>
                </form>

            </div>
        </div>

        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="">Ahmad Fauzi Lubis</a>
        </div>

    </div>
</div>
@endsection
