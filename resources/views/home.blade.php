<x-layout>
    <x-slot:title>Home</x-slot:title>
    <h1 class="text-3xl font-bold text-center mb-8">Home</h1>

    @auth
    <p>auth</p>
    @else
    <p>guest</p>
    @endauth

    @auth
    <p>2auth</p>
    @endauth

    @if(Auth::check())
    <p>Authenticated</p>
    @endif
    <x-slider></x-slider>
    <x-home_cards></x-home_cards>
    <x-reviews></x-reviews>

</x-layout>