<!-- resources/views/product/add.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>WINMART</title>
</head>
<body>
    <h1>NHẬP THÔNG TIN</h1>
    <form id="add-data-form" action="{{ route('product.store') }}" method="POST">
        @csrf
        <label for="name">TÊN THỰC PHẨM:</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="description">MÔ TẢ, THÀNH PHẦN, NSX, HSD:</label>
        <input type="text" id="description" name="description"><br><br>
        <label for="price">GIÁ THÀNH:</label>
        <input type="text" id="price" name="price"><br><br>
        <input type="submit" value="Xác nhận">
    </form>
</body>
</html>