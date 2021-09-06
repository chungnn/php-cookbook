@extends('layout')

@section('content')

<div class="container page">
<table id="cart" class="table table-hover table-condensed">
        <thead>
        <tr>
            <th style="width:50%">Sản phẩm</th>
            <th style="width:10%">Đơn giá</th>
            <th style="width:8%">Số lượng</th>
            <th style="width:22%" class="text-center">Thành tiền</th>
            <th style="width:10%"></th>
        </tr>
        </thead>
        <tbody>
                @foreach($cartProducts as $product)
                <tr>
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"><img src="{{$product->image}}" width="100" height="100" class="img-responsive"></div>
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{$product->name}}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">{{StringUtil::formatPrice($product->price)}}đ</td>
                    <td data-th="Quantity">
                        <input type="number" value="{{$product->qty}}" class="form-control quantity">
                    </td>
                    <td data-th="Subtotal" class="text-center">{{StringUtil::formatPrice($product->price * $product->qty)}}đ</td>
                    <td class="actions" data-th="">
                        <button class="btn btn-info btn-sm update-cart" data-id="{{$product->product_id}}"><i class="fa fa-refresh"></i></button>
                        <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{$product->product_id}}"><i class="fa fa-trash-o"></i></button>
                    </td>
                </tr>
                @endforeach
        </tbody>
        <tfoot>
        
        <tr>
            <td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua</a></td>
            <td></td>
            <td></td>
            <td class="hidden-xs text-center"><strong>Tổng {{StringUtil::formatPrice($cartTotal)}} đ</strong></td>
            <td><a href="#" class="btn btn-warning"><i class="fa fa-angle-right"></i> Thanh toán</a></td>
        </tr>
        </tfoot>
    </table>

</div>

@endsection