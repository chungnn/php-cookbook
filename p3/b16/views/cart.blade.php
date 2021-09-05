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

        
                    
                
                <tr>
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"><img src="./Cart_files/$_35.JPG" width="100" height="100" class="img-responsive"></div>
                            <div class="col-sm-9">
                                <h4 class="nomargin">Google Pixel 2 XL</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">7.600.000đ</td>
                    <td data-th="Quantity">
                        <input type="number" value="1" class="form-control quantity">
                    </td>
                    <td data-th="Subtotal" class="text-center">7.600.000đ</td>
                    <td class="actions" data-th="">
                        <button class="btn btn-info btn-sm update-cart" data-id="27"><i class="fa fa-refresh"></i></button>
                        <button class="btn btn-danger btn-sm remove-from-cart" data-id="27"><i class="fa fa-trash-o"></i></button>
                    </td>
                </tr>
            
                
                <tr>
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"><img src="./Cart_files/$_35(1).JPG" width="100" height="100" class="img-responsive"></div>
                            <div class="col-sm-9">
                                <h4 class="nomargin">LG V10 H900</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">3.150.000đ</td>
                    <td data-th="Quantity">
                        <input type="number" value="1" class="form-control quantity">
                    </td>
                    <td data-th="Subtotal" class="text-center">3.150.000đ</td>
                    <td class="actions" data-th="">
                        <button class="btn btn-info btn-sm update-cart" data-id="28"><i class="fa fa-refresh"></i></button>
                        <button class="btn btn-danger btn-sm remove-from-cart" data-id="28"><i class="fa fa-trash-o"></i></button>
                    </td>
                </tr>
                    
        </tbody>
        <tfoot>
        
        <tr>
            <td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua</a></td>
            <td></td>
            <td></td>
            <td class="hidden-xs text-center"><strong>Tổng 10.750.000đ</strong></td>
            <td><a href="#" class="btn btn-warning"><i class="fa fa-angle-right"></i> Thanh toán</a></td>
        </tr>
        </tfoot>
    </table>

</div>

@endsection