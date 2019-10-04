@extends('admin.index')

@section('content')
<div class="col-md-12">
    <div class="card card-user">
      <div class="card-header">
        <h5 class="card-title">Perhitungan Proteksi Jiwa</h5>
      </div>
      <div class="card-body">
        <form method="" action="{{route('ppj')}}">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Sisa Saldo KPR</label>
                <input type="text" class="form-control" placeholder="" value="{{$data->kpr}}" disabled>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Sisa Saldo KPM</label>
                <input type="text" class="form-control" placeholder="" value="{{$data->kpm}}" disabled>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Sisa Saldo Kartu Kredit</label>
                <input type="text" class="form-control" placeholder="" value="{{$data->kredit}}" disabled>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Sisa Saldo Kredit Bisnis</label>
                <input type="text" class="form-control" placeholder="" value="{{$data->bisnis}}" disabled>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Sisa Saldo Kredit Lainnya</label>
                <input type="text" class="form-control" placeholder="" value="{{$data->lainnya}}" disabled>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Total Kewajiban</label>
                <input type="text" class="form-control" placeholder="" value="{{$kewajiban}}" disabled>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Penghasilan/Tahun</label>
                <input type="text" class="form-control" placeholder="" value="{{$data->tahun}}" disabled>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Penghasilan/Bulan</label>
                <input type="text" class="form-control" placeholder="" value="{{$data->bulan}}" disabled>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Asumsi Bunga Investasi</label>
                <input type="text" class="form-control" placeholder="" value="{{$data->bunga}}" disabled>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Up Ideal</label>
                <input type="text" class="form-control" placeholder="" value="{{$hitung_ideal}}" disabled>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Up Minimal</label>
                <input type="text" class="form-control" placeholder="" value="{{$hitung_minimal}}" disabled>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="update ml-auto mr-auto">
              <button type="submit" class="btn btn-success btn-round">Reset</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection