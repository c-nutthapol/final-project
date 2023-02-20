@extends('layouts.admin.app')

@section('title', 'หน้าหลัก')

@section('content')
    <div>
        @livewire('admin.home.operational')

        <div class="mt-10">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-7">
                    <div class="flex items-center justify-between">
                        <h2 class="text-xl font-bold text-secondary">
                            คำขอเป็นผู้สอน
                        </h2>
                        <a href="#" class="text-sm font-medium text-primary">
                            ดูทั้งหมด
                        </a>
                    </div>

                   @livewire('admin.instructor')
                </div>
                <div class="col-span-5 space-y-4">
                    <div class="flex flex-row h-40 overflow-hidden break-all bg-white rounded-2xl shadow-card-course">
                        <div class="relative flex-initial w-60">
                            <img src="https://images.unsplash.com/photo-1488190211105-8b0e65b80b4e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                                alt="image" class="object-cover w-full max-h-40" />
                            <span
                                class="absolute z-10 flex items-center py-1 px-1.5 space-x-1 text-xs text-white rounded-full top-2 left-2 bg-primary/60">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>16/12/2565</span>
                            </span>
                        </div>
                        <div class="flex-auto p-4">
                            <div class="flex flex-col justify-between h-full">
                                <div>
                                    <h4 class="font-bold text-secondary line-clamp-1">
                                        Learn 3D Modelling and Design
                                    </h4>
                                    <div class="flex mt-2 space-x-4">
                                        <span class="flex items-center text-sm font-medium tracking-wide text-yellow-300">
                                            <i class="leading-none fi fi-rr-star mr-1.5"></i>
                                            <span>4.5</span>
                                        </span>
                                        <span class="flex items-center text-sm tracking-wide text-secondary">
                                            <i class="leading-none fi fi-rr-book"></i>
                                            <div class="ml-1.5 mr-1">4</div>
                                            Lessons
                                        </span>
                                        <span class="flex items-center text-sm tracking-wide text-secondary">
                                            <i class="fi fi-rr-clock leading-none mr-1.5"></i>
                                            4h 20m
                                        </span>
                                    </div>
                                </div>
                                <!--------- Avatar ---------->
                                <figure class="flex items-center space-x-2">
                                    <img src="assets/images/users/avatar.jpg" alt="avatar"
                                        class="object-cover object-top rounded-full w-7 h-7" />
                                    <figcaption class="text-sm font-semibold text-secondary">
                                        Michele Hoffman
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-row h-40 overflow-hidden break-all bg-white rounded-2xl shadow-card-course">
                        <div class="relative flex-initial w-60">
                            <img src="https://images.unsplash.com/photo-1497215842964-222b430dc094?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                                alt="image" class="object-cover w-full max-h-40" />
                            <span
                                class="absolute z-10 flex items-center py-1 px-1.5 space-x-1 text-xs text-white rounded-full top-2 left-2 bg-primary/60">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>16/12/2565</span>
                            </span>
                        </div>
                        <div class="flex-auto p-4">
                            <div class="flex flex-col justify-between h-full">
                                <div>
                                    <h4 class="font-bold text-secondary line-clamp-1">
                                        Learn 3D Modelling and Design
                                    </h4>
                                    <div class="flex mt-2 space-x-4">
                                        <span class="flex items-center text-sm font-medium tracking-wide text-yellow-300">
                                            <i class="leading-none fi fi-rr-star mr-1.5"></i>
                                            <span>4.5</span>
                                        </span>
                                        <span class="flex items-center text-sm tracking-wide text-secondary">
                                            <i class="leading-none fi fi-rr-book"></i>
                                            <div class="ml-1.5 mr-1">4</div>
                                            Lessons
                                        </span>
                                        <span class="flex items-center text-sm tracking-wide text-secondary">
                                            <i class="fi fi-rr-clock leading-none mr-1.5"></i>
                                            4h 20m
                                        </span>
                                    </div>
                                </div>
                                <!--------- Avatar ---------->
                                <figure class="flex items-center space-x-2">
                                    <img src="assets/images/users/avatar.jpg" alt="avatar"
                                        class="object-cover object-top rounded-full w-7 h-7" />
                                    <figcaption class="text-sm font-semibold text-secondary">
                                        Michele Hoffman
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-row h-40 overflow-hidden break-all bg-white rounded-2xl shadow-card-course">
                        <div class="relative flex-initial w-60">
                            <img src="https://images.unsplash.com/photo-1512486130939-2c4f79935e4f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
                                alt="image" class="object-cover w-full max-h-40" />
                            <span
                                class="absolute z-10 flex items-center py-1 px-1.5 space-x-1 text-xs text-white rounded-full top-2 left-2 bg-primary/60">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>16/12/2565</span>
                            </span>
                        </div>
                        <div class="flex-auto p-4">
                            <div class="flex flex-col justify-between h-full">
                                <div>
                                    <h4 class="font-bold text-secondary line-clamp-1">
                                        Learn 3D Modelling and Design
                                    </h4>
                                    <div class="flex mt-2 space-x-4">
                                        <span class="flex items-center text-sm font-medium tracking-wide text-yellow-300">
                                            <i class="leading-none fi fi-rr-star mr-1.5"></i>
                                            <span>4.5</span>
                                        </span>
                                        <span class="flex items-center text-sm tracking-wide text-secondary">
                                            <i class="leading-none fi fi-rr-book"></i>
                                            <div class="ml-1.5 mr-1">4</div>
                                            Lessons
                                        </span>
                                        <span class="flex items-center text-sm tracking-wide text-secondary">
                                            <i class="fi fi-rr-clock leading-none mr-1.5"></i>
                                            4h 20m
                                        </span>
                                    </div>
                                </div>
                                <!--------- Avatar ---------->
                                <figure class="flex items-center space-x-2">
                                    <img src="assets/images/users/avatar.jpg" alt="avatar"
                                        class="object-cover object-top rounded-full w-7 h-7" />
                                    <figcaption class="text-sm font-semibold text-secondary">
                                        Michele Hoffman
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script></script>
@endsection
