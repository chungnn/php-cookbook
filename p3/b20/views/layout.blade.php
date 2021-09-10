<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Products</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>

<body>
    @if(isset($flashMessages[FlashMessage::TYPE_SUCCESS]))
        @foreach($flashMessages[FlashMessage::TYPE_SUCCESS] as $msg)
        <div class="alert alert-success" role="alert">
        {{$msg}}
        </div>
        @endforeach
    @endif
    @if(isset($flashMessages[FlashMessage::TYPE_ERROR]))
        @foreach($flashMessages[FlashMessage::TYPE_ERROR] as $msg)
        <div class="alert alert-danger" role="alert">
        {{$msg}}
        </div>
        @endforeach
    @endif
    @include('cart-dropdown')
    <div class="container page">
        @yield('content')
    </div>
    @yield('scripts')
</body>
</html>