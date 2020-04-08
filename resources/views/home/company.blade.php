@extends('layouts.admin')

@section('menu','home')
@section('content')
<div class="notika-status-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                    <div class="website-traffic-ctn">
                        <h2><span class="counter">{{$request}}</span></h2>
                        <p>Jumlah<br>Pengajuan</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                    <div class="website-traffic-ctn">
                        <h2><span class="counter">{{$requestApprove}}</span></h2>
                        <p>Jumlah<br>Pengajuan di Approve</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                    <div class="website-traffic-ctn">
                        <h2><span class="counter">{{$fakultas}}</span></h2>
                        <p>Jumlah<br>Fakultas</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                    <div class="website-traffic-ctn">
                        <h2><span class="counter">{{$student}}</span></h2>
                        <p>Jumlah<br>Mahasiswa</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="sale-statistic-area">
    <div class="container">
        <div class="row">
            <div class="post col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-tb-10">
                <h3 class="text-center mg-tb-30">List Proposal</h3>
                <table id="data-table-basic" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nama Mahasiswa</th>
                            <th>Proposal</th>
                            <th>Status</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($proposal as $proposal)
                        <tr>
                            <td>{{$proposal->student->user->nama}}</td>
                            @if ($proposal->file_sumber != null)
                                <td><a href="{{(url('storage/'.$proposal->file_sumber))}} " target="_blank" rel="noopener noreferrer">link</a></td>
                            @else
                                <td></td>
                            @endif
                            <td>
                                @if ($proposal->approve == null)
                                belum di proses
                                @elseif ($proposal->approve == 1)
                                    Approved
                                @elseif ($proposal->approve == 2)
                                    Rejected
                                @endif
                            </td>
                            <td>
                                <button class="col-md-12 btn btn-success">Approve</button>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Nama Mahasiswa</th>
                            <th>Proposal</th>
                            <th>Status</th>
                            <th>action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection