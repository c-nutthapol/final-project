@extends('layouts.admin.app')

@section('title', 'ข้อมูลผู้สอน')

@section('content')
    <div>
        <!-- Page Title -->
        <h2 class="mb-6 text-2xl font-bold tracking-wide text-secondary">
            คำขอเป็นผู้สอนทั้งหมด
        </h2>

        <div class="block overflow-hidden bg-white rounded-lg">
            <!--------- Filter   ---------->
            <div class="flex items-center justify-between p-6">
                <div class="flex space-x-4">
                    <select
                        class="block px-3 py-2 text-base font-normal bg-white border rounded-md w-52 border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary">
                        <option selected>ล่าสุด</option>
                        <option value="">เก่าสุด</option>
                    </select>
                    <select
                        class="block px-3 py-2 text-base font-normal bg-white border rounded-md w-52 border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary">
                        <option selected>สถานะทั้งหมด</option>
                        <option value="">รอการอนุมัติ</option>
                        <option value="">อนุมัติ</option>
                        <option value="">ปฎิเสธ</option>
                    </select>
                </div>
                <div>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <i class="text-base leading-none fi fi-rr-search"></i>
                        </div>
                        <input type="search" id="search"
                            class="block w-full py-2 pl-10 text-base font-normal bg-white border rounded-md border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary"
                            placeholder="ค้นหา..." required />
                    </div>
                </div>
            </div>
            <!--------- Table   ---------->
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left text-secondary">
                    <thead class="text-sm uppercase text-secondary/60 bg-primary/5">
                        <tr>
                            <th scope="col" class="px-6 py-3">ชื่อ-นามสกุล</th>
                            <th scope="col" class="px-6 py-3">เวลาส่งคำขอ</th>
                            <th scope="col" class="px-6 py-3">สถานะ</th>
                            <th scope="col" class="px-6 py-3">ตัวเลือก</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" class="flex items-center px-6 py-4 space-x-3 whitespace-nowrap">
                                <!--------- Avatar ---------->
                                <figure class="flex items-center space-x-3">
                                    <img src="{{ asset('assets/images/users/avatar.jpg') }}" alt="avatar"
                                        class="object-cover object-top w-10 h-10 rounded-full" />
                                    <figcaption class="text-base font-semibold text-secondary">
                                        Michele Hoffman
                                    </figcaption>
                                </figure>
                                <button type="button"
                                    class="flex items-center justify-center w-8 h-8 rounded-full bg-secondary/5 hover:bg-secondary/20">
                                    <svg class="w-5 h-5 text-secondary" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </th>
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-1">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-sm font-medium">14:50 น. 18/12/2565</span>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <span class="px-2 py-1 text-sm font-bold text-yellow-400 rounded-md bg-yellow-300/20">
                                    รอการอนุมัติ
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <button type="button" class="font-medium text-primary hover:underline"
                                    data-modal-toggle="statusModal">
                                    จัดการ
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" class="flex items-center px-6 py-4 space-x-3 whitespace-nowrap">
                                <!--------- Avatar ---------->
                                <figure class="flex items-center space-x-3">
                                    <img src="{{ asset('assets/images/users/avatar.jpg') }}" alt="avatar"
                                        class="object-cover object-top w-10 h-10 rounded-full" />
                                    <figcaption class="text-base font-semibold text-secondary">
                                        Michele Hoffman
                                    </figcaption>
                                </figure>
                                <button type="button"
                                    class="flex items-center justify-center w-8 h-8 rounded-full bg-secondary/5 hover:bg-secondary/20">
                                    <svg class="w-5 h-5 text-secondary" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </th>
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-1">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-sm font-medium">14:50 น. 18/12/2565</span>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <span class="px-2 py-1 text-sm font-bold text-green-400 rounded-md bg-green-300/20">
                                    อนุมัติ
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <button type="button" class="font-medium text-primary hover:underline"
                                    data-modal-toggle="statusModal">
                                    จัดการ
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" class="flex items-center px-6 py-4 space-x-3 whitespace-nowrap">
                                <!--------- Avatar ---------->
                                <figure class="flex items-center space-x-3">
                                    <img src="{{ asset('assets/images/users/avatar.jpg') }}" alt="avatar"
                                        class="object-cover object-top w-10 h-10 rounded-full" />
                                    <figcaption class="text-base font-semibold text-secondary">
                                        Michele Hoffman
                                    </figcaption>
                                </figure>
                                <button type="button"
                                    class="flex items-center justify-center w-8 h-8 rounded-full bg-secondary/5 hover:bg-secondary/20">
                                    <svg class="w-5 h-5 text-secondary" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </th>
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-1">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-sm font-medium">14:50 น. 18/12/2565</span>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <span class="px-2 py-1 text-sm font-bold text-red-400 rounded-md bg-red-300/20">
                                    ปฎิเสธ
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <button type="button" class="font-medium text-primary hover:underline"
                                    data-modal-toggle="statusModal">
                                    จัดการ
                                </button>
                            </td>
                            <!--  -->
                        </tr>
                    </tbody>
                </table>
            </div>
            <!--------- Pagination   ---------->
            <div class="flex justify-center p-6">
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

        <!-- Status Modal -->
        <div id="statusModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
            <div class="relative w-full h-full max-w-md md:h-auto font-ibm">
                <!-- Modal content -->
                <div class="relative shadow bg-white/60 backdrop-blur-md rounded-2xl">
                    <form>
                        <!-- Modal body -->
                        <div class="p-6 space-y-4">
                            <!--------- Avatar ---------->
                            <!-- <div
                                    class="inline-block p-6 border rounded-lg border-secondary/20"
                                  > -->
                            <figure class="flex flex-col items-center space-y-4">
                                <img src="{{ asset('assets/images/users/avatar.jpg') }}" alt="avatar"
                                    class="object-cover object-top w-20 h-20 rounded-full" />
                                <figcaption class="text-base font-semibold text-secondary">
                                    Michele Hoffman
                                </figcaption>
                            </figure>
                            <!-- </div> -->
                            <div>
                                <label for="status" class="block mb-1.5 text-base font-medium text-dark-theme">
                                    สถานะ
                                </label>
                                <select id="status"
                                    class="block w-full px-3 py-2 text-base font-normal bg-transparent border rounded-md border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary">
                                    <option selected>รอการอนุมัติ</option>
                                    <option value="">อนุมัติ</option>
                                    <option value="">ปฎิเสธ</option>
                                </select>
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div class="flex items-center justify-center p-6 space-x-2 border-t rounded-b border-secondary/10">
                            <button data-modal-toggle="statusModal" type="submit" class="btn is-primary">
                                <div class="flex items-center">
                                    <i class="text-lg leading-none fi fi-rr-disk"></i>
                                    <span class="inline-block ml-2 font-medium">ยืนยัน</span>
                                </div>
                            </button>
                            <button data-modal-toggle="statusModal" type="button" class="btn is-secondary">
                                <div class="flex items-center">
                                    <i class="text-lg leading-none fi fi-rr-cross-small"></i>
                                    <span class="inline-block ml-2 font-medium">ยกเลิก</span>
                                </div>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script></script>
@endsection
