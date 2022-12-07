@extends('client.teacher.course.layout')

@section('title', 'Learn')

@section('teacher.content')
    <div class="container relative z-10 mx-auto mt-8">
        <div class="grid grid-cols-12 gap-y-3 gap-x-10">
            <div class="col-span-3">
                @include('client.teacher.course.manage.menu')
            </div>
            <div class="col-span-9">
                <div class="p-10 bg-white rounded-2xl shadow-card-course font-ibm">
                    <!--------- Heading ---------->
                    <div class="flex items-center justify-between mb-8">
                        <h3 class="text-base font-bold tracking-wide text-secondary">
                            สิ่งที่ผู้เรียนจะได้เรียนรู้ทั้งหมด
                        </h3>
                        <button type="button" class="flex items-center btn is-primary" data-modal-toggle="create-learn-modal">
                            <i class="leading-none fi fi-rr-plus"></i>
                            <span class="inline-block ml-2">เพิ่มสิ่งที่ผู้เรียนจะได้</span>
                        </button>
                    </div>
                    <!--------- Search ---------->
                    <div class="flex justify-end mb-4">
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <i class="text-base leading-none fi fi-rr-search"></i>
                            </div>
                            <input type="search" id="search"
                                class="block py-2 pl-10 text-base font-normal bg-white border rounded-md border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary"
                                placeholder="ค้นหา..." required />
                        </div>
                    </div>
                    <!--------- Table ---------->
                    <div class="relative overflow-x-auto border border-secondary/10 sm:rounded-md">
                        <table class="w-full text-sm text-left text-gray-500">
                            <thead class="tracking-wide text-secondary bg-secondary-80/10">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-center">
                                        ลำดับ
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        สิ่งที่ผู้เรียนจะได้เรียน
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-right">
                                        ตัวเลือก
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="tracking-wide bg-white border-b hover:bg-gray-50">
                                    <th scope="row" class="px-6 py-4 font-bold text-center text-secondary">
                                        1
                                    </th>
                                    <td scope="row" class="px-6 py-4 font-medium text-secondary whitespace-nowrap">
                                        ได้เรียนรู้การจัด Layout
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <button type="button" class="btn is-warning" data-popover-target="popover-edit"
                                            data-modal-toggle="edit-learn-modal">
                                            <div class="flex items-center content-center">
                                                <i class="leading-none fi fi-rr-edit"></i>
                                            </div>
                                        </button>
                                        <div data-popover id="popover-edit" role="tooltip"
                                            class="absolute z-10 invisible inline-block w-auto text-sm font-light transition-opacity duration-300 bg-white rounded-lg opacity-0 text-secondary shadow-pagination">
                                            <div class="px-3 py-2">
                                                <p>แก้ไข</p>
                                            </div>
                                            <div data-popper-arrow></div>
                                        </div>
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
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!--------- Pagination   ---------->
                    <div class="flex justify-center mt-4" data-aos="fade-up" data-aos-duration="600" data-aos-once="true">
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

    <!-- Edit What you’ll learn Modal -->
    <div id="edit-learn-modal" data-modal-backdrop="static" tabindex="-2" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
        <div class="relative w-full h-full max-w-2xl md:h-auto font-ibm">
            <!-- Modal content -->
            <div class="relative bg-white shadow rounded-2xl">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 border-b rounded-t">
                    <h3 class="flex items-center space-x-2 text-xl font-semibold text-secondary">
                        <i class="leading-none fi fi-rr-edit"></i>
                        <span>แก้ไขสิ่งที่ผู้เรียนจะได้</span>
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="edit-learn-modal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
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
                                <label for="learn" class="block mb-1.5 text-base font-medium text-dark-theme">
                                    สิ่งที่ผู้เรียนจะได้
                                </label>
                                <input type="text" id="learn"
                                    class="block w-full px-3 py-2 text-base font-normal bg-white border rounded-md border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary"
                                    placeholder="สิ่งที่ผู้เรียนจะได้" />
                            </div>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center justify-end p-6 space-x-2 border-t border-gray-200 rounded-b">
                        <button data-modal-toggle="edit-learn-modal" type="button" class="btn is-secondary">
                            <div class="flex items-center">
                                <i class="text-lg leading-none fi fi-rr-cross-small"></i>
                                <span class="inline-block ml-2 font-medium">ยกเลิก</span>
                            </div>
                        </button>
                        <button data-modal-toggle="edit-learn-modal" type="submit" class="btn is-warning">
                            <div class="flex items-center">
                                <i class="text-lg leading-none fi fi-rr-edit"></i>
                                <span class="inline-block ml-2 font-medium">แก้ไข</span>
                            </div>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Create What you’ll learn Modal -->
    <div id="create-learn-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
        <div class="relative w-full h-full max-w-2xl md:h-auto font-ibm">
            <!-- Modal content -->
            <div class="relative bg-white shadow rounded-2xl">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 border-b rounded-t">
                    <h3 class="flex items-center space-x-2 text-xl font-semibold text-secondary">
                        <i class="leading-none fi fi-rr-plus"></i>
                        <span>เพิ่มสิ่งที่ผู้เรียนจะได้</span>
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="create-learn-modal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
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
                                <label for="learn" class="block mb-1.5 text-base font-medium text-dark-theme">
                                    สิ่งที่ผู้เรียนจะได้
                                </label>
                                <input type="text" id="learn"
                                    class="block w-full px-3 py-2 text-base font-normal bg-white border rounded-md border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary"
                                    placeholder="สิ่งที่ผู้เรียนจะได้" />
                            </div>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center justify-end p-6 space-x-2 border-t border-gray-200 rounded-b">
                        <button data-modal-toggle="create-learn-modal" type="button" class="btn is-secondary">
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
@endsection
