<?php

/** @var \App\Models\Book $books */
?>

<x-layout>
    <x-slot:title>Shop</x-slot:title>
    <h1 class="text-3xl font-bold text-center mb-8">Shop</h1>

    <p class="mb-3"><a href="{{ route('shop.create') }}">+ Add a new book</a></p>

    <div class="flex flex-wrap justify-center gap-8">

        @foreach($books as $book)

        <a href="{{ route('shop.detail', ['id' => $book->book_id]) }}">

            <div class="pt-4 rounded-md bg-white w-56 my-2.5 justify-center items-center shadow px-6 py-4 flex flex-col">
                <img src="{{ asset('assets/imgs/books/' . $book->image) }}" alt="img" title="img" class="h-56 w-40 object-cover">
                <h4 class="mt-8 border-b-2">{{$book->title}}</h4>
                <div class="mb-10 text-center capitalize">{{$book->genre->name}}</div>
            </div>

        </a>

        @endforeach

    </div>


</x-layout>