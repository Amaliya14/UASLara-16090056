@extends('templates.default')

@section('content')
 <div class='col-xs-12'>
    <div class="page-title">
        <div class="pull-left">
            <h1 class="title">Formulir Transaksi</h1>
                </div>

 <div class="col-xs-12">
                    <section class="box ">
                        <header class="panel_header">
                            <h2 class="title pull-left">Transaksi</h2>
                            <div class="actions panel_actions pull-right">
                                <a class="box_toggle fa fa-chevron-down"></a>
                                <a class="box_close fa fa-times"></a>
                            </div>
                        </header>
                        <div class="content-body">
                            <div class="row">
                                <div class="col-md-8 col-sm-9 col-xs-10">
                                    <form action="{{route('transaksi.simpan')}}" method="post">
                                        @csrf
                                    <div class="form-group">
                                        <label class="form-label" for="field-1">No</label>
                                        <div class="controls">
                                            <input class="form-control" rows="50" name="no">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="field-1">Nama</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="nama">
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
                                            <input class="form-control" rows="100" name="harga">    
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="field-3">Jumlah Pesanan</label>
                                        <div class="controls">
                                            <input class="form-control" row="50" name="jumlah_pesanan">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="field-2">Bank</label>
                                        <li>
                                        <input tabindex="5" type="radio" id="bca" name="bank" class="icheck-minimal-pink" value="bca">
                                        <label class="icheck-label form-label" for="bca">BCA</label></li>
                                        <li>
                                        <input tabindex="5" type="radio" id="bri" name="bank" class="icheck-minimal-pink" value="bri">
                                        <label class="icheck-label form-label" for="bri">BRI</label>
                                        </li>
                                        <li>
                                        <input tabindex="5" type="radio" id="mandiri" name="bank" class="icheck-minimal-pink" value="mandiri">
                                        <label class="icheck-label form-label" for="mandiri">Mandiri</label>
                                        </li>
                                    </div>

                                    <div class="form-group">
                                    <div class="controls">
                                        <a href="{{ url('transaksi') }}"></a><button class="btn btn-primary">Selesai</button>
                                    </div>
                                    </form>
                                
</div>
</form>
</div>
</div>
</div>
</section>
</div>
</div>
</div>
@endsection