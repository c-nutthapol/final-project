@extends('client.teacher.course.layout')

@section('title', 'เนื้อหา')

@section('teacher.content')
    <div class="container relative z-10 mx-auto mt-8">
        <div class="max-w-screen-lg p-10 mx-auto overflow-hidden bg-white rounded-xl shadow-card-course font-ibm">
            <div class="flex items-center mb-8 space-x-2">
                <a href="{{ route('client.teacher.course.content.index', $id) }}" class="inline-block leading-none"
                    data-popover-target="popover-back-content">
                    <i class="fi fi-rr-arrow-left"></i>
                </a>
                <div data-popover id="popover-back-content" role="tooltip"
                    class="absolute z-10 invisible inline-block w-auto text-sm font-light transition-opacity duration-300 bg-white rounded-lg opacity-0 text-secondary shadow-pagination">
                    <div class="px-3 py-2">
                        <p>กลับไปหน้าเนื้อหา</p>
                    </div>
                    <div data-popper-arrow></div>
                </div>
                <h3 class="text-base font-bold tracking-wide text-secondary">
                    เพิ่มเนื้อหาย่อย
                </h3>
            </div>

            <form>
                <div x-data="{ type: '', }" class="grid grid-cols-2 gap-6">
                    <div class="col-span-2">
                        <label for="title" class="block mb-1.5 text-base font-medium text-dark-theme">
                            ชื่อเนื้อหาย่อย
                        </label>
                        <input type="text" id="title"
                            class="block w-full px-3 py-2 text-base font-normal bg-white border rounded-md border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary"
                            placeholder="ชื่อเนื้อหาย่อย" />
                    </div>
                    <div class="col-span-2">
                        <label for="rank" class="block mb-1.5 text-base font-medium text-dark-theme">
                            ประเภทเนื้อหาย่อย
                        </label>
                        <div class="space-y-2">
                            <div class="flex items-center">
                                <input x-model="type" checked id="radio-video" type="radio" value="video"
                                    name="radio-type"
                                    class="w-4 h-4 bg-gray-100 border-gray-300 cursor-pointer text-primary focus:ring-primary-80" />
                                <label for="radio-video" class="pl-3 text-base font-normal cursor-pointer text-secondary">
                                    วิดีโอ
                                </label>
                            </div>
                            <div class="flex items-center">
                                <input x-model="type" id="radio-quiz" type="radio" value="quiz" name="radio-type"
                                    class="w-4 h-4 bg-gray-100 border-gray-300 cursor-pointer text-primary focus:ring-primary-80" />
                                <label for="radio-quiz" class="pl-3 text-base font-normal cursor-pointer text-secondary">
                                    แบบทดสอบ
                                </label>
                            </div>
                        </div>
                    </div>
                    {{-- <!--------- @IF สำหรับประเภทวิดีโอ  ----------> --}}
                    <div x-show="type === 'video'" class="col-span-2 space-y-6" x-transition:enter.opacity.duration.700ms
                        x-transition:leave.opacity.duration.150ms>
                        <div>
                            <label for="file_video" class="block mb-1.5 text-base font-medium text-dark-theme">
                                เลือกวิดีโอ
                            </label>
                            <input
                                class="block w-full text-base bg-white border rounded-md cursor-pointer border-secondary-80 text-secondary focus:ring-primary focus:border-ring-primary"
                                id="file_video" type="file" accept="video/mp4,video/x-m4v,video/*" />
                        </div>
                        <div x-data="{
                            files: [],
                            addFile() {
                                this.files.push({
                                    fileName: '',
                                    fileVideo: '',
                                })
                            },
                            removeFile(index) {
                                this.files.splice(index, 1);
                            }
                        }">
                            <h5 class="mb-2 text-base font-bold tracking-wide text-secondary">
                                ไฟล์ประกอบการสอน
                            </h5>
                            <button type="button" @click="addFile()" class="btn is-success">
                                <div class="flex items-center space-x-2">
                                    <i class="leading-none fi fi-rr-plus"></i>
                                    <span>เพิ่มไฟล์ประกอบ</span>
                                </div>
                            </button>

                            <div class="grid grid-cols-1 gap-4 mt-6">
                                <template x-for="(file, index) in files" :key="index">
                                    <!-- File 1 -->
                                    <div class="grid items-end grid-cols-3 gap-6">
                                        <div>
                                            <label for="fileName"
                                                class="block mb-1.5 text-base font-medium text-dark-theme">
                                                ชื่อไฟล์
                                            </label>
                                            <input type="text" x-model="file.fileName" id="fileName" name="fileName[]"
                                                class="block w-full px-3 py-2 text-base font-normal bg-white border rounded-md border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary"
                                                placeholder="ชื่อไฟล์" />
                                        </div>
                                        <div>
                                            <label for="file_video"
                                                class="block mb-1.5 text-base font-medium text-dark-theme">
                                                เลือกไฟล์
                                            </label>
                                            <input
                                                class="block w-full text-base bg-white border rounded-md cursor-pointer border-secondary-80 text-secondary focus:ring-primary focus:border-ring-primary"
                                                type="file" x-model="file.fileVideo" id="file_video" name="fileVideo[]"
                                                accept="video/mp4,video/x-m4v,video/*" />
                                        </div>
                                        <div>
                                            <button type="button" @click="removeFile(index)" class="btn is-danger">
                                                <div class="flex items-center space-x-2">
                                                    <i class="leading-none fi fi-rr-trash"></i>
                                                    <span>ลบ</span>
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </div>
                    {{-- <!--------- @ELSE สำหรับประเภทแบบทดสอบ  ----------> --}}
                    <div x-show="type === 'quiz'" class="col-span-2 space-y-6" x-transition:enter.opacity.duration.700ms
                        x-transition:leave.opacity.duration.150ms>
                        <div>
                            <label for="question" class="block mb-1.5 text-base font-medium text-dark-theme">
                                คำถาม
                            </label>
                            <input type="text" id="question"
                                class="block w-full px-3 py-2 text-base font-normal bg-white border rounded-md border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary"
                                placeholder="กรุณากรอกคำถาม" />
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="flex items-center space-x-4">
                                <input checked id="radio-choice-1" type="radio" value="" name="radio-choice"
                                    class="w-6 h-6 bg-gray-100 border-gray-300 cursor-pointer text-primary focus:ring-primary-80" />
                                <input type="text"
                                    class="block w-full px-3 py-2 text-base font-normal bg-white border rounded-md border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary"
                                    placeholder="กรุณากรอกตัวเลือก" />
                            </div>
                            <div class="flex items-center space-x-4">
                                <input id="radio-choice-2" type="radio" value="" name="radio-choice"
                                    class="w-6 h-6 bg-gray-100 border-gray-300 cursor-pointer text-primary focus:ring-primary-80" />
                                <input type="text"
                                    class="block w-full px-3 py-2 text-base font-normal bg-white border rounded-md border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary"
                                    placeholder="กรุณากรอกตัวเลือก" />
                            </div>
                            <div class="flex items-center space-x-4">
                                <input id="radio-choice-3" type="radio" value="" name="radio-choice"
                                    class="w-6 h-6 bg-gray-100 border-gray-300 cursor-pointer text-primary focus:ring-primary-80" />
                                <input type="text"
                                    class="block w-full px-3 py-2 text-base font-normal bg-white border rounded-md border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary"
                                    placeholder="กรุณากรอกตัวเลือก" />
                            </div>
                            <div class="flex items-center space-x-4">
                                <input id="radio-choice-4" type="radio" value="" name="radio-choice"
                                    class="w-6 h-6 bg-gray-100 border-gray-300 cursor-pointer text-primary focus:ring-primary-80" />
                                <input type="text"
                                    class="block w-full px-3 py-2 text-base font-normal bg-white border rounded-md border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary"
                                    placeholder="กรุณากรอกตัวเลือก" />
                            </div>
                        </div>
                    </div>
                </div>

                <!--------- Submit  ---------->
                <div class="flex items-center justify-end space-x-3 mt-14">
                    <a href="teacher_content_courses.html" class="btn is-secondary">
                        <div class="flex items-center">
                            <i class="text-lg leading-none fi fi-rr-cross-small"></i>
                            <span class="inline-block ml-2 font-medium">ยกเลิก</span>
                        </div>
                    </a>
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
