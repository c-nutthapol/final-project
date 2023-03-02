@extends('layouts.admin.app')

@section('title', 'ข้อมูลผู้สอน')

@section('content')
    <div x-data="getData()">
        <!-- Page Title -->
        <h2 class="mb-6 text-2xl font-bold tracking-wide text-secondary">
            คำขอเป็นผู้สอนทั้งหมด
        </h2>


        @livewire('admin.instructor.table')

        <!-- Status Modal -->
        <div id="statusModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full"
            wire:ignore.self>
            <div class="relative w-full h-full max-w-md md:h-auto font-ibm" >
                <!-- Modal content -->
                <div class="relative shadow bg-white/60 backdrop-blur-md rounded-2xl">
                    <form @submit.prevent="updateInstructor">
                        <!-- Modal body -->
                        <div class="p-6 space-y-4">
                            <!--------- Avatar ---------->
                            <!-- <div
                                                                                                                                    class="inline-block p-6 border rounded-lg border-secondary/20"
                                                                                                                                  > -->
                            <figure class="flex flex-col items-center space-y-4">
                                <img :src="avatar" alt="avatar"
                                    class="object-cover object-top w-20 h-20 rounded-full" />
                                <figcaption class="text-base font-semibold text-secondary" x-text="full_name">

                                </figcaption>
                            </figure>
                            <!-- </div> -->
                            <div>
                                <label for="record" class="block mb-1.5 text-base font-medium text-dark-theme">
                                    ประวัติ
                                </label>
                                <p class="text-base font-semibold text-secondary" id="record" x-text="record"></p>
                            </div>
                            <div>
                                <label for="experience" class="block mb-1.5 text-base font-medium text-dark-theme">
                                    ประสบการณ์
                                </label>
                                <p class="text-base font-semibold text-secondary" id="experience" x-text="experience"></p>
                            </div>
                            <div>
                                <label for="target_audience" class="block mb-1.5 text-base font-medium text-dark-theme">
                                    กลุ่มเป้าหมาย
                                </label>
                                <p class="text-base font-semibold text-secondary" id="target_audience"
                                    x-text="target_audience"></p>
                            </div>
                            <div>
                                <label for="description" class="block mb-1.5 text-base font-medium text-dark-theme">
                                    หมายเหตุ
                                </label>
                                <textarea
                                    class="block w-full px-3 py-2 text-base font-normal bg-transparent border rounded-md border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary"
                                    id="description" rows="5" x-model="formData.description"></textarea>
                            </div>
                            <div>
                                <label for="status" class="block mb-1.5 text-base font-medium text-dark-theme">
                                    สถานะ
                                </label>
                                <select id="status"
                                    class="block w-full px-3 py-2 text-base font-normal bg-transparent border rounded-md border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary"
                                    x-model="formData.status">
                                    <option value="" selected>รอการอนุมัติ</option>
                                    <option value="111">อนุมัติ</option>
                                    <option value="100">ปฎิเสธ</option>
                                </select>
                              
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div class="flex items-center justify-center p-6 space-x-2 border-t rounded-b border-secondary/10">
                            <button type="submit" class="btn is-primary">
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

