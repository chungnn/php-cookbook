<div class="container">
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-12 main-section">
            <div class="dropdown">
                <button type="button" class="btn btn-info" data-toggle="dropdown">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Giỏ hàng <span class="badge badge-pill badge-danger">{{count($cartProducts)}}</span>
                </button>
                <div class="dropdown-menu">
                    <div class="row total-header-section">
                        <div class="col-lg-6 col-sm-6 col-6">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{count($cartProducts)}}</span>
                        </div>


                        <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                            <p>Tổng tiền: <span class="text-info">{{StringUtil::formatPrice($cartTotal)}}đ</span></p>
                        </div>
                    </div>
                    @if (count($cartProducts) > 0)
                        @foreach ($cartProducts as $product)
                        <div class="row cart-detail">
                            <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                <img src="{{$product->image}}" />
                            </div>
                            <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                <p>{{$product->name}}</p>
                                <span class="price text-info"> {{StringUtil::formatPrice($product->price)}}đ</span> <span class="count"> Số lượng: {{$product->qty}}</span>
                            </div>
                        </div>
                        @endforeach
                    @endif
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                            <a href="#" class="btn btn-primary btn-block">Xem tất cả</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>