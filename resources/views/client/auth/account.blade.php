@extends('layouts.client.app')

@section('title', 'Account')

@section('content')
    <!--------- Content  ---------->
    <main class="bg-primary-20/[0.2]">
        <div class="relative pt-24 lg:pb-96">
            <div class="absolute top-0 left-0 z-0 w-full bg-primary-20/25 h-60"></div>
            <div class="container relative z-10 mx-auto">
                <div class="grid grid-cols-12 gap-y-3 gap-x-10">
                    <div class="col-span-3">
                        <div class="sticky left-0 space-y-8 top-24">
                            <!--------- Avatar  ---------->
                            <div class="p-10 text-center bg-white rounded-2xl shadow-card-course">
                                <figure class="relative">
                                    <img src="{{ asset('assets/images/users/avatar.jpg') }}" alt="avatar"
                                        class="relative z-10 object-cover object-top mx-auto mb-6 rounded-full w-28 h-28" />
                                    <img src="{{ asset('assets/images/icons/blobs-avatar.svg') }}"
                                        class="absolute left-0 right-0 z-0 mx-auto w-36 -top-4" />
                                    <figcaption class="relative z-10 text-xl font-medium text-primary font-ibm">
                                        Katrina Santo
                                    </figcaption>
                                </figure>
                            </div>
                            <!--------- Menu  ---------->
                            <ul class="p-0 m-0 space-y-4 list-none font-ibm">
                                <li>
                                    <a href="{{ route('client.auth.account') }}"
                                        class="block px-4 py-3 text-base font-normal text-white bg-primary rounded-xl">
                                        <div class="flex items-center space-x-3">
                                            <i class="leading-none ext-lg fi fi-rr-user"></i>
                                            <span class="inline-block tracking-wide">บัญชีผู้ใช้</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-3 text-base font-light transition duration-300 ease-in-out bg-primary-40/20 rounded-xl text-dark-theme-80 hover:bg-primary-40/40 hover:text-primary">
                                        <div class="flex items-center space-x-3">
                                            <i class="text-lg leading-none fi fi-rr-graduation-cap"></i>
                                            <span class="inline-block tracking-wide">คอร์สเรียนของฉัน</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-3 text-base font-bold text-white transition duration-300 ease-in-out bg-danger rounded-xl hover:bg-danger/90 hover:text-white/90">
                                        <div class="flex items-center space-x-3">
                                            <i class="text-lg leading-none fi fi-rr-sign-out-alt"></i>
                                            <span class="inline-block tracking-wide">ออกจากระบบ</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-span-9">
                        <h2 class="mb-6 text-2xl font-medium font-ibm text-secondary">
                            บัญชีผู้ใช้
                        </h2>
                        <div class="p-10 mb-4 bg-white rounded-2xl shadow-card-course font-ibm">
                            <form>
                                <div class="text-center">
                                    {{-- @IF สำหรับตอนที่มีรูป --}}
                                    <!-- <img
                                                              src="assets/images/users/avatar.jpg"
                                                              alt="Avatar"
                                                              class="relative z-10 object-cover object-top w-32 h-32 mx-auto mb-6 rounded-full"
                                                            /> -->

                                    {{-- @ELSE สำหรับตอนที่ไม่มีรูป --}}
                                    <div
                                        class="flex items-center justify-center w-32 h-32 mx-auto mb-6 overflow-hidden text-gray-600 bg-gray-100 rounded-full">
                                        <i class="text-5xl leading-none fi fi-rr-portrait"></i>
                                    </div>
                                    <label class="inline-block cursor-pointer btn is-secondary">
                                        <div class="flex items-center">
                                            <i class="text-lg leading-none fi fi-rr-portrait"></i>
                                            <span class="inline-block ml-2 font-medium">
                                                เปลี่ยนรูปโปรไฟล์
                                            </span>
                                        </div>
                                        <input type="file" class="hidden w-full" />
                                    </label>
                                </div>
                            </form>
                        </div>
                        <div class="p-10 bg-white rounded-2xl shadow-card-course font-ibm">
                            <form>
                                <div class="grid grid-cols-2 gap-4">
                                    <div class="col-span-2">
                                        <label for="email" class="block mb-1.5 text-base font-medium text-dark-theme">
                                            อีเมล
                                        </label>
                                        <div
                                            class="block w-full px-3 py-2 text-base font-normal border rounded-md bg-secondary-80/20 border-secondary-80 text-secondary/60 cursor-no-drop">
                                            name@example.com
                                        </div>
                                    </div>
                                    <div>
                                        <label for="firstname" class="block mb-1.5 text-base font-medium text-dark-theme">
                                            ชื่อ
                                        </label>
                                        <input type="text" id="firstname"
                                            class="block w-full px-3 py-2 text-base font-normal bg-white border rounded-md border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary"
                                            placeholder="ชื่อ" />
                                    </div>
                                    <div>
                                        <label for="lastname" class="block mb-1.5 text-base font-medium text-dark-theme">
                                            นามสกุล
                                        </label>
                                        <input type="text" id="lastname"
                                            class="block w-full px-3 py-2 text-base font-normal bg-white border rounded-md border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary"
                                            placeholder="นามสกุล" />
                                    </div>
                                    <div>
                                        <label for="password" class="block mb-1.5 text-base font-medium text-dark-theme">
                                            รหัสผ่านใหม่
                                        </label>
                                        <input type="password" id="password"
                                            class="block w-full px-3 py-2 text-base font-normal bg-white border rounded-md border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary"
                                            placeholder="*********" />
                                    </div>
                                    <div>
                                        <label for="confirm-password"
                                            class="block mb-1.5 text-base font-medium text-dark-theme">
                                            ยืนยันรหัสผ่านใหม่
                                        </label>
                                        <input type="password" id="confirm-password"
                                            class="block w-full px-3 py-2 text-base font-normal bg-white border rounded-md border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary"
                                            placeholder="*********" />
                                    </div>
                                </div>
                                <div class="block mt-4 text-right">
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

            <!--------- Wave  ---------->
            <img src="{{ asset('assets/images/wave-footer.svg') }}" class="absolute left-0 z-0 w-full -bottom-0" />
        </div>
    </main>
@endsection
