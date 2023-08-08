@extends('layout.adminlayout')

@section('title','Akomodasi')

@section('content')
<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>Data Akomodasi Desa Menari Tambaknegara</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"><button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambah"><i class="fa-solid fa-plus"></i> Tambah Data Akomodasi</button></h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-responsive-sm">
                        <thead style="color: black; text-align:center">
                            <tr>
                                <th>No</th>
                                <th>Nama Akomodasi</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody style="color: black; text-align:center">
                            @foreach ($akomodasis as $akomodasi)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{$akomodasi->nama}}</td>
                                <td><img src="{{asset('image/'.$akomodasi->foto)}}" alt="" width="180"></td>
                                <td>
                                    <a href="" data-toggle="modal" data-target="#detail{{$akomodasi->id}}" class="btn btn-sm btn-primary"><i class="fa-solid fa-circle-info"></i></a>
                                    <a href="" data-toggle="modal" data-target="#edit{{$akomodasi->id}}" class="btn btn-sm btn-warning"><i class="fa-solid fa-pencil"></i></a>
                                    <a href="" data-toggle="modal" data-target="#hapus{{$akomodasi->id}}" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /# card -->
    </div>
</div>

<!-- Modal Detail-->
@foreach ($akomodasis as $akomodasi)
<div class="modal fade" id="detail{{$akomodasi->id}}" tabindex="-1" role="dialog" aria-labelledby="detailLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="detailLabel">{{$akomodasi->nama}}</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="color: black;">
                <img src="{{asset('image/'.$akomodasi->foto)}}" alt="foto" width="200">
                <br><br><br>
                <table border="0">
                    <tr>
                        <td style="vertical-align: top;">Deskripsi akomodasi</td>
                        <td style="vertical-align: top;"> : </td>
                        <td>{{ $akomodasi->deskripsi }}</td>
                    </tr>
                    <tr>
                        <td style="vertical-align: top;">Harga</td>
                        <td style="vertical-align: top;">:</td>
                        <td>Rp.{{ $akomodasi->harga }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endforeach


<!-- Modal Tambah -->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="tambahLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="tambahLabel">Tambah Data Akomodasi</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="color: black;">
                <div class="basic-form custom_file_input">
                    <form action="{{ route('admin-akomodasi.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama Akomodasi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama" placeholder="Nama Akomodasi">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Deskripsi Akomodasi</label>
                            <div class="col-sm-10">
                                <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" placeholder="Deskripsi Akomodasi"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Harga</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="harga" placeholder="Harga">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Foto</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" name="foto" placeholder="Foto">
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-md btn-success"><i class="fas fa-check"></i> SIMPAN</button>
                    <button type="reset" class="btn btn-md btn-danger"><i class="fas fa-eraser"></i> RESET</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Modal Edit -->
@foreach ($akomodasis as $akomodasi)
<div class="modal fade" id="edit{{$akomodasi->id}}" tabindex="-1" role="dialog" aria-labelledby="editLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="editLabel">Edit Data Akomodasi</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="color: black;">
                <div class="basic-form custom_file_input">
                    <form action="{{ route('admin-akomodasi.update', $akomodasi->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama Akomodasi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama" placeholder="Nama Akomodasi" value="{{$akomodasi->nama}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Deskripsi Akomodasi</label>
                            <div class="col-sm-10">
                                <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" placeholder="Deskripsi Akomodasi">{{$akomodasi->deskripsi}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Harga</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="harga" placeholder="Harga" value="{{$akomodasi->harga}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Foto</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" name="foto" placeholder="Foto">
                                <img src="{{ asset('image/'.$akomodasi->foto) }}" width="120">
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-md btn-success"><i class="fas fa-check"></i> SIMPAN</button>
                    <button type="reset" class="btn btn-md btn-danger"><i class="fas fa-eraser"></i> RESET</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach

<!-- Modal Hapus -->
@foreach ($akomodasis as $akomodasi)
<div class="modal fade" id="hapus{{$akomodasi->id}}" tabindex="-1" role="dialog" aria-labelledby="hapusLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="hapusLabel">Hapus Data Akomodasi</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="color: black;">
                <div class="basic-form custom_file_input">
                    <form action="{{ route('admin-akomodasi.destroy', $akomodasi->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        Apakah anda yakin ingin mengahapus data akomodasi <strong>{{ $akomodasi->nama }}</strong>
                        <span></span>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-md btn-danger">Hapus</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection