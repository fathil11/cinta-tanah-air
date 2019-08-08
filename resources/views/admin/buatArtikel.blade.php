@extends('layouts.adminPanel')
@section('title', 'Buat Artikel')
@section('header')
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="header-body">
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col">
        <div class="card shadow cardcustom">
            <form action="{{ url('admin-edit-peserta') }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class=" container-fluid">
                    <br>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <b>Judul Artikel</b>
                                <input type="text" class="form-control form-control-alternative" name="judul"
                                    placeholder="Judul berita ...">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <b>Jenis Artikel</b>
                                <div class="custom-control custom-radio mb-3">
                                    <input name="custom-radio-2" class="custom-control-input" id="berita" checked=""
                                        type="radio">
                                    <label class="custom-control-label" for="berita">Berita</label>
                                </div>
                                <div class="custom-control custom-radio mb-3">
                                    <input name="custom-radio-2" class="custom-control-input" id="bertutur"
                                        type="radio">
                                    <label class="custom-control-label" for="bertutur">Bertutur</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div id="catber">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <b>Kategori Berita</b>
                                    <div class="custom-control custom-checkbox mb-3">
                                        <input class="custom-control-input" id="budaya" type="checkbox">
                                        <label class="custom-control-label" for="budaya">Budaya</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-3">
                                        <input class="custom-control-input" id="pemberdayaan" type="checkbox">
                                        <label class="custom-control-label" for="pemberdayaan">Pemberdayaan</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-3">
                                        <input class="custom-control-input" id="pendidikan" type="checkbox">
                                        <label class="custom-control-label" for="pendidikan">Pendidikan</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-3">
                                        <input class="custom-control-input" id="sosial" type="checkbox">
                                        <label class="custom-control-label" for="sosial">Sosial</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-3">
                                        <input class="custom-control-input" id="hukum" type="checkbox">
                                        <label class="custom-control-label" for="hukum">Hukum</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <b>Tulis Artikel</b>
                                <textarea class="form-control" rows="5" name="alasan_masuk"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary">Posting</button>
                        </div>
                    </div>
                    <br>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
