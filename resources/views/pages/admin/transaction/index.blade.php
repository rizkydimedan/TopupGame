<x-app-layout>
    <x-slot name="header">
        <div class="md:container mx-auto sm:px-8 lg:px-10">
            <h2 class="font-semibold text-2xl text-gray-800 leading-tight mt-3">
                {{ __('Transaction') }}
            </h2>
        </div>
    </x-slot>


    <main>
        <!-- Begin Page Content -->
        <div class="container-fluid pt-10">
            <!-- Page Heading -->
            <div class="md:container w-full ">
                <div class="flex flex-col w-full">
                    {{-- sm:-mx-6 lg:-mx-8 --}}
                    <div class="overflow-x-auto ">
                        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">

                            <div class="col-lg-12 mb-4 flex justify-end">
                                <x-secondary-button
                                    wire:click="$dispatch('openModal', { component: 'transaction-detail' })">
                                    {{ __('Tambah') }}
                                </x-secondary-button>


                            </div>

                            <div class="shadow-md sm:rounded-lg">
                                <form class="grid grid-cols-6 items-center gap-2 ">
                                    <x-text-input class="col-span-1" name="q" placeholder="Search"
                                        aria-label="Search" />
                                    <x-primary-button class="col-span-1">Search</x-primary-button>
                                </form>
                                <table
                                    class="min-w-full overflow-scroll divide-y divide-gray-200 items-center table-auto ">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase ">
                                                Order Id</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                                Date-time</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                                Name Game</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                                Price</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                                Diamond</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                                Transaction Status</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-end text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                                Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200 items-center">
                                        @forelse ($items as $item)
                                            <tr>
                                                <td scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase  overflow-x-auto">
                                                    {{ $item->uuid }}</td>
                                                <td scope="col"
                                                    class="px-6 py-3 text-center text-xs font-semibold text-gray-500 uppercase ">
                                                    {{ $item->updated_at->format('d F Y H:i:s') }}
                                                </td>
                                                <td scope="col"
                                                    class="px-6 py-3 text-center text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                                    <a href="" class="hover:text-blue-600">
                                                        {{ $item->game->name }}</a>
                                                </td>
                                                <td scope="col"
                                                    class="px-6 py-3  text-center    text-xs font-medium text-gray-500 uppercase tracking-wider ">
                                                    Rp. {{ $item->price }}
                                                </td>
                                                <td scope="col"
                                                    class="px-6 py-3  text-center    text-xs font-medium text-gray-500 uppercase tracking-wider ">
                                                    {{ $item->diamond_total }}
                                                </td>
                                                <td scope="col"
                                                    class="px-6 py-3  text-center    text-xs font-medium text-gray-500 uppercase tracking-wider ">
                                                    <span
                                                        class="px-2 py-1 rounded-xl font-semibold 
                                                        {{ $item->transaction_status == 'IN_CART'
                                                            ? 'bg-yellow-200 ring-yellow-500 text-yellow-600 shadow-sm-light shadow-yellow-300 ring-1'
                                                            : ($item->transaction_status == 'PENDING'
                                                                ? 'bg-orange-200 ring-orange-600 text-orange-700 shadow-sm-light shadow-orange-300 ring-1'
                                                                : ($item->transaction_status == 'SUCCESS'
                                                                    ? 'bg-green-100 ring-green-500 text-green-600 shadow-sm-light shadow-green-300 ring-1'
                                                                    : ($item->transaction_status == 'FAILED'
                                                                        ? 'bg-red-200 ring-red-600 text-red-700 shadow-sm-light shadow-red-300 ring-1'
                                                                        : ($item->transaction_status == 'CANCEL'
                                                                            ? 'bg-gray-100 ring-gray-400 text-gray-500 shadow-sm-light shadow-gray-300 ring-1'
                                                                            : ($item->transaction_status == 'EXPIRE'
                                                                                ? 'bg-gray-900 text-gray-100'
                                                                                : 'bg-pink-100 ring-pink-500 text-pink-500 shadow-sm-light shadow-pink-300 ring-1'))))) }}">
                                                        {{ $item->transaction_status }}
                                                    </span>

                                                </td>
                                                <td scope="col"
                                                    class="px-6 py-3 items-end  text-center text-xs font-medium text-gray-500 tracking-wider gap-1">
                                                    {{-- Product --}}
                                                    <button  wire:click="$dispatch('openModal', { component: 'transaction-detail' })"
                                                        class="text-orange-500 hover:text-orange-400 flex flex-row">
                                                        <i class="fa-solid fa-info mx-1"></i>Detail
                                                    </button>

                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4" class="text-center">Data Kosong</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>







</x-app-layout>