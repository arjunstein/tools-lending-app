<div>
    <div
        class="p-4 mb-4 bg-white border-b border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 mt-1.5 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
        <nav class="flex mb-5" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
                <li>
                    <div class="flex items-center">
                        <a href="{{ route('list-category') }}" wire:navigate
                            class="ml-1 text-gray-700 hover:text-primary-600 md:ml-0 dark:text-gray-300 dark:hover:text-white">Categories</a>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="ml-1 text-gray-400 md:ml-2 dark:text-gray-500"
                            aria-current="page">{{ $title }}</span>
                    </div>
                </li>
            </ol>
        </nav>
        <h3 class="mb-4 text-xl font-semibold dark:text-white">{{ $title }}</h3>
        <form wire:submit="updateCategory">
            <div class="mb-6">
                <label for="category_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category
                    Name</label>
                <input type="text" id="category_name" wire:model.blur="category_name"
                    class="bg-gray-50 border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 @error('category_name') border-red-500 dark:border-red-500 focus:ring-red-500 focus:border-red-500 dark:focus:ring-red-500 dark:focus:border-red-500 @else border-gray-300 @enderror">
                @error('category_name')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex items-center space-x-2">
                <button
                    class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Update</button>
                <a href="{{ route('list-category') }}" wire:navigate
                    class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Cancel</a>
            </div>
        </form>
    </div>
</div>
