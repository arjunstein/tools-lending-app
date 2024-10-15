<div>
    <div class="p-4 border-gray-200 rounded-lg dark:border-gray-700 mt-14">
        <div
            class="block mx-auto max-w-2xl p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h3 class="text-gray-800 font-bold mb-4">{{ $title }}</h3>
            <form class="max-w-2xl mx-auto" wire:submit="saveCategory">
                <div class="mb-5">
                    <label for="category" class="block mb-2 text-md font-medium text-gray-800 dark:text-white">
                        Kategori</label>
                    <input type="text" id="category" wire:model.blur="category_name"
                        class="shadow-sm bg-gray-50 border text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light
            @error('category_name') border-red-500 @else border-gray-300 @enderror"
                        placeholder="Masukan kategori" />
                    @error('category_name')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex items-center space-x-2">
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Buat</button>
              <a href="{{ route('list-category') }}" wire:navigate
                        class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Batal</a>
                    </div>
            </form>
        </div>
    </div>
</div>
