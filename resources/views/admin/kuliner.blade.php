@extends('layout.adminlayout')

@section('title','Kuliner')

@section('content')
<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>Data Kuliner Desa Menari Tambaknegara</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"><button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambah"><i class="fa-solid fa-plus"></i> Tambah Data Kuliner</button></h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-responsive-sm">
                        <thead style="color: black; text-align:center">
                            <tr>
                                <th>No</th>
                                <th>Nama Kuliner</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody style="color: black; text-align:center">
                            @foreach ($kuliners as $kuliner)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{$kuliner->nama}}</td>
                                <td><img src="{{asset('image/'.$kuliner->foto)}}" alt="" width="180"></td>
                                <td>
                                    <a href="" data-toggle="modal" data-target="#detail{{$kuliner->id}}" class="btn btn-sm btn-primary"><i class="fa-solid fa-circle-info"></i></a>
                                    <a href="" data-toggle="modal" data-target="#edit{{$kuliner->id}}" class="btn btn-sm btn-warning"><i class="fa-solid fa-pencil"></i></a>
                                    <a href="" data-toggle="modal" data-target="#hapus{{$kuliner->id}}" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a>
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
@foreach ($kuliners as $kuliner)
<div class="modal fade" id="detail{{$kuliner->id}}" tabindex="-1" role="dialog" aria-labelledby="detailLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="detailLabel">{{$kuliner->nama}}</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="color: black;">
                <img src="{{asset('image/'.$kuliner->foto)}}" alt="foto" width="200">
                <br><br><br>
                <table border="0">
                    <tr>
                        <td style="vertical-align: top;">Deskripsi Kuliner</td>
                        <td style="vertical-align: top;"> : </td>
                        <td>{{ $kuliner->deskripsi }}</td>
                    </tr>
                    <tr>
                        <td style="vertical-align: top;">Harga Kisaran</td>
                        <td style="vertical-align: top;">:</td>
                        <td>Rp.{{ $kuliner->harga }}</td>
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
                <h3 class="modal-title" id="tambahLabel">Tambah Data Kuliner</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="color: black;">
                <div class="basic-form custom_file_input">
                    <form action="{{ route('admin-kuliner.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama Kuliner</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama" placeholder="Nama Kuliner">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Deskripsi Kuliner</label>
                            <div class="col-sm-10">
                                <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" placeholder="Deskripsi Kuliner"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Harga Kisaran</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="harga" placeholder="Harga Kisaran">
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
@foreach ($kuliners as $kuliner)
<div class="modal fade" id="edit{{$kuliner->id}}" tabindex="-1" role="dialog" aria-labelledby="editLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="editLabel">Edit Data Kuliner</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="color: black;">
                <div class="basic-form custom_file_input">
                    <form action="{{ route('admin-kuliner.update', $kuliner->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama Kuliner</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama" placeholder="Nama Kuliner" value="{{$kuliner->nama}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Deskripsi Kuliner</label>
                            <div class="col-sm-10">
                                <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" placeholder="Deskripsi Kuliner">{{$kuliner->deskripsi}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Harga Kisaran</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="harga" placeholder="Harga Kisaran" value="{{$kuliner->harga}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Foto</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" name="foto" placeholder="Foto">
                                <img src="{{ asset('image/'.$kuliner->foto) }}" width="120">
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
@foreach ($kuliners as $kuliner)
<div class="modal fade" id="hapus{{$kuliner->id}}" tabindex="-1" role="dialog" aria-labelledby="hapusLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="hapusLabel">Hapus Data Kuliner</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="color: black;">
                <div class="basic-form custom_file_input">
                    <form action="{{ route('admin-kuliner.destroy', $kuliner->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        Apakah anda yakin ingin mengahapus data kuliner <strong>{{ $kuliner->nama }}</strong>
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