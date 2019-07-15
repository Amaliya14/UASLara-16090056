@extends('default')

@section('content')
<div class="container-fluid">
	<div class="card">
		<form>
			  <div class="form-group">
			    <label for="no">No</label>
			    <input type="text" class="form-control" id="no" placeholder="Enter no">
			  </div>
			  <div class="form-group">
			    <label for="berangkat">Berangkat</label>
			    <input type="text" class="form-control" id="berangkat" placeholder="Enter berangkat">
			  </div>
			  <div class="form-group">
			    <label for="harga">Harga</label>
			    <input type="text" class="form-control" id="harga" placeholder="Enter harga">
			  </div>
			  <div class="form-group">
			    <label for="mobil">Mobil</label>
			    <input type="text" class="form-control" id="mobil" placeholder="Enter mobil">
			  </div>
			  <div class="form-group">
			    <label for="warna">Warna</label>
			    <input type="text" class="form-control" id="warna" placeholder="warna">
			  </div>
			  <div class="form-group">
			    <label for="no_polisi">No Polisi</label>
			    <input type="text" class="form-control" id="no_polisi" placeholder="no_polisi">
			  </div>
			  <div class="form-group">
			    <label for="kursi">Kursi Tersedia</label>
			    <input type="text" class="form-control" id="kursi" placeholder="kursi">
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
	</div>

</div>
@stop