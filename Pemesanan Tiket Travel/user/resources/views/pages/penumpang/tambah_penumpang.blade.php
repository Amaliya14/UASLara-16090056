@extends('templates.default')

@section('content')
 <div class='col-xs-12'>
    <div class="page-title">
        <div class="pull-left">
            <h1 class="title">Formulir Penumpang</h1>
                </div>

                <div class="col-xs-12">
                    <section class="box ">
                        <header class="panel_header">
                            <h2 class="title pull-left">Data Penumpang</h2>
                            <div class="actions panel_actions pull-right">
                                <a class="box_toggle fa fa-chevron-down"></a>
                                <a class="box_close fa fa-times"></a>
                            </div>
                        </header>
                        <div class="content-body">
                            <div class="row">
                                <div class="col-md-8 col-sm-9 col-xs-10">
                                    <form action="{{route('penumpang.simpan')}}" method="post">
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
                                        <label class="form-label" for="field-2">Jenis Kelamin</label>
                                        <li>
                                        <input tabindex="5" type="radio" id="laki-laki" name="jenis_kelamin" class="icheck-minimal-pink" value="Laki-laki">
                                        <label class="icheck-label form-label" for="laki-laki">Laki - laki</label></li>
                                        <li>
                                        <input tabindex="5" type="radio" id="perempuan" name="jenis_kelamin" class="icheck-minimal-pink" value="Perempuan">
                                        <label class="icheck-label form-label" for="perempuan">Perempuan</label>
                                        </li>
                                    </div>

                                     <div class="form-group">
                                        <label class="form-label" for="field-3">Alamat</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="alamat">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="field-3">No Telp</label>
                                        <div class="controls">
                                            <input class="form-control" rows="10" name="no_telp">    
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="field-3">Email</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="email">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                    <div class="controls">
                                        <a href="{{ url('penumpang') }}"></a><button class="btn btn-primary">Simpan</button>
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