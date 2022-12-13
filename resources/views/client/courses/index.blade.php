@extends('layouts.client.app')

@section('title', 'หลักสูตร')

@section('content')
    <!--------- Content  ---------->
    <main class="relative overflow-hidden bg-white lg:pb-72">
        <!--------- Heading  ---------->
        <div class="h-[25rem] relative bg-primary-20/20">
            <!--------- Blobs left ---------->
            <img src="{{ asset('assets/images/icons/blobs-left.svg') }}" class="absolute z-0 w-80 -top-28 -left-10" />
            <!--------- Blobs right ---------->
            <img src="{{ asset('assets/images/icons/blobs-right.svg') }}" class="absolute z-0 w-96 -top-20 -right-10" />
            <!--------- Content ---------->
            <div class="container relative z-10 flex items-center justify-center h-full mx-auto">
                <div class="text-center font-montserrat">
                    <h1 class="mb-0 text-6xl font-extrabold tracking-widest text-secondary" data-aos="fade-up"
                        data-aos-delay="200" data-aos-duration="1000">
                        Courses
                    </h1>
                </div>
            </div>
        </div>

        <!--------- Courses  ---------->
        <div class="container relative z-10 px-3 py-24 mx-auto lg:px-6 font-montserrat">
            <!--------- Search  ---------->
            <div class="absolute left-0 w-full -top-6" data-aos="fade-up" data-aos-delay="260" data-aos-duration="1100">
                <div
                    class="w-full mx-auto overflow-hidden bg-white lg:w-3/4 xl:w-3/5 h-14 rounded-xl shadow-wrapper-search">
                    <form class="flex h-full">
                        <div class="relative flex-1">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <i class="text-base leading-none fi fi-rr-search text-secondary-80"></i>
                            </div>
                            <input type="search"
                                class="block w-full h-full pl-10 text-base tracking-wide bg-white border-0 text-secondary-80 focus:ring-0"
                                placeholder="Search" required />
                        </div>
                        <div class="flex-initial w-1/4 border-l border-secondary-80">
                            <select
                                class="block w-full h-full text-base tracking-wide bg-white border-0 text-secondary-80 focus:ring-0">
                                <option selected>Category</option>
                            </select>
                        </div>
                        <div class="flex-initial w-1/5 border-l border-secondary-80">
                            <select
                                class="block w-full h-full text-base tracking-wide bg-white border-0 text-secondary-80 focus:ring-0">
                                <option selected>All</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>

            <!--------- Items  ---------->
            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                <!--------- Card  ---------->
                <a href="{{ route('client.courses.detail') }}" class="group" data-aos="fade-up" data-aos-delay="400"
                    data-aos-duration="1000" data-aos-once="true">
                    <div
                        class="flex flex-col justify-between bg-white overflow-hidden h-full rounded-xl cursor-pointer box-border shadow-card-course transition duration-150 ease-out group-hover:ease-in group-hover:scale-105 group-hover:-translate-y-2 group-hover:shadow-[0_12px_40px_rgba(182,179,255,0.3)] group-active:scale-100 group-active:opacity-80 group-active:translate-y-0">
                        <div>
                            <!--------- Card Image ---------->
                            <img src="{{ asset('assets/images/rooms/room-1.jpg') }}" alt="photo"
                                class="object-cover w-full h-52" />
                            <!--------- Card Body ---------->
                            <div class="p-4 bg-transparent font-montserrat">
                                <h4 class="mb-3 text-base font-semibold leading-relaxed text-dark-theme line-clamp-2">
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
                        <div class="flex justify-between px-4 py-4 mt-4 bg-transparent border-t-2 border-t-gray-50">
                            <div class="flex items-center gap-2 text-sm font-semibold text-yellow-300 font-montserrat">
                                <i class="leading-none fi fi-rr-star"></i>
                                <div>4.5</div>
                            </div>
                            <div class="flex items-center gap-2 text-sm font-semibold font-montserrat text-primary-80">
                                <i class="leading-none fi fi-rr-user"></i>
                                <div>20</div>
                            </div>
                        </div>
                    </div>
                </a>

                <!--------- Card  ---------->
                <a href="{{ route('client.courses.detail') }}" class="group" data-aos="fade-up" data-aos-delay="400"
                    data-aos-duration="1000" data-aos-once="true">
                    <div
                        class="flex flex-col justify-between bg-white overflow-hidden h-full rounded-xl cursor-pointer box-border shadow-card-course transition duration-150 ease-out group-hover:ease-in group-hover:scale-105 group-hover:-translate-y-2 group-hover:shadow-[0_12px_40px_rgba(182,179,255,0.3)] group-active:scale-100 group-active:opacity-80 group-active:translate-y-0">
                        <div>
                            <!--------- Card Image ---------->
                            <img src="{{ asset('assets/images/rooms/room-2.jpg') }}" alt="photo"
                                class="object-cover w-full h-52" />
                            <!--------- Card Body ---------->
                            <div class="p-4 bg-transparent font-montserrat">
                                <h4 class="mb-3 text-base font-semibold leading-relaxed text-dark-theme line-clamp-2">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Massa eget egestas purus viverra accumsan in.
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
                        <div class="flex justify-between px-4 py-4 mt-4 bg-transparent border-t-2 border-t-gray-50">
                            <div class="flex items-center gap-2 text-sm font-semibold text-yellow-300 font-montserrat">
                                <i class="leading-none fi fi-rr-star"></i>
                                <div>4.5</div>
                            </div>
                            <div class="flex items-center gap-2 text-sm font-semibold font-montserrat text-primary-80">
                                <i class="leading-none fi fi-rr-user"></i>
                                <div>20</div>
                            </div>
                        </div>
                    </div>
                </a>

                <!--------- Card  ---------->
                <a href="{{ route('client.courses.detail') }}" class="group" data-aos="fade-up" data-aos-delay="400"
                    data-aos-duration="1000" data-aos-once="true">
                    <div
                        class="flex flex-col justify-between bg-white overflow-hidden h-full rounded-xl cursor-pointer box-border shadow-card-course transition duration-150 ease-out group-hover:ease-in group-hover:scale-105 group-hover:-translate-y-2 group-hover:shadow-[0_12px_40px_rgba(182,179,255,0.3)] group-active:scale-100 group-active:opacity-80 group-active:translate-y-0">
                        <div>
                            <!--------- Card Image ---------->
                            <img src="{{ asset('assets/images/rooms/room-3.jpg') }}" alt="photo"
                                class="object-cover w-full h-52" />
                            <!--------- Card Body ---------->
                            <div class="p-4 bg-transparent font-montserrat">
                                <h4 class="mb-3 text-base font-semibold leading-relaxed text-dark-theme line-clamp-2">
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
                        <div class="flex justify-between px-4 py-4 mt-4 bg-transparent border-t-2 border-t-gray-50">
                            <div class="flex items-center gap-2 text-sm font-semibold text-yellow-300 font-montserrat">
                                <i class="leading-none fi fi-rr-star"></i>
                                <div>4.5</div>
                            </div>
                            <div class="flex items-center gap-2 text-sm font-semibold font-montserrat text-primary-80">
                                <i class="leading-none fi fi-rr-user"></i>
                                <div>20</div>
                            </div>
                        </div>
                    </div>
                </a>

                <!--------- Card  ---------->
                <a href="{{ route('client.courses.detail') }}" class="group" data-aos="fade-up" data-aos-delay="400"
                    data-aos-duration="1000" data-aos-once="true">
                    <div
                        class="flex flex-col justify-between bg-white overflow-hidden h-full rounded-xl cursor-pointer box-border shadow-card-course transition duration-150 ease-out group-hover:ease-in group-hover:scale-105 group-hover:-translate-y-2 group-hover:shadow-[0_12px_40px_rgba(182,179,255,0.3)] group-active:scale-100 group-active:opacity-80 group-active:translate-y-0">
                        <div>
                            <!--------- Card Image ---------->
                            <img src="{{ asset('assets/images/rooms/room-1.jpg') }}" alt="photo"
                                class="object-cover w-full h-52" />
                            <!--------- Card Body ---------->
                            <div class="p-4 bg-transparent font-montserrat">
                                <h4 class="mb-3 text-base font-semibold leading-relaxed text-dark-theme line-clamp-2">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Massa eget egestas purus viverra accumsan in.
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
                        <div class="flex justify-between px-4 py-4 mt-4 bg-transparent border-t-2 border-t-gray-50">
                            <div class="flex items-center gap-2 text-sm font-semibold text-yellow-300 font-montserrat">
                                <i class="leading-none fi fi-rr-star"></i>
                                <div>4.5</div>
                            </div>
                            <div class="flex items-center gap-2 text-sm font-semibold font-montserrat text-primary-80">
                                <i class="leading-none fi fi-rr-user"></i>
                                <div>20</div>
                            </div>
                        </div>
                    </div>
                </a>

                <!--------- Card  ---------->
                <a href="{{ route('client.courses.detail') }}" class="group" data-aos="fade-up" data-aos-delay="400"
                    data-aos-duration="1000" data-aos-once="true">
                    <div
                        class="flex flex-col justify-between bg-white overflow-hidden h-full rounded-xl cursor-pointer box-border shadow-card-course transition duration-150 ease-out group-hover:ease-in group-hover:scale-105 group-hover:-translate-y-2 group-hover:shadow-[0_12px_40px_rgba(182,179,255,0.3)] group-active:scale-100 group-active:opacity-80 group-active:translate-y-0">
                        <div>
                            <!--------- Card Image ---------->
                            <img src="{{ asset('assets/images/rooms/room-1.jpg') }}" alt="photo"
                                class="object-cover w-full h-52" />
                            <!--------- Card Body ---------->
                            <div class="p-4 bg-transparent font-montserrat">
                                <h4 class="mb-3 text-base font-semibold leading-relaxed text-dark-theme line-clamp-2">
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
                        <div class="flex justify-between px-4 py-4 mt-4 bg-transparent border-t-2 border-t-gray-50">
                            <div class="flex items-center gap-2 text-sm font-semibold text-yellow-300 font-montserrat">
                                <i class="leading-none fi fi-rr-star"></i>
                                <div>4.5</div>
                            </div>
                            <div class="flex items-center gap-2 text-sm font-semibold font-montserrat text-primary-80">
                                <i class="leading-none fi fi-rr-user"></i>
                                <div>20</div>
                            </div>
                        </div>
                    </div>
                </a>

                <!--------- Card  ---------->
                <a href="{{ route('client.courses.detail') }}" class="group" data-aos="fade-up" data-aos-delay="400"
                    data-aos-duration="1000" data-aos-once="true">
                    <div
                        class="flex flex-col justify-between bg-white overflow-hidden h-full rounded-xl cursor-pointer box-border shadow-card-course transition duration-150 ease-out group-hover:ease-in group-hover:scale-105 group-hover:-translate-y-2 group-hover:shadow-[0_12px_40px_rgba(182,179,255,0.3)] group-active:scale-100 group-active:opacity-80 group-active:translate-y-0">
                        <div>
                            <!--------- Card Image ---------->
                            <img src="{{ asset('assets/images/rooms/room-2.jpg') }}" alt="photo"
                                class="object-cover w-full h-52" />
                            <!--------- Card Body ---------->
                            <div class="p-4 bg-transparent font-montserrat">
                                <h4 class="mb-3 text-base font-semibold leading-relaxed text-dark-theme line-clamp-2">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Massa eget egestas purus viverra accumsan in.
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
                        <div class="flex justify-between px-4 py-4 mt-4 bg-transparent border-t-2 border-t-gray-50">
                            <div class="flex items-center gap-2 text-sm font-semibold text-yellow-300 font-montserrat">
                                <i class="leading-none fi fi-rr-star"></i>
                                <div>4.5</div>
                            </div>
                            <div class="flex items-center gap-2 text-sm font-semibold font-montserrat text-primary-80">
                                <i class="leading-none fi fi-rr-user"></i>
                                <div>20</div>
                            </div>
                        </div>
                    </div>
                </a>

                <!--------- Card  ---------->
                <a href="{{ route('client.courses.detail') }}" class="group" data-aos="fade-up" data-aos-delay="400"
                    data-aos-duration="1000" data-aos-once="true">
                    <div
                        class="flex flex-col justify-between bg-white overflow-hidden h-full rounded-xl cursor-pointer box-border shadow-card-course transition duration-150 ease-out group-hover:ease-in group-hover:scale-105 group-hover:-translate-y-2 group-hover:shadow-[0_12px_40px_rgba(182,179,255,0.3)] group-active:scale-100 group-active:opacity-80 group-active:translate-y-0">
                        <div>
                            <!--------- Card Image ---------->
                            <img src="{{ asset('assets/images/rooms/room-3.jpg') }}" alt="photo"
                                class="object-cover w-full h-52" />
                            <!--------- Card Body ---------->
                            <div class="p-4 bg-transparent font-montserrat">
                                <h4 class="mb-3 text-base font-semibold leading-relaxed text-dark-theme line-clamp-2">
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
                        <div class="flex justify-between px-4 py-4 mt-4 bg-transparent border-t-2 border-t-gray-50">
                            <div class="flex items-center gap-2 text-sm font-semibold text-yellow-300 font-montserrat">
                                <i class="leading-none fi fi-rr-star"></i>
                                <div>4.5</div>
                            </div>
                            <div class="flex items-center gap-2 text-sm font-semibold font-montserrat text-primary-80">
                                <i class="leading-none fi fi-rr-user"></i>
                                <div>20</div>
                            </div>
                        </div>
                    </div>
                </a>

                <!--------- Card  ---------->
                <a href="{{ route('client.courses.detail') }}" class="group" data-aos="fade-up" data-aos-delay="400"
                    data-aos-duration="1000" data-aos-once="true">
                    <div
                        class="flex flex-col justify-between bg-white overflow-hidden h-full rounded-xl cursor-pointer box-border shadow-card-course transition duration-150 ease-out group-hover:ease-in group-hover:scale-105 group-hover:-translate-y-2 group-hover:shadow-[0_12px_40px_rgba(182,179,255,0.3)] group-active:scale-100 group-active:opacity-80 group-active:translate-y-0">
                        <div>
                            <!--------- Card Image ---------->
                            <img src="{{ asset('assets/images/rooms/room-1.jpg') }}" alt="photo"
                                class="object-cover w-full h-52" />
                            <!--------- Card Body ---------->
                            <div class="p-4 bg-transparent font-montserrat">
                                <h4 class="mb-3 text-base font-semibold leading-relaxed text-dark-theme line-clamp-2">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Massa eget egestas purus viverra accumsan in.
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
                        <div class="flex justify-between px-4 py-4 mt-4 bg-transparent border-t-2 border-t-gray-50">
                            <div class="flex items-center gap-2 text-sm font-semibold text-yellow-300 font-montserrat">
                                <i class="leading-none fi fi-rr-star"></i>
                                <div>4.5</div>
                            </div>
                            <div class="flex items-center gap-2 text-sm font-semibold font-montserrat text-primary-80">
                                <i class="leading-none fi fi-rr-user"></i>
                                <div>20</div>
                            </div>
                        </div>
                    </div>
                </a>

                <!--------- Card  ---------->
                <a href="{{ route('client.courses.detail') }}" class="group" data-aos="fade-up" data-aos-delay="400"
                    data-aos-duration="1000" data-aos-once="true">
                    <div
                        class="flex flex-col justify-between bg-white overflow-hidden h-full rounded-xl cursor-pointer box-border shadow-card-course transition duration-150 ease-out group-hover:ease-in group-hover:scale-105 group-hover:-translate-y-2 group-hover:shadow-[0_12px_40px_rgba(182,179,255,0.3)] group-active:scale-100 group-active:opacity-80 group-active:translate-y-0">
                        <div>
                            <!--------- Card Image ---------->
                            <img src="{{ asset('assets/images/rooms/room-1.jpg') }}" alt="photo"
                                class="object-cover w-full h-52" />
                            <!--------- Card Body ---------->
                            <div class="p-4 bg-transparent font-montserrat">
                                <h4 class="mb-3 text-base font-semibold leading-relaxed text-dark-theme line-clamp-2">
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
                        <div class="flex justify-between px-4 py-4 mt-4 bg-transparent border-t-2 border-t-gray-50">
                            <div class="flex items-center gap-2 text-sm font-semibold text-yellow-300 font-montserrat">
                                <i class="leading-none fi fi-rr-star"></i>
                                <div>4.5</div>
                            </div>
                            <div class="flex items-center gap-2 text-sm font-semibold font-montserrat text-primary-80">
                                <i class="leading-none fi fi-rr-user"></i>
                                <div>20</div>
                            </div>
                        </div>
                    </div>
                </a>

                <!--------- Card  ---------->
                <a href="{{ route('client.courses.detail') }}" class="group" data-aos="fade-up" data-aos-delay="400"
                    data-aos-duration="1000" data-aos-once="true">
                    <div
                        class="flex flex-col justify-between bg-white overflow-hidden h-full rounded-xl cursor-pointer box-border shadow-card-course transition duration-150 ease-out group-hover:ease-in group-hover:scale-105 group-hover:-translate-y-2 group-hover:shadow-[0_12px_40px_rgba(182,179,255,0.3)] group-active:scale-100 group-active:opacity-80 group-active:translate-y-0">
                        <div>
                            <!--------- Card Image ---------->
                            <img src="{{ asset('assets/images/rooms/room-2.jpg') }}" alt="photo"
                                class="object-cover w-full h-52" />
                            <!--------- Card Body ---------->
                            <div class="p-4 bg-transparent font-montserrat">
                                <h4 class="mb-3 text-base font-semibold leading-relaxed text-dark-theme line-clamp-2">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Massa eget egestas purus viverra accumsan in.
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
                        <div class="flex justify-between px-4 py-4 mt-4 bg-transparent border-t-2 border-t-gray-50">
                            <div class="flex items-center gap-2 text-sm font-semibold text-yellow-300 font-montserrat">
                                <i class="leading-none fi fi-rr-star"></i>
                                <div>4.5</div>
                            </div>
                            <div class="flex items-center gap-2 text-sm font-semibold font-montserrat text-primary-80">
                                <i class="leading-none fi fi-rr-user"></i>
                                <div>20</div>
                            </div>
                        </div>
                    </div>
                </a>

                <!--------- Card  ---------->
                <a href="{{ route('client.courses.detail') }}" class="group" data-aos="fade-up" data-aos-delay="400"
                    data-aos-duration="1000" data-aos-once="true">
                    <div
                        class="flex flex-col justify-between bg-white overflow-hidden h-full rounded-xl cursor-pointer box-border shadow-card-course transition duration-150 ease-out group-hover:ease-in group-hover:scale-105 group-hover:-translate-y-2 group-hover:shadow-[0_12px_40px_rgba(182,179,255,0.3)] group-active:scale-100 group-active:opacity-80 group-active:translate-y-0">
                        <div>
                            <!--------- Card Image ---------->
                            <img src="{{ asset('assets/images/rooms/room-3.jpg') }}" alt="photo"
                                class="object-cover w-full h-52" />
                            <!--------- Card Body ---------->
                            <div class="p-4 bg-transparent font-montserrat">
                                <h4 class="mb-3 text-base font-semibold leading-relaxed text-dark-theme line-clamp-2">
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
                        <div class="flex justify-between px-4 py-4 mt-4 bg-transparent border-t-2 border-t-gray-50">
                            <div class="flex items-center gap-2 text-sm font-semibold text-yellow-300 font-montserrat">
                                <i class="leading-none fi fi-rr-star"></i>
                                <div>4.5</div>
                            </div>
                            <div class="flex items-center gap-2 text-sm font-semibold font-montserrat text-primary-80">
                                <i class="leading-none fi fi-rr-user"></i>
                                <div>20</div>
                            </div>
                        </div>
                    </div>
                </a>

                <!--------- Card  ---------->
                <a href="{{ route('client.courses.detail') }}" class="group" data-aos="fade-up" data-aos-delay="400"
                    data-aos-duration="1000" data-aos-once="true">
                    <div
                        class="flex flex-col justify-between bg-white overflow-hidden h-full rounded-xl cursor-pointer box-border shadow-card-course transition duration-150 ease-out group-hover:ease-in group-hover:scale-105 group-hover:-translate-y-2 group-hover:shadow-[0_12px_40px_rgba(182,179,255,0.3)] group-active:scale-100 group-active:opacity-80 group-active:translate-y-0">
                        <div>
                            <!--------- Card Image ---------->
                            <img src="{{ asset('assets/images/rooms/room-1.jpg') }}" alt="photo"
                                class="object-cover w-full h-52" />
                            <!--------- Card Body ---------->
                            <div class="p-4 bg-transparent font-montserrat">
                                <h4 class="mb-3 text-base font-semibold leading-relaxed text-dark-theme line-clamp-2">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Massa eget egestas purus viverra accumsan in.
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
                        <div class="flex justify-between px-4 py-4 mt-4 bg-transparent border-t-2 border-t-gray-50">
                            <div class="flex items-center gap-2 text-sm font-semibold text-yellow-300 font-montserrat">
                                <i class="leading-none fi fi-rr-star"></i>
                                <div>4.5</div>
                            </div>
                            <div class="flex items-center gap-2 text-sm font-semibold font-montserrat text-primary-80">
                                <i class="leading-none fi fi-rr-user"></i>
                                <div>20</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!--------- Pagination   ---------->
            <div class="flex justify-center mt-14" data-aos="fade-up" data-aos-duration="600" data-aos-once="true">
                <nav aria-label="Page navigation">
                    <ul class="inline-flex items-center space-x-6">
                        <li>
                            <a href="javascript:void(0)"
                                class="flex items-center justify-center w-10 h-10 ml-0 text-base leading-tight transition duration-300 ease-out bg-white text-dark-theme rounded-xl shadow-pagination hover:bg-gray-100 hover:text-gray-700 active:shadow-none active:brightness-90 active:scale-95">
                                <span class="sr-only">Previous</span>
                                <i class="leading-none fi fi-rr-angle-left"></i>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"
                                class="flex items-center justify-center w-10 h-10 text-base leading-tight text-white transition duration-300 ease-out bg-primary rounded-xl shadow-pagination hover:bg-primary hover:text-white active:shadow-none active:brightness-90 active:scale-95">1</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"
                                class="flex items-center justify-center w-10 h-10 text-base leading-tight transition duration-300 ease-out bg-white text-dark-theme rounded-xl shadow-pagination hover:bg-gray-100 hover:text-gray-700 active:shadow-none active:brightness-90 active:scale-95">2</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"
                                class="flex items-center justify-center w-10 h-10 text-base leading-tight transition duration-300 ease-out bg-white text-dark-theme rounded-xl shadow-pagination hover:bg-gray-100 hover:text-gray-700 active:shadow-none active:brightness-90 active:scale-95">3</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"
                                class="flex items-center justify-center w-10 h-10 ml-0 text-base leading-tight transition duration-300 ease-out bg-white text-dark-theme rounded-xl shadow-pagination hover:bg-gray-100 hover:text-gray-700 active:shadow-none active:brightness-90 active:scale-95">
                                <span class="sr-only">Next</span>
                                <i class="leading-none fi fi-rr-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <!--------- Dots top left ---------->
        <img src="{{ asset('assets/images/icons/dots.svg') }}" class="absolute w-36 top-52 -left-10" />

        <!--------- Dots top right ---------->
        <img src="{{ asset('assets/images/icons/dots.svg') }}" class="absolute w-36 top-[36rem] -right-20" />

        <!--------- Dots right ---------->
        <img src="{{ asset('assets/images/icons/dots.svg') }}" class="absolute z-0 w-36 bottom-64 -left-20" />

        <!--------- Wave  ---------->
        <img src="{{ asset('assets/images/wave-footer.svg') }}" class="absolute left-0 z-0 w-full -bottom-0" />
    </main>
@endsection
