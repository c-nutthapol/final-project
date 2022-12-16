@extends('client.teacher.course.layout')

@section('title', 'การตั้งค่า')

@section('teacher.content')
    <div class="container relative z-10 mx-auto mt-8 space-y-6">
        <div class="max-w-screen-lg p-10 mx-auto overflow-hidden bg-white rounded-xl shadow-card-course font-ibm">
            <div class="flex items-center justify-between mb-6">
                <h5 class="text-xl">ผู้สอน</h5>
                <button type="button" class="flex items-center btn is-primary" data-modal-toggle="add-teacher-modal">
                    <i class="leading-none fi fi-rr-user-add"></i>
                    <span class="inline-block ml-2">เพิ่มผู้สอน</span>
                </button>
            </div>
            <div class="grid grid-cols-3 gap-3">
                <div
                    class="flex items-center justify-between bg-white border border-secondary/10 p-3 rounded-lg transition duration-150 ease-linear cursor-default hover:bg-secondary/5">
                    <div class="grow">
                        <figure class="flex justify-start items-center overflow-hidden space-x-3">
                            <img src="{{ asset('assets/images/users/avatar.jpg') }}" alt="avatar"
                                class="object-cover object-top w-8 h-8 rounded-full" />
                            <div class="w-36 line-clamp-1">
                                <figcaption class="text-base font-normal text-secondary">
                                    Katrina Santo
                                </figcaption>
                            </div>
                        </figure>
                    </div>
                    <button type="button" class="btn is-danger" data-popover-target="popover-teacher-delete">
                        <div class="flex items-center content-center">
                            <i class="text-sm leading-none fi fi-rr-remove-user"></i>
                        </div>
                    </button>
                    <div data-popover id="popover-teacher-delete" role="tooltip"
                        class="absolute z-10 invisible inline-block w-auto text-sm font-light transition-opacity duration-300 bg-white rounded-lg opacity-0 text-secondary shadow-pagination">
                        <div class="px-3 py-2">
                            <p>ลบผู้สอน</p>
                        </div>
                        <div data-popper-arrow></div>
                    </div>
                </div>

                <div
                    class="flex items-center justify-between bg-white border border-secondary/10 p-3 rounded-lg transition duration-150 ease-linear cursor-default hover:bg-secondary/5">
                    <div class="grow">
                        <figure class="flex justify-start items-center overflow-hidden space-x-3">
                            <img src="{{ asset('assets/images/users/avatar.jpg') }}" alt="avatar"
                                class="object-cover object-top w-8 h-8 rounded-full" />
                            <div class="w-36 line-clamp-1">
                                <figcaption class="text-base font-normal text-secondary">
                                    Katrina Santo
                                </figcaption>
                            </div>
                        </figure>
                    </div>
                    <button type="button" class="btn is-danger" data-popover-target="popover-teacher-delete">
                        <div class="flex items-center content-center">
                            <i class="text-sm leading-none fi fi-rr-remove-user"></i>
                        </div>
                    </button>
                    <div data-popover id="popover-teacher-delete" role="tooltip"
                        class="absolute z-10 invisible inline-block w-auto text-sm font-light transition-opacity duration-300 bg-white rounded-lg opacity-0 text-secondary shadow-pagination">
                        <div class="px-3 py-2">
                            <p>ลบผู้สอน</p>
                        </div>
                        <div data-popper-arrow></div>
                    </div>
                </div>

                <div
                    class="flex items-center justify-between bg-white border border-secondary/10 p-3 rounded-lg transition duration-150 ease-linear cursor-default hover:bg-secondary/5">
                    <div class="grow">
                        <figure class="flex justify-start items-center overflow-hidden space-x-3">
                            <img src="{{ asset('assets/images/users/avatar.jpg') }}" alt="avatar"
                                class="object-cover object-top w-8 h-8 rounded-full" />
                            <div class="w-36 line-clamp-1">
                                <figcaption class="text-base font-normal text-secondary">
                                    Katrina Santo
                                </figcaption>
                            </div>
                        </figure>
                    </div>
                    <button type="button" class="btn is-danger" data-popover-target="popover-teacher-delete">
                        <div class="flex items-center content-center">
                            <i class="text-sm leading-none fi fi-rr-remove-user"></i>
                        </div>
                    </button>
                    <div data-popover id="popover-teacher-delete" role="tooltip"
                        class="absolute z-10 invisible inline-block w-auto text-sm font-light transition-opacity duration-300 bg-white rounded-lg opacity-0 text-secondary shadow-pagination">
                        <div class="px-3 py-2">
                            <p>ลบผู้สอน</p>
                        </div>
                        <div data-popper-arrow></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-screen-lg p-10 mx-auto overflow-hidden bg-white rounded-xl shadow-card-course font-ibm">
            <ul class="list-none">
                <li class="flex items-center justify-between px-4 py-6 border-b border-b-secondary/10">
                    <div>ชื่อคอร์สเรียน</div>
                    <div>Learn 3D Modelling and Design</div>
                </li>
                <li class="flex items-center justify-between px-4 py-6 border-b border-b-secondary/10">
                    <div>สถานะ</div>
                    <div class="flex items-center">
                        <!-- <label
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    for="status"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    class="mr-3 text-base font-normal text-secondary"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  >
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    Private
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  </label> -->
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input id="status" type="checkbox" value="" class="sr-only peer" />
                            <div
                                class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary-20 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary">
                            </div>
                            <span class="ml-3 text-base font-normal text-secondary">
                                Public
                            </span>
                        </label>
                    </div>
                </li>
                <li class="flex items-center justify-between px-4 py-6 border-b border-b-secondary/10">
                    <div>การตรวจสอบ</div>
                    <div>
                        <!-- <span
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    class="bg-red-50 text-danger text-sm font-medium px-2.5 py-0.5 rounded"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  >
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    คอร์สเรียนนี้ไม่มีสามารถเผยแพร่ได้
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  </span> -->
                        <span class="bg-yellow-50 text-warning text-sm font-medium px-2.5 py-0.5 rounded">
                            กำลังตรวจสอบคอร์สเรียน
                        </span>
                        <!-- <span
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    class="bg-green-50 text-success text-sm font-medium px-2.5 py-0.5 rounded"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  >
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ตรวจสอบเสร็จสิ้น
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  </span> -->
                    </div>
                </li>
                <li class="flex items-center justify-between px-4 py-6 border-b border-b-secondary/10">
                    <div>ผู้สร้างคอร์ส</div>
                    <div>
                        <figure class="flex items-center space-x-3">
                            <img src="{{ asset('assets/images/users/avatar.jpg') }}" alt="avatar"
                                class="object-cover object-top w-8 h-8 rounded-full" />
                            <figcaption class="text-base font-normal text-secondary">
                                Katrina Santo
                            </figcaption>
                        </figure>
                    </div>
                </li>
                <li class="flex items-center justify-between px-4 py-6 border-b border-b-secondary/10">
                    <div>ลบคอร์สเรียน</div>
                    <div>
                        <button type="button" class="btn is-danger" data-popover-target="popover-delete">
                            <div class="flex items-center content-center">
                                <i class="leading-none fi fi-rr-trash"></i>
                            </div>
                        </button>
                        <div data-popover id="popover-delete" role="tooltip"
                            class="absolute z-10 invisible inline-block w-auto text-sm font-light transition-opacity duration-300 bg-white rounded-lg opacity-0 text-secondary shadow-pagination">
                            <div class="px-3 py-2">
                                <p>ลบ</p>
                            </div>
                            <div data-popper-arrow></div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!-- Add Teacher Modal -->
    <div id="add-teacher-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
        <div class="relative w-full h-full max-w-2xl md:h-auto font-ibm">
            <!-- Modal content -->
            <div class="relative bg-white shadow rounded-2xl">
                <form>
                    <!-- Modal body -->
                    <div class="p-6">
                        <div class="grid grid-cols-2 gap-x-3 gap-y-4">
                            <div class="col-span-2">
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <i class="text-lg leading-none text-secondary-80 fi fi-rr-user-add"></i>
                                    </div>
                                    <input type="text"
                                        class="bg-white border border-secondary-80 text-base font-normal text-secondary rounded-md placeholder:text-secondary-80 placeholder:font-light focus:text-primary-80 focus:ring-primary focus:border-ring-primary block w-full pl-10 p-2.5"
                                        placeholder="ค้นหาชื่อผู้ใช้, ชื่อผู้สอนหรืออีเมลของผู้สอน" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center justify-end p-6 space-x-2 border-t border-gray-200 rounded-b">
                        <button data-modal-toggle="add-teacher-modal" type="button" class="btn is-secondary">
                            <div class="flex items-center">
                                <i class="text-lg leading-none fi fi-rr-cross-small"></i>
                                <span class="inline-block ml-2 font-medium">ยกเลิก</span>
                            </div>
                        </button>
                        <button data-modal-toggle="add-teacher-modal" type="submit" class="btn is-primary">
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
@endsection
