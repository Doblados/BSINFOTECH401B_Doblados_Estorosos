<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Add Product</h1>
    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name">Product Name:</label>
        <input type="text" name="name" id="name" required>
        
        <label for="price">Price:</label>
        <input type="number" name="price" id="price" step="0.01" required>
        
        <label for="image">Product Image:</label>
        <input type="file" name="image" id="image">
        
        <button type="submit">Add Product</button>
    </form>
</body>
</html>
