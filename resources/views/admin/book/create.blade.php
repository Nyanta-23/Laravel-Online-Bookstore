<x-admin.layout>
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="mx-auto max-w-screen-xl">
            <!-- Start coding here -->

            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                <div class="flex justify-between mx-10 items-center">
                    <h1 class="text-3xl font-bold my-5">Create Book</h1>

                    <a href="/admin/books"
                        class="bg-0 my-5 px-3 py-3 bg-blue-500 rounded-lg text-gray-50 hover:bg-blue-700 font-medium">&#8592;
                        Go back to Books</a>
                </div>

                <div class="py-8 px-5 mx-auto lg:px-0 lg:max-w-4xl">
                    <form action="/admin/books" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                            <div class="sm:col-span-2">
                                <label for="book_title"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Book
                                    Title</label>
                                <input type="text" name="book_title" id="book_title"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Type product title book" autofocus value="{{ old('book_title') }}" required>
                                    
                                @error('book_title')
                                    <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                        {{ $message }}
                                    </p>
                                @enderror

                            </div>
                            <div class="sm:col-span-2">
                                <label for="slug"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Slug</label>

                                <input type="text" name="slug" id="slug"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 cursor-not-allowed"
                                    placeholder="Slug" readonly value="{{ old('slug') }}" required>

                                @error('slug')
                                    <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                        {{ $message }}
                                    </p>
                                @enderror

                            </div>

                            <div>
                                <label for="author"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Author</label>
                                <select id="author"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    name="author_id" required>
                                    <option selected>Select Author</option>
                                    @foreach ($authors as $author)
                                        <option value="{{ $author->id }}"
                                            {{ old('author_id') == $author->id ? 'selected' : false }}>{{ $author->name }}
                                        </option>
                                    @endforeach
                                </select>

                                @error('author_id')
                                    <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div>
                                <label for="category"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                                <select id="category"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    name="category_id" required>
                                    <option selected>Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ old('category_id') == $category->id ? 'selected' : false }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>

                                @error('category_id')
                                    <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div>
                                <label for="stock"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stock</label>
                                <input type="number" name="stock" id="stock"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="12" value="{{ old('stock') }}" required>

                                @error('stock')
                                    <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div>
                                <label for="price"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                                <input type="number" name="price" id="price"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="$2999" value="{{ old('price') }}" required>

                                @error('price')
                                    <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div class="sm:col-span-2">
                                <label for="image"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
                                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg"
                                    type="file" onchange="previewImage()" name="image" id="image">

                                @error('image')
                                    <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                        {{ $message }}
                                    </p>
                                @enderror

                                <img class="w-72 my-3 mx-3 border-none" id="frame">
                            </div>

                            <div class="sm:col-span-2">
                                <label for="synopsis"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Synopsis</label>
                                <textarea id="synopsis" rows="8" name="synopsis"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Your synopsis here" required>{{ old('synopsis') }}</textarea>

                                @error('synopsis')
                                    <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>

                        <div class="flex justify-end items-center mt-4 sm:mt-6 gap-2">
                            <a href="/admin/books"
                                class="px-5 py-2 bg-red-600 text-gray-50 rounded-lg font-medium hover:bg-red-700">Cancel</a>

                            <button type="submit"
                                class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                                Add product
                            </button>

                        </div>
                    </form>
                </div>


            </div>
        </div>
    </section>
</x-admin.layout>
