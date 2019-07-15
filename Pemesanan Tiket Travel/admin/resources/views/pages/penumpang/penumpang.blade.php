@extends('templates.default')

@section('content')
<div id="penumpang">
	<div class="col-lg-12">
                    <section class="box">
                        <header class="panel_header">
                            <h2 class="title pull-left">Data Penumpang</h2>
                            <div class="pull-right">
                                <div style="margin-top: 20px; margin-right: 20px">
                            	 <a href="{{ route('penumpang.tambah') }}" type="button" class="btn btn-primary">Tambah</a>
                                 </div>
                            </div>
                        </header>
                        <div class="content-body">
                            <div class="row">
                                <div class="col-xs-12">

                        <table class="table table-bordered" border="1">
                        <thead>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>No Telp</th>
                        <th>Email</th>
                        </thead>

                        <tbody>
                        @foreach($penumpang as $p)
                        <tr>
                        <td>{{ $p->no }}</td>
                        <td>{{ $p->nama }}</td>
                        <td>{{ $p->jenis_kelamin }}</td>
                        <td>{{ $p->alamat }}</td>
                        <td>{{ $p->no_telp }}</td>
                        <td>{{ $p->email }}</td>
                        </tr>
                        @endforeach
                        </tbody>
</table>
</div>
</div>
</div>
</section>
</div>

@endsection