<x-app-layout>
    <x-slot name="header">
        <div class="md:container mx-auto sm:px-6 lg:px-8">
            <h2 class="font-semibold text-2xl text-gray-800 leading-tight mt-3">
                {{ __('Edit Produk') }}
            </h2>
        </div>
    </x-slot>


    <main>
        <div class="main-wrapper flex flex-col mb-5">
            <div class="main-content">
                <div class="container w-1/2">
                    @if ($errors->any())
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
                            role="alert">
                            <div class="alert-title">
                                <h4 class="text-lg font-semibold">Whoops!</h4>
                            </div>
                            <span class="block sm:inline">There are some problems with your input.</span>
                            <ul class="mt-2 list-disc pl-5">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="{{ route('topup-package.update', $item->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card mt-5">

                            <div class="card-body flex gap-2">
                                <div class="w-full">
                                    <div class="mb-4">
                                        <label class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                                        <x-text-input type="text" name="name"
                                            value="{{ $item->name }}"></x-text-input>
                                    </div>
                                    <div class="mb-4">
                                        <label class="block text-gray-700 text-sm font-bold mb-2">Developer</label>
                                        <x-text-input type="text" name="developer"
                                            value="{{ $item->developer }}"></x-text-input>
                                    </div>
                                    <div class="mb-4">
                                        <label class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                                        <input type="text"
                                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                            name="description" value="{{ $item->description }}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="block text-gray-700 text-sm font-bold mb-2">About</label>
                                        <textarea type="text" cols="30" rows="10"
                                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                            name="about">{{ $item->about }}</textarea>
                                    </div>
                                    <div class="mb-4">
                                        <label class="block text-gray-700 text-sm font-bold mb-2">Price</label>
                                        <input type="text"
                                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                            name="price" value="{{ $item->price }}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="block text-gray-700 text-sm font-bold mb-2">Stock</label>
                                        <input type="text"
                                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                            name="stock" value="{{ $item->stock }}">
                                    </div>
                                    <div class="mb-4">
                                        <select name="category_id[]" id="category_id"
                                            class="select2-multiple shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline overflow-y-hidden"
                                            multiple>
                                            @forelse ($categories as $category)
                                                <option
                                                    value="{{ $category->id }}"{{ in_array($category->id, old('category_id', $item->categories->pluck('id')->toArray())) ? 'selected' : '' }}>
                                                    {{ $category->name }}</option>
                                            @empty
                                                <span>Data Kosong</span>
                                            @endforelse
                                        </select>
                                    </div>
                                    <div class="mb-4">
                                        <label class="block text-gray-700 text-sm font-bold mb-2">Platform</label>
                                        <select name="platform_id"
                                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                            id="">
                                            @forelse ($platforms as $platform)
                                                <option value="{{ $platform->id }}"
                                                    {{ $item->platform_id === $platform->id ? 'selected' : '' }}>
                                                    {{ $platform->name }}</option>
                                            @empty
                                                <span>Data Kosong!</span>
                                            @endforelse
                                        </select>
                                    </div>
                                    <div class="mb-4">
                                        <label for="formFile"
                                            class="block text-gray-700 text-sm font-bold mb-2">Image</label>
                                        <input
                                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                            type="file" name="image" id="image">
                                        @if ($item->image)
                                            <div class="mt-2">
                                                <img src="{{ Storage::url($item->image) }}" alt="Current Image"
                                                    class="w-32 h-32 object-cover">
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer flex justify-end">
                                <x-primary-button type='submit'>Ubah</x-primary-button>
                            </div>
                        </div>
                    </form>
                </div>
                {{-- righ content --}}
                <div class="w-1/2">
                    @yield('content')
                </div>
            </div>

        </div>
    </main>

</x-app-layout>
