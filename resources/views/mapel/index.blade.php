@extends('layout.app')

@section('title')
    Mapel
@endsection
 
@section('content')
<div class="card mt-3">
  <div class="card-header bg-warning">
    <div class="card-title">
      <h5>Mapel</h5>

      <button type="button" class="btn btn-success btn-sm float-end" data-bs-toggle="modal" data-bs-target="#modalTambah"><i class="fa fa-plus"></i></button>
    </div>
  </div>

  <div class="card-body bg-success">
    <table class="table table-striped ">
      <thead>
        <tr style="color:white;">
          <th style="width: 5%">No.</th>
          <th>Nama</th>
          <th style="width: 10%">Aksi</th>
        </tr>
      </thead>

      <tbody>
        @foreach ($mapel as $item)   
        <tr>
          <td style="color:white;">{{ $loop->iteration }}</td>
          <td style="color:white;">{{ $item->nama }}</td>
          <td>
            <a href="/mapel/edit/{{$item->id}}" class="btn btn-warning btn-sm"> <i class="fa fa-edit"></i> </a>
            <a href="/mapel/hapus/{{$item->id}}" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> </a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Tambah Kategori</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('mapel.store')}}" method="POST">
          @csrf
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" 
            class="form-control @error('nama') is-invalid @enderror">
          </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection


