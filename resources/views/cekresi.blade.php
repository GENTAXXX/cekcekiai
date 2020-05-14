@extends('layout')

@section('title')
Cek Resi
@endsection

@section('konten')
<div class="s01">
    <form>
        <fieldset>
            <legend>Cek Resi</legend>
        </fieldset>
        <div class="inner-form">
            <div class="input-field first-wrap">
                <input id="search" type="text" placeholder="Masukan Resi" />
            </div>
            <div class="input-field third-wrap">
                <button class="btn-search" type="button">Search</button>
            </div>
        </div>
    </form>
</div>
@endsection