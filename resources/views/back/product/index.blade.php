@extends('layouts.back.index')
@section('content')
    <div class="content">
      <h3><i class="fa-solid fa-house"></i> Product</h3><hr>
      <a href="{{ route('product.create') }}" class="btn btn-primary">Tambah +</a>

        {{-- table --}}
        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">harga</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($products as $key => $product)
                <tr>
                    <th scope="row">{{ $key+1 }}</th>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        <a href="{{ route('product.detail', [$product->id]) }}">Detail</a>
                        <a href="{{ route('product.edit', [$product->id]) }}">Edit</a>
                        <a href="{{ route('product.delete', [$product->id]) }}">Delete</a>
                    </td>

                  </tr>
                @endforeach


            </tbody>
          </table>

    </div>
@endsection
