<!-- resources/views/products/create.blade.php -->

<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="product_id" placeholder="Product ID" required>
    <input type="text" name="name" placeholder="Name" required>
    <textarea name="description" placeholder="Description"></textarea>
    <input type="number" name="price" placeholder="Price" required>
    <input type="number" name="stock" placeholder="Stock">
    <input type="file" name="image">
    <button type="submit">Create Product</button>
</form>
