<x-layout>
    <x-slot:title>News details</x-slot:title>
    <h2 class="tryColor">Hello details!</h2>
    <h1>{{ $news->title }}</h1>
    <img src="{{ asset('assets/imgs/news/' . $news->img) }}" alt="img" title="img" class="h-56 w-40 object-cover">
    <p class="text-black">Description: {{ $news->description }}</p>
</x-layout>