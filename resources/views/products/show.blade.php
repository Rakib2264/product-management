<!-- resources/views/products/show.blade.php -->

<h1>{{ $product->name }}</h1>
<p>{{ $product->description }}</p>
<p>Price: {{ $product->price }}</p>
<p>Stock: {{ $product->stock }}</p>
<img src="{{ asset('storage/' . $product->image) }}" alt="Product Image">
