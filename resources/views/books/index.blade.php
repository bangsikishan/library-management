@extends('layout')

@section('content')
    <div>
        <h1 class="text-center font-bold text-2xl my-8">Latest Books</h1>
        <div class="py-4 sm:py-0 grid gap-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            <x-book-card />
            <x-book-card />
            <x-book-card />
            <x-book-card />
        </div>
    </div>
@endsection