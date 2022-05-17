@extends('layouts.app')

@section('content')
<div class="container mt-5 mb-5">
    {{-- <div class="d-flex justify-content-center row">
        <div class="col-md-10">
            @foreach ($products as $product)
            <div class="row p-2 bg-white border rounded">
                <div class="col-md-3 mt-1">
                    <img class="img-fluid img-responsive rounded product-image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTp32-7-N_QRqnJOon_ft0tGNXt0gH-KaOKrQ&usqp=CAU">
                </div>

                <div class="col-md-6 mt-1">
                    <h5>{{ $product['name'] }}</h5>
                    <div class="d-flex flex-row">
                        <div class="ratings mr-2">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                    <div class="mt-1 mb-1 spec-1">
                        <span class="dot"></span>
                        <span>{{ $product['category']['name'] }}</span>
                    </div>
                    <p class="text-justify text-truncate para mb-0">{{ $product['description'] }}<br><br></p>
                </div>

                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                    <div class="d-flex flex-row align-items-center">
                        @foreach ($product['prices'] as $price)
                        <h4 class="mr-1">৳{{ $price['amount'] }}</h4>
                        @endforeach
                        <span class="strike-text">৳{{ 20.99 }}</span>
                    </div>
                    <div class="d-flex flex-column mt-4">
                        <button class="btn btn-primary btn-sm" type="button">Details</button>
                        <button class="btn btn-outline-primary btn-sm mt-2" type="button">Add to Cart</button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div> --}}
</div>
@endsection
