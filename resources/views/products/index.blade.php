<!-- resources/views/products/index.blade.php -->

<form method="GET" action="{{ route('products.index') }}">
    <input type="text" name="search" placeholder="Search by Product ID or Description" value="{{ request()->search }}">
    <button type="submit">Search</button>
</form>

<table>
    <thead>
        <tr>
            <th><a href="{{ route('products.index', ['sort_by' => 'name', 'sort_order' => 'asc']) }}">Name</a></th>
            <th><a href="{{ route('products.index', ['sort_by' => 'price', 'sort_order' => 'asc']) }}">Price</a></th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>
                    <a href="{{ route('products.show', $product->id) }}">View</a>
                    <a href="{{ route('products.edit', $product->id) }}">Edit</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{ $products->links() }}
