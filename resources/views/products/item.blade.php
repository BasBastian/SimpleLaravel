@php
    // pass variables
    $product = $product ?? new \App\Models\Product([
        'name' => 'Empty',
        'status' => 'This model is a placeholder'
    ]);
@endphp

<x-html-layout>

    <x-nav-bar />

    <div class="bg-gray-100 dark:bg-gray-900 relative min-h-screen text-gray-700">

        <div class="container">
            <h1 class="">Great! You picked the washing machine</h1>

            <p>
                <a href="{{ url("/products") }}"> &LeftArrow; Back </a>
            </p>

            <table class="table bg-dark text-light">
                <tr>
                    <th>Id</th>
                    <td>{{ $product->id }}</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>{{ $product->name }}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>{{ $product->status }}</td>
                </tr>
            </table>
        </div>

    </div>

</x-html-layout>
