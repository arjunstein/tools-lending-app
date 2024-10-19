<div>
    <div class="flex flex-col items-center justify-center px-6 pt-8 mx-auto md:h-screen pt:mt-0 dark:bg-gray-900">
        <!-- Card -->
        <div class="w-full max-w-md p-6 space-y-8 sm:p-8 bg-white rounded-lg shadow dark:bg-gray-800">
            <a href="#"
                class="flex items-center justify-center mb-8 text-2xl font-semibold lg:mb-10 dark:text-white">
                <img src="https://flowbite-admin-dashboard.vercel.app/images/logo.svg" class="mr-4 h-11"
                    alt="FlowBite Logo">
                <span>{{ config('app.name') }}</span>
            </a>
            <form class="mt-8 space-y-6" wire:submit="login">
                <div>
                    <label for="username"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                    <input type="text" wire:model.blur="username" id="username"
                        class="bg-gray-50 border @error('username') border-red-600 dark:border-red-600 @else border-gray-300 @enderror text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        >
                    @error('username')
                        <span class="text-sm mt-2 text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="password"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                    <input type="password" wire:model.blur="password" id="password"
                        class="bg-gray-50 border @error('password') border-red-600 dark:border-red-600 @else border-gray-300 @enderror text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    @error('password')
                        <span class="text-sm mt-2 text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input id="remember" aria-describedby="remember" name="remember" type="checkbox"
                            class="w-4 h-4 border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:focus:ring-primary-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600">
                    </div>
                    <div class="ml-3 text-sm">
                        <label for="remember" class="font-medium text-gray-900 dark:text-white">Remember me</label>
                    </div>
                </div>
                <button type="submit"
                    class="w-full px-5 py-3 text-base font-medium text-center text-white bg-primary-700 rounded-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 sm:w-auto dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Login
                    to your account</button>
            </form>

        </div>
    </div>
</div>
