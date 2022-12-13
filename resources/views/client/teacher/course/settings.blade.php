@extends('client.teacher.course.layout')

@section('title', 'การตั้งค่า')

@section('teacher.content')
    <div class="container relative z-10 mx-auto mt-8">
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
                    <div>ผู้สอน</div>
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
@endsection
