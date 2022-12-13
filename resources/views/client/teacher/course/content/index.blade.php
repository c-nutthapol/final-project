@extends('client.teacher.course.layout')

@section('title', 'เนื้อหา')

@section('teacher.content')
    <div class="container relative z-10 mx-auto mt-8">
        <div class="max-w-screen-lg p-6 mx-auto mb-8 overflow-hidden bg-white rounded-xl shadow-card-course font-ibm">
            <div class="flex items-center justify-between">
                <h3 class="text-base font-bold tracking-wide text-secondary">
                    เนื้อหาคอร์สเรียน
                </h3>
                <button type="button" class="flex items-center btn is-primary" data-modal-toggle="create-modal">
                    <i class="leading-none fi fi-rr-plus"></i>
                    <span class="inline-block ml-2">เพิ่มเนื้อหา</span>
                </button>
            </div>
        </div>

        <div class="max-w-screen-lg mx-auto">
            <div id="curriculum" data-accordion="collapse" class="space-y-4">
                <div>
                    <h4 id="curriculum-heading-1">
                        <div
                            class="flex items-center justify-between px-4 py-3 rounded-lg ring-2 ring-inset ring-primary-40 bg-primary-40/10 font-ibm">
                            <button type="button"
                                class="flex items-center w-full space-x-2 text-base font-semibold tracking-wide text-left !bg-transparent text-dark-theme"
                                data-accordion-target="#curriculum-body-1" aria-expanded="false"
                                aria-controls="curriculum-body-1">
                                <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>First Step</span>
                            </button>
                            <div>
                                <button id="dropdownMenu" data-dropdown-toggle="dropdownDots"
                                    class="inline-flex items-center p-2 text-sm font-medium text-center bg-transparent rounded-full text-secondary focus:bg-secondary/10"
                                    type="button">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z">
                                        </path>
                                    </svg>
                                </button>

                                <!-- Dropdown menu -->
                                <div id="dropdownDots"
                                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-card-course w-44">
                                    <ul class="py-1 text-sm text-secondary" aria-labelledby="dropdownMenu">
                                        <li>
                                            <a href="{{ route('client.teacher.course.content.form') }}"
                                                class="block px-4 py-2 hover:bg-gray-100">
                                                <div class="flex items-center space-x-2">
                                                    <i class="leading-none fi fi-rr-plus"></i>
                                                    <span>เพิ่มเนื้อหาย่อย</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="block px-4 py-2 hover:bg-gray-100"
                                                data-modal-toggle="edit-modal">
                                                <div class="flex items-center space-x-2">
                                                    <i class="leading-none fi fi-rr-edit"></i>
                                                    <span>แก้ไข</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="py-1">
                                        <a href="#" class="block px-4 py-2 text-sm text-danger hover:bg-red-100">
                                            <div class="flex items-center space-x-2">
                                                <i class="leading-none fi fi-rr-trash"></i>
                                                <span>ลบ</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </h4>
                    <div id="curriculum-body-1" class="hidden font-ibm" aria-labelledby="curriculum-heading-1">
                        <div class="px-4 py-5 font-light">
                            <ul class="flex flex-col flex-wrap gap-y-4">
                                <li class="flex items-center justify-between">
                                    <a href="#">
                                        <div class="flex items-center space-x-3">
                                            <i class="text-sm leading-none fi fi-rr-play"></i>
                                            <span class="inline-block text-sm font-normal leading-normal text-secondary">
                                                Structure
                                            </span>
                                        </div>
                                    </a>
                                    <div class="space-x-1.5">
                                        <a href="{{ route('client.teacher.course.content.form') }}"
                                            class="text-base text-secondary hover:text-warning">
                                            <i class="leading-none fi fi-rr-edit"></i>
                                        </a>
                                        <button type="button" class="text-base text-secondary hover:text-danger">
                                            <i class="leading-none fi fi-rr-trash"></i>
                                        </button>
                                    </div>
                                </li>
                                <li class="flex items-center justify-between">
                                    <a href="#">
                                        <div class="flex items-center space-x-3">
                                            <i class="text-sm leading-none fi fi-rr-document-signed"></i>
                                            <span class="inline-block text-sm font-normal leading-normal text-secondary">
                                                Course Requirements
                                            </span>
                                        </div>
                                    </a>
                                    <div class="space-x-1.5">
                                        <a href="{{ route('client.teacher.course.content.form') }}"
                                            class="text-base text-secondary hover:text-warning">
                                            <i class="leading-none fi fi-rr-edit"></i>
                                        </a>
                                        <button type="button" class="text-base text-secondary hover:text-danger">
                                            <i class="leading-none fi fi-rr-trash"></i>
                                        </button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div>
                    <h4 id="curriculum-heading-2">
                        <div
                            class="flex items-center justify-between px-4 py-3 rounded-lg ring-2 ring-inset ring-primary-40 bg-primary-40/10 font-ibm">
                            <button type="button"
                                class="flex items-center w-full space-x-2 text-base font-semibold tracking-wide text-left !bg-transparent text-dark-theme"
                                data-accordion-target="#curriculum-body-2" aria-expanded="false"
                                aria-controls="curriculum-body-2">
                                <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>Two Step</span>
                            </button>
                            <div>
                                <button id="dropdownMenu" data-dropdown-toggle="dropdownDots"
                                    class="inline-flex items-center p-2 text-sm font-medium text-center bg-transparent rounded-full text-secondary focus:bg-secondary/10"
                                    type="button">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z">
                                        </path>
                                    </svg>
                                </button>

                                <!-- Dropdown menu -->
                                <div id="dropdownDots"
                                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-card-course w-44">
                                    <ul class="py-1 text-sm text-secondary" aria-labelledby="dropdownMenu">
                                        <li>
                                            <a href="teacher_form-content_courses.html"
                                                class="block px-4 py-2 hover:bg-gray-100">
                                                <div class="flex items-center space-x-2">
                                                    <i class="leading-none fi fi-rr-plus"></i>
                                                    <span>เพิ่มเนื้อหาย่อย</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100"
                                                data-modal-toggle="edit-modal">
                                                <div class="flex items-center space-x-2">
                                                    <i class="leading-none fi fi-rr-edit"></i>
                                                    <span>แก้ไข</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="py-1">
                                        <a href="#" class="block px-4 py-2 text-sm text-danger hover:bg-red-100">
                                            <div class="flex items-center space-x-2">
                                                <i class="leading-none fi fi-rr-trash"></i>
                                                <span>ลบ</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </h4>
                    <div id="curriculum-body-2" class="hidden font-ibm" aria-labelledby="curriculum-heading-2">
                        <div class="px-4 py-5 font-light">
                            <ul class="flex flex-col flex-wrap gap-y-4">
                                <li class="flex items-center justify-between">
                                    <a href="#">
                                        <div class="flex items-center space-x-3">
                                            <i class="text-sm leading-none fi fi-rr-play"></i>
                                            <span class="inline-block text-sm font-normal leading-normal text-secondary">
                                                Structure
                                            </span>
                                        </div>
                                    </a>
                                    <div class="space-x-1.5">
                                        <a href="#" class="text-base text-secondary hover:text-warning">
                                            <i class="leading-none fi fi-rr-edit"></i>
                                        </a>
                                        <button type="button" class="text-base text-secondary hover:text-danger">
                                            <i class="leading-none fi fi-rr-trash"></i>
                                        </button>
                                    </div>
                                </li>
                                <li class="flex items-center justify-between">
                                    <a href="#">
                                        <div class="flex items-center space-x-3">
                                            <i class="text-sm leading-none fi fi-rr-play"></i>
                                            <span class="inline-block text-sm font-normal leading-normal text-secondary">
                                                Course Requirements
                                            </span>
                                        </div>
                                    </a>
                                    <div class="space-x-1.5">
                                        <a href="#" class="text-base text-secondary hover:text-warning">
                                            <i class="leading-none fi fi-rr-edit"></i>
                                        </a>
                                        <button type="button" class="text-base text-secondary hover:text-danger">
                                            <i class="leading-none fi fi-rr-trash"></i>
                                        </button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div id="edit-modal" data-modal-backdrop="static" tabindex="-2" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
        <div class="relative w-full h-full max-w-2xl md:h-auto font-ibm">
            <!-- Modal content -->
            <div class="relative bg-white shadow rounded-2xl">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 border-b rounded-t">
                    <h3 class="flex items-center space-x-2 text-xl font-semibold text-secondary">
                        <i class="leading-none fi fi-rr-edit"></i>
                        <span>แก้ไขเนื้อหา</span>
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="edit-modal">
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
                                <label for="content" class="block mb-1.5 text-base font-medium text-dark-theme">
                                    ชื่อเนื้อหา
                                </label>
                                <input type="text" id="content"
                                    class="block w-full px-3 py-2 text-base font-normal bg-white border rounded-md border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary"
                                    placeholder="ชื่อเนื้อหา" />
                            </div>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center justify-end p-6 space-x-2 border-t border-gray-200 rounded-b">
                        <button data-modal-toggle="edit-modal" type="button" class="btn is-secondary">
                            <div class="flex items-center">
                                <i class="text-lg leading-none fi fi-rr-cross-small"></i>
                                <span class="inline-block ml-2 font-medium">ยกเลิก</span>
                            </div>
                        </button>
                        <button data-modal-toggle="edit-modal" type="submit" class="btn is-warning">
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

    <!-- Create Modal -->
    <div id="create-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
        <div class="relative w-full h-full max-w-2xl md:h-auto font-ibm">
            <!-- Modal content -->
            <div class="relative bg-white shadow rounded-2xl">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 border-b rounded-t">
                    <h3 class="flex items-center space-x-2 text-xl font-semibold text-secondary">
                        <i class="leading-none fi fi-rr-plus"></i>
                        <span>เพิ่มเนื้อหา</span>
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="create-modal">
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
                                <label for="content" class="block mb-1.5 text-base font-medium text-dark-theme">
                                    ชื่อเนื้อหา
                                </label>
                                <input type="text" id="content"
                                    class="block w-full px-3 py-2 text-base font-normal bg-white border rounded-md border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary"
                                    placeholder="ชื่อเนื้อหา" />
                            </div>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center justify-end p-6 space-x-2 border-t border-gray-200 rounded-b">
                        <button data-modal-toggle="create-modal" type="button" class="btn is-secondary">
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
