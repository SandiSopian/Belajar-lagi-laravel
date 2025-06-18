<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container mx-auto px-4 py-8">
        <article class="mb-8 p-6 bg-white rounded-lg shadow-md">
            @foreach ($posts as $post)
            <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
                <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-600">{{ $post['title'] }}</h2>
            </a>
            <p class="text-gray-600">{{ $post['author'] }} | Tanggal: 1 Januari 2023</p>
            <p>{{ Str::limit($post['body'],100) }}</p>
            <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-400">read more &raquo;</a>
            @endforeach
        </article>
    </div>

</x-layout>