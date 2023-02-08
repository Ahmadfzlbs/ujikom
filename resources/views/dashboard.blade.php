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

        <!-- Left side columns -->
        <div class="col-lg-12">
            <div class="row">

                <!-- Sales Card -->
                <div class="col-lg-4 col-md-6">
                    <div class="card info-card sales-card">

                        <div class="card-body">
                            <h5 class="card-title">Nama Peserta <span>| UJIKOM</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="d-flex align-items-center justify-content-center">
                                </div>
                                <div class="ps-3">
                                    <h4>Ahmad Fauzi Lubis</h4>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Sales Card -->

                <!-- Sales Card -->
                <div class="col-lg-4 col-md-6">
                    <div class="card info-card sales-card">

                        <div class="card-body">
                            <h5 class="card-title">Kelas <span>| UJIKOM</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="d-flex align-items-center justify-content-center">
                                </div>
                                <div class="ps-3">
                                    <h4>MI20 A</h4>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Sales Card -->

                <!-- Sales Card -->
                <div class="col-lg-4 col-md-6">
                    <div class="card info-card sales-card">

                        <div class="card-body">
                            <h5 class="card-title">Keahlian <span>| UJIKOM</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="d-flex align-items-center justify-content-center">
                                </div>
                                <div class="ps-3">
                                    <h4>Mobile Developer</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Sales Card -->
            </div>
        </div><!-- End Left side columns -->

    </div>
</section>
@endsection
