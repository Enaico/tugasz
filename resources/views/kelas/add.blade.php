@extends('layout.app')

@section('title')
    Kelas
@endsection

@section('content')

<div class="card mt-3">
  <div class="card-header">
    <div class="card-title">
      <h5>Data Kelas</h5>
    </div>
  </div>

  <div class="card-body">
    <form action="{{ route('kelas.store') }}" method="POST">
      @csrf

      <div class="row">
        <div class="col-lg-6">
          <div class="form-group">
            <label for="nama" class="form-label">Nama Kelas</label>
            <input type="text" name="nama" id="nama" value="{{ old('nama') }}" class="form-control @error('nama') is-invalid @enderror">
            @error('nama')
              <div class="text-danger">
                {{ $message }}
              </div>
            @enderror
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4">
          <div class="form-group">
            <label for="siswa" class="form-label">Siswa</label>
            <select name="siswa_id" id="siswa_id" class="form-control @error('siswa_id') is-invalid @enderror">
              @foreach ($siswa as $item)
                  <option value="{{$item->id}}">{{$item->nama}}</option>
              @endforeach
            </select>
            @error('siswa_id')
              <div class="text-danger">
                {{ $message }}
              </div>
            @enderror
          </div>
        </div>

        <div class="col-lg-4">
          <div class="form-group">
            <label for="guru" class="form-label">Guru</label>
            <select name="guru_id" id="guru_id" class="form-control @error('guru_id') is-invalid @enderror">
              @foreach ($guru as $item)
                  <option value="{{$item->id}}">{{$item->nama}}</option>
              @endforeach
            </select>
            @error('guru_id')
              <div class="text-danger">
                {{ $message }}
              </div>
            @enderror
          </div>
        </div>

        <div class="col-lg-4">
          <div class="form-group">
            <label for="mapel" class="form-label">Mapel</label>
            <select name="mapel_id" id="mapel_id" class="form-control @error('mapel_id') is-invalid @enderror">
              @foreach ($mapel as $item)
                  <option value="{{$item->id}}">{{$item->nama}}</option>
              @endforeach
            </select>
            @error('mapel_id')
              <div class="text-danger">
                {{ $message }}
              </div>
            @enderror
          </div>
        </div>
      </div>

      <div class="modal-footer mt-3">
        <button type="submit" class="btn btn-success">Simpan</button>
      </div>
    </form>
  </div>
</div>

@endsection