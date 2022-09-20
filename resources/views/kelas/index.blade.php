@extends('layout.app')

@section('title')
    Kelas
@endsection

@section('content')
<div class="card mt-3">
  <div class="card-header bg-warning">
    <div class="card-title">
      <h5>Data Kelas</h5>

      <a class="btn btn-success btn-sm float-end" href="{{ route('kelas.create') }}">
        <i class="fa fa-plus"></i></a>
    </div>
  </div>

  <div class="card-body bg-success">
    <table class="table table-striped ">
      <thead>
        <tr style="color:white;">
          <th>No.</th>
          <th>Nama</th>
          <th>Siswa</th>
          <th>Guru</th>
          <th>Mapel</th>
        </tr>
      </thead>

      <tbody>
        @foreach ($kelas as $item)
          <tr>
            <td style="color:white;">{{$loop->iteration}}</td>
            <td style="color:white;">{{$item->nama}}</td>
            <td style="color:white;">{{! empty($item->siswa->nama) ? $item->siswa->nama : ''}}</td>
            <td style="color:white;">{{! empty($item->guru->nama) ? $item->guru->nama : ''}}</td>
            <td style="color:white;">{{! empty($item->mapel->nama) ? $item->mapel->nama : ''}}</td>
            <td>
              <a href="/kelas/{{$item->id}}/edit" class="btn btn-warning btn-sm"> <i class="fa fa-edit"></i> </a>
              <a href="/kelas/{{$item->id}}/hapus" class="btn btn-danger btn-sm"> <i class="fa-solid fa-trash"></i> </a>
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
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>
@endsection