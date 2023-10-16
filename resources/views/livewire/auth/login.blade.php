@section('title', '')
<div>
    <div class="mt-6 sm:mx-auto sm:w-full sm:max-w-md">
        <div>

        </div>
        <div class="px-4 py-10 bg-color-cus shadow-lg border sm:rounded-lg sm:px-10">
            <div>
                <div>
                    <h2 class=" pb-6 text-2xl text-white font-semibold text-center font-muol  leading-9">
                        Log in to your system
                    </h2>
                </div>
            </div>
            <form wire:submit.prevent="authenticate">
                <div>
                    <label for="email" class="block text-base font-Notokhmer text-white font-bold leading-5">
                        Email
                    </label>
                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="email" id="email" name="email" type="email" autofocus
                            class="appearance-none block w-full px-3 py-2  border bg-gray-50 border-gray-300 rounded-md  focus:outline-none focus:ring-blue  transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email')  text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                    </div>
                    @error('email')
                        <p class="mt-2 text-base font-Notokhmer text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-6">
                    <label for="password" class="block text-base font-Notokhmer text-white font-bold leading-5">
                        password
                    </label>
                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="password" id="password" type="password"
                            class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-blue  transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('password')  text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                    </div>
                    @error('password')
                        <p class="mt-2 text-base font-Notokhmer text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center">
                        <input wire:model.lazy="remember" id="remember" type="checkbox"
                            class="form-checkbox w-4 h-4 text-indigo-600 transition duration-150 ease-in-out" />
                        <label for="remember" class="block ml-2 text-sm text-white leading-5">
                            Remember
                        </label>
                    </div>

                    <div class="text-sm leading-5">
                        <a href="{{ route('password.request') }}"
                            class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                            Forgot your password?
                        </a>
                    </div>
                </div>
                <div class="mt-6 flex justify-end">
                    <div>
                        <span class="block w-full rounded-md ">
                            <button type="submit"
                                class="flex px-5 py-2 text-base font-Notokhmer text-white bg-blue-600 rounded-md focus:outline-none focus:border-blue-700 focus:ring-indigo active:bg-blue-700 transition duration-150 ease-in-out">
                                Login
                            </button>
                        </span>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
