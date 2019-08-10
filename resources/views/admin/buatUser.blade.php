@extends('layouts.adminPanel')
@section('title', 'Buat User')
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
    @if (Session::has('status'))
    <div class="col-md-12">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <span class="alert-inner--icon"><i class="ni ni-bell-55"></i></span>
            <span class="alert-inner--text"><strong> Maaf ! </strong> {{ Session::get('status') }}</span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    @endif
    <div class="col">
        <div class="card shadow cardcustom">
            <form action="{{ url('admin/buat-user') }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="container-fluid">
                    <br>
                    <div class="col-md-12">

                    </div>
                    {{-- Input Nama User --}}
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <b>Nama</b>
                                <input type="text" class="form-control form-control-alternative" name="name"
                                    placeholder="Nama user ..." required>
                            </div>
                        </div>
                    </div>
                    <br>

                    {{-- Input Email User --}}
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <b>E-mail</b>
                                <input type="email" class="form-control form-control-alternative" name="email"
                                    placeholder="Email user ..." required>
                            </div>
                        </div>
                    </div>
                    <br>

                    {{-- Input Moto User --}}
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <b>Moto</b>
                                <input type="text" class="form-control form-control-alternative" name="moto"
                                    placeholder="Moto user ...">
                            </div>
                        </div>
                    </div>
                    <br>

                    {{-- Input Password User --}}
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <b>Password</b>
                                <input type="password" class="form-control form-control-alternative" name="password"
                                    placeholder="Password user ..." required>
                            </div>
                        </div>
                    </div>
                    <br>

                    {{-- Input Ulangi Password User --}}
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <b>Ulangi Password</b>
                                <input type="password" class="form-control form-control-alternative"
                                    name="password_confirmation" placeholder="Ulangi password user ..." required>
                            </div>
                        </div>
                    </div>
                    <br>

                    {{-- Input Level User --}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <b>Jenis User</b>
                                <div class="custom-control custom-radio mb-3">
                                    <input name="role" class="custom-control-input" id="admin" type="radio"
                                        value="admin">
                                    <label class="custom-control-label" for="admin">Admin</label>
                                </div>
                                <div class="custom-control custom-radio mb-3">
                                    <input name="role" class="custom-control-input" id="penulis" type="radio"
                                        value="author">
                                    <label class="custom-control-label" for="penulis">Penulis</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    {{-- Tombol Posting --}}
                    <div class="row">
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary">Register User</button>
                        </div>
                    </div>
                    <br>

                </div>
            </form>
        </div>
    </div>
</div>
@endsection
