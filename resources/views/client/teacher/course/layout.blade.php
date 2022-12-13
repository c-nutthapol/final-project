@extends('layouts.client.app')

@section('title', 'จัดการหลักสูตร')
@section('subtitle', '| Learn 3D Modelling and Design')

@section('content')
    <!--------- Content  ---------->
    <main class="bg-primary-20/[0.2]">
        <div class="relative lg:pb-96">
            <!--------- Header  ---------->
            <div class="w-full bg-primary-20/25 h-60">
                <div class="container relative z-10 flex flex-col justify-between h-full pt-24 mx-auto">
                    <!--------- Page Title  ---------->
                    <h2 class="flex items-center text-2xl font-medium font-ibm text-secondary">
                        <a href="{{ route('client.teacher.all') }}" class="inline-block mr-3 leading-none"
                            data-popover-target="popover-back">
                            <i class="fi fi-rr-arrow-left"></i>
                        </a>
                        <div data-popover id="popover-back" role="tooltip"
                            class="absolute z-10 invisible inline-block w-auto text-sm font-light transition-opacity duration-300 bg-white rounded-lg opacity-0 text-secondary shadow-pagination">
                            <div class="px-3 py-2">
                                <p>กลับ</p>
                            </div>
                            <div data-popper-arrow></div>
                        </div>
                        Learn 3D Modelling and Design
                    </h2>

                    <!--------- Tabs Menu  ---------->
                    <div>
                        <ul
                            class="flex flex-wrap space-x-3 text-sm font-bold tracking-wide text-center text-secondary font-ibm">
                            <li>
                                <a href="{{ route('client.teacher.course.manage.overview') }}" aria-current="page"
                                    class="inline-block p-4  rounded-t-xl
                                    {{ in_array(Route::currentRouteName(), ['client.teacher.course.manage.overview', 'client.teacher.course.manage.learn', 'client.teacher.course.manage.requirements']) ? 'text-primary bg-primary-20/30' : 'hover:text-gray-600 hover:bg-white' }}">
                                    <i class="text-lg leading-none fi fi-rr-home"></i>
                                    <span class="block mt-1.5">ส่วนหน้า</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('client.teacher.course.content.index') }}"
                                    class="inline-block p-4 rounded-t-xl   {{ in_array(Route::currentRouteName(), ['client.teacher.course.content.index', 'client.teacher.course.content.form']) ? 'text-primary bg-primary-20/30' : 'hover:text-gray-600 hover:bg-white' }}">
                                    <i class="text-lg leading-none fi fi-rr-book-alt"></i>
                                    <span class="block mt-1.5">เนื้อหา</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('client.teacher.course.settings') }}"
                                    class="inline-block p-4 rounded-t-xl {{ Route::currentRouteName() == 'client.teacher.course.settings' ? 'text-primary bg-primary-20/30' : 'hover:text-gray-600 hover:bg-white' }}">
                                    <i class="text-lg leading-none fi fi-rr-settings"></i>
                                    <span class="block mt-1.5">ตั้งค่า</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!--------- Body  ---------->
            @yield('teacher.content')

            <!--------- Wave  ---------->
            <img src="{{ asset('assets/images/wave-footer.svg') }}" class="absolute left-0 z-0 w-full -bottom-0" />
        </div>
    </main>
@endsection
