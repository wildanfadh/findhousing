@extends('layouts.app')

@section('content')
    <div class="card">
        <img src="{{ asset('assets/images/products/s4.jpg') }}" height="300" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Nama Perumahan</h5>
            <p class="card-text">Alamat Perumahan</p>
            <p class="card-text">Pengembang</p>
            <p class="card-text">Keterangan</p>
            {{-- <p class="card-text">Asosiasi</p> --}}
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6">
                            <h5 class="card-title">Daftar Kriteria dan Sub Kriteria</h5>
                        </div>
                        {{-- <div class="col-6">
                            <button class="btn btn-primary float-end" id="tambahSubKriteria" data-bs-toggle="modal"
                                data-bs-target="#tambahModal">Tambah</button>
                        </div> --}}
                    </div>
                </div>
                <div class="card-body">
                    <table id="kriteriaTable" class="table">
                        <thead>
                            <tr class="text-start">
                                <th>NO</th>
                                <th>Kriteria</th>
                                <th>Sub Kriteria</th>
                                {{-- <th>Aksi</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kriteria as $item)
                                <tr>
                                    <td></td>
                                    <td>{{ $item->nama }}</td>
                                    <td></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
