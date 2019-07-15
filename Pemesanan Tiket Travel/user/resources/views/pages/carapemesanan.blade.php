@extends('templates.default')

@section('content')
<div id='carapemesanan'>
<div class="dashboard-ecommerce">
  <div class="container-fluid dashboard-content ">
    <div id='jadwal'>
      <div class="panel panel-primary">
        <div class="panel-body" style="color:black;">
           <H3 class="alert alert-info" role="alert">Cara Pemesanan</H3>
              <form action="carapemesanan" method="post">
            <p>1. Klik menu Jadwal.</p>
            <p>2. Isi data keberangkatan ( Kota Keberangkatan, Kota Tujuan, Tanggal Keberangkatan dan Jumlah Penumpang).</p>
            <p>3. Isi data pribadi anda (Nama, Jenis Kelamin, Alamat dan Email) untuk notifikasi pembelian.</p>
            <p>4. Setelah itu anda dapat melakukan pemesanan dengan mengeklik tombol Pemesanan dan akan muncul data konfirmasi apakah pesanan yang anda lakukan sudah sesuai dan benar.</p>
            <p>5. Lakukan transaksi.</p>
            <p>5. Selesai.</p>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
@endsection