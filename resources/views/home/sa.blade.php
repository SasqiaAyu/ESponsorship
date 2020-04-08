@extends('layouts.admin')

@section('menu','home')
@section('content')
<div class="notika-status-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                    <div class="website-traffic-ctn">
                        <h2><span class="counter">{{$studentActive}}</span></h2>
                        <p>Total<br>Mahasiswa Aktif</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                    <div class="website-traffic-ctn">
                        <h2><span class="counter">{{$companyActive}}</span></h2>
                        <p>Total<br>Perusahaan Aktif</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                    <div class="website-traffic-ctn">
                        <h2><span class="counter">{{$studentRequest}}</span></h2>
                        <p>Jumlah<br>Pendaftar Mahasiswa</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                    <div class="website-traffic-ctn">
                        <h2><span class="counter">{{$companyRequest}}</span></h2>
                        <p>Jumlah<br>Pendaftar Perusahaan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="sale-statistic-area" hidden>
    <div class="container">
        <div class="row">
            <div class="post col-lg-3 col-md-3 col-sm-8 col-xs-12 mg-tb-10">
                <h3 class="text-center mg-tb-30">Perusahaan Aktif</h3>
                <div class="sale-statistic-inner notika-shadow">
                    <div class="curved-inner-pro">
                        <div class="curved-ctn">
                            <h2>Perusahaan Aktif</h2>
                            <p>aaa</p>
                        </div>
                    </div>
                </div>
                <div class="post sale-statistic-inner notika-shadow mg-tb-10">
                    <div class="curved-inner-pro">
                        <div class="curved-ctn">
                            <h2>Perusahaan Aktif</h2>
                            <p>aaa</p>
                        </div>
                    </div>
                </div>
                <div class="post sale-statistic-inner notika-shadow mg-tb-10">
                    <div class="curved-inner-pro">
                        <div class="curved-ctn">
                            <h2>Perusahaan Aktif</h2>
                            <p>aaa</p>
                        </div>
                    </div>
                </div>
                <div class="post sale-statistic-inner notika-shadow mg-tb-10">
                    <div class="curved-inner-pro">
                        <div class="curved-ctn">
                            <h2>Perusahaan Aktif</h2>
                            <p>aaa</p>
                        </div>
                    </div>
                </div>
                <div class="post sale-statistic-inner notika-shadow mg-tb-10">
                    <div class="curved-inner-pro">
                        <div class="curved-ctn">
                            <h2>Perusahaan Aktif</h2>
                            <p>aaa</p>
                        </div>
                    </div>
                </div>
                <div class="post sale-statistic-inner notika-shadow mg-tb-10">
                    <div class="curved-inner-pro">
                        <div class="curved-ctn">
                            <h2>Perusahaan Aktif</h2>
                            <p>aaa</p>
                        </div>
                    </div>
                </div>
                <div class="post sale-statistic-inner notika-shadow mg-tb-10">
                    <div class="curved-inner-pro">
                        <div class="curved-ctn">
                            <h2>Perusahaan Aktif</h2>
                            <p>aaa</p>
                        </div>
                    </div>
                </div>
                <div class="post sale-statistic-inner notika-shadow mg-tb-10">
                    <div class="curved-inner-pro">
                        <div class="curved-ctn">
                            <h2>Perusahaan Aktif</h2>
                            <p>aaa</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection