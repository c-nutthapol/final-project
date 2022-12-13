@extends('client.teacher.course.layout')

@section('title', 'ภาพรวม')

@section('teacher.content')
    <div class="container relative z-10 mx-auto mt-8">
        <div class="grid grid-cols-12 gap-y-3 gap-x-10">
            <div class="col-span-3">
                @include('client.teacher.course.manage.menu')
            </div>
            <div class="col-span-9">
                <div class="p-10 bg-white rounded-2xl shadow-card-course font-ibm">
                    <!--------- Form  ---------->
                    <form>
                        <!--------- Inputs  ---------->
                        <div class="grid grid-cols-2 gap-6">
                            <div class="col-span-2">
                                <div class="text-center">
                                    {{-- <!--------- @IF กรณีที่มีรูป  ----------> --}}
                                    <!-- <img
                                                                                src="assets/images/rooms/room-1.jpg"
                                                                                alt="Avatar"
                                                                                class="relative z-10 object-cover object-top mx-auto mb-4 w-[28.75rem] h-60 rounded-xl"
                                                                              /> -->
                                    {{-- <!--------- @ELSE กรณีที่ไม่มีรูป  ----------> --}}
                                    <div
                                        class="flex items-center justify-center w-[28.75rem] h-60 mx-auto mb-4 overflow-hidden text-gray-600 bg-gray-100 rounded-xl">
                                        <i class="leading-none text-8xl fi fi-rr-picture"></i>
                                    </div>
                                    <label class="inline-block cursor-pointer btn is-secondary">
                                        <div class="flex items-center">
                                            <i class="text-lg leading-none fi fi-rr-picture"></i>
                                            <span class="inline-block ml-2 font-medium">
                                                เลือกรูปปกคอร์สเรียน
                                            </span>
                                        </div>
                                        <input type="file" class="hidden w-full" />
                                    </label>
                                </div>
                            </div>
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
                                        <input checked id="radio-advanced" type="radio" value="" name="radio-review"
                                            class="w-4 h-4 bg-gray-100 border-gray-300 cursor-pointer text-primary focus:ring-primary-80" />
                                        <label for="radio-advanced"
                                            class="pl-3 text-base font-normal cursor-pointer text-secondary">
                                            ระดับสูง
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-2">
                                <label for="description" class="block mb-1.5 text-base font-medium text-dark-theme">
                                    รายละเอียด
                                </label>
                                <textarea id="description" rows="5"
                                    class="block w-full p-3 text-base bg-white border rounded-lg border-secondary-80 text-secondary placeholder:text-secondary-80 focus:ring-primary focus:border-primary"
                                    placeholder="รายละเอียดคอร์ส..."></textarea>
                            </div>
                            <div class="col-span-2">
                                <label for="file_video" class="block mb-1.5 text-base font-medium text-dark-theme">
                                    เลือกวิดีโอแนะนำคอร์ส
                                </label>
                                <input
                                    class="block w-full text-base bg-white border rounded-md cursor-pointer border-secondary-80 text-secondary focus:ring-primary focus:border-ring-primary"
                                    id="file_video" type="file" accept="video/mp4,video/x-m4v,video/*" />
                            </div>
                        </div>
                        <!--------- Submit  ---------->
                        <div class="block mt-6 text-right">
                            <button type="submit" class="btn is-primary">
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
    </div>
@endsection
