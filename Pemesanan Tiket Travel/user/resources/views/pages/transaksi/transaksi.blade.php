@extends('templates.default')

@section('content')
<div id="transaksi">
	<div class="col-lg-12">
                    <section class="box">
                        <header class="panel_header">
                            <h2 class="title pull-left">Transaksi</h2>
                            <div class="pull-right">
                                <div style="margin-top: 20px; margin-right: 20px">
                            	 <a href="{{ route('transaksi.tambah') }}" type="button" class="btn btn-primary">Tambah</a>
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
                        <th>Tujuan</th>
                        <th>Harga</th>
                        <th>Jumlah Pesanan</th>
                        <th>Bank</th>
                        </thead>

                        <tbody>
                        @foreach($transaksi as $p)
                        <tr>
                        <td>{{ $p->no }}</td>
                        <td>{{ $p->nama }}</td>
                        <td>{{ $p->tujuan }}</td>
                        <td>{{ $p->harga }}</td>
                        <td>{{ $p->jumlah_pesanan }}</td>
                        <td>{{ $p->bank }}</td>
                        </tr>
                        @endforeach
                        </tbody>
</table>
</form>
</div>
</div>
@endsection