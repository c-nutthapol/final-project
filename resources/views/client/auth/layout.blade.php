@extends('layouts.client.app')

@section('content')
    <main class="bg-primary-20/[0.2]">
        <div class="relative pt-24 lg:pb-96">
            <div class="absolute top-0 left-0 z-0 w-full bg-primary-20/25 h-60"></div>
            <div class="container relative z-10 mx-auto">
                <div class="grid grid-cols-12 gap-y-3 gap-x-10">
                    <div class="col-span-3">
                        <!--------- Sidebar  ---------->
                        <aside class="sticky left-0 space-y-8 top-24">
                            <!--------- Avatar  ---------->
                            <div class="p-10 text-center bg-white rounded-2xl shadow-card-course">
                                <figure class="relative">
                                    {{-- User Picture --}}
                                    <img src="{{ !is_null(auth()->user()->avatar) && Storage::exists(auth()->user()->avatar) ? Storage::url(auth()->user()->avatar) : 'https://www.salonlfc.com/wp-content/uploads/2018/01/image-not-found-1-scaled-1150x647.png' }}"
                                        alt="Avatar"
                                        class="relative z-10 object-cover object-top w-32 h-32 mx-auto mb-6 rounded-full" />
                                    {{-- Blobs --}}
                                    <img src="{{ asset('assets/images/icons/blobs-avatar.svg') }}"
                                        class="absolute left-0 right-0 z-0 mx-auto w-36 -top-4" />
                                    <figcaption class="relative z-10 text-xl font-medium text-primary font-ibm">
                                        {{ auth()->user()->full_name }}
                                    </figcaption>
                                </figure>
                            </div>
                            <!--------- Menu  ---------->
                            <ul class="p-0 m-0 space-y-4 list-none font-ibm">
                                <li>
                                    <a href="{{ route('client.auth.account') }}"
                                        class="block px-4 py-3 text-base rounded-xl {{ Route::currentRouteName() == 'client.auth.account' ? 'font-normal text-white bg-primary' : ' font-light transition duration-300 ease-in-out bg-primary-40/20 text-dark-theme-80 hover:bg-primary-40/40 hover:text-primary' }}">
                                        <div class="flex items-center space-x-3">
                                            <i class="leading-none ext-lg fi fi-rr-user"></i>
                                            <span class="inline-block tracking-wide">บัญชีผู้ใช้</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('client.auth.courses.all') }}"
                                        class="block px-4 py-3 text-base  rounded-xl {{ Route::currentRouteName() == 'client.auth.courses.all' ? 'font-normal text-white bg-primary' : ' font-light transition duration-300 ease-in-out bg-primary-40/20 text-dark-theme-80 hover:bg-primary-40/40 hover:text-primary' }}">
                                        <div class="flex items-center space-x-3">
                                            <i class="text-lg leading-none fi fi-rr-graduation-cap"></i>
                                            <span class="inline-block tracking-wide">คอร์สเรียนของฉัน</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('client.auth.logout') }}"
                                        class="block px-4 py-3 text-base font-bold text-white transition duration-300 ease-in-out bg-danger rounded-xl hover:bg-danger/90 hover:text-white/90">
                                        <div class="flex items-center space-x-3">
                                            <i class="text-lg leading-none fi fi-rr-sign-out-alt"></i>
                                            <span class="inline-block tracking-wide">ออกจากระบบ</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-span-9">
                        <!--------- Content  ---------->
                        @yield('account.content')
                    </div>
                </div>
            </div>

            <!--------- Wave  ---------->
            <img src="{{ asset('assets/images/wave-footer.svg') }}" class="absolute left-0 z-0 w-full -bottom-0" />
        </div>
    </main>
@endsection
