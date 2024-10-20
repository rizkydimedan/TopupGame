<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @include('includes.style')
    @livewireStyles
</head>

<body>

    @include('includes.navbar')

    <section class="bg-white py-8 antialiased dark:bg-gray-900 md:py-16 ">
        <div class="mx-auto max-w-screen px-4 2xl:px-0 mt-20">
            <h2 class="text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">Shopping Cart</h2>

            <div class="mt-6 sm:mt-8 md:gap-6 md:flex md:flex-row md:items-start xl:gap-8">
                <div class="mx-auto w-full flex-none md:w-3/4 xl:max-w-4xl">
                    {{-- Add DATA --}}
                    <div class="space-y-6">
                        <div
                            class="rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 md:p-6">
                            <div class="space-y-4 md:flex md:items-center md:justify-between md:gap-6 md:space-y-0">
                                <a href="#" class="shrink-0 md:order-1">
                                    <img class="h-20 w-20 dark:hidden"
                                        src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front.svg"
                                        alt="imac image" />
                                    <img class="hidden h-20 w-20 dark:block"
                                        src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front-dark.svg"
                                        alt="imac image" />
                                </a>

                                <label for="counter-input" class="sr-only">Choose quantity:</label>
                                <div class="flex items-center justify-between md:order-3 md:justify-end">
                                    <div class="flex items-center">
                                        <button type="button" id="decrement-button"
                                            data-input-counter-decrement="counter-input"
                                            class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-md border border-gray-300 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                                            <svg class="h-2.5 w-2.5 text-gray-900 dark:text-white" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                                            </svg>
                                        </button>
                                        <input type="text" id="counter-input" data-input-counter
                                            class="w-10 shrink-0 border-0 bg-transparent text-center text-sm font-medium text-gray-900 focus:outline-none focus:ring-0 dark:text-white"
                                            placeholder="" value="2" required />
                                        <button type="button" id="increment-button"
                                            data-input-counter-increment="counter-input"
                                            class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-md border border-gray-300 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                                            <svg class="h-2.5 w-2.5 text-gray-900 dark:text-white" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="text-end md:order-4 md:w-32">
                                        <p class="text-base font-bold text-gray-900 dark:text-white">$1,499</p>
                                    </div>
                                </div>

                                <div class="w-full min-w-0 flex-1 space-y-4 md:order-2 md:max-w-md">
                                    <a href="#"
                                        class="text-base font-medium text-gray-900 hover:underline dark:text-white">PC
                                        system All in One APPLE iMac (2023) mqrq3ro/a, Apple M3, 24" Retina 4.5K, 8GB,
                                        SSD
                                        256GB, 10-core GPU, Keyboard layout INT</a>

                                    <div class="flex items-center gap-4">
                                        <button type="button"
                                            class="inline-flex items-center text-sm font-medium text-gray-500 hover:text-gray-900 hover:underline dark:text-gray-400 dark:hover:text-white">
                                            <svg class="me-1.5 h-5 w-5" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z" />
                                            </svg>
                                            Add to Favorites
                                        </button>

                                        <button type="button"
                                            class="inline-flex items-center text-sm font-medium text-red-600 hover:underline dark:text-red-500">
                                            <svg class="me-1.5 h-5 w-5" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M6 18 17.94 6M18 18 6.06 6" />
                                            </svg>
                                            Remove
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    {{-- End Add DATA --}}
                </div>

                {{-- Transaction --}}
                <div class="mx-auto mt-6 max-w-4xl flex-1 space-y-6 md:mt-0 md:w-1/4">
                    <div
                        class="space-y-4 rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 sm:p-6">
                        <p class="text-xl font-semibold text-gray-900 dark:text-white">Order summary</p>

                        <div class="space-y-4">
                            <div class="space-y-2">
                                <dl class="flex items-center justify-between gap-4">
                                    <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Original price
                                    </dt>
                                    <dd class="text-base font-medium text-gray-900 dark:text-white">$7,592.00</dd>
                                </dl>

                                <dl class="flex items-center justify-between gap-4">
                                    <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Savings</dt>
                                    <dd class="text-base font-medium text-green-600">-$299.00</dd>
                                </dl>

                                <dl class="flex items-center justify-between gap-4">
                                    <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Store Pickup</dt>
                                    <dd class="text-base font-medium text-gray-900 dark:text-white">$99</dd>
                                </dl>

                                <dl class="flex items-center justify-between gap-4">
                                    <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Tax</dt>
                                    <dd class="text-base font-medium text-gray-900 dark:text-white">$799</dd>
                                </dl>
                            </div>

                            <dl
                                class="flex items-center justify-between gap-4 border-t border-gray-200 pt-2 dark:border-gray-700">
                                <dt class="text-base font-bold text-gray-900 dark:text-white">Total</dt>
                                <dd class="text-base font-bold text-gray-900 dark:text-white">$8,191.00</dd>
                            </dl>
                        </div>

                        <a href="#"
                            class="flex w-full items-center justify-center rounded-lg bg-orange-500 px-5 py-2.5 text-sm font-medium text-white hover:bg-orange-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-orange-800">Proceed
                            to Checkout</a>

                        <div class="flex items-center justify-center gap-2">
                            <span class="text-sm font-normal text-gray-500 dark:text-gray-400"> or </span>
                            <a href="#" title=""
                                class="inline-flex items-center gap-2 text-sm font-medium text-orange-500 underline hover:no-underline dark:text-blue-500">
                                Continue Shopping
                                <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div
                        class="space-y-4 rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 sm:p-6">
                        <form class="space-y-4">
                            <div>
                                <label for="voucher"
                                    class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"> Do you have a
                                    voucher or gift card? </label>
                                <input type="text" id="voucher"
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                    placeholder="" required />
                            </div>
                            <button type="submit"
                                class="flex w-full items-center justify-center rounded-lg bg-orange-500 px-5 py-2.5 text-sm font-medium text-white hover:bg-orange-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-orange-800">Apply
                                Code</button>
                        </form>
                    </div>

                </div>
                {{-- Transaction --}}
            </div>
           
            {{-- Also Buy --}}
            <div class=" mt-8 block">
                <h3 class="text-2xl font-semibold text-gray-900 dark:text-white">People also bought</h3>
                <div class="mt-6 grid grid-cols-2 md:grid-cols-3 gap-2 md:gap-4 md:mt-8">


                    <div
                        class="min-h-[50px] max-h-[400px] overflow-hidden rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                        <a href="#" class="overflow-hidden rounded">
                            <img class="mx-auto h-20 w-20 md:h-32 md:w-32 dark:hidden relative rounded-lg object-cover object-center"
                                src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front.svg"
                                alt="imac image" />
                        </a>
                        <div>
                            <a href="#"
                                class="text-lg md:text-xl font-semibold leading-tight text-gray-900 hover:underline dark:text-white">iMac
                                27”</a>
                            {{-- <p class="mt-2 text-base font-normal text-gray-500 dark:text-gray-400">This generation
                                has some improvements, including a longer continuous battery life.</p> --}}
                        </div>
                        <div>
                            <p class="text-sm md:text-lg font-semibold text-gray-900 dark:text-white">
                                <span class="line-through"> $399,99 </span>
                            </p>
                            <p class="text-lg md:text-xl font-bold leading-tight text-red-600 dark:text-red-500">$299
                            </p>
                        </div>
                        <div class="mt-6 flex items-start md:items-center gap-2.5 flex-col md:flex-row">
                            <button data-tooltip-target="favourites-tooltip-1" type="button"
                                class="inline-flex  items-center justify-center gap-2 rounded-lg border border-gray-200 bg-white p-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700">
                                <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M12 6C6.5 1 1 8 5.8 13l6.2 7 6.2-7C23 8 17.5 1 12 6Z">
                                    </path>
                                </svg>
                            </button>
                            <div id="favourites-tooltip-1" role="tooltip"
                                class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700">
                                Add to favourites
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>

                            <button type="button"
                                class="inline-flex w-full items-center justify-center rounded-lg  px-5 py-2.5 text-sm font-medium bg-orange-500  text-white hover:bg-orange-800 focus:outline-none focus:ring-4 focus:ring-blue-300 ">
                                <svg class="-ms-2 me-2 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4" />
                                </svg>
                                Add to cart
                            </button>
                        </div>
                    </div>

                    <div
                        class="min-h-[50px] max-h-[400px] overflow-hidden rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                        <a href="#" class="overflow-hidden rounded">
                            <img class="mx-auto h-20 w-20 md:h-32 md:w-32 dark:hidden relative rounded-lg object-cover object-center"
                                src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front.svg"
                                alt="imac image" />
                        </a>
                        <div>
                            <a href="#"
                                class="text-xs md:text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">iMac
                                27”</a>
                            {{-- <p class="mt-2 text-base font-normal text-gray-500 dark:text-gray-400">This generation
                                has some improvements, including a longer continuous battery life.</p> --}}
                        </div>
                        <div>
                            <p class="text-sm md:text-lg font-semibold text-gray-900 dark:text-white">
                                <span class="line-through"> $399,99 </span>
                            </p>
                            <p class="text-lg md:text-xl font-bold leading-tight text-red-600 dark:text-red-500">$299
                            </p>
                        </div>
                        <div class="mt-6 flex items-start md:items-center gap-2.5 flex-col md:flex-row">
                            <button data-tooltip-target="favourites-tooltip-1" type="button"
                                class="inline-flex  items-center justify-center gap-2 rounded-lg border border-gray-200 bg-white p-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700">
                                <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M12 6C6.5 1 1 8 5.8 13l6.2 7 6.2-7C23 8 17.5 1 12 6Z">
                                    </path>
                                </svg>
                            </button>
                            <div id="favourites-tooltip-1" role="tooltip"
                                class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700">
                                Add to favourites
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>

                            <button type="button"
                                class="inline-flex w-full items-center justify-center rounded-lg  px-5 py-2.5 text-sm font-medium bg-orange-500  text-white hover:bg-orange-800 focus:outline-none focus:ring-4 focus:ring-blue-300 ">
                                <svg class="-ms-2 me-2 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4" />
                                </svg>
                                Add to cart
                            </button>
                        </div>
                    </div>

                    <div
                    class="min-h-[50px] max-h-[400px] overflow-hidden rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                    <a href="#" class="overflow-hidden rounded">
                        <img class="mx-auto h-20 w-20 md:h-32 md:w-32 dark:hidden relative rounded-lg object-cover object-center"
                            src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front.svg"
                            alt="imac image" />
                    </a>
                    <div>
                        <a href="#"
                            class="text-xs md:text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">iMac
                            27”</a>
                        {{-- <p class="mt-2 text-base font-normal text-gray-500 dark:text-gray-400">This generation
                            has some improvements, including a longer continuous battery life.</p> --}}
                    </div>
                    <div>
                        <p class="text-sm md:text-lg font-semibold text-gray-900 dark:text-white">
                            <span class="line-through"> $399,99 </span>
                        </p>
                        <p class="text-lg md:text-xl font-bold leading-tight text-red-600 dark:text-red-500">$299
                        </p>
                    </div>
                    <div class="mt-6 flex items-start md:items-center gap-2.5 flex-col md:flex-row">
                        <button data-tooltip-target="favourites-tooltip-1" type="button"
                            class="inline-flex  items-center justify-center gap-2 rounded-lg border border-gray-200 bg-white p-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700">
                            <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M12 6C6.5 1 1 8 5.8 13l6.2 7 6.2-7C23 8 17.5 1 12 6Z">
                                </path>
                            </svg>
                        </button>
                        <div id="favourites-tooltip-1" role="tooltip"
                            class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700">
                            Add to favourites
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>

                        <button type="button"
                            class="inline-flex w-full items-center justify-center rounded-lg  px-5 py-2.5 text-sm font-medium bg-orange-500  text-white hover:bg-orange-800 focus:outline-none focus:ring-4 focus:ring-blue-300 ">
                            <svg class="-ms-2 me-2 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4" />
                            </svg>
                            Add to cart
                        </button>
                    </div>


                </div>

                </div>
            </div>
            {{-- eND Buy --}}
        </div>
    </section>

    @include('includes.footer')
    @livewireScripts
    @include('includes.script')

</body>

</html>