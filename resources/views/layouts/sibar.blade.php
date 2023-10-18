<aside
    class="ml-[-100%] fixed z-10 top-0 pb-3 px-1 w-full flex flex-col justify-between h-screen border-r bg-indigo-900 transition duration-300 md:w-4/12 lg:ml-0 lg:w-[25%] xl:w-[20%] 2xl:w-[15%]">
    <div>
        <div class="mt-1 text-center ">
            <img class="ml-7" src="{{ Storage::url('images/logo iss.png') }}" width="160" height="150">
        </div>
        <ul class="space-y-1 tracking-wide mt-1">
            <li>
                <a href="{{ route('home') }}" aria-label="dashboard"
                    class="relative px-4 py-3 flex items-center space-x-4 rounded-xl text-white">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                    </svg>
                    <span class=" font-bold text-lg">Dashboard</span>
                </a>
            </li>


            {{-- @can('teacher_access') --}}
            <li>
                <a href="" class="px-4 py-3 flex items-center space-x-4 rounded-md text-white group">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    <span class="font-bold text-lg ">Teacher</span>
                </a>
            </li>
            {{-- @endcan --}}


            {{-- @can('student_access') --}}
            <li>
                <a href="" class="px-4 py-3 flex items-center space-x-4 rounded-md text-white group">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                    </svg>

                    <span class="text-lg font-bold">Students</span>
                </a>
            </li>
            {{-- @endcan --}}


            {{-- @can('academic_year_access') --}}
            {{-- <li>
                <a href="" class="px-4 py-3 flex items-center space-x-4 rounded-md text-black group">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                    </svg>


                    <span class="group-hover:text-white text-lg font-Notokhmer">ឆ្នាំសិក្សា</span>
                </a>
            </li> --}}
            {{-- @endcan --}}

            {{-- @can('academic_class_access') --}}
            <li>
                <a href="" class="px-4 py-3 flex items-center space-x-4 rounded-md text-white group">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m5.231 13.481L15 17.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v16.5c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9zm3.75 11.625a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                    </svg>

                    <span class="font-bold text-lg">Stationary</span>
                </a>
            </li>
            {{-- @endcan --}}

            {{-- @can('user_access') --}}
            <li>
                <a href="" class="px-4 py-3 flex items-center space-x-4 rounded-xl text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>

                    <span class="font-bold text-lg">IAE</span>
                </a>
            </li>
            {{-- @endcan --}}
            {{-- @can('role_access') --}}
            <li>
                <a href="" class="px-4 py-3 flex items-center space-x-4 rounded-md text-white group">

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                    </svg>

                    <span class="font-bold text-lg">Costom</span>
                </a>
            </li>
            {{-- @endcan --}}
            <li>
                <a href="{{ route('logout') }}"
                    class="px-4 py-3 flex items-center space-x-4 rounded-md text-white group">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                    </svg>

                    <span class="font-bold text-lg">Logout</span>
                </a>
            </li>

            {{-- <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

            <div class='flex items-center justify-center min-h-screen'>
                <nav class="hidden -mt-32 space-x-10 md:flex">
                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = ! open" type="button"
                            class="text-gray-500 group p-4 inline-flex items-center rounded-md bg-white text-base font-medium hover:text-gray-900"
                            aria-expanded="false">
                            <span>Options</span>
                            <svg :class="{ 'rotate-180 duration-300': open, 'duration-300': !open }"
                                class="text-gray-400 ml-2 h-5 w-5 group-hover:text-gray-500"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>

                        <div x-show="open" x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 scale-90"
                            x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-200"
                            x-transition:leave-start="opacity-100 scale-100"
                            x-transition:leave-end="opacity-0 scale-90"
                            class="absolute left-1/2 z-full mt-3 w-screen max-w-md -translate-x-1/2 transform px-2 sm:px-0">

                            <div class="overflow-hidden rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
                                <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                                    <a href="#" class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50">

                                        <svg class="h-6 w-6 flex-shrink-0 text-template-secondary"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1m1.5.5l-1.5-.5M6.75 7.364V3h-3v18m3-13.636l10.5-3.819" />
                                        </svg>

                                        <div class="ml-4">
                                            <p class="text-base font-medium text-gray-900">Enterprise</p>
                                            <p class="mt-1 text-sm text-gray-500">Enterprise options.</p>
                                        </div>
                                    </a>

                                    <a href="#" class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50">
                                        <svg class="h-6 w-6 flex-shrink-0 text-template-secondary"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16.5 3.75V16.5L12 14.25 7.5 16.5V3.75m9 0H18A2.25 2.25 0 0120.25 6v12A2.25 2.25 0 0118 20.25H6A2.25 2.25 0 013.75 18V6A2.25 2.25 0 016 3.75h1.5m9 0h-9" />
                                        </svg>
                                        <div class="ml-4">
                                            <p class="text-base font-medium text-gray-900">Books</p>
                                            <p class="mt-1 text-sm text-gray-500">All books</p>
                                        </div>
                                    </a>

                                    <a href="#" class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50">
                                        <svg class="h-6 w-6 flex-shrink-0 text-template-secondary"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                        </svg>

                                        <div class="ml-4">
                                            <p class="text-base font-medium text-gray-900">Users</p>
                                            <p class="mt-1 text-sm text-gray-500">All Users</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="bg-gray-50 px-5 py-5 sm:px-8 sm:py-8">
                                    <div>
                                        <h3 class="text-base font-medium text-gray-500">More</h3>
                                        <ul role="list" class="mt-4 space-y-4">
                                            <li class="truncate text-base">
                                                <a href="#"
                                                    class="font-medium text-gray-900 hover:text-gray-700">More
                                                    Options</a>
                                            </li>

                                            <li class="truncate text-base">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div> --}}

            {{-- <li>
                <a href="#" class="px-4 py-3 flex items-center space-x-4 rounded-md text-black group">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                      </svg>

                    <span class="group-hover:text-white font-Notokhmer text-base">ពិន្ទុ</span>
                </a>
            </li> --}}

            {{-- <li>
                <a href="#" class="px-4 py-3 flex items-center space-x-4 rounded-md text-black group">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-white  ">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18.375 12.739l-7.693 7.693a4.5 4.5 0 01-6.364-6.364l10.94-10.94A3 3 0 1119.5 7.372L8.552 18.32m.009-.01l-.01.01m5.699-9.941l-7.81 7.81a1.5 1.5 0 002.112 2.13" />
                      </svg>

                    <span class="group-hover:text-white font-Notokhmer text-base">ស្រង់វត្តមាន</span>
                </a>
            </li> --}}

        </ul>
    </div>

</aside>
<div class="sticky  position-absolute top-0 z-5 flex flex-col ml-auto mb-3 lg:w-[75%] xl:w-[80%] 2xl:w-[85%] ">
    <div class="sticky z-10 top-0 h-16 border-b bg-indigo-900 lg:py-2.5">
        <div class="px-10 flex items-center justify-between space-x-4 2xl:container">
            <h5 hidden class="text-3xl text-white font-muol font-bold lg:block">
                សាលា​ ភាសាឯកទេស អន្តរជាតិ
            </h5>
        </div>
    </div>
</div>
