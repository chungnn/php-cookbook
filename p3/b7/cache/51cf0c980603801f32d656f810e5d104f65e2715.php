<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Products</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .main-section{
            background-color: #F8F8F8;
        }
        .dropdown{
            float:right;
            padding-right: 30px;
        }
        .btn{
            border:0px;
            margin:10px 0px;
            box-shadow:none !important;
        }
        .dropdown .dropdown-menu{
            padding:20px;
            top:30px !important;
            width:350px !important;
            left:-110px !important;
            box-shadow:0px 5px 30px black;
        }
        .total-header-section{
            border-bottom:1px solid #d2d2d2;
        }
        .total-section p{
            margin-bottom:20px;
        }
        .cart-detail{
            padding:15px 0px;
        }
        .cart-detail-img img{
            width:100%;
            height:100%;
            padding-left:15px;
        }
        .cart-detail-product p{
            margin:0px;
            color:#000;
            font-weight:500;
        }
        .cart-detail .price{
            font-size:12px;
            margin-right:10px;
            font-weight:500;
        }
        .cart-detail .count{
            color:#C2C2DC;
        }
    </style>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container">

    <div class="row">
        <div class="col-lg-12 col-sm-12 col-12 main-section">
            <div class="dropdown">
                <button type="button" class="btn btn-info" data-toggle="dropdown">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Giỏ hàng <span class="badge badge-pill badge-danger">0</span>
                </button>
                <div class="dropdown-menu">
                    <div class="row total-header-section">
                        <div class="col-lg-6 col-sm-6 col-6">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">0</span>
                        </div>

                                                
                        <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                            <p>Tổng tiền: <span class="text-info">$ 0</span></p>
                        </div>
                    </div>

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

<div class="container page">
    
    <div class="container products">

        <div class="row">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xs-18 col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="<?php echo e($product['image']); ?>" width="200" height="300">
                        <div class="caption">
                            <h4><?php echo e($product['name']); ?></h4>
                            <p><?php echo e($product['short_desc']); ?></p>
                            <p><strong>Giá: </strong><?php echo e($product['price']); ?>đ</p>
                            <p class="btn-holder"><a href="#/25" class="btn btn-warning btn-block text-center" role="button">Thêm vào giỏ</a> </p>
                        </div>
                    </div>
                </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
            
        </div><!-- End row -->

    </div>

</div>



</body></html><?php /**PATH C:\xampp\htdocs\cookbook\p3\b6\views/home.blade.php ENDPATH**/ ?>