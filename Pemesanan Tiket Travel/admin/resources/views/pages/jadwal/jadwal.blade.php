@extends('templates.default')

@section('content')
<div id="jadwal">
	<div class="col-lg-12">
                    <section class="box">
                        <header class="panel_header">
                            <h2 class="title pull-left">Data Jadwal</h2>
                            <div class="pull-right">
                                <div style="margin-top: 20px; margin-right: 20px">
                            	 <a href="{{ route('jadwal.tambah') }}" type="button" class="btn btn-primary">Tambah</a>
                                 </div>
                            </div>
                        </header>
                        <div class="content-body">
                            <div class="row">
                                <div class="col-xs-12">

 
                    <table class="table table-bordered" border="1">
                        <thead>
                        <th>No</th>
                        <th>Berangkat</th>
                        <th>Tujuan</th>
                        <th>Harga</th>
                        <th>Mobil</th>
                        <th>Warna</th>
                        <th>No Polisi</th>
                        <th>Kursi Tersedia</th>
                        </thead>

                        <tbody>
                        @foreach($jadwal as $p)
                        <tr>
                        <td>{{ $p->no }}</td>
                        <td>{{ $p->berangkat }}</td>
                        <td>{{ $p->tujuan }}</td>
                        <td>{{ $p->harga }}</td>
                        <td>{{ $p->mobil }}</td>
                        <td>{{ $p->warna }}</td>
                        <td>{{ $p->no_polisi }}</td>
                        <td>{{ $p->kursi_tersedia }}</td> 
                    </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
</div>

@endsection