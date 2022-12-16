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
                                <a href="javascript:void(0);" data-modal-toggle="review-modal"
                                    class="absolute top-0 left-0 flex items-center justify-center w-full h-full cursor-pointer bg-black/70 backdrop-blur-[1px] transform ease-in-out duration-200 text-white hover:text-yellow-300">
                                    <div class="text-2xl font-bold tracking-wider font-ibm">
                                        ให้คะแนน
                                    </div>
                                </a>
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

        <!-- Review Modal -->
        <div id="review-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
            <div class="relative w-full h-full max-w-2xl md:h-auto font-ibm">
                <!-- Modal content -->
                <div class="relative bg-white shadow rounded-2xl">
                    <form>
                        <!-- Modal body -->
                        <div class="p-6 space-y-4">
                            <div x-data="{
                                rating: 0,
                                hoverRating: 0,
                                ratings: [{ 'amount': 1 }, { 'amount': 2 }, { 'amount': 3 }, { 'amount': 4 }, { 'amount': 5 }],
                                rate(amount) {
                                    if (this.rating == amount) {
                                        this.rating = 0;
                                    } else {
                                        this.rating = amount
                                    };
                                },
                            }">
                                <div class="text-center">
                                    <h4 class="mb-1 text-secondary text-2xl font-bold">คะแนน</h4>
                                </div>
                                <div class="flex space-x-0 justify-center">
                                    <template x-for="(star, index) in ratings" :key="index">
                                        <button type="button" @click="rate(star.amount)"
                                            @mouseover="hoverRating = star.amount" @mouseleave="hoverRating = rating"
                                            aria-hidden="true"
                                            class="rounded-sm text-gray-400 fill-current focus:outline-none focus:shadow-outline p-1 w-12 m-0 cursor-pointer"
                                            :class="{
                                                'text-gray-600': hoverRating >= star.amount,
                                                'text-yellow-400': rating >=
                                                    star.amount && hoverRating >= star.amount
                                            }">
                                            <svg class="w-15 transition duration-150" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                        </button>
                                    </template>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-x-3 gap-y-4">
                                <div class="col-span-2">
                                    <textarea
                                        class="block w-full px-3 py-2 text-base font-normal bg-white border rounded-md border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary"
                                        placeholder="คำอธิบาย" rows="5" required></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div class="flex items-center justify-center p-6 space-x-2 border-t border-gray-200 rounded-b">
                            <button data-modal-toggle="review-modal" type="button" class="btn is-secondary">
                                <div class="flex items-center">
                                    <i class="text-lg leading-none fi fi-rr-cross-small"></i>
                                    <span class="inline-block ml-2 font-medium">ยกเลิก</span>
                                </div>
                            </button>
                            <button data-modal-toggle="review-modal" type="submit" class="btn is-warning">
                                <div class="flex items-center">
                                    <i class="text-lg leading-none fi fi-rr-edit"></i>
                                    <span class="inline-block ml-2 font-medium">
                                        รีวิว
                                    </span>
                                </div>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>



@endsection
