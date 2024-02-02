<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <!-- Ajoutez ici vos liens CSS, par exemple avec Tailwind -->
</head>
<body>
<div class="container">
    <h1>Edit Product</h1>
    <form action="{{ route('update.product', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" value="{{ $product->name }}" required>
        </div>
        <div>
            <label for="price">Price:</label>
            <input type="number" name="price" value="{{ $product->price }}" required>
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea name="description">{{ $product->description }}</textarea>
        </div>
        <div>
            <label for="image">Product Image:</label>
            <input type="file" name="image">
            @if($product->image)
                <img src="{{ Storage::url($product->image) }}" width="100">
            @endif
        </div>
        <div>
            <button type="submit">Update Product</button>
        </div>
    </form>
</div>
</body>
</html>
