@php
    // pass variables
    $products = $products ?? [];
@endphp

<x-html-layout>
    <x-nav-bar />
    <div class="bg-gray-100 dark:bg-gray-900 relative min-h-screen text-gray-700">

        <div class="container">
            <h1 class="">Welcome to the products list page!</h1>
            <p>
                <a href="{{ url("/") }}"> &LeftArrow; Home </a>
            </p>
            <p>
                Please pick one (links will arrive soon)
            </p>

            <table class="table bg-dark text-white">
                <tr>
                    <th>No</th>
                    <th>Product Name</th>
                    <th>Product Status</th>
                </tr>
                @foreach ($products as $product)
                    <tr>
                        <td>
                            {{ $product->id }}
                        </td>
                        <td>
                            <a href="{{ url("/products/".$product->id) }}">
                            {{ $product->name }}
                        </td>
                        <td>
                            {{ $product->status }}
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</x-html-layout>
