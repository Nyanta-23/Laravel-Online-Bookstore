<nav class="sticky top-0 z-50  bg-white dark:bg-gray-800 antialiased">
    <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0 py-4">
        <div class="flex items-center justify-between">

            <div class="flex items-center space-x-8">
                <div class="shrink-0">
                    <a href="#" title="" class="">
                        <div class="flex items-center text-2xl font-bold gap-1">

                            <svg class="w-7 h-7 text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 1 0 0-2h-2v-2h2a1 1 0 0 0 1-1V4a2 2 0 0 0-2-2h-8v16h5v2H7a1 1 0 1 1 0-2h1V2H6Z"
                                    clip-rule="evenodd" />
                            </svg>
                            Storebook
                        </div>
                    </a>
                </div>

                <ul class="hidden lg:flex items-center justify-start gap-6 md:gap-8 py-3 sm:justify-center">
                    <li>
                        <a href="/" title=""
                            class="flex text-sm font-medium text-gray-900 hover:text-primary-700 dark:text-white dark:hover:text-primary-500">
                            Home
                        </a>
                    </li>
                    <li class="shrink-0">
                        <a href="#" title=""
                            class="flex text-sm font-medium text-gray-900 hover:text-primary-700 dark:text-white dark:hover:text-primary-500">
                            Best Sellers
                        </a>
                    </li>
                </ul>
            </div>

            @auth
                <div class="flex items-center lg:space-x-2">

                    <button id="myCartDropdownButton1" data-dropdown-toggle="myCartDropdown1" type="button"
                        class="inline-flex items-center rounded-lg justify-center p-2 hover:bg-gray-100 dark:hover:bg-gray-700 text-sm font-medium leading-none text-gray-900 dark:text-white">
                        <span class="sr-only">
                            Cart
                        </span>
                        <svg class="w-5 h-5 lg:me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7H7.312" />
                        </svg>
                        <span class="hidden sm:flex">My Cart</span>
                        <svg class="hidden sm:flex w-4 h-4 text-gray-900 dark:text-white ms-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 9-7 7-7-7" />
                        </svg>
                    </button>

                    <div id="myCartDropdown1"
                        class="hidden z-10 mx-auto max-w-sm space-y-4 overflow-hidden rounded-lg bg-white p-4 antialiased shadow-lg dark:bg-gray-800">
                        <div class="grid grid-cols-2">
                            <div>
                                <a href="#"
                                    class="truncate text-sm font-semibold leading-none text-gray-900 dark:text-white hover:underline">Apple
                                    iPhone 15</a>
                                <p class="mt-0.5 truncate text-sm font-normal text-gray-500 dark:text-gray-400">$599</p>
                            </div>

                            <div class="flex items-center justify-end gap-6">
                                <p class="text-sm font-normal leading-none text-gray-500 dark:text-gray-400">Qty: 1</p>

                                <button data-tooltip-target="tooltipRemoveItem1a" type="button"
                                    class="text-red-600 hover:text-red-700 dark:text-red-500 dark:hover:text-red-600">
                                    <span class="sr-only"> Remove </span>
                                    <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm7.7-3.7a1 1 0 0 0-1.4 1.4l2.3 2.3-2.3 2.3a1 1 0 1 0 1.4 1.4l2.3-2.3 2.3 2.3a1 1 0 0 0 1.4-1.4L13.4 12l2.3-2.3a1 1 0 0 0-1.4-1.4L12 10.6 9.7 8.3Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <div id="tooltipRemoveItem1a" role="tooltip"
                                    class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700">
                                    Remove item
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-2">
                            <div>
                                <a href="#"
                                    class="truncate text-sm font-semibold leading-none text-gray-900 dark:text-white hover:underline">Apple
                                    iPad Air</a>
                                <p class="mt-0.5 truncate text-sm font-normal text-gray-500 dark:text-gray-400">$499</p>
                            </div>

                            <div class="flex items-center justify-end gap-6">
                                <p class="text-sm font-normal leading-none text-gray-500 dark:text-gray-400">Qty: 1</p>

                                <button data-tooltip-target="tooltipRemoveItem2a" type="button"
                                    class="text-red-600 hover:text-red-700 dark:text-red-500 dark:hover:text-red-600">
                                    <span class="sr-only"> Remove </span>
                                    <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm7.7-3.7a1 1 0 0 0-1.4 1.4l2.3 2.3-2.3 2.3a1 1 0 1 0 1.4 1.4l2.3-2.3 2.3 2.3a1 1 0 0 0 1.4-1.4L13.4 12l2.3-2.3a1 1 0 0 0-1.4-1.4L12 10.6 9.7 8.3Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <div id="tooltipRemoveItem2a" role="tooltip"
                                    class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700">
                                    Remove item
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-2">
                            <div>
                                <a href="#"
                                    class="truncate text-sm font-semibold leading-none text-gray-900 dark:text-white hover:underline">Apple
                                    Watch SE</a>
                                <p class="mt-0.5 truncate text-sm font-normal text-gray-500 dark:text-gray-400">$598</p>
                            </div>

                            <div class="flex items-center justify-end gap-6">
                                <p class="text-sm font-normal leading-none text-gray-500 dark:text-gray-400">Qty: 2</p>

                                <button data-tooltip-target="tooltipRemoveItem3b" type="button"
                                    class="text-red-600 hover:text-red-700 dark:text-red-500 dark:hover:text-red-600">
                                    <span class="sr-only"> Remove </span>
                                    <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm7.7-3.7a1 1 0 0 0-1.4 1.4l2.3 2.3-2.3 2.3a1 1 0 1 0 1.4 1.4l2.3-2.3 2.3 2.3a1 1 0 0 0 1.4-1.4L13.4 12l2.3-2.3a1 1 0 0 0-1.4-1.4L12 10.6 9.7 8.3Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <div id="tooltipRemoveItem3b" role="tooltip"
                                    class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700">
                                    Remove item
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-2">
                            <div>
                                <a href="#"
                                    class="truncate text-sm font-semibold leading-none text-gray-900 dark:text-white hover:underline">Sony
                                    Playstation 5</a>
                                <p class="mt-0.5 truncate text-sm font-normal text-gray-500 dark:text-gray-400">$799</p>
                            </div>

                            <div class="flex items-center justify-end gap-6">
                                <p class="text-sm font-normal leading-none text-gray-500 dark:text-gray-400">Qty: 1</p>

                                <button data-tooltip-target="tooltipRemoveItem4b" type="button"
                                    class="text-red-600 hover:text-red-700 dark:text-red-500 dark:hover:text-red-600">
                                    <span class="sr-only"> Remove </span>
                                    <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm7.7-3.7a1 1 0 0 0-1.4 1.4l2.3 2.3-2.3 2.3a1 1 0 1 0 1.4 1.4l2.3-2.3 2.3 2.3a1 1 0 0 0 1.4-1.4L13.4 12l2.3-2.3a1 1 0 0 0-1.4-1.4L12 10.6 9.7 8.3Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <div id="tooltipRemoveItem4b" role="tooltip"
                                    class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700">
                                    Remove item
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-2">
                            <div>
                                <a href="#"
                                    class="truncate text-sm font-semibold leading-none text-gray-900 dark:text-white hover:underline">Apple
                                    iMac 20"</a>
                                <p class="mt-0.5 truncate text-sm font-normal text-gray-500 dark:text-gray-400">$8,997</p>
                            </div>

                            <div class="flex items-center justify-end gap-6">
                                <p class="text-sm font-normal leading-none text-gray-500 dark:text-gray-400">Qty: 3</p>

                                <button data-tooltip-target="tooltipRemoveItem5b" type="button"
                                    class="text-red-600 hover:text-red-700 dark:text-red-500 dark:hover:text-red-600">
                                    <span class="sr-only"> Remove </span>
                                    <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm7.7-3.7a1 1 0 0 0-1.4 1.4l2.3 2.3-2.3 2.3a1 1 0 1 0 1.4 1.4l2.3-2.3 2.3 2.3a1 1 0 0 0 1.4-1.4L13.4 12l2.3-2.3a1 1 0 0 0-1.4-1.4L12 10.6 9.7 8.3Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <div id="tooltipRemoveItem5b" role="tooltip"
                                    class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700">
                                    Remove item
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </div>
                        </div>

                        <a href="#" title=""
                            class="mb-2 me-2 inline-flex w-full items-center justify-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                            role="button"> Proceed to Checkout </a>
                    </div>

                    <button id="userDropdownButton1" data-dropdown-toggle="userDropdown1" type="button"
                        class="inline-flex items-center rounded-lg justify-center p-2 hover:bg-gray-100 dark:hover:bg-gray-700 text-sm font-medium leading-none text-gray-900 dark:text-white">
                        <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-width="2"
                                d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                        Account
                        <svg class="w-4 h-4 text-gray-900 dark:text-white ms-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 9-7 7-7-7" />
                        </svg>
                    </button>

                    <div id="userDropdown1"
                        class="hidden z-10 w-56 divide-y divide-gray-100 overflow-hidden overflow-y-auto rounded-lg bg-white antialiased shadow dark:divide-gray-600 dark:bg-gray-700">
                        <ul class="p-2 text-start text-sm font-medium text-gray-900 dark:text-white">
                            <li><a href="#" title=""
                                    class="inline-flex w-full items-center gap-2 rounded-md px-3 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-600">
                                    My Account </a></li>
                            <li><a href="#" title=""
                                    class="inline-flex w-full items-center gap-2 rounded-md px-3 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-600">
                                    My Orders </a></li>
                            <li><a href="#" title=""
                                    class="inline-flex w-full items-center gap-2 rounded-md px-3 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-600">
                                    Settings </a></li>
                            <li><a href="#" title=""
                                    class="inline-flex w-full items-center gap-2 rounded-md px-3 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-600">
                                    Favourites </a></li>
                            <li><a href="#" title=""
                                    class="inline-flex w-full items-center gap-2 rounded-md px-3 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-600">
                                    Delivery Addresses </a></li>
                            <li><a href="#" title=""
                                    class="inline-flex w-full items-center gap-2 rounded-md px-3 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-600">
                                    Billing Data </a></li>
                        </ul>

                        <div class="p-2 text-sm font-medium text-gray-900 dark:text-white">
                            <form action="/auth/signout" method="POST">
                                @csrf
                                <button type="submit"
                                    class="inline-flex w-full items-center gap-2 rounded-md px-3 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-600">
                                    Sign Out 
                                </button>
                            </form>
                        </div>
                    </div>

                    <button type="button" data-collapse-toggle="ecommerce-navbar-menu-1"
                        aria-controls="ecommerce-navbar-menu-1" aria-expanded="false"
                        class="inline-flex lg:hidden items-center justify-center hover:bg-gray-100 rounded-md dark:hover:bg-gray-700 p-2 text-gray-900 dark:text-white">
                        <span class="sr-only">
                            Open Menu
                        </span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                d="M5 7h14M5 12h14M5 17h14" />
                        </svg>
                    </button>

                </div>
            @else
                <div class="flex items-center">
                    <a href="/auth/signup"
                        class="inline-flex items-center rounded-lg justify-center py-2 px-3 hover:bg-white hover:border hover:border-blue-500 hover:text-blue-500  dark:hover:bg-gray-700 text-md gap-2 font-medium leading-none text-gray-100 dark:text-white bg-blue-500 group lg:mr-1">
                        <svg class="w-7 h-7 text-gray-100 group-hover:text-blue-500  dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M9 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H7Zm8-1a1 1 0 0 1 1-1h1v-1a1 1 0 1 1 2 0v1h1a1 1 0 1 1 0 2h-1v1a1 1 0 1 1-2 0v-1h-1a1 1 0 0 1-1-1Z"
                                clip-rule="evenodd" />
                        </svg>
                        SignUp
                    </a>
                    Or
                    <a href="/auth/signin"
                        class="inline-flex items-center rounded-lg justify-center py-2 px-3 text-blue-500 hover:bg-blue-500 dark:hover:bg-gray-700 text-md gap-2 font-medium leading-none dark:text-white border border-blue-500 mx-0 lg:ml-1 group hover:text-gray-100">
                        <svg class="w-7 h-7 text-blue-500 dark:text-white group-hover:text-gray-100" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 12H4m12 0-4 4m4-4-4-4m3-4h2a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3h-2" />
                        </svg>
                        SignIn
                    </a>
                </div>

            @endauth



        </div>

        <div id="ecommerce-navbar-menu-1"
            class="bg-gray-50 dark:bg-gray-700 dark:border-gray-600 border border-gray-200 rounded-lg py-3 hidden px-4 mt-4">
            <ul class="text-gray-900 dark:text-white text-sm font-medium space-y-3">
                <li>
                    <a href="#" class="hover:text-primary-700 dark:hover:text-primary-500">Home</a>
                </li>
                <li>
                    <a href="#" class="hover:text-primary-700 dark:hover:text-primary-500">Best Sellers</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
