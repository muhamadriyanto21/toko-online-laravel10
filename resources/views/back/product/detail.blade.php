@extends('layouts.back.index')
@section('content')
    <div class="content">
        <h1>{{ $product->name }}</h1>
        <h6>Harga : {{ $product->price }}</h6>
        <h6>Deskripsi : {{ $product->description }}</h6>
    </div>
    <a href="{{ route('product') }}">kembali</a>
@endsection
