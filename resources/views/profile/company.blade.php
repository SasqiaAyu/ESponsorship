@extends('layouts.admin')

@section('menu','profile')
@section('submenu','profile.index')
@section('content')
<div class="notika-status-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                <div class="form-element-list">
                    <div class="basic-tb-hd">
                        <h2>Detail User</h2>
                    </div>
                    @if(session()->has('Message Success'))
                    <div class="alert alert-success">
                        {{ session()->get('Message Success') }}
                    </div>
                    @endif
                    @if(session()->has('Message Failed'))
                    <div class="alert alert-danger">
                        {{ session()->get('Message Failed') }}
                    </div>
                    @endif
                    <form action="{{route('profile.update', auth()->user()->id)}}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label>Nama</label>
                            <div class="nk-int-st">
                                <input type="text" class="form-control input-sm @error('nama') is-invalid @enderror"
                                    name="nama" placeholder="Masukkan Nama"
                                    value="{{ old('nama')?old('nama'):auth()->user()->nama }}">
                                @error('nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <div class="nk-int-st">
                                <input type="text" class="form-control input-sm" name="email"
                                    placeholder="Masukkan Email" value="{{old('email')?old('email'):auth()->user()->email}}">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror


                            </div>
                        </div>
                        <div class="form-group">
                            <label>Telpon</label>
                            <div class="nk-int-st">
                                <input type="text" class="form-control input-sm" name="telp"
                                    placeholder="Masukkan Telpon" value="{{old('telp')?old('telp'):auth()->user()->telp}}">
                                @error('telp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <div class="nk-int-st">
                                <input type="text" class="form-control input-sm" name="alamat"
                                    placeholder="Masukkan Alamat" value="{{old('alamat')?old('alamat'):auth()->user()->alamat}}">
                                @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Foto</label>
                            <div class="nk-int-st">
                                <input type="file" class="form-control input-sm" name="foto"
                                    placeholder="Masukkan Foto" value="{{old('foto')?old('foto'):auth()->user()->foto}}">
                                @error('foto')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Kategori Perusahaan</label>
                            <div class="nk-int-st">
                                <input type="text" class="form-control input-sm" name="kategori_company"
                                    placeholder="Masukkan Kategori Perusahaan" value="{{old('kategori_company')?old('kategori_company'):auth()->user()->company->kategori}}">
                                @error('fakultas')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nama Owner</label>
                            <div class="nk-int-st">
                                <input type="text" class="form-control input-sm" name="nama_owner"
                                    placeholder="Masukkan Nama Owner" value="{{old('nama_owner')?old('nama_owner'):auth()->user()->company->nama_owner}}">
                                @error('nama_owner')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <div class="nk-int-st">
                                <textarea type="text" class="form-control input-sm" name="deskripsi"
                                    placeholder="Masukkan Deskripsi">{{old('deskripsi')?old('deskripsi'):auth()->user()->company->deskripsi}}</textarea>
                                @error('deskripsi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label>{{ __('Password') }}</label>
                            <div class="nk-int-st">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label>{{ __('Confirm Password') }}</label>
                            <div class="nk-int-st">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" autocomplete="new-password">
                            </div>
                        </div>
                        <button class="btn btn-info" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection