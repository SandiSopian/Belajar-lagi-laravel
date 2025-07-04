<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">
                    <address class="flex items-center mb-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese Leos">
                            <div>
                                <a href="/posts?author={{ $post->author->username }}" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">{{ $post->author->name }} </a>
                                <a href="/posts?category={{ $post->category->slug }}">
                                    <p class=" text-base text-gray-500 dark:text-gray-400">{{ $post->category->name }}</p>
                                </a>
                                <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate datetime="{{ $post->created_at}}" title="{{ $post->created_at}}">{{ $post->created_at->diffForHumans() }}</time></p>
                            </div>
                        </div>
                    </address>
                    <h1 class=" mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{ $post['title'] }}</h1>
                </header>
                <p class="lead">
                    {{$post['body']}}
                </p>

                <a href="/posts/" class=" inline-flex items-center font-medium text-sm text-primary-600 dark:text-primary-500 hover:underline mt-8">
                    &laquo; Back to Posts</a>
            </article>


        </div>
    </main>


    </div>
    </footer>

</x-layout>