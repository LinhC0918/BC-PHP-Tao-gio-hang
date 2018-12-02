@extends('home')
@section('content')
    <div class="title m-b-md">
        Giỏ hàng
    </div>
    @if(Session::has('cart'))
        <div class="row">
            @foreach($products as $product)
                <div class="col-4">
                    <div class="card text-left" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product['item']['name'] }}</h5>
                            Mô tả<p class="card-text">{{ $product['item']['description'] }}</p>
                            Đơn giá<p class="card-text">{{ $product['item']['price'] }}</p>
                            Số lượng<p class="card-text text-dark">{{ $product['qty'] }}</p>
                            Tổng cộng<p class="card-text text-dark">{{ $product['price'] }}</p>


                            <a href="{{ route('deleteCart', $product['item']['id']) }}" class="btn btn-primary">Delete</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
    <a href="{{ route('index') }}" class="btn btn-primary" >Back</a>
@endsection