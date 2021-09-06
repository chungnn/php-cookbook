@extends('layout')

@section('content')

<div class="container products">
    <div class="row">
        @foreach ($products as $product)
        <div class="col-xs-18 col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="{{ $product['image'] }}" width="200" height="300">
                <div class="caption">
                    <h4>{{ $product['name'] }}</h4>
                    <p>{{ $product['short_desc'] }}</p>
                    <p><strong>Giá: </strong>{{ StringUtil::formatPrice($product['price']) }}đ</p>
                    <p class="btn-holder"><a href="index.php?c=cart&a=add&id={{$product['id']}}" class="btn btn-warning btn-block text-center" role="button">Thêm vào giỏ</a> </p>
                </div>
            </div>
        </div>
        @endforeach

    </div><!-- End row -->

</div>

@endsection