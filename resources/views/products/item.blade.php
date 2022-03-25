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

            <p>
                <strong>Id:</strong> {{ $product->id }}
            </p>
            <p>
                <strong>Name:</strong> {{ $product->name }}
            </p>
            <p>
                <strong>Status:</strong> {{ $product->status }}
            </p>
        </div>

    </div>

</x-html-layout>
