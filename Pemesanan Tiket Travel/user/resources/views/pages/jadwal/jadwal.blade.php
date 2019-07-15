@extends('templates.default')

@section('content')
<div id="jadwal">
	<div class="col-lg-12">
                    <section class="box">
                        <header class="panel_header">
                            <h2 class="title pull-left">Jadwal</h2>
                            <div class="pull-right">
                                <div style="margin-top: 20px; margin-right: 20px">
                                 </div>
                            </div>
                        </header>
                        <div class="content-body">
                            <div class="row">
                                <div class="col-xs-12">

    <div class="container">
        <div class="card">
            <div class="card-header">Tegal-Yogyakarta</div>
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
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
                        <th>Aksi</th>
                        </thead>

                        <tbody>
                        <tr>
                                <th>1</th>
                                <td>08.00</td>
                                <td>Yogyakarta</td>
                                <td>Rp.150.000</td>
                                <td>APV</td>
                                <td>Silver</td>
                                <td>G 6379 AB</td>
                                <td>7</td> 
                        <td>
                            <a href="{{ url('penumpang') }}"><button type="button" class="btn btn-primary btn-sm">Pesan</button></a>
                        </td>
                    </tr>
                        </tbody>

                        <tbody>
                        <tr>
                                <th>2</th>
                                <td>10.00</td>
                                <td>Yogyakarta</td>
                                <td>Rp.150.000</td>
                                <td>Luxio</td>
                                <td>Hitam</td>
                                <td>AB 0837 JK</td>
                                <td>4</td> 
                        <td>
                            <a href="{{ url('penumpang') }}"><button type="button" class="btn btn-primary btn-sm">Pesan</button></a>
                        </td>
                    </tr>
                        </tbody>

                        <tbody>
                        <tr>
                                <th>3</th>
                                <td>13.00</td>
                                <td>Yogyakarta</td>
                                <td>Rp.150.000</td>
                                <td>Luxio</td>
                                <td>Putih</td>
                                <td>G 1783 DK</td>
                                <td>6</td> 
                        <td>
                            <a href="{{ url('penumpang') }}"><button type="button" class="btn btn-primary btn-sm">Pesan</button></a>
                        </td>
                    </tr>
                        </tbody>



                    </table>
                            </tr>
                        </thead>
                    </table>

                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

@endsection