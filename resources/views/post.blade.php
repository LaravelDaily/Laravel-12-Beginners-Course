@extends('layouts.blog')
 
@section('content')
<main class="container mx-auto mt-6 flex justify-center">
    <!-- Blog Article Section -->
    <section class="w-3/5 bg-white p-6 shadow-md rounded-lg">
        <h1 class="text-2xl font-bold mb-4">{{ $post->title }}</h1>
        <img src="{{ asset('images/placeholder-800x400.png') }}" alt="Post Image" class="w-full object-cover rounded mb-4">
        <p class="text-gray-600 mb-4">Published on <span class="font-semibold">March 2, 2025</span></p>
        <div class="text-gray-800 space-y-4">
            <p>{{ $post->text }}</p>
        </div>
    </section>
</main>
@endsection