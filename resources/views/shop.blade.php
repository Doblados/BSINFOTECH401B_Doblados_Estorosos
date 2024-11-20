<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center mb-4">Shop</h1>

        <!-- Product List -->
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card h-100" data-bs-toggle="modal" data-bs-target="#productModal" 
                         onclick="showProductDetails('{{ $product->name }}', '{{ $product->price }}', '{{ asset('storage/' . $product->image) }}', '{{ $product->description }}')">
                        @if($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                        @else
                            <img src="{{ asset('storage/products/noImg.png') }}" class="card-img-top" alt="No Image">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">Price: ${{ $product->price }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Product Modal -->
    <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productModalLabel">Product Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center mb-3">
                        <img id="productImage" src="" class="img-fluid rounded" alt="Product Image">
                    </div>
                    <h4 id="productName" class="text-center"></h4>
                    <p id="productPrice" class="text-center"></p>
                    <p id="productDescription" class="mt-3"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function showProductDetails(name, price, imageUrl, description) {
            document.getElementById('productName').textContent = name;
            document.getElementById('productPrice').textContent = `Price: $${price}`;
            document.getElementById('productImage').src = imageUrl || `{{ asset('storage/products/noImg.png') }}`;
            document.getElementById('productDescription').textContent = description || 'No description available.';
        }
    </script>
</body>
</html>
