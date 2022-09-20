@extends('layout.app')

@section('title')
    Guru
@endsection

@section('content')
<div class="card mt-3">
  <div class="card-header">
    <div class="card-title">
      <h5>Guru</h5>

      <div class="card-body">
        <form action="{{route('guru.update', $guru->id)}}" 
          method="POST">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" value="{{$guru->nama}}" class="form-control @error('nama') is-invalid @enderror">
            @error('nama')
                <div class="text-danger">
                  {{ $message }}
                </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" id="alamat" value="{{$guru->alamat}}" class="form-control @error('alamat') is-invalid @enderror">
            @error('alamat')
                <div class="text-danger">
                  {{ $message }}
                </div>
            @enderror
          </div>
          
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Simpan</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection


    