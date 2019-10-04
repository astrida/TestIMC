@extends('admin.index')
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card card-user">
      <div class="card-header">
        <h5 class="card-title">Perhitungan Proteksi Jiwa</h5>
      </div>
      <div class="card-body">
          @if (count($errors) > 0)
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
          @endif
        <form method="post" action="{{route('ppj.hitung')}}" >
          @csrf
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Sisa Saldo KPR</label>
                <input type="text" name="kpr" class="form-control" placeholder="-" value="{{ old('kpr')}}">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Sisa Saldo KPM</label>
                <input type="text" name="kpm" class="form-control" placeholder="-" value="">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Sisa Saldo Kartu Kredit</label>
                <input type="text" name="kredit" class="form-control" placeholder="-" value="">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Sisa Saldo Kredit Bisnis</label>
                <input type="text" name="bisnis" class="form-control" placeholder="-" value="">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Sisa Saldo Kredit Lainnya</label>
                <input type="text" name="lainnya" class="form-control" placeholder="-" value="">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Total Kewajiban</label>
                <input type="text" class="form-control" name="kewajiban" placeholder="" value="" disabled>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Penghasilan/Tahun</label>
                <input type="text" name="tahun" class="form-control" placeholder="-" value="">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Penghasilan/Bulan</label>
                <input type="text" name="bulan" class="form-control" placeholder="-" value="">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Asumsi Bunga Investasi</label>
                <input type="text" name="bunga" class="form-control" placeholder="-" value="">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Up Ideal</label>
                <input type="text" class="form-control" name="ideal" placeholder="" value="" disabled>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Up Minimal</label>
                <input type="text" class="form-control" name="minimal" placeholder="" value="" disabled>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="update ml-auto mr-auto">
              <button type="submit" class="btn btn-success btn-round">Hitung</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection