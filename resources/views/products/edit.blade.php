<!-- resources/views/products/edit.blade.php -->

<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="product_id" value="{{ $product->product_id }}" required>
    <input type="text" name="name" value="{{ $product->name }}" required>
    <textarea name="description">{{ $product->description }}</textarea>
    <input type="number" name="price" value="{{ $product->price }}" required>
    <input type="number" name="stock" value="{{ $product->stock }}">
    <input type="file" name="image">
    <button type="submit">Update Product</button>
</form>
