@extends('adminlte::page')
@section('title','Detail Mahasantri')
@section('content_header')
    <h1>Detail Mahasantri</h1>
    <br>
    <a class="btn btn-outline-primary btn-md" href="{{ route('mahasantri.index') }}" role="button"><i class="fa fa-arrow-left"></i>Back</a>
@stop 
@section('content')
<form>
    @csrf
    <div class="form-group"> 
        <label>Nama</label>
        <input type="text" placeholder="{{ $mahasantri->nama }}" class="form-control" disabled/> 
    </div> 
    <div class="form-group"> 
        <label>NIM</label>
        <input type="text" placeholder="{{ $mahasantri->nim }}" class="form-control" disabled/> 
    </div>
    <div class="form-group">
        <label>Dosen</label>
        <input type="text" placeholder="{{ $mahasantri->dos }}" class="form-control" disabled/>
    </div> 
    <div class="form-group">
        <label>Jurusan</label>
        <input type="text" placeholder="{{ $mahasantri->jur }}" class="form-control" disabled/>
    </div> 
    <div class="form-group">
        <label>Matakuliah</label>
        <input type="text" placeholder="{{ $mahasantri->mat }}" class="form-control" disabled/>
    </div>
</form>
@stop 
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop 
@section('js')
    <script> console.log('HI!')</script>
@stop