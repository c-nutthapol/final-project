@extends('client.teacher.course.layout')

@section('title', 'ผู้ลงทะเบียนเรียนทั้งหมด')

@section('teacher.content')
    <div class="container relative z-10 mx-auto mt-8">
        <div class="mx-auto font-ibm">
            <div class="flex items-center justify-between mb-6 space-x-6">
                <div class="bg-white p-6 basis-2/4 rounded-xl shadow-card-course">
                    <form>
                        <label class="text-base font-bold tracking-wide text-secondary">
                            คะแนน
                        </label>
                        <div class="mt-1.5 flex space-x-6">
                            <div class="flex items-center">
                                <input checked="" id="radio-review-all" type="radio" value="" name="radio-review"
                                    class="w-4 h-4 bg-gray-100 border-gray-300 cursor-pointer text-primary focus:ring-primary-80">
                                <label for="radio-review-all"
                                    class="flex items-center pl-3 text-base font-normal cursor-pointer text-secondary">
                                    <span>ทั้งหมด</span>
                                </label>
                            </div>{{--  --}}
                            <div class="flex items-center">
                                <input id="radio-review-4" type="radio" value="" name="radio-review"
                                    class="w-4 h-4 bg-gray-100 border-gray-300 cursor-pointer text-primary focus:ring-primary-80">
                                <label for="radio-review-4"
                                    class="flex items-center pl-3 text-base font-normal cursor-pointer text-secondary">
                                    <div class="items-center text-lg">
                                        <i class="leading-none text-yellow-300 fi fi-rr-star">
                                        </i>
                                        <i class="leading-none text-yellow-300 fi fi-rr-star">
                                        </i>
                                        <i class="leading-none text-yellow-300 fi fi-rr-star">
                                        </i>
                                        <i class="leading-none text-yellow-300 fi fi-rr-star">
                                        </i>
                                    </div>
                                    <span class="ml-2">4 ขึ้นไป</span>
                                </label>
                            </div>
                            <div class="flex items-center">
                                <input id="radio-review-3" type="radio" value="" name="radio-review"
                                    class="w-4 h-4 bg-gray-100 border-gray-300 cursor-pointer text-primary focus:ring-primary-80">
                                <label for="radio-review-3"
                                    class="flex items-center pl-3 text-base font-normal cursor-pointer text-secondary">
                                    <div class="items-center text-lg">
                                        <i class="leading-none text-yellow-300 fi fi-rr-star">
                                        </i>
                                        <i class="leading-none text-yellow-300 fi fi-rr-star">
                                        </i>
                                        <i class="leading-none text-yellow-300 fi fi-rr-star">
                                        </i>
                                    </div>
                                    <span class="ml-2">3 ขึ้นไป</span>
                                </label>
                            </div>
                            <div class="flex items-center">
                                <input id="radio-review-2" type="radio" value="" name="radio-review"
                                    class="w-4 h-4 bg-gray-100 border-gray-300 cursor-pointer text-primary focus:ring-primary-80">
                                <label for="radio-review-2"
                                    class="flex items-center pl-3 text-base font-normal cursor-pointer text-secondary">
                                    <div class="items-center text-lg">
                                        <i class="leading-none text-yellow-300 fi fi-rr-star">
                                        </i>
                                        <i class="leading-none text-yellow-300 fi fi-rr-star">
                                        </i>
                                    </div>
                                    <span class="ml-2">น้อยกว่า 2</span>
                                </label>
                            </div>
                        </div>
                    </form>
                </div>
                <div>
                    <div
                        class="flex items-center  border-yellow-300 border overflow-hidden rounded-md text-sm flex-row-reverse bg-white">
                        <div class="px-3 py-3 bg-yellow-300 text-white   flex items-center h-full">
                            <i class="fi fi-rr-star leading-none"></i>
                        </div>
                        <div class="px-3 text-secondary font-medium bg-white  flex items-center h-full">
                            4.5
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-5">
                <figure class="flex items-start space-x-3 bg-white p-6 rounded-xl" data-aos="fade-up" data-aos-delay="260"
                    data-aos-duration="1200" data-aos-once="true">
                    <img src="http://final-project.test/assets/images/users/avatar-3.jpg" alt="avatar"
                        class="object-cover object-top w-12 h-12 rounded-xl shadow-avatar">
                    <div class="flex-1">
                        <figcaption class="inline text-base font-semibold text-secondary">
                            Kara Ellis
                        </figcaption>
                        <span class="inline ml-1 text-sm text-primary-40">August 19, 2022
                        </span>
                        <div class="flex flex-row mt-1 space-x-1">
                            <i class="text-yellow-300 fi fi-rr-star"></i>
                            <i class="text-yellow-300 fi fi-rr-star"></i>
                            <i class="text-yellow-300 fi fi-rr-star"></i>
                            <i class="text-yellow-300 fi fi-rr-star"></i>
                            <i class="fi fi-rr-star"></i>
                        </div>
                        <p class="mt-3 text-sm font-normal leading-relaxed tracking-wide text-secondary">
                            Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's
                            standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type
                            specimen book. It has survived not only five centuries, but
                            also the leap into electronic typesetting, remaining
                            essentially unchanged. It was popularised in the 1960s with
                            the release of Letraset sheets containing Lorem Ipsum
                            passages, and more recently with desktop publishing software
                            like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                    </div>
                </figure>

                <figure class="flex items-start space-x-3 bg-white p-6 rounded-xl" data-aos="fade-up" data-aos-delay="260"
                    data-aos-duration="1200" data-aos-once="true">
                    <img src="http://final-project.test/assets/images/users/avatar-3.jpg" alt="avatar"
                        class="object-cover object-top w-12 h-12 rounded-xl shadow-avatar">
                    <div class="flex-1">
                        <figcaption class="inline text-base font-semibold text-secondary">
                            Kara Ellis
                        </figcaption>
                        <span class="inline ml-1 text-sm text-primary-40">August 19, 2022
                        </span>
                        <div class="flex flex-row mt-1 space-x-1">
                            <i class="text-yellow-300 fi fi-rr-star"></i>
                            <i class="text-yellow-300 fi fi-rr-star"></i>
                            <i class="text-yellow-300 fi fi-rr-star"></i>
                            <i class="text-yellow-300 fi fi-rr-star"></i>
                            <i class="fi fi-rr-star"></i>
                        </div>
                        <p class="mt-3 text-sm font-normal leading-relaxed tracking-wide text-secondary">
                            Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's
                            standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type
                            specimen book. It has survived not only five centuries, but
                            also the leap into electronic typesetting, remaining
                            essentially unchanged. It was popularised in the 1960s with
                            the release of Letraset sheets containing Lorem Ipsum
                            passages, and more recently with desktop publishing software
                            like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                    </div>
                </figure>
            </div>
            <!--------- Pagination   ---------->
            <div class="flex justify-center mt-10" data-aos="fade-up" data-aos-duration="600" data-aos-once="true">
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
    </div>
@endsection
