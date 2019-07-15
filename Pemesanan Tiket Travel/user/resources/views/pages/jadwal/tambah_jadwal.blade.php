@extends('templates.default')

@section('content')
 <div class='col-xs-12'>
                    <div class="page-title">
                        <div class="pull-left">
                            <h1 class="title">Tambah Jadwal</h1>
                        </div>

	<div class="col-xs-12">
                    <section class="box ">
                        <header class="panel_header">
                            <h2 class="title pull-left">Data Jadwal</h2>
                            <div class="actions panel_actions pull-right">
                                <a class="box_toggle fa fa-chevron-down"></a>
                                <a class="box_close fa fa-times"></a>
                            </div>
                        </header>
                        <div class="content-body">
                            <div class="row">
                                <div class="col-md-8 col-sm-9 col-xs-10">
                                	<form action="{{route('jadwal.simpan')}}" method="post">
                                		@csrf
                                    <div class="form-group">
                                        <label class="form-label" for="field-3">No</label>
                                        <div class="controls">
                                            <input class="form-control" rows="10" name="no">    
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="field-3">Berangkat</label>
                                        <div class="controls">
                                            <input class="form-control" rows="10" name="berangkat">    
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="field-3">Tujuan</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="tujuan">
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="field-3">Harga</label>
                                        <div class="controls">
                                            <input class="form-control" rows="20" name="harga">
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="field-3">Mobil</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="mobil">
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="field-3">Warna</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="warna">
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="field-3">No Polisi</label>
                                        <div class="controls">
                                            <input class="form-control" rows="10" name="no_polisi">    
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="field-3">Kursi Tersedia</label>
                                        <div class="controls">
                                            <input class="form-control" rows="10" name="kursi_tersedia">
                                    </div>
                                    </div>

                                    <div class="form-group">
                                    <div class="controls">
                                        <a href="{{ url('jadwal') }}"><button class="btn btn-primary">Simpan</button></a>
                                    </div>
                                        </form>
                                    

@endsection