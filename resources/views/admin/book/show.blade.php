<x-admin.layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="bg-white">


        <!-- Product info -->
        <div
            class="mx-auto max-w-2xl px-4 pb-16 pt-10 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-4 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pb-24 lg:pt-16">

            <div class="lg:col-span-1 lg:pr-8 flex justify-center">
                <div class="">
                    <img src="https://via.placeholder.com/250x300.png" alt="">
                    <p class="text-xs text-center text-gray-500 font-semibold mt-5">The cover image may be different.</p>
                </div>
            </div>

            <div class="py-10 lg:col-span-2 lg:col-start-2 lg:pb-16 lg:pr-8 lg:pt-0">

                <div class="mb-5">
                    <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">{{ $book->book_title }}</h1>
                </div>

                <div class="mb-5">
                    <span
                        class="inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-xs font-medium text-gray-600 ring-1 ring-inset ring-gray-700/10 left-2 top-2">
                        <a href="#">{{ $book->category->name }}</a>
                    </span>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-2">Synopsis</h3>

                    <div class="space-y-6">
                        <p class="text-base text-gray-900">
                            {{ $book->synopsis }}
                        </p>
                    </div>
                </div>

                <div class="mt-5">
                    <h3 class="text-lg font-medium text-gray-900">{{ $book->author->name }} (Author)</h3>
                </div>
            </div>

            <div class="mt-4 lg:col-span-1 lg:mt-0 border-2 px-5 py-3 rounded-lg flex flex-col justify-center">

                <a href="/admin/books/{{ $book->slug }}/edit"
                    class="flex w-full items-center justify-center rounded-md border border-transparent bg-lime-600 px-8 py-3 text-base font-medium text-white hover:bg-lime-700 focus:outline-none focus:ring-2 focus:ring-lime-500 focus:ring-offset-2">
                    Edit
                </a>
                <p class="text-center font-semibold text-lg my-1">Or</p>
                <form action="/admin/books/{{ $book->slug }}" method="POST">
                    @method('delete')
                    @csrf

                    <button onclick="return confirm('Are you sure want to delete this product?')"
                        class="flex w-full items-center justify-center rounded-md border border-transparent bg-red-600 px-8 py-3 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-danger-500 focus:ring-offset-2">
                        Delete
                    </button>
                </form>

            </div>


        </div>

    </div>


</x-admin.layout>
