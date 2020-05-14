@extends('layout')

@section('title')
Cek Ongkos Kirim
@endsection

@section('konten')
<div class="s01">
    <form>
        <fieldset>
            <legend>Cek Ongkos Kirim</legend>
        </fieldset>
        <div class="inner-form">
            <div class="input-field second-wrap">
                <input id="search" type="text" placeholder="Dari mana" />
            </div>
            <div class="input-field second-wrap">
                <input id="location" type="text" placeholder="Kemana" />
            </div>
            <div class="input-field second-wrap">
                <input id="location" type="text" placeholder="Kurir" />
            </div>
            <div class="input-field third-wrap">
                <button class="btn-search" type="button">Search</button>
            </div>
        </div>
    </form>
</div>
@endsection