@extends('layouts.client.app')

@section('title', 'D-Course')

@section('content')
    <!--------- Content  ---------->
    <main class="bg-primary-20/[0.2]">
        <div class="relative pt-24 lg:pb-96">
            <div class="absolute top-0 left-0 z-0 w-full bg-primary-20/25 h-60"></div>
            <div class="container relative z-10 mx-auto">
                <h2 class="mb-6 text-2xl font-medium font-ibm text-secondary">
                    จัดการคอร์สเรียน
                </h2>

                <div class="grid grid-cols-12 gap-y-3 gap-x-10">
                    <!--------- Filters  ---------->
                    <div class="col-span-3">
                        <div class="sticky left-0 space-y-8 top-24">
                            <div class="p-8 bg-white rounded-2xl shadow-card-course font-ibm">
                                <h4 class="mb-4 text-base font-bold tracking-wide text-secondary">
                                    ตั้งค่าการค้นหา
                                </h4>

                                <form>
                                    <div class="space-y-4">
                                        <div class="relative">
                                            <div
                                                class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <i class="text-base leading-none fi fi-rr-search"></i>
                                            </div>
                                            <input type="search" id="search"
                                                class="block w-full py-2 pl-10 text-base font-normal bg-white border rounded-md border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary"
                                                placeholder="ค้นหา..." required />
                                        </div>
                                        <div>
                                            <select id="filter-category"
                                                class="block w-full px-3 py-2 text-base font-normal bg-white border rounded-md border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary">
                                                <option selected>ค้นหาหมวดหมู่</option>
                                                <option value="">United States</option>
                                                <option value="">Canada</option>
                                                <option value="">France</option>
                                                <option value="">Germany</option>
                                            </select>
                                        </div>
                                        <div>
                                            <select id="filter"
                                                class="block w-full px-3 py-2 text-base font-normal bg-white border rounded-md border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary">
                                                <option value="">คอร์สเรียนใหม่สุด</option>
                                                <option value="">คอร์สเรียนเก่าสุด</option>
                                                <option value="">คะแนนรีวิวสูงที่สุด</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mt-5">
                                        <label class="text-base font-bold tracking-wide text-secondary">
                                            ระดับคอร์สเรียน
                                        </label>
                                        <div class="mt-4 space-y-2">
                                            <div class="flex items-center">
                                                <input id="all-levels" type="checkbox" value=""
                                                    class="w-4 h-4 bg-gray-100 border-gray-300 rounded cursor-pointer text-primary focus:ring-primary-80"
                                                    checked />
                                                <label for="all-levels"
                                                    class="ml-2 text-base font-normal cursor-pointer text-secondary">
                                                    ทุกระดับ
                                                </label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="beginners" type="checkbox" value=""
                                                    class="w-4 h-4 bg-gray-100 border-gray-300 rounded cursor-pointer text-primary focus:ring-primary-80" />
                                                <label for="beginners"
                                                    class="ml-2 text-base font-normal cursor-pointer text-secondary">
                                                    ระดับเริ่มต้น
                                                </label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="intermediate" type="checkbox" value=""
                                                    class="w-4 h-4 bg-gray-100 border-gray-300 rounded cursor-pointer text-primary focus:ring-primary-80" />
                                                <label for="intermediate"
                                                    class="ml-2 text-base font-normal cursor-pointer text-secondary">
                                                    ระดับปานกลาง
                                                </label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="advanced" type="checkbox" value=""
                                                    class="w-4 h-4 bg-gray-100 border-gray-300 rounded cursor-pointer text-primary focus:ring-primary-80" />
                                                <label for="advanced"
                                                    class="ml-2 text-base font-normal cursor-pointer text-secondary">
                                                    ระดับสูง
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-5">
                                        <label class="text-base font-bold tracking-wide text-secondary">
                                            คะแนน
                                        </label>
                                        <div class="mt-4 space-y-2">
                                            <div class="flex items-center">
                                                <input checked id="radio-review-4" type="radio" value=""
                                                    name="radio-review"
                                                    class="w-4 h-4 bg-gray-100 border-gray-300 cursor-pointer text-primary focus:ring-primary-80" />
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
                                                    class="w-4 h-4 bg-gray-100 border-gray-300 cursor-pointer text-primary focus:ring-primary-80" />
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
                                                    class="w-4 h-4 bg-gray-100 border-gray-300 cursor-pointer text-primary focus:ring-primary-80" />
                                                <label for="radio-review-2"
                                                    class="flex items-center pl-3 text-base font-normal cursor-pointer text-secondary">
                                                    <div class="items-center text-lg">
                                                        <i class="leading-none text-yellow-300 fi fi-rr-star">
                                                        </i>
                                                        <i class="leading-none text-yellow-300 fi fi-rr-star">
                                                        </i>
                                                    </div>
                                                    <span class="ml-2">2</span>
                                                </label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="radio-review-1" type="radio" value=""
                                                    name="radio-review"
                                                    class="w-4 h-4 bg-gray-100 border-gray-300 cursor-pointer text-primary focus:ring-primary-80" />
                                                <label for="radio-review-1"
                                                    class="flex items-center pl-3 text-base font-normal cursor-pointer text-secondary">
                                                    <div class="items-center text-lg">
                                                        <i class="leading-none text-yellow-300 fi fi-rr-star">
                                                        </i>
                                                    </div>
                                                    <span class="ml-2">1</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-5">
                                        <label class="text-base font-bold tracking-wide text-secondary">
                                            สถานะ
                                        </label>
                                        <div class="mt-4 space-y-2">
                                            <div class="flex items-center">
                                                <input id="check-public" type="checkbox" value=""
                                                    class="w-4 h-4 bg-gray-100 border-gray-300 rounded cursor-pointer text-success focus:ring-success/60"
                                                    checked />
                                                <label for="check-public"
                                                    class="px-1.5 py-0.5 rounded ml-3 text-sm font-medium capitalize cursor-pointer text-success bg-success/20">
                                                    public
                                                </label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="check-private" type="checkbox" value=""
                                                    class="w-4 h-4 bg-gray-100 border-gray-300 rounded cursor-pointer text-secondary focus:ring-secondary/60"
                                                    checked />
                                                <label for="check-private"
                                                    class="px-1.5 py-0.5 rounded ml-3 text-sm font-medium capitalize cursor-pointer text-secondary bg-secondary/20">
                                                    private
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--------- Courses  ---------->
                    <div class="col-span-9">
                        <div class="p-8 bg-white rounded-2xl shadow-card-course font-ibm">
                            <div class="flex items-center justify-between mb-6">
                                <h3 class="text-base font-bold tracking-wide text-secondary">
                                    คอร์สเรียนทั้งหมด
                                </h3>
                                <button type="button" class="flex items-center btn is-primary"
                                    data-modal-toggle="createCourseModal">
                                    <i class="leading-none fi fi-rr-plus"></i>
                                    <span class="inline-block ml-2">เพิ่มคอร์สเรียน</span>
                                </button>
                            </div>

                            <!--------- Courses List  ---------->
                            <div class="space-y-4">
                                <a href="{{ route('client.teacher.course.manage.overview') }}"
                                    class="flex justify-between p-4 overflow-hidden duration-200 ease-in-out transform bg-primary-20/20 rounded-2xl hover:bg-primary-20/40 focus:bg-primary-20/60">
                                    <div class="flex flex-row justify-start space-x-4">
                                        <img src="{{ asset('assets/images/rooms/room-1.jpg') }}" alt="photo"
                                            class="object-cover rounded-2xl h-36" />
                                        <div>
                                            <h4
                                                class="mb-2 text-lg font-bold leading-normal tracking-wide text-secondary line-clamp-2">
                                                Learn 3D Modelling and Design
                                            </h4>
                                            <div class="flex justify-start mb-3 space-x-2">
                                                <div class="flex items-center space-x-1 text-sm">
                                                    <i class="leading-none text-yellow-300 fi fi-rr-star">
                                                    </i>
                                                    <i class="leading-none text-yellow-300 fi fi-rr-star">
                                                    </i>
                                                    <i class="leading-none text-yellow-300 fi fi-rr-star">
                                                    </i>
                                                    <i class="leading-none text-yellow-300 fi fi-rr-star">
                                                    </i>
                                                    <span class="inline-block pl-1 text-secondary">(4)</span>
                                                </div>
                                                <div class="text-sm text-secondary">
                                                    -
                                                    <span class="inline-block ml-1 tracking-wide">ระดับเริ่มต้น</span>
                                                </div>
                                            </div>
                                            <div class="flex items-center justify-start mb-2 space-x-3">
                                                <div
                                                    class="flex items-center text-sm font-normal tracking-wide text-secondary">
                                                    <i class="leading-none fi fi-rr-book"></i>
                                                    <span class="inline-block ml-1.5 mr-1">4</span>
                                                    เนื้อหา
                                                </div>
                                                <div class="flex items-center gap-2 text-sm font-normal text-primary-80">
                                                    <i class="leading-none fi fi-rr-user"></i>
                                                    <div>20</div>
                                                </div>
                                            </div>
                                            <div class="flex items-center text-sm tracking-wide text-secondary">
                                                <i class="leading-none fi fi-rr-calendar-lines"></i>
                                                <span class="inline-block ml-1.5 mr-1">28/11/2565</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <span
                                            class="bg-success/10 text-success text-xs font-semibold capitalize px-2.5 py-0.5 rounded tracking-wide">
                                            public
                                        </span>
                                    </div>
                                </a>

                                <a href="{{ route('client.teacher.course.manage.overview') }}"
                                    class="flex justify-between p-4 overflow-hidden duration-200 ease-in-out transform bg-primary-20/20 rounded-2xl hover:bg-primary-20/40 focus:bg-primary-20/60">
                                    <div class="flex flex-row justify-start space-x-4">
                                        <img src="{{ asset('assets/images/rooms/room-2.jpg') }}" alt="photo"
                                            class="object-cover rounded-2xl h-36" />
                                        <div>
                                            <h4
                                                class="mb-2 text-lg font-bold leading-normal tracking-wide text-secondary line-clamp-2">
                                                Learn 3D Modelling and Design
                                            </h4>
                                            <div class="flex justify-start mb-3 space-x-2">
                                                <div class="flex items-center space-x-1 text-sm">
                                                    <i class="leading-none text-yellow-300 fi fi-rr-star">
                                                    </i>
                                                    <i class="leading-none text-yellow-300 fi fi-rr-star">
                                                    </i>
                                                    <i class="leading-none text-yellow-300 fi fi-rr-star">
                                                    </i>
                                                    <i class="leading-none text-yellow-300 fi fi-rr-star">
                                                    </i>
                                                    <span class="inline-block pl-1 text-secondary">(4)</span>
                                                </div>
                                                <div class="text-sm text-secondary">
                                                    -
                                                    <span class="inline-block ml-1 tracking-wide">ระดับเริ่มต้น</span>
                                                </div>
                                            </div>
                                            <div class="flex items-center justify-start mb-2 space-x-3">
                                                <div
                                                    class="flex items-center text-sm font-normal tracking-wide text-secondary">
                                                    <i class="leading-none fi fi-rr-book"></i>
                                                    <span class="inline-block ml-1.5 mr-1">4</span>
                                                    เนื้อหา
                                                </div>
                                                <div class="flex items-center gap-2 text-sm font-normal text-primary-80">
                                                    <i class="leading-none fi fi-rr-user"></i>
                                                    <div>10</div>
                                                </div>
                                            </div>
                                            <div class="flex items-center text-sm tracking-wide text-secondary">
                                                <i class="leading-none fi fi-rr-calendar-lines"></i>
                                                <span class="inline-block ml-1.5 mr-1">28/11/2565</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <span
                                            class="bg-secondary-80/20 text-secondary text-xs font-semibold capitalize px-2.5 py-0.5 rounded tracking-wide">
                                            private
                                        </span>
                                    </div>
                                </a>

                                <a href="{{ route('client.teacher.course.manage.overview') }}"
                                    class="flex justify-between p-4 overflow-hidden duration-200 ease-in-out transform bg-primary-20/20 rounded-2xl hover:bg-primary-20/40 focus:bg-primary-20/60">
                                    <div class="flex flex-row justify-start space-x-4">
                                        <img src="{{ asset('assets/images/rooms/room-3.jpg') }}" alt="photo"
                                            class="object-cover rounded-2xl h-36" />
                                        <div>
                                            <h4
                                                class="mb-2 text-lg font-bold leading-normal tracking-wide text-secondary line-clamp-2">
                                                Learn 3D Modelling and Design
                                            </h4>
                                            <div class="flex justify-start mb-3 space-x-2">
                                                <div class="flex items-center space-x-1 text-sm">
                                                    <span class="inline-block text-secondary">
                                                        ยังไม่มีการรีวิว
                                                    </span>
                                                </div>
                                                <div class="text-sm text-secondary">
                                                    -
                                                    <span class="inline-block ml-1 tracking-wide">ระดับเริ่มต้น</span>
                                                </div>
                                            </div>
                                            <div class="flex items-center justify-start mb-2 space-x-3">
                                                <div
                                                    class="flex items-center text-sm font-normal tracking-wide text-secondary">
                                                    <i class="leading-none fi fi-rr-book"></i>
                                                    <span class="inline-block ml-1.5 mr-1">4</span>
                                                    เนื้อหา
                                                </div>
                                                <div class="flex items-center gap-2 text-sm font-normal text-primary-80">
                                                    <i class="leading-none fi fi-rr-user"></i>
                                                    <div>0</div>
                                                </div>
                                            </div>
                                            <div class="flex items-center text-sm tracking-wide text-secondary">
                                                <i class="leading-none fi fi-rr-calendar-lines"></i>
                                                <span class="inline-block ml-1.5 mr-1">28/11/2565</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <span
                                            class="bg-secondary-80/20 text-secondary text-xs font-semibold capitalize px-2.5 py-0.5 rounded tracking-wide">
                                            private
                                        </span>
                                    </div>
                                </a>

                                <a href="{{ route('client.teacher.course.manage.overview') }}"
                                    class="flex justify-between p-4 overflow-hidden duration-200 ease-in-out transform bg-primary-20/20 rounded-2xl hover:bg-primary-20/40 focus:bg-primary-20/60">
                                    <div class="flex flex-row justify-start space-x-4">
                                        <img src="{{ asset('assets/images/rooms/room-4.jpg') }}" alt="photo"
                                            class="object-cover rounded-2xl h-36" />
                                        <div>
                                            <h4
                                                class="mb-2 text-lg font-bold leading-normal tracking-wide text-secondary line-clamp-2">
                                                Learn 3D Modelling and Design
                                            </h4>
                                            <div class="flex justify-start mb-3 space-x-2">
                                                <div class="flex items-center space-x-1 text-sm">
                                                    <i class="leading-none text-yellow-300 fi fi-rr-star">
                                                    </i>
                                                    <i class="leading-none text-yellow-300 fi fi-rr-star">
                                                    </i>
                                                    <i class="leading-none text-yellow-300 fi fi-rr-star">
                                                    </i>
                                                    <i class="leading-none text-yellow-300 fi fi-rr-star">
                                                    </i>
                                                    <span class="inline-block pl-1 text-secondary">(4)</span>
                                                </div>
                                                <div class="text-sm text-secondary">
                                                    -
                                                    <span class="inline-block ml-1 tracking-wide">ระดับเริ่มต้น</span>
                                                </div>
                                            </div>
                                            <div class="flex items-center justify-start mb-2 space-x-3">
                                                <div
                                                    class="flex items-center text-sm font-normal tracking-wide text-secondary">
                                                    <i class="leading-none fi fi-rr-book"></i>
                                                    <span class="inline-block ml-1.5 mr-1">4</span>
                                                    เนื้อหา
                                                </div>
                                                <div class="flex items-center gap-2 text-sm font-normal text-primary-80">
                                                    <i class="leading-none fi fi-rr-user"></i>
                                                    <div>10</div>
                                                </div>
                                            </div>
                                            <div class="flex items-center text-sm tracking-wide text-secondary">
                                                <i class="leading-none fi fi-rr-calendar-lines"></i>
                                                <span class="inline-block ml-1.5 mr-1">28/11/2565</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <span
                                            class="bg-secondary-80/20 text-secondary text-xs font-semibold capitalize px-2.5 py-0.5 rounded tracking-wide">
                                            private
                                        </span>
                                    </div>
                                </a>

                                <a href="{{ route('client.teacher.course.manage.overview') }}"
                                    class="flex justify-between p-4 overflow-hidden duration-200 ease-in-out transform bg-primary-20/20 rounded-2xl hover:bg-primary-20/40 focus:bg-primary-20/60">
                                    <div class="flex flex-row justify-start space-x-4">
                                        <img src="{{ asset('assets/images/rooms/room-1.jpg') }}" alt="photo"
                                            class="object-cover rounded-2xl h-36" />
                                        <div>
                                            <h4
                                                class="mb-2 text-lg font-bold leading-normal tracking-wide text-secondary line-clamp-2">
                                                Learn 3D Modelling and Design
                                            </h4>
                                            <div class="flex justify-start mb-3 space-x-2">
                                                <div class="flex items-center space-x-1 text-sm">
                                                    <span class="inline-block text-secondary">
                                                        ยังไม่มีการรีวิว
                                                    </span>
                                                </div>
                                                <div class="text-sm text-secondary">
                                                    -
                                                    <span class="inline-block ml-1 tracking-wide">ระดับเริ่มต้น</span>
                                                </div>
                                            </div>
                                            <div class="flex items-center justify-start mb-2 space-x-3">
                                                <div
                                                    class="flex items-center text-sm font-normal tracking-wide text-secondary">
                                                    <i class="leading-none fi fi-rr-book"></i>
                                                    <span class="inline-block ml-1.5 mr-1">4</span>
                                                    เนื้อหา
                                                </div>
                                                <div class="flex items-center gap-2 text-sm font-normal text-primary-80">
                                                    <i class="leading-none fi fi-rr-user"></i>
                                                    <div>0</div>
                                                </div>
                                            </div>
                                            <div class="flex items-center text-sm tracking-wide text-secondary">
                                                <i class="leading-none fi fi-rr-calendar-lines"></i>
                                                <span class="inline-block ml-1.5 mr-1">28/11/2565</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <span
                                            class="bg-secondary-80/20 text-secondary text-xs font-semibold capitalize px-2.5 py-0.5 rounded tracking-wide">
                                            private
                                        </span>
                                    </div>
                                </a>
                            </div>

                            <!--------- Pagination   ---------->
                            <div class="flex justify-center mt-10" data-aos="fade-up" data-aos-duration="600"
                                data-aos-once="true">
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
                </div>
            </div>

            <!--------- Wave  ---------->
            <img src="{{ asset('assets/images/wave-footer.svg') }}" class="absolute left-0 z-0 w-full -bottom-0" />
        </div>

        <!-- Create Course modal -->
        <div id="createCourseModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
            <div class="relative w-full h-full max-w-2xl md:h-auto font-ibm">
                <!-- Modal content -->
                <div class="relative bg-white shadow rounded-2xl">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 border-b rounded-t">
                        <h3 class="flex items-center space-x-2 text-xl font-semibold text-secondary">
                            <i class="leading-none fi fi-rr-plus"></i>
                            <span>เพิ่มคอร์สเรียน</span>
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="createCourseModal">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <form>
                        <!-- Modal body -->
                        <div class="p-6">
                            <div class="grid grid-cols-2 gap-x-3 gap-y-4">
                                <div class="col-span-2">
                                    <label for="title" class="block mb-1.5 text-base font-medium text-dark-theme">
                                        ชื่อคอร์ส
                                    </label>
                                    <input type="text" id="title"
                                        class="block w-full px-3 py-2 text-base font-normal bg-white border rounded-md border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary"
                                        placeholder="ชื่อคอร์ส" />
                                </div>
                                <div>
                                    <label for="category" class="block mb-1.5 text-base font-medium text-dark-theme">
                                        หมวดหมู่
                                    </label>
                                    <select id="category"
                                        class="block w-full px-3 py-2 text-base font-normal bg-white border rounded-md border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary">
                                        <option selected>เลือกหมวดหมู่</option>
                                        <option value="">United States</option>
                                        <option value="">Canada</option>
                                        <option value="">France</option>
                                        <option value="">Germany</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="subcategory" class="block mb-1.5 text-base font-medium text-dark-theme">
                                        หมวดหมู่ย่อย
                                    </label>
                                    <select id="subcategory"
                                        class="block w-full px-3 py-2 text-base font-normal bg-white border rounded-md border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary">
                                        <option selected>เลือกหมวดหมู่ย่อย</option>
                                        <option value="">United States</option>
                                        <option value="">Canada</option>
                                        <option value="">France</option>
                                        <option value="">Germany</option>
                                    </select>
                                </div>
                                <div class="col-span-2">
                                    <label for="rank" class="block mb-1.5 text-base font-medium text-dark-theme">
                                        ระดับคอร์สเรียน
                                    </label>
                                    <div class="space-y-2">
                                        <div class="flex items-center">
                                            <input checked id="radio-beginners" type="radio" value=""
                                                name="radio-review"
                                                class="w-4 h-4 bg-gray-100 border-gray-300 cursor-pointer text-primary focus:ring-primary-80" />
                                            <label for="radio-beginners"
                                                class="pl-3 text-base font-normal cursor-pointer text-secondary">
                                                ระดับเริ่มต้น
                                            </label>
                                        </div>
                                        <div class="flex items-center">
                                            <input checked id="radio-intermediate" type="radio" value=""
                                                name="radio-review"
                                                class="w-4 h-4 bg-gray-100 border-gray-300 cursor-pointer text-primary focus:ring-primary-80" />
                                            <label for="radio-intermediate"
                                                class="pl-3 text-base font-normal cursor-pointer text-secondary">
                                                ระดับปานกลาง
                                            </label>
                                        </div>
                                        <div class="flex items-center">
                                            <input checked id="radio-advanced" type="radio" value=""
                                                name="radio-review"
                                                class="w-4 h-4 bg-gray-100 border-gray-300 cursor-pointer text-primary focus:ring-primary-80" />
                                            <label for="radio-advanced"
                                                class="pl-3 text-base font-normal cursor-pointer text-secondary">
                                                ระดับสูง
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div class="flex items-center justify-end p-6 space-x-2 border-t border-gray-200 rounded-b">
                            <button data-modal-toggle="createCourseModal" type="button" class="btn is-secondary">
                                <div class="flex items-center">
                                    <i class="text-lg leading-none fi fi-rr-cross-small"></i>
                                    <span class="inline-block ml-2 font-medium">ยกเลิก</span>
                                </div>
                            </button>
                            <button data-modal-toggle="createCourseModal" type="submit" class="btn is-primary">
                                <div class="flex items-center">
                                    <i class="text-lg leading-none fi fi-rr-disk"></i>
                                    <span class="inline-block ml-2 font-medium">ยืนยัน</span>
                                </div>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
