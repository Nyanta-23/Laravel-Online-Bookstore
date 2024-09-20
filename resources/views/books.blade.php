<x-layout>

    <x-slot:title>{{ $title }}</x-slot:title>

    <section class="bg-gray-50 py-8 antialiased dark:bg-gray-900 md:py-12">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">

            <div class="mb-4 grid gap-4 sm:grid-cols-2 md:mb-8 lg:grid-cols-3 xl:grid-cols-4">
                @foreach ($books as $book)
                    <div
                        class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                        <div class="h-56 w-full relative">
                            <span
                                class="absolute inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-xs font-medium text-gray-600 ring-1 ring-inset ring-gray-500/10 left-2 top-2">
                                <a href="#">
                                    {{ $book->category->name }}
                                </a>
                            </span>

                            <a href="/book/{{ $book->slug }}">
                                <img class="mx-auto h-full dark:hidden"
                                    src="{{$book->image ? 
                                    asset('./storage/' . $book->image) : "https://via.placeholder.com/1200x1200.png?text=$book->book_title" }} "
                                    alt="{{ $book->book_title }}" />
                            </a>
                        </div>
                        <div class="pt-6 truncate">
                            <a href="/book/{{ $book->slug }}"
                                class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">
                                {{ $book->book_title }}
                            </a>
                        </div>

                        <div class="mt-4 flex flex-col gap-4">
                            <p class="text-2xl font-extrabold leading-tight text-gray-900 dark:text-white">Rp.
                                {{ Number::format($book->price, locale: 'id') }}</p>
                            <button type="button"
                                class="inline-flex justify-center items-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 w-full"
                                onclick="addCart({{ $book->id }}, 1)"
                                >

                                <svg class="-ms-2 me-2 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6" />
                                </svg>
                                Add to cart
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</x-layout>
