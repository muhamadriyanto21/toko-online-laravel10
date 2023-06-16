@extends('layouts.back.index')
@section('content')
    <div class="content">
        <form action="{{ route('product.store') }}" method="post">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama Produk</label>
              <input  type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Harga</label>
                <input type="text" class="form-control" name="price" id="price" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
                <textarea class="form-control" name="description" id="description"></textarea>
              </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection
