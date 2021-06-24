@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Edit Data
                </div>

                <div class="card-body">
                    <form action="{{ route('update.biaya', $biaya->id_biaya) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <label>Jenis Kendaraan</label>
                                    <input type="text" value={{ is_null($biaya) ? '' : $biaya->jenis }} name="jenis" class="form-control" placeholder="Masukkan jenis">
                                </div>
                                <div class="col">
                                    <label>Biaya</label>
                                    <input type="number" value={{ is_null($biaya) ? '' : $biaya->biaya }} name="biaya" class="form-control" placeholder="Rp.">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <button class="btn btn-sm btn-primary" type="submit">SIMPAN</button>
                                    <a href="{{ route('biaya') }}" class="btn btn-sm btn-danger">BATAL</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
