@extends('layouts.client.app')

@section('title', 'D-Course | Home')

@section('content')
    <!--------- Hero  ---------->
    <header class="h-[40rem] relative overflow-hidden bg-white">
        <img src="{{ asset('assets/images/icons/icon-edu.svg') }}" class="absolute z-0 w-auto h-auto top-2 right-6"
            data-aos="fade-left" data-aos-duration="1000" data-aos-once="true" data-aos-once="true" />
        <!--------- Content ---------->
        <div class="container relative z-10 flex items-center justify-center h-full mx-auto">
            <div class="text-center font-montserrat">
                <h1 class="mb-8 text-6xl font-extrabold tracking-wide text-secondary" data-aos="fade-up" data-aos-delay="400"
                    data-aos-duration="1000" data-aos-once="true">
                    Learn your way through education.
                </h1>
                <h2 class="text-6xl font-extrabold tracking-wide text-primary-80" data-aos="fade-up" data-aos-delay="500"
                    data-aos-duration="1400" data-aos-once="true">
                    Information Technology
                </h2>
            </div>
        </div>
        <!--------- Icon Books  ---------->
        <img src="{{ asset('assets/images/icons/icon-book-blue.svg') }}"
            class="absolute left-0 z-0 w-auto h-auto -bottom-36" data-aos="fade-right" data-aos-duration="1000"
            data-aos-once="true" />
        <img src="{{ asset('assets/images/icons/icon-book-gray.svg') }}" class="absolute bottom-0 z-0 w-auto h-auto left-60"
            data-aos="fade-left" data-aos-duration="1000" data-aos-once="true" />
        <!--------- Icon Tree  ---------->
        <img src="{{ asset('assets/images/icons/tree-lg-op.svg') }}" class="absolute bottom-0 z-0 w-auto h-auto right-20"
            data-aos="zoom-in-up" data-aos-duration="2000" data-aos-once="true" />
        <img src="{{ asset('assets/images/icons/tree-md.svg') }}" class="absolute bottom-0 z-0 w-auto h-auto right-64"
            data-aos="zoom-in-up" data-aos-duration="1000" data-aos-once="true" />
        <img src="{{ asset('assets/images/icons/tree-md.svg') }}" class="absolute bottom-0 z-0 w-10 right-96"
            data-aos="zoom-in-up" data-aos-duration="1000" data-aos-once="true" />
    </header>

    <!--------- Content  ---------->
    <main class="bg-primary-20/[0.2] overflow-hidden">
        <div class="relative lg:pb-72">
            <!--------- Courses  ---------->
            <div class="relative z-10 font-montserrat">
                <div class="container px-3 py-24 mx-auto lg:px-6">
                    <!--------- Title  ---------->
                    <h1 class="mb-12 text-3xl font-bold tracking-wide text-center text-secondary" data-aos="fade-up"
                        data-aos-delay="600" data-aos-duration="1000" data-aos-once="true">
                        Courses
                    </h1>

                    <!--------- Items  ---------->
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                        <!--------- Card  ---------->
                        <a href="course_detail.html" class="group" data-aos="fade-up" data-aos-delay="400"
                            data-aos-duration="1000" data-aos-once="true">
                            <div
                                class="flex flex-col justify-between bg-white overflow-hidden h-full rounded-xl cursor-pointer box-border shadow-card-course transition duration-150 ease-out group-hover:ease-in group-hover:scale-105 group-hover:-translate-y-2 group-hover:shadow-[0_12px_40px_rgba(182,179,255,0.3)] group-active:scale-100 group-active:opacity-80 group-active:translate-y-0">
                                <div>
                                    <!--------- Card Image ---------->
                                    <img src="{{ asset('assets/images/rooms/room-1.jpg') }}" alt="photo"
                                        class="object-cover w-full h-52" />
                                    <!--------- Card Body ---------->
                                    <div class="p-4 bg-transparent font-montserrat">
                                        <h4
                                            class="mb-3 text-base font-semibold leading-relaxed text-dark-theme line-clamp-2">
                                            Learn 3D Modelling and Design
                                        </h4>
                                        <div class="flex gap-4 mb-5">
                                            <span class="flex items-center text-sm tracking-wide text-secondary">
                                                <i class="leading-none fi fi-rr-book"></i>
                                                <div class="ml-1.5 mr-1">4</div>
                                                Lessons
                                            </span>
                                            <span class="flex items-center text-sm tracking-wide text-secondary">
                                                <i class="fi fi-rr-calendar-lines leading-none mr-1.5"></i>
                                                26/09/2565
                                            </span>
                                        </div>
                                        <!--------- Avatar ---------->
                                        <figure class="flex items-center gap-2">
                                            <img src="assets/images/users/avatar.jpg" alt="avatar"
                                                class="object-cover object-top w-8 h-8 rounded-full" />
                                            <figcaption class="text-sm font-medium text-secondary">
                                                Michele Hoffman
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>

                                <!--------- Card Footer ---------->
                                <div class="flex justify-between px-4 py-4 mt-4 bg-transparent border-t-2 border-t-gray-50">
                                    <div
                                        class="flex items-center gap-2 text-sm font-semibold text-yellow-300 font-montserrat">
                                        <i class="leading-none fi fi-rr-star"></i>
                                        <div>4.5</div>
                                    </div>
                                    <div
                                        class="flex items-center gap-2 text-sm font-semibold font-montserrat text-primary-80">
                                        <i class="leading-none fi fi-rr-user"></i>
                                        <div>20</div>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <!--------- Card  ---------->
                        <a href="course_detail.html" class="group" data-aos="fade-up" data-aos-delay="400"
                            data-aos-duration="1000" data-aos-once="true">
                            <div
                                class="flex flex-col justify-between bg-white overflow-hidden h-full rounded-xl cursor-pointer box-border shadow-card-course transition duration-150 ease-out group-hover:ease-in group-hover:scale-105 group-hover:-translate-y-2 group-hover:shadow-[0_12px_40px_rgba(182,179,255,0.3)] group-active:scale-100 group-active:opacity-80 group-active:translate-y-0">
                                <div>
                                    <!--------- Card Image ---------->
                                    <img src="{{ asset('assets/images/rooms/room-2.jpg') }}" alt="photo"
                                        class="object-cover w-full h-52" />
                                    <!--------- Card Body ---------->
                                    <div class="p-4 bg-transparent font-montserrat">
                                        <h4
                                            class="mb-3 text-base font-semibold leading-relaxed text-dark-theme line-clamp-2">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua. Massa eget egestas purus viverra accumsan
                                            in.
                                        </h4>
                                        <div class="flex gap-4 mb-5">
                                            <span class="flex items-center text-sm tracking-wide text-secondary">
                                                <i class="leading-none fi fi-rr-book"></i>
                                                <div class="ml-1.5 mr-1">4</div>
                                                Lessons
                                            </span>
                                            <span class="flex items-center text-sm tracking-wide text-secondary">
                                                <i class="fi fi-rr-calendar-lines leading-none mr-1.5"></i>
                                                26/09/2565
                                            </span>
                                        </div>
                                        <!--------- Avatar ---------->
                                        <figure class="flex items-center gap-2">
                                            <img src="{{ asset('assets/images/users/avatar-2.jpg') }}" alt="avatar"
                                                class="object-cover object-top w-8 h-8 rounded-full" />
                                            <figcaption class="text-sm font-medium text-secondary">
                                                Sarah Hampton
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                                <!--------- Card Footer ---------->
                                <div
                                    class="flex justify-between px-4 py-4 mt-4 bg-transparent border-t-2 border-t-gray-50">
                                    <div
                                        class="flex items-center gap-2 text-sm font-semibold text-yellow-300 font-montserrat">
                                        <i class="leading-none fi fi-rr-star"></i>
                                        <div>4.5</div>
                                    </div>
                                    <div
                                        class="flex items-center gap-2 text-sm font-semibold font-montserrat text-primary-80">
                                        <i class="leading-none fi fi-rr-user"></i>
                                        <div>20</div>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <!--------- Card  ---------->
                        <a href="course_detail.html" class="group" data-aos="fade-up" data-aos-delay="400"
                            data-aos-duration="1000" data-aos-once="true">
                            <div
                                class="flex flex-col justify-between bg-white overflow-hidden h-full rounded-xl cursor-pointer box-border shadow-card-course transition duration-150 ease-out group-hover:ease-in group-hover:scale-105 group-hover:-translate-y-2 group-hover:shadow-[0_12px_40px_rgba(182,179,255,0.3)] group-active:scale-100 group-active:opacity-80 group-active:translate-y-0">
                                <div>
                                    <!--------- Card Image ---------->
                                    <img src="{{ asset('assets/images/rooms/room-3.jpg') }}" alt="photo"
                                        class="object-cover w-full h-52" />
                                    <!--------- Card Body ---------->
                                    <div class="p-4 bg-transparent font-montserrat">
                                        <h4
                                            class="mb-3 text-base font-semibold leading-relaxed text-dark-theme line-clamp-2">
                                            Learn 3D Modelling and Design for Beginners
                                        </h4>
                                        <div class="flex gap-4 mb-5">
                                            <span class="flex items-center text-sm tracking-wide text-secondary">
                                                <i class="leading-none fi fi-rr-book"></i>
                                                <div class="ml-1.5 mr-1">4</div>
                                                Lessons
                                            </span>
                                            <span class="flex items-center text-sm tracking-wide text-secondary">
                                                <i class="fi fi-rr-calendar-lines leading-none mr-1.5"></i>
                                                26/09/2565
                                            </span>
                                        </div>
                                        <!--------- Avatar ---------->
                                        <figure class="flex items-center gap-2">
                                            <img src="{{ asset('assets/images/users/avatar-3.jpg') }}" alt="avatar"
                                                class="object-cover object-top w-8 h-8 rounded-full" />
                                            <figcaption class="text-sm font-medium text-secondary">
                                                Ashley Caldwell
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                                <!--------- Card Footer ---------->
                                <div
                                    class="flex justify-between px-4 py-4 mt-4 bg-transparent border-t-2 border-t-gray-50">
                                    <div
                                        class="flex items-center gap-2 text-sm font-semibold text-yellow-300 font-montserrat">
                                        <i class="leading-none fi fi-rr-star"></i>
                                        <div>4.5</div>
                                    </div>
                                    <div
                                        class="flex items-center gap-2 text-sm font-semibold font-montserrat text-primary-80">
                                        <i class="leading-none fi fi-rr-user"></i>
                                        <div>20</div>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <!--------- Card  ---------->
                        <a href="course_detail.html" class="group" data-aos="fade-up" data-aos-delay="400"
                            data-aos-duration="1000" data-aos-once="true">
                            <div
                                class="flex flex-col justify-between bg-white overflow-hidden h-full rounded-xl cursor-pointer box-border shadow-card-course transition duration-150 ease-out group-hover:ease-in group-hover:scale-105 group-hover:-translate-y-2 group-hover:shadow-[0_12px_40px_rgba(182,179,255,0.3)] group-active:scale-100 group-active:opacity-80 group-active:translate-y-0">
                                <div>
                                    <!--------- Card Image ---------->
                                    <img src="{{ asset('assets/images/rooms/room-1.jpg') }}" alt="photo"
                                        class="object-cover w-full h-52" />
                                    <!--------- Card Body ---------->
                                    <div class="p-4 bg-transparent font-montserrat">
                                        <h4
                                            class="mb-3 text-base font-semibold leading-relaxed text-dark-theme line-clamp-2">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua. Massa eget egestas purus viverra accumsan
                                            in.
                                        </h4>
                                        <div class="flex gap-4 mb-5">
                                            <span class="flex items-center text-sm tracking-wide text-secondary">
                                                <i class="leading-none fi fi-rr-book"></i>
                                                <div class="ml-1.5 mr-1">4</div>
                                                Lessons
                                            </span>
                                            <span class="flex items-center text-sm tracking-wide text-secondary">
                                                <i class="fi fi-rr-calendar-lines leading-none mr-1.5"></i>
                                                26/09/2565
                                            </span>
                                        </div>
                                        <!--------- Avatar ---------->
                                        <figure class="flex items-center gap-2">
                                            <img src="{{ asset('assets/images/users/avatar-4.jpg') }}" alt="avatar"
                                                class="object-cover object-top w-8 h-8 rounded-full" />
                                            <figcaption class="text-sm font-medium text-secondary">
                                                Ashley Caldwell
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>

                                <!--------- Card Footer ---------->
                                <div
                                    class="flex justify-between px-4 py-4 mt-4 bg-transparent border-t-2 border-t-gray-50">
                                    <div
                                        class="flex items-center gap-2 text-sm font-semibold text-yellow-300 font-montserrat">
                                        <i class="leading-none fi fi-rr-star"></i>
                                        <div>4.5</div>
                                    </div>
                                    <div
                                        class="flex items-center gap-2 text-sm font-semibold font-montserrat text-primary-80">
                                        <i class="leading-none fi fi-rr-user"></i>
                                        <div>20</div>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <!--------- Card  ---------->
                        <a href="course_detail.html" class="group" data-aos="fade-up" data-aos-delay="400"
                            data-aos-duration="1000" data-aos-once="true">
                            <div
                                class="flex flex-col justify-between bg-white overflow-hidden h-full rounded-xl cursor-pointer box-border shadow-card-course transition duration-150 ease-out group-hover:ease-in group-hover:scale-105 group-hover:-translate-y-2 group-hover:shadow-[0_12px_40px_rgba(182,179,255,0.3)] group-active:scale-100 group-active:opacity-80 group-active:translate-y-0">
                                <div>
                                    <!--------- Card Image ---------->
                                    <img src="{{ asset('assets/images/rooms/room-1.jpg') }}" alt="photo"
                                        class="object-cover w-full h-52" />
                                    <!--------- Card Body ---------->
                                    <div class="p-4 bg-transparent font-montserrat">
                                        <h4
                                            class="mb-3 text-base font-semibold leading-relaxed text-dark-theme line-clamp-2">
                                            Learn 3D Modelling and Design
                                        </h4>
                                        <div class="flex gap-4 mb-5">
                                            <span class="flex items-center text-sm tracking-wide text-secondary">
                                                <i class="leading-none fi fi-rr-book"></i>
                                                <div class="ml-1.5 mr-1">4</div>
                                                Lessons
                                            </span>
                                            <span class="flex items-center text-sm tracking-wide text-secondary">
                                                <i class="fi fi-rr-calendar-lines leading-none mr-1.5"></i>
                                                26/09/2565
                                            </span>
                                        </div>
                                        <!--------- Avatar ---------->
                                        <figure class="flex items-center gap-2">
                                            <img src="{{ asset('assets/images/users/avatar.jpg') }}" alt="avatar"
                                                class="object-cover object-top w-8 h-8 rounded-full" />
                                            <figcaption class="text-sm font-medium text-secondary">
                                                Michele Hoffman
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>

                                <!--------- Card Footer ---------->
                                <div
                                    class="flex justify-between px-4 py-4 mt-4 bg-transparent border-t-2 border-t-gray-50">
                                    <div
                                        class="flex items-center gap-2 text-sm font-semibold text-yellow-300 font-montserrat">
                                        <i class="leading-none fi fi-rr-star"></i>
                                        <div>4.5</div>
                                    </div>
                                    <div
                                        class="flex items-center gap-2 text-sm font-semibold font-montserrat text-primary-80">
                                        <i class="leading-none fi fi-rr-user"></i>
                                        <div>20</div>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <!--------- Card  ---------->
                        <a href="javascript:void(0)" class="group" data-aos="fade-up" data-aos-delay="400"
                            data-aos-duration="1000" data-aos-once="true">
                            <div
                                class="flex flex-col justify-between bg-white overflow-hidden h-full rounded-xl cursor-pointer box-border shadow-card-course transition duration-150 ease-out group-hover:ease-in group-hover:scale-105 group-hover:-translate-y-2 group-hover:shadow-[0_12px_40px_rgba(182,179,255,0.3)] group-active:scale-100 group-active:opacity-80 group-active:translate-y-0">
                                <div>
                                    <!--------- Card Image ---------->
                                    <img src="{{ asset('assets/images/rooms/room-2.jpg') }}" alt="photo"
                                        class="object-cover w-full h-52" />
                                    <!--------- Card Body ---------->
                                    <div class="p-4 bg-transparent font-montserrat">
                                        <h4
                                            class="mb-3 text-base font-semibold leading-relaxed text-dark-theme line-clamp-2">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua. Massa eget egestas purus viverra accumsan
                                            in.
                                        </h4>
                                        <div class="flex gap-4 mb-5">
                                            <span class="flex items-center text-sm tracking-wide text-secondary">
                                                <i class="leading-none fi fi-rr-book"></i>
                                                <div class="ml-1.5 mr-1">4</div>
                                                Lessons
                                            </span>
                                            <span class="flex items-center text-sm tracking-wide text-secondary">
                                                <i class="fi fi-rr-calendar-lines leading-none mr-1.5"></i>
                                                26/09/2565
                                            </span>
                                        </div>
                                        <!--------- Avatar ---------->
                                        <figure class="flex items-center gap-2">
                                            <img src="{{ asset('assets/images/users/avatar-2.jpg') }}" alt="avatar"
                                                class="object-cover object-top w-8 h-8 rounded-full" />
                                            <figcaption class="text-sm font-medium text-secondary">
                                                Sarah Hampton
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                                <!--------- Card Footer ---------->
                                <div
                                    class="flex justify-between px-4 py-4 mt-4 bg-transparent border-t-2 border-t-gray-50">
                                    <div
                                        class="flex items-center gap-2 text-sm font-semibold text-yellow-300 font-montserrat">
                                        <i class="leading-none fi fi-rr-star"></i>
                                        <div>4.5</div>
                                    </div>
                                    <div
                                        class="flex items-center gap-2 text-sm font-semibold font-montserrat text-primary-80">
                                        <i class="leading-none fi fi-rr-user"></i>
                                        <div>20</div>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <!--------- Card  ---------->
                        <a href="javascript:void(0)" class="group" data-aos="fade-up" data-aos-delay="400"
                            data-aos-duration="1000" data-aos-once="true">
                            <div
                                class="flex flex-col justify-between bg-white overflow-hidden h-full rounded-xl cursor-pointer box-border shadow-card-course transition duration-150 ease-out group-hover:ease-in group-hover:scale-105 group-hover:-translate-y-2 group-hover:shadow-[0_12px_40px_rgba(182,179,255,0.3)] group-active:scale-100 group-active:opacity-80 group-active:translate-y-0">
                                <div>
                                    <!--------- Card Image ---------->
                                    <img src="{{ asset('assets/images/rooms/room-3.jpg') }}" alt="photo"
                                        class="object-cover w-full h-52" />
                                    <!--------- Card Body ---------->
                                    <div class="p-4 bg-transparent font-montserrat">
                                        <h4
                                            class="mb-3 text-base font-semibold leading-relaxed text-dark-theme line-clamp-2">
                                            Learn 3D Modelling and Design for Beginners
                                        </h4>
                                        <div class="flex gap-4 mb-5">
                                            <span class="flex items-center text-sm tracking-wide text-secondary">
                                                <i class="leading-none fi fi-rr-book"></i>
                                                <div class="ml-1.5 mr-1">4</div>
                                                Lessons
                                            </span>
                                            <span class="flex items-center text-sm tracking-wide text-secondary">
                                                <i class="fi fi-rr-calendar-lines leading-none mr-1.5"></i>
                                                26/09/2565
                                            </span>
                                        </div>
                                        <!--------- Avatar ---------->
                                        <figure class="flex items-center gap-2">
                                            <img src="{{ asset('assets/images/users/avatar-3.jpg') }}" alt="avatar"
                                                class="object-cover object-top w-8 h-8 rounded-full" />
                                            <figcaption class="text-sm font-medium text-secondary">
                                                Ashley Caldwell
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                                <!--------- Card Footer ---------->
                                <div
                                    class="flex justify-between px-4 py-4 mt-4 bg-transparent border-t-2 border-t-gray-50">
                                    <div
                                        class="flex items-center gap-2 text-sm font-semibold text-yellow-300 font-montserrat">
                                        <i class="leading-none fi fi-rr-star"></i>
                                        <div>4.5</div>
                                    </div>
                                    <div
                                        class="flex items-center gap-2 text-sm font-semibold font-montserrat text-primary-80">
                                        <i class="leading-none fi fi-rr-user"></i>
                                        <div>20</div>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <!--------- Card  ---------->
                        <a href="javascript:void(0)" class="group" data-aos="fade-up" data-aos-delay="400"
                            data-aos-duration="1000" data-aos-once="true">
                            <div
                                class="flex flex-col justify-between bg-white overflow-hidden h-full rounded-xl cursor-pointer box-border shadow-card-course transition duration-150 ease-out group-hover:ease-in group-hover:scale-105 group-hover:-translate-y-2 group-hover:shadow-[0_12px_40px_rgba(182,179,255,0.3)] group-active:scale-100 group-active:opacity-80 group-active:translate-y-0">
                                <div>
                                    <!--------- Card Image ---------->
                                    <img src="{{ asset('assets/images/rooms/room-1.jpg') }}" alt="photo"
                                        class="object-cover w-full h-52" />
                                    <!--------- Card Body ---------->
                                    <div class="p-4 bg-transparent font-montserrat">
                                        <h4
                                            class="mb-3 text-base font-semibold leading-relaxed text-dark-theme line-clamp-2">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua. Massa eget egestas purus viverra accumsan
                                            in.
                                        </h4>
                                        <div class="flex gap-4 mb-5">
                                            <span class="flex items-center text-sm tracking-wide text-secondary">
                                                <i class="leading-none fi fi-rr-book"></i>
                                                <div class="ml-1.5 mr-1">4</div>
                                                Lessons
                                            </span>
                                            <span class="flex items-center text-sm tracking-wide text-secondary">
                                                <i class="fi fi-rr-calendar-lines leading-none mr-1.5"></i>
                                                26/09/2565
                                            </span>
                                        </div>
                                        <!--------- Avatar ---------->
                                        <figure class="flex items-center gap-2">
                                            <img src="{{ asset('assets/images/users/avatar-4.jpg') }}" alt="avatar"
                                                class="object-cover object-top w-8 h-8 rounded-full" />
                                            <figcaption class="text-sm font-medium text-secondary">
                                                Ashley Caldwell
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>

                                <!--------- Card Footer ---------->
                                <div
                                    class="flex justify-between px-4 py-4 mt-4 bg-transparent border-t-2 border-t-gray-50">
                                    <div
                                        class="flex items-center gap-2 text-sm font-semibold text-yellow-300 font-montserrat">
                                        <i class="leading-none fi fi-rr-star"></i>
                                        <div>4.5</div>
                                    </div>
                                    <div
                                        class="flex items-center gap-2 text-sm font-semibold font-montserrat text-primary-80">
                                        <i class="leading-none fi fi-rr-user"></i>
                                        <div>20</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!--------- Wave  ---------->
            <img src="{{ asset('assets/images/wave-footer.svg') }}" class="absolute left-0 z-0 w-full -bottom-0" />
        </div>
    </main>
@endsection
@section('script')
    <script>
        // const player = new Plyr('#player', plyrDefaults);

        // player.on('ready', (event) => {
        //     const instance = event.detail.plyr;
        //     console.log(event.detail.plyr.currentTime);
        // });

        // setInterval(() => {
        //     console.log(player.currentTime);
        // }, 1000);
    </script>
@endsection
