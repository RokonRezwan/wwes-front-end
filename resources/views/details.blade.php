@extends('layouts.app')

@section('title','Show Product')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12  w-75">

            <div class="row justify-content-center my-3 g-0">
                <div class="col-12 text-end">
                    <a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>

            <div class="card">
                <div class="card-header"><h3>Show Product Details</h3></div>

                <div class="card-body">
                    <div class="row p-1">
                        <div class="col-2">
                            <strong>Name :</strong>
                        </div>
                        <div class="col-10">
                            {{ $product['name'] }}
                        </div>
                    </div>

                    <div class="row p-1">
                        <div class="col-2">
                            <strong>Category Name :</strong>
                        </div>
                        <div class="col-10">
                            {{ $product['category']['name'] }}
                        </div>
                    </div>

                    <div class="row p-1">
                        <div class="col-2">
                            <strong>Prices :</strong>
                        </div>
                        <div class="col-10">
                            @foreach ($product['prices'] as $price)
                            <div>{{ $price['price_types']['name'] }} : <strong>৳ {{ $price['amount'] }}</strong></div>
                            @endforeach
                        </div>
                    </div>

                    <div class="row p-1">
                        <div class="col-2">
                            <strong>Description :</strong>
                        </div>
                        <div class="col-10">
                            {{ $product['description'] }}
                        </div>
                    </div>

                    <div class="row p-1">
                        <div class="col-3">
                            <strong>Image :</strong>
                        </div>
                        <div class="col-9">
                            <img class="img-fluid img-responsive rounded product-image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTp32-7-N_QRqnJOon_ft0tGNXt0gH-KaOKrQ&usqp=CAU">
                        </div>
                            
                            {{-- @if ($product->image && (file_exists(public_path('product-images/'. $product->image ))))
                                <img src="{{ asset('product-images/'.$product->image) }}" height="150" width="250">
                            @else
                                <small>No Image</small>
                            @endif --}}
                        </div>
                    </div>

                </div>
            </div>  <!-- /.card -->
        </div>
    </div>
@endsection
