<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="bg-white">


        <!-- Product info -->
        <div
            class="mx-auto max-w-2xl px-4 pb-16 pt-10 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-4 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pb-24 lg:pt-16">

            <div class="lg:col-span-1 lg:pr-8 flex justify-center">
                <div class="">
                    <img src="https://via.placeholder.com/250x300.png" alt="">
                    <p class="text-xs text-center text-gray-500 font-semibold mt-5">The cover image may be different.
                    </p>
                </div>
            </div>

            <div class="py-10 lg:col-span-2 lg:col-start-2 lg:pb-16 lg:pr-8 lg:pt-0">

                <div class="mb-5">
                    <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">Basic Tee 6-Pack</h1>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-2">Synopsis</h3>

                    <div class="space-y-6">
                        <p class="text-base text-gray-900">The Basic Tee 6-Pack allows you to fully express your
                            vibrant personality with three grayscale options. Feeling adventurous? Put on a heather
                            gray tee. Want to be a trendsetter? Try our exclusive colorway: &quot;Black&quot;. Need
                            to add an extra pop of color to your outfit? Our white tee has you covered.</p>
                    </div>
                </div>

                <div class="mt-5">
                    <h3 class="text-lg font-medium text-gray-900">Nyanta (Author)</h3>
                </div>
            </div>

            <div class="mt-4 lg:col-span-1 lg:mt-0">

                <h5 class="font-semibold text-2xl">Buy Now!</h5>

                <form class="mt-5">

                    <div>
                        <label for="bedrooms-input"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Choose
                            quantity:</label>
                        <div class="relative flex items-center max-w-[11rem]">
                            <button type="button" id="decrement-button" data-input-counter-decrement="bedrooms-input"
                                class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                                <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 1h16" />
                                </svg>
                            </button>

                            <input type="text" id="bedrooms-input" data-input-counter data-input-counter-min="1"
                                aria-describedby="helper-text-explanation"
                                class="bg-gray-50 border-x-0 border-gray-300 h-11 font-medium text-center text-gray-900 text-xl focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" value="1" required />

                            <button type="button" id="increment-button" data-input-counter-increment="bedrooms-input"
                                class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                                <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 1v16M1 9h16" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <p class="text-3xl tracking-tight text-gray-900 mt-10 mb-5">$192</p>

                    <button type="submit"
                        class="flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        Buy Now
                    </button>
                    <p class="text-center font-semibold text-lg my-1">Or</p>
                    <button type="submit"
                        class="flex w-full items-center justify-center rounded-md border border-transparent bg-yellow-300 px-8 py-3 text-base font-medium text-white hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">
                        Add to cart
                    </button>
                </form>
            </div>


        </div>

        </div>


</x-layout>
