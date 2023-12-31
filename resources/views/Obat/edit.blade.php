@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>EDIT DATA PEKERJAAN</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('/obat/' .$row->obat_id)}}" method="post">
                    @method('PATCH')
                    @csrf
                    <div class="mb-3">
                        <label for="">JENIS PEKERJAAN</label>
                        <select name="obat_id_jenisobat" id="" class="form-control">
                            <option value="">---Silahkan Pilih---</option>
                            @foreach ($jenisobat as $jenis)
                                <option value="{{$jenis->jenisobat_id}}">{{$jenis->jenisobat_nama}}</option>
                            @endforeach
                        </select>    
                    </div>
                    <div class="mb-3">
                        <label for="">NOPOL</label>
                        <input type="text" name="obat_nama" class="form-control" value="{{$row->obat_nama}}">
                    </div>
                    <div class="mb-3">
                        <label for="">HARGA</label>
                        <input type="text" name="obat_harga" class="form-control" value="{{$row->obat_harga}}">
                    </div>
                    <div class="mb-3">
                        <label for="">KENDARAAN MASUK</label>
                        <input type="text" name="obat_stock" class="form-control" value="{{$row->obat_stock}}">
                    </div>
                    <div class="mb-3">
                        <input class="btn btn-info" type="submit" name="" id="" value="UPDATE">
                        <input type="button" class="btn btn-danger" value="BATAL" onclick="history.go(-1);" >
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection