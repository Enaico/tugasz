@extends('layout.app')

@section('title')
    Home
@endsection

@section('content')
    <div class="row g-3 text-center">
      <div class="col-4">
        <div class="p-3 bg-warning rounded mt-3"> {{$siswa->count()}} Siswa <i class="fa-solid fa-person-drowning"></i>  </div>
      </div>

      <div class="col-4">
        <div class="p-3 bg-warning rounded mt-3"> {{$guru->count()}} Guru <i class="fa-solid fa-person-harassing"></i></div>
      </div>

      <div class="col-4">
        <div class="p-3 rounded bg-warning mt-3"> {{$mapel->count()}} Mapel <i class="fa-solid fa-book"></i></div>
      </div>
    </div>
@endsection