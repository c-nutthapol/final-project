@extends('client.teacher.course.layout')

@section('title', 'เรียนรู้')

@section('teacher.content')
    <div x-data="{ nameCreate: null, idEdit: null, nameEdit: null }">
        <div class="container relative z-10 mx-auto mt-8">
            <div class="grid grid-cols-12 gap-y-3 gap-x-10">
                <div class="col-span-3">
                    @include('client.teacher.course.manage.menu')
                </div>
                @livewire('client.teacher.course.manages.learn', ['id' => $id])
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
                    <!-- Modal body -->
                    <div class="p-6">
                        <div class="grid grid-cols-2 gap-x-3 gap-y-4">
                            <div class="col-span-2">
                                <label for="learn" class="block mb-1.5 text-base font-medium text-dark-theme">
                                    สิ่งที่ผู้เรียนจะได้
                                </label>
                                <input type="text" id="learn"
                                    class="block w-full px-3 py-2 text-base font-normal bg-white border rounded-md border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary"
                                    x-model="nameEdit" placeholder="สิ่งที่ผู้เรียนจะได้"
                                    x-on:keyup.enter="UpdateWillLearn(idEdit,nameEdit); idEdit = null; nameEdit = null;" />
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
                        <button data-modal-toggle="edit-learn-modal" type="button"
                            x-on:click="UpdateWillLearn(idEdit,nameEdit); idEdit = null; nameEdit = null;"
                            class="btn is-warning">
                            <div class="flex items-center">
                                <i class="text-lg leading-none fi fi-rr-edit"></i>
                                <span class="inline-block ml-2 font-medium">แก้ไข</span>
                            </div>
                        </button>
                    </div>
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
                    <!-- Modal body -->
                    <div class="p-6">
                        <div class="grid grid-cols-2 gap-x-3 gap-y-4">
                            <div class="col-span-2">
                                <label for="learn" class="block mb-1.5 text-base font-medium text-dark-theme">
                                    สิ่งที่ผู้เรียนจะได้
                                </label>
                                <input type="text" id="learn"
                                    class="block w-full px-3 py-2 text-base font-normal bg-white border rounded-md border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary"
                                    x-model="nameCreate" placeholder="สิ่งที่ผู้เรียนจะได้"
                                    x-on:keyup.enter="CreateWillLearn(nameCreate); nameCreate = null;" />
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
                        <button data-modal-toggle="create-learn-modal" type="button"
                            x-on:click="CreateWillLearn(nameCreate); nameCreate = null;" class="btn is-primary">
                            <div class="flex items-center">
                                <i class="text-lg leading-none fi fi-rr-disk"></i>
                                <span class="inline-block ml-2 font-medium">ยืนยัน</span>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
