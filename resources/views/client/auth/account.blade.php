@extends('client.auth.layout')

@section('title', 'Account')

@section('account.content')
    <div>
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
                        <label for="confirm-password" class="block mb-1.5 text-base font-medium text-dark-theme">
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
@endsection
