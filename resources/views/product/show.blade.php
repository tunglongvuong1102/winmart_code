<!-- resources/views/product/show.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>WINMART</title>
</head>
<body>
    <h1>THÔNG TIN CHI TIẾT CỦA THỰC PHẨM</h1>
    @if($product)
        <p>TÊN: {{ $product->name }}</p>
        <p>MÔ TẢ, THÀNH PHẦN, NSX, HSD: {{ $product->description }}</p>
        <p>GIÁ THÀNH: {{ $product->price }}</p>
        <h3>QUÉT MÃ QR ĐỂ XEM TRUY XUẤT THÔNG TIN THỰC PHẨM:</h3>
        <div>{!! $qrCode !!}</div>
    @else
        <p>lỗi không tìm thấy thực phẩm</p>
    @endif
</body>
</html>