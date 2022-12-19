@section('subtitle', $subtitle)
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
                                    <a href="{{ route('client.teacher.course.content.form', $idHash) }}"
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
                                <a href="{{ route('client.teacher.course.content.form', $idHash) }}"
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
                                <a href="{{ route('client.teacher.course.content.form', $idHash) }}"
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

@push('script')
    <script>
        function getData() {
            return {
                formData: {
                    name: "",
                },
                idEdit: null,
            }
        }

        function createSection() {
            return console.log(this.formData);
        }
    </script>
@endpush
