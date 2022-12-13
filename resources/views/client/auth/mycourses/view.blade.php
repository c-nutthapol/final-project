@extends('layouts.client.app')

@section('title', 'หลักสูตรของฉัน')
@section('subtitle', '| Learn 3D Modelling and Design')

@section('content')

    <!--------- Content  ---------->
    <main class="bg-primary-20/[0.2]">
        <div class="relative pt-24 lg:pb-96">
            <div class="absolute top-0 left-0 z-0 w-full bg-primary-20/25 h-60"></div>
            <div class="container relative z-10 mx-auto">
                <div class="grid grid-cols-12 gap-y-3 gap-x-10">
                    <div class="col-span-3">
                        <div class="sticky left-0 space-y-8 top-24">
                            <div data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000" data-aos-once="true">
                                <div
                                    class="box-border flex flex-col justify-between h-full overflow-hidden bg-white rounded-xl shadow-card-course">
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
                                </div>
                            </div>
                            <!--------- ความคืบหน้า  ---------->
                            <div class="p-4 text-left bg-white rounded-2xl shadow-card-course">
                                <!--------- Title ---------->
                                <h4 class="mb-1 text-base font-bold tracking-wider text-secondary font-ibm">
                                    ความคืบหน้า
                                </h4>
                                <!--------- Progress ---------->
                                <div class="w-full rounded-full bg-primary-20/40">
                                    <div class="bg-primary text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full"
                                        style="width: 45%">
                                        45%
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-9">
                        <div class="grid grid-cols-4 gap-4">
                            <!--------- ผลการทดสอบ ---------->
                            <div class="col-span-2">
                                <div
                                    class="relative p-10 overflow-hidden text-center bg-success rounded-2xl shadow-card-course">
                                    <div
                                        class="absolute top-0 left-0 flex items-center justify-center w-full h-full cursor-no-drop bg-black/70 backdrop-blur-[1px] transform ease-in-out duration-200 text-white">
                                        <div class="text-2xl font-bold tracking-wider font-ibm">
                                            คอร์สเรียนนี้ไม่มีแบบทดสอบ
                                        </div>
                                    </div>
                                    <!--------- Icon ---------->
                                    <div
                                        class="flex items-center justify-center w-40 h-40 mx-auto mb-4 overflow-hidden text-4xl font-bold tracking-wider bg-white rounded-full text-success font-montserrat">
                                        0%
                                    </div>
                                    <!--------- Title ---------->
                                    <h4 class="text-xl font-bold tracking-wider text-white font-ibm">
                                        ผลแบบทดสอบ
                                    </h4>
                                </div>
                            </div>
                            <!--------- คะแนนรีวิว ---------->
                            <div
                                class="relative p-10 overflow-hidden text-center bg-yellow-300 rounded-2xl shadow-card-course">
                                <div
                                    class="absolute top-0 left-0 flex items-center justify-center w-full h-full cursor-pointer bg-black/70 backdrop-blur-[1px] transform ease-in-out duration-200 text-white hover:text-yellow-300">
                                    <div class="text-2xl font-bold tracking-wider font-ibm">
                                        ให้คะแนน
                                    </div>
                                </div>
                                <!--------- Icon ---------->
                                <div
                                    class="flex items-center justify-center w-40 h-40 mx-auto mb-4 overflow-hidden text-4xl font-bold tracking-wider text-yellow-400 bg-white rounded-full font-montserrat">
                                    <i class="leading-none fi fi-rr-star"></i>
                                    <span class="inline-block ml-1">0</span>
                                </div>
                                <!--------- Title ---------->
                                <h4 class="text-xl font-bold tracking-wider text-white font-ibm">
                                    คะแนน
                                </h4>
                            </div>
                            <!--------- เกียรติบัตร ---------->
                            <div
                                class="relative p-10 overflow-hidden text-center bg-secondary rounded-2xl shadow-card-course">
                                <div
                                    class="absolute top-0 left-0 flex items-center justify-center w-full h-full cursor-no-drop bg-black/70 backdrop-blur-[1px]">
                                    <div class="text-2xl font-bold tracking-wider text-white font-ibm">
                                        ยังไม่ผ่าน
                                    </div>
                                </div>
                                <!--------- Icon ---------->
                                <div
                                    class="flex items-center justify-center w-40 h-40 mx-auto mb-4 overflow-hidden font-bold tracking-wider bg-white rounded-full text-7xl text-secondary font-montserrat">
                                    <i class="leading-none fi fi-rr-badge"></i>
                                </div>
                                <!--------- Title ---------->
                                <h4 class="text-xl font-bold tracking-wider text-white font-ibm">
                                    เกียรติบัตร
                                </h4>
                            </div>
                        </div>

                        <!--------- เนื้อหา  ---------->
                        <div class="mt-10 mb-20" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1100"
                            data-aos-once="true">
                            <h4 class="mb-6 text-2xl font-semibold tracking-wide font-ibm text-secondary">
                                เนื้อหา
                            </h4>

                            <div id="curriculum" data-accordion="collapse">
                                <h2 id="curriculum-heading-1">
                                    <button type="button"
                                        class="flex items-center justify-between w-full p-4 text-base font-semibold tracking-wide text-left rounded-lg ring-2 ring-inset ring-primary-40 text-dark-theme bg-primary-40/10"
                                        data-accordion-target="#curriculum-body-1" aria-expanded="false"
                                        aria-controls="curriculum-body-1">
                                        <span>First Step</span>
                                        <svg data-accordion-icon="" class="w-6 h-6 rotate-180 shrink-0" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="curriculum-body-1" class="hidden" aria-labelledby="curriculum-heading-1">
                                    <div class="px-4 py-5 font-light">
                                        <ul class="flex flex-col flex-wrap gap-y-4">
                                            <li class="flex items-center justify-between basis-1/4">
                                                <div class="flex items-center space-x-3 text-success">
                                                    <i class="text-sm leading-none fi fi-rr-check"></i>
                                                    <span
                                                        class="inline-block text-sm font-normal leading-normal text-success">
                                                        What is Angular?
                                                    </span>
                                                </div>
                                                <span class="text-sm font-normal text-secondary">
                                                    05:42
                                                </span>
                                            </li>
                                            <li>
                                                <a href="#" class="flex items-center justify-between basis-1/4">
                                                    <div class="flex items-center space-x-3">
                                                        <i class="text-sm leading-none fi fi-rr-play"></i>
                                                        <span
                                                            class="inline-block text-sm font-normal leading-normal text-secondary">
                                                            Structure
                                                        </span>
                                                    </div>
                                                    <span class="text-sm font-normal text-secondary">
                                                        02:14
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="flex items-center justify-between basis-1/4">
                                                    <div class="flex items-center space-x-3">
                                                        <i class="text-sm leading-none fi fi-rr-play"></i>
                                                        <span
                                                            class="inline-block text-sm font-normal leading-normal text-secondary">
                                                            Course Requirements
                                                        </span>
                                                    </div>
                                                    <span class="text-sm font-normal text-secondary">
                                                        10:04
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <h2 id="curriculum-heading-2" class="mt-3">
                                    <button type="button"
                                        class="flex items-center justify-between w-full p-4 text-base font-semibold tracking-wide text-left rounded-lg ring-2 ring-inset ring-primary-40 text-dark-theme bg-primary-40/10"
                                        data-accordion-target="#curriculum-body-2" aria-expanded="false"
                                        aria-controls="curriculum-body-2">
                                        <span>Two Step</span>
                                        <svg data-accordion-icon="" class="w-6 h-6 rotate-180 shrink-0"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="curriculum-body-2" class="hidden" aria-labelledby="curriculum-heading-2">
                                    <div class="px-4 py-5 font-light">
                                        <ul class="flex flex-col flex-wrap gap-y-4">
                                            <li>
                                                <a href="#" class="flex items-center justify-between basis-1/4">
                                                    <div class="flex items-center space-x-3">
                                                        <i class="text-sm leading-none fi fi-rr-play"></i>
                                                        <span
                                                            class="inline-block text-sm font-normal leading-normal text-secondary">
                                                            What is Angular?
                                                        </span>
                                                    </div>
                                                    <span class="text-sm font-normal text-secondary">
                                                        05:42
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="flex items-center justify-between basis-1/4">
                                                    <div class="flex items-center space-x-3">
                                                        <i class="text-sm leading-none fi fi-rr-play"></i>
                                                        <span
                                                            class="inline-block text-sm font-normal leading-normal text-secondary">
                                                            Structure
                                                        </span>
                                                    </div>
                                                    <span class="text-sm font-normal text-secondary">
                                                        02:14
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--------- Wave  ---------->
            <img src="{{ asset('assets/images/wave-footer.svg') }}" class="absolute left-0 z-0 w-full -bottom-0" />
        </div>
    </main>

@endsection
