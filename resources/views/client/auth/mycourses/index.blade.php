@extends('client.auth.layout')

@section('title', 'My Courses')

@section('account.content')
    <div>
        <h2 class="mb-6 text-2xl font-medium font-ibm text-secondary">
            คอร์สเรียนของฉัน
        </h2>
        <!--------- Courses  ---------->
        <div class="grid grid-cols-3 gap-x-4 gap-y-6">
            <!--------- Card  ---------->
            <a href="{{ route('client.auth.courses.view') }}" class="group" data-aos="fade-up" data-aos-delay="400"
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
                            <!--------- Avatar ---------->
                            <figure class="flex items-center gap-2 mb-4">
                                <img src="{{ asset('assets/images/users/avatar.jpg') }}" alt="avatar"
                                    class="object-cover object-top w-8 h-8 rounded-full" />
                                <figcaption class="text-sm font-medium text-secondary">
                                    Michele Hoffman
                                </figcaption>
                            </figure>
                            <!--------- Progress  ---------->
                            <div class="mb-1 text-sm font-medium text-secondary font-ibm">
                                ความคืบหน้า
                            </div>
                            <div class="w-full rounded-full bg-primary-20/40">
                                <div class="bg-primary text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full"
                                    style="width: 45%">
                                    45%
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--------- Card Footer ---------->
                    <div class="flex justify-end px-4 py-4 mt-4 bg-transparent border-t-2 border-t-gray-50">
                        <div class="flex items-center gap-2 text-sm font-semibold text-yellow-300 font-ibm">
                            <i class="leading-none fi fi-rr-star"></i>
                            <div>4.5</div>
                        </div>
                    </div>
                </div>
            </a>

            <!--------- Card  ---------->
            <a href="{{ route('client.auth.courses.view') }}" class="group" data-aos="fade-up" data-aos-delay="400"
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
                                Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit, sed do eiusmod tempor incididunt ut labore et
                                dolore magna aliqua. Massa eget egestas purus viverra
                                accumsan in.
                            </h4>
                            <!--------- Avatar ---------->
                            <figure class="flex items-center gap-2 mb-4">
                                <img src="{{ asset('assets/images/users/avatar-2.jpg') }}" alt="avatar"
                                    class="object-cover object-top w-8 h-8 rounded-full" />
                                <figcaption class="text-sm font-medium text-secondary">
                                    Sarah Hampton
                                </figcaption>
                            </figure>
                            <!--------- Progress  ---------->
                            <div class="mb-1 text-sm font-medium text-secondary font-ibm">
                                ความคืบหน้า
                            </div>
                            <div class="w-full rounded-full bg-primary-20/40">
                                <div class="bg-primary text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full"
                                    style="width: 5%">
                                    5%
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--------- Card Footer ---------->
                    <div class="flex justify-end px-4 py-4 mt-4 bg-transparent border-t-2 border-t-gray-50">
                        <div class="flex items-center gap-2 text-sm font-semibold text-yellow-300 font-ibm">
                            <i class="leading-none fi fi-rr-star"></i>
                            <div>ให้คะแนน</div>
                        </div>
                    </div>
                </div>
            </a>

            <!--------- Card  ---------->
            <a href="{{ route('client.auth.courses.view') }}" class="group" data-aos="fade-up" data-aos-delay="400"
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
                            <!--------- Avatar ---------->
                            <figure class="flex items-center gap-2 mb-4">
                                <img src="{{ asset('assets/images/users/avatar-3.jpg') }}" alt="avatar"
                                    class="object-cover object-top w-8 h-8 rounded-full" />
                                <figcaption class="text-sm font-medium text-secondary">
                                    Ashley Caldwell
                                </figcaption>
                            </figure>
                            <!--------- Progress  ---------->
                            <div class="mb-1 text-sm font-medium text-secondary font-ibm">
                                ความคืบหน้า
                            </div>
                            <div class="w-full rounded-full bg-primary-20/40">
                                <div class="bg-primary text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full"
                                    style="width: 15%">
                                    15%
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--------- Card Footer ---------->
                    <div class="flex justify-end px-4 py-4 mt-4 bg-transparent border-t-2 border-t-gray-50">
                        <div class="flex items-center gap-2 text-sm font-semibold text-yellow-300 font-ibm">
                            <i class="leading-none fi fi-rr-star"></i>
                            <div>ให้คะแนน</div>
                        </div>
                    </div>
                </div>
            </a>

            <!--------- Card  ---------->
            <a href="{{ route('client.auth.courses.view') }}" class="group" data-aos="fade-up" data-aos-delay="400"
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
                            <!--------- Avatar ---------->
                            <figure class="flex items-center gap-2 mb-4">
                                <img src="{{ asset('assets/images/users/avatar.jpg') }}" alt="avatar"
                                    class="object-cover object-top w-8 h-8 rounded-full" />
                                <figcaption class="text-sm font-medium text-secondary">
                                    Michele Hoffman
                                </figcaption>
                            </figure>
                            <!--------- Progress  ---------->
                            <div class="mb-1 text-sm font-medium text-secondary font-ibm">
                                ความคืบหน้า
                            </div>
                            <div class="w-full rounded-full bg-primary-20/40">
                                <div class="bg-primary text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full"
                                    style="width: 45%">
                                    45%
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--------- Card Footer ---------->
                    <div class="flex justify-end px-4 py-4 mt-4 bg-transparent border-t-2 border-t-gray-50">
                        <div class="flex items-center gap-2 text-sm font-semibold text-yellow-300 font-ibm">
                            <i class="leading-none fi fi-rr-star"></i>
                            <div>4.5</div>
                        </div>
                    </div>
                </div>
            </a>

            <!--------- Card  ---------->
            <a href="{{ route('client.auth.courses.view') }}" class="group" data-aos="fade-up" data-aos-delay="400"
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
                                Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit, sed do eiusmod tempor incididunt ut labore et
                                dolore magna aliqua. Massa eget egestas purus viverra
                                accumsan in.
                            </h4>
                            <!--------- Avatar ---------->
                            <figure class="flex items-center gap-2 mb-4">
                                <img src="{{ asset('assets/images/users/avatar-2.jpg') }}" alt="avatar"
                                    class="object-cover object-top w-8 h-8 rounded-full" />
                                <figcaption class="text-sm font-medium text-secondary">
                                    Sarah Hampton
                                </figcaption>
                            </figure>
                            <!--------- Progress  ---------->
                            <div class="mb-1 text-sm font-medium text-secondary font-ibm">
                                ความคืบหน้า
                            </div>
                            <div class="w-full rounded-full bg-primary-20/40">
                                <div class="bg-primary text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full"
                                    style="width: 5%">
                                    5%
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--------- Card Footer ---------->
                    <div class="flex justify-end px-4 py-4 mt-4 bg-transparent border-t-2 border-t-gray-50">
                        <div class="flex items-center gap-2 text-sm font-semibold text-yellow-300 font-ibm">
                            <i class="leading-none fi fi-rr-star"></i>
                            <div>ให้คะแนน</div>
                        </div>
                    </div>
                </div>
            </a>

            <!--------- Card  ---------->
            <a href="{{ route('client.auth.courses.view') }}" class="group" data-aos="fade-up" data-aos-delay="400"
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
                            <!--------- Avatar ---------->
                            <figure class="flex items-center gap-2 mb-4">
                                <img src="{{ asset('assets/images/users/avatar-3.jpg') }}" alt="avatar"
                                    class="object-cover object-top w-8 h-8 rounded-full" />
                                <figcaption class="text-sm font-medium text-secondary">
                                    Ashley Caldwell
                                </figcaption>
                            </figure>
                            <!--------- Progress  ---------->
                            <div class="mb-1 text-sm font-medium text-secondary font-ibm">
                                ความคืบหน้า
                            </div>
                            <div class="w-full rounded-full bg-primary-20/40">
                                <div class="bg-primary text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full"
                                    style="width: 15%">
                                    15%
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--------- Card Footer ---------->
                    <div class="flex justify-end px-4 py-4 mt-4 bg-transparent border-t-2 border-t-gray-50">
                        <div class="flex items-center gap-2 text-sm font-semibold text-yellow-300 font-ibm">
                            <i class="leading-none fi fi-rr-star"></i>
                            <div>ให้คะแนน</div>
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
@endsection
