<x-app-layout>

    {{-- Sweet Alert --}}
    @if (Session::has('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ Session::get('success') }}'
            });
        </script>
    @endif

    @if (Session::has('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: '{{ Session::get('error') }}'
            })
        </script>
    @endif
    {{-- Sweet Alert --}}

    <x-slot name="header">
        <div class="md:container mx-auto sm:px-8 lg:px-10">
            <h2 class="font-semibold text-2xl text-gray-800 leading-tight mt-3">
                {{ __('Product') }}
            </h2>
        </div>
    </x-slot>


    <main>
        <!-- Begin Page Content -->
        <div class="container-fluid pt-10">
            <!-- Page Heading -->
            <div class="container mx-auto">
                <div class="flex flex-col">
                    {{-- sm:-mx-6 lg:-mx-8 --}}
                    <div class="overflow-x-auto ">
                        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">

                            {{-- <div class="col-lg-12 mb-4 flex justify-end">
                                <a href="{{ route('product-packages.create', $items->id) }}"
                                    class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-slate-600 hover:text-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">{{ __('Tambah Produk') }}</a>
                                    
                            </div> --}}

                            <div class="overflow-hidden shadow-md sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200 items-center">
                                    <thead class="bg-gray-50 ">
                                        <tr>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                ID</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Name Game</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Price</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Diamond</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200 items-center">
                                        @forelse ($items as $index=>$item)
                                            <tr>
                                                <td scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    {{ $index + 1 }}</td>
                                                <td scope="col"
                                                    class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                                    <a href="{{ route('game-packages.show', $item->id) }}" class="hover:text-blue-600">
                                                    {{ $item->game_packages->name }}</a>
                                                </td>
                                                <td scope="col"
                                                    class="px-6 py-3  text-left  rounded-lg  text-xs font-medium text-gray-500 uppercase tracking-wider ">
                                                    Rp. {{ $item->price }}
                                                </td>
                                                <td scope="col"
                                                    class="px-6 py-3  text-left  rounded-lg  text-xs font-medium text-gray-500 uppercase tracking-wider ">
                                                    {{ $item->diamond }}
                                                </td>
                                                <td scope="col"
                                                    class="px-6 py-3 text-center text-xs font-medium text-gray-500 tracking-wider gap-2">

                                                    <a href="" class="text-blue-600 hover:text-blue-400 "><i
                                                            class="fa-solid fa-pen-to-square mx-1"></i>{{ __('Edit') }}
                                                    </a>
                                                    <a href="{{ route('product-packages.destroy', $item->id) }}"
                                                        class="text-red-600 hover:text-red-400 "
                                                        data-confirm-delete="true"><i
                                                            class="fa fa-trash mx-1"></i>Delete</a>
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