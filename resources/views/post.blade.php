<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container mx-auto px-4 py-8">
        <article class="mb-8 p-6 bg-white rounded-lg shadow-md">
            <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-600">{{ $post['title'] }}</h2>
            <p class="text-gray-600">{{ $post->author->name }} | {{ $post->created_at->diffForHumans() }}</p>
            <p>{{$post['body']}}</p>
            <a href="/posts" class="font-medium text-blue-400"> &laquo; Back to posts</a>
        </article>
    </div>

</x-layout>