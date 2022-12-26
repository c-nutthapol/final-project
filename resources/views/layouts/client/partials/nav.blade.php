<nav class="flex items-center w-full h-auto px-3 py-2 bg-primary-20/20 lg:px-6" data-aos="fade-down" data-aos-delay="100"
    data-aos-duration="1000" data-aos-once="true">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
        <!--------- Logo Rus  ---------->
        <div class="flex items-center justify-start">
            <img src="{{ asset('assets/rus_logo.png') }}" alt="logo RUS" class="w-10 mr-3" />
            <h1 class="text-xs font-medium tracking-wide font-montserrat text-dark-theme-80">
                Rajamangala University of Technology Suvarnabhumi
            </h1>
        </div>

        <!--------- Phone  ---------->
        <div class="w-full md:inline-block md:w-auto">
            <ul
                class="flex flex-col rounded-lg bg-gray-50/90 backdrop-blur-md md:flex-row md:bg-transparent md:rounded-none md:border-none md:items-center md:space-x-8 md:p-0 md:m-0 lg:space-x-4">
                <li class="block pr-3 border-r lg:inline-block border-secondary">
                    <a href="tel:025266467"
                        class="flex items-center space-x-2 text-xs font-normal tracking-wider text-secondary hover:text-primary">
                        <i class="leading-none fi fi-rr-phone-call"></i>
                        <span>02-5266467</span>
                    </a>
                </li>
                <li class="block lg:inline-block">
                    <a href="https://www.facebook.com/RUS.Suvarnabhumi" target="_blank"
                        class="flex items-center space-x-2 text-xs font-normal tracking-wider text-secondary hover:text-primary">
                        <img src="{{ asset('assets/images/icons/facebook-color.png') }}" class="w-4" />
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--------- Navbar  ---------->
<nav id="navbar" class="w-full h-auto md:h-20 flex items-center px-3 py-3 md:py-0 lg:px-6 sticky top-0 left-0 z-40"
    data-aos="fade-down" data-aos-delay="300" data-aos-duration="1000" data-aos-once="true">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
        <!--------- Navbar Brand  ---------->
        <a href="{{ route('client.home') }}" class="flex items-center justify-start">
            <img src="{{ asset('assets/logo.png') }}" alt="logo" class="w-10 mr-3" />
            <h1 class="text-xl font-bold tracking-wide font-montserrat text-primary">
                D-Course
            </h1>
        </a>

        <!--------- Navbar button  ---------->
        <button data-collapse-toggle="navbar-menu" type="button"
            class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-menu" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-7 h-7" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>

        <!--------- Navbar Search  ---------->
        <div class="hidden md:block mx-auto relative lg:w-[26rem] xl:w-[32rem] h-auto">
            <input type="search" placeholder="ค้นหาคอร์สเรียน..."
                class="w-full py-2 text-sm tracking-wide transition duration-150 ease-out bg-transparent rounded-xl border-secondary-80 font-ibm pl-9 placeholder:text-secondary-80 focus:text-secondary focus:ring-1 focus:ring-inset focus:ring-primary" />
            <span class="absolute inset-y-0 left-0 flex items-center ml-3 text-sm text-secondary-80">
                <i class="leading-none fi fi-rr-search"></i>
            </span>
        </div>

        <!--------- Navbar Menu  ---------->

        @if (!auth()->check())
            {{-- @IF สำหรับตอนยังไม่ได้เข้าสู่ระบบ --}}
            <div id="navbar-menu" class="hidden w-full md:inline-block md:w-auto font-ibm">
                <ul
                    class="flex flex-col p-4 mt-4 rounded-lg bg-gray-50/90 backdrop-blur-md md:flex-row md:bg-transparent md:rounded-none md:border-none md:items-center md:space-x-8 md:p-0 md:m-0 lg:space-x-16">
                    <li class="block px-3 py-2 lg:inline-block md:p-0">
                        <a href="{{ route('client.courses.all') }}"
                            class="text-base font-normal tracking-wider hover:text-primary {{ Route::currentRouteName() == 'client.courses.all' ? 'text-primary' : 'text-secondary' }}">
                            คอร์สทั้งหมด
                        </a>
                    </li>
                    <li class="block px-3 py-2 lg:inline-block md:p-0">
                        <a href="{{ route('client.auth.login') }}"
                            class="text-base font-normal tracking-wider text-secondary hover:text-primary">
                            เข้าสู่ระบบ
                        </a>
                    </li>
                    <li class="block px-3 py-2 lg:inline-block md:p-0">
                        <a href="{{ route('client.auth.register') }}" class="inline-block uppercase btn is-primary">
                            สมัครสมาชิก
                        </a>
                    </li>
                </ul>
            </div>
        @else
            {{-- @ELSE สำหรับตอน Login สำเร็จ --}}
            <!--  Account -->
            <div id="navbar-menu" class="hidden w-full md:inline-block md:w-auto">
                <ul
                    class="flex flex-col p-4 mt-4 rounded-lg bg-gray-50/90 backdrop-blur-md md:flex-row md:bg-transparent md:rounded-none md:border-none md:items-center md:space-x-8 md:p-0 md:m-0 lg:space-x-16">
                    <li class="block px-3 py-2 lg:inline-block md:p-0">
                        <a href="{{ route('client.courses.all') }}"
                            class="text-base font-normal tracking-wider font-ibm text-secondary hover:text-primary">
                            คอร์สทั้งหมด
                        </a>
                    </li>
                    @if (auth()->user()->level == 'lecturer')
                        <li class="block px-3 py-2 lg:inline-block md:p-0">
                            <a href="{{ route('client.teacher.all') }}"
                                class="text-base font-normal tracking-wider font-ibm text-secondary hover:text-primary">
                                ร่วมสอนกับเรา
                            </a>
                        </li>
                    @endif
                    <li class="block px-3 py-2 lg:inline-block md:p-0">
                        <button id="dropdownDefault" data-dropdown-toggle="dropdown" class="inline-block btn is-primary"
                            type="button">
                            <figure class="flex items-center gap-3">
                                <img src="{{ !is_null(auth()->user()->avatar) && Storage::disk('public')->exists(auth()->user()->avatar) ? Storage::disk('public')->url(auth()->user()->avatar) : 'https://www.salonlfc.com/wp-content/uploads/2018/01/image-not-found-1-scaled-1150x647.png' }}"
                                    alt="avatar" class="object-cover object-top rounded-full w-7 h-7" />
                                <figcaption class="text-base font-normal text-white">
                                    {{ auth()->user()->full_name }}
                                </figcaption>
                            </figure>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdown"
                            class="z-10 hidden w-48 bg-white divide-y divide-gray-200 rounded min-w-min shadow-card-course">
                            <ul class="py-1 text-base text-gray-700" aria-labelledby="dropdownDefault">
                                <li>
                                    <a href="{{ route('client.auth.account') }}"
                                        class="block px-4 py-2 font-ibm text-secondary hover:bg-gray-100 focus:bg-primary/5 focus:text-primary">
                                        <i class="leading-none fi fi-rr-user"></i>
                                        <span class="inline-block ml-2">บัญชีผู้ใช้</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('client.auth.courses.all') }}"
                                        class="block px-4 py-2 font-ibm text-secondary hover:bg-gray-100 focus:bg-primary/5 focus:text-primary">
                                        <i class="leading-none fi fi-rr-graduation-cap"></i>
                                        <span class="inline-block ml-2">คอร์สเรียนของฉัน</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="py-1">
                                <a href="{{ route('client.auth.logout') }}"
                                    class="block px-4 py-2 font-ibm text-secondary hover:bg-gray-100 focus:bg-primary/5 focus:text-primary">
                                    <i class="leading-none fi fi-rr-sign-out-alt"></i>
                                    <span class="inline-block ml-2">ออกจากระบบ</span>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        @endif

    </div>
</nav>
