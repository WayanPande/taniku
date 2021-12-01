@extends('layouts/main')

{{-- header --}}
@section('header')
    @include('partitions/navbar')
@endsection

{{-- content --}}
@section('content')
    <div class="profile">
        <h3>Profile</h3>
        <div>{{ $user->username }}</div>
        <div>{{ $user->fullname }}</div>
        <div>{{ $user->email }}</div>
        <div>{{ $user->phone_number }}</div>
    </div>
    <hr>

    <div class="products">
        @foreach ($suppliers as $supplier)
            <h4>Supplier: {{ $supplier->username }}</h4>
            @foreach ($products as $product)
                @if ($product->supplier == $supplier->username)
                    <div>{{ $product->name }}</div>
                    <div>{{ $product->price }}</div>
                    <div>{{ $product->description }}</div>
                    <div>{{ $product->supplier }}</div>
                    <div><a href="/">Pesan Sekarang</a></div>
                    <div><a href="/cart/store/{{ $product->id }}">Tambah ke Keranjang Belanja</a></div>
                    <div><a href="/wishlist/destroy/{{ $product->wishlist_id }}">delete</a></div>
                    <br>
                @endif
            @endforeach
        @endforeach
    </div>
    <hr>
@endsection

{{-- footer --}}
@section('footer')
    <h3>Footer</h3>
    @include('partitions/footer')
@endsection