<x-html-layout>
    <x-nav-bar />
    <div class="bg-gray-100 dark:bg-gray-900 relative min-h-screen text-gray-700">

        <div class="container">
            <h1 class="">Welcome to the products list page!</h1>
            <p>
                <a href="{{ url("/") }}"> &LeftArrow; Home </a>
            </p>
            <p>
                Below Bootstrap / Yajra's Datatables implmenentation
            </p>
            {!! $dataTable->table([ 'class' => 'table bg-dark text-white' ]) !!}
            {{-- {{ $dataTable->table([ 'class' => 'table bg-dark text-white' ]) }} --}}

        </div>
    </div>
    @push('scripts')
    {{$dataTable->scripts()}}
    {{-- <script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script> --}}
{{-- <script src="/vendor/datatables/buttons.server-side.js"></script> --}}
    @endpush
</x-html-layout>
