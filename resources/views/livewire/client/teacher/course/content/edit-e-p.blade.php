@section('subtitle', $subtitle)
<form wire:submit.prevent="submit">
    <div x-data="{ type: '', }" class="grid grid-cols-2 gap-6">
        <div class="col-span-2">
            <label for="title" class="block mb-1.5 text-base font-medium text-dark-theme">
                ชื่อเนื้อหาย่อย
            </label>
            <input type="text" id="title"
                class="block w-full px-3 py-2 text-base font-normal bg-white border rounded-md border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary"
                placeholder="ชื่อเนื้อหาย่อย" wire:model.defer="name" />
            @error('name')
                <span class="error text-error">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-span-2">
            <label for="rank" class="block mb-1.5 text-base font-medium text-dark-theme">
                ประเภทเนื้อหาย่อย
            </label>
            <div class="space-y-2">
                <div class="flex items-center">
                    <input x-model="type" checked id="radio-video" type="radio" value="video" name="radio-type"
                        class="w-4 h-4 bg-gray-100 border-gray-300 cursor-pointer text-primary focus:ring-primary-80"
                        wire:model.defer="type" />
                    <label for="radio-video" class="pl-3 text-base font-normal cursor-pointer text-secondary">
                        วิดีโอ
                    </label>
                </div>
                <div class="flex items-center">
                    <input x-model="type" id="radio-quiz" type="radio" value="quiz" name="radio-type"
                        class="w-4 h-4 bg-gray-100 border-gray-300 cursor-pointer text-primary focus:ring-primary-80"
                        wire:model.defer="type" />
                    <label for="radio-quiz" class="pl-3 text-base font-normal cursor-pointer text-secondary">
                        แบบทดสอบ
                    </label>
                </div>
                @error('type')
                    <span class="error text-error">{{ $message }}</span>
                @enderror
            </div>
        </div>
        {{-- <!--------- @IF สำหรับประเภทวิดีโอ  ----------> --}}
        <div x-show="type === 'video'" class="col-span-2 space-y-6" x-transition:enter.opacity.duration.700ms
            x-transition:leave.opacity.duration.150ms>
            <div x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true"
                x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false"
                x-on:livewire-upload-progress="progress = $event.detail.progress">
                <label for="file_video" class="block mb-1.5 text-base font-medium text-dark-theme">
                    เลือกวิดีโอ
                </label>
                <input
                    class="block w-full text-base bg-white border rounded-md cursor-pointer border-secondary-80 text-secondary focus:ring-primary focus:border-ring-primary"
                    wire:model.defer="video" id="file_video" type="file" accept="video/mp4,video/x-m4v,video/*" />
                @error('video')
                    <span class="error text-error">{{ $message }}</span>
                @enderror
                <div x-show="isUploading">
                    <progress max="100" x-bind:value="progress"></progress>
                </div>
            </div>
            <div>
                <h5 class="mb-2 text-base font-bold tracking-wide text-secondary">
                    ไฟล์ประกอบการสอน
                </h5>
                <button type="button" wire:click="addFile" class="btn is-success">
                    <div class="flex items-center space-x-2">
                        <i class="leading-none fi fi-rr-plus"></i>
                        <span>เพิ่มไฟล์ประกอบ</span>
                    </div>
                </button>

                <div class="grid grid-cols-1 gap-4 mt-6">
                    @foreach ($files as $key => $file)
                        <div class="grid items-end grid-cols-3 gap-6">
                            <div>
                                <label for="fileName{{ $key }}"
                                    class="block mb-1.5 text-base font-medium text-dark-theme">
                                    ชื่อไฟล์
                                </label>
                                <input type="text" wire:model.defer="files.{{ $key }}.name"
                                    id="fileName{{ $key }}"
                                    class="block w-full px-3 py-2 text-base font-normal bg-white border rounded-md border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary"
                                    placeholder="ชื่อไฟล์" />
                                @error('files.' . $key . '.name')
                                    <span class="error text-error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="file{{ $key }}"
                                    class="block mb-1.5 text-base font-medium text-dark-theme">
                                    เลือกไฟล์
                                </label>
                                <input
                                    class="block w-full text-base bg-white border rounded-md cursor-pointer border-secondary-80 text-secondary focus:ring-primary focus:border-ring-primary"
                                    type="file" wire:model.defer="files.{{ $key }}.path"
                                    id="file{{ $key }}" name="fileVideo[]" accept="*" />
                                @error('files.' . $key . '.path')
                                    <span class="error text-error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <button type="button" wire:click="delFile({{ $key }})" class="btn is-danger">
                                    <div class="flex items-center space-x-2">
                                        <i class="leading-none fi fi-rr-trash"></i>
                                        <span>ลบ</span>
                                    </div>
                                </button>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        {{-- <!--------- @ELSE สำหรับประเภทแบบทดสอบ  ----------> --}}
        <div x-show="type === 'quiz'" class="col-span-2 space-y-6" x-transition:enter.opacity.duration.700ms
            x-transition:leave.opacity.duration.150ms>
            <button type="button" wire:click="addQuestion" class="btn is-success">
                <div class="flex items-center space-x-2">
                    <i class="leading-none fi fi-rr-plus"></i>
                    <span>เพิ่มคำถาม</span>
                </div>
            </button>
            @foreach ($questions as $key => $question)
                <hr>
                <div>
                    <button type="button" wire:click="delQuestion({{ $key }})" class="btn is-danger">
                        <div class="flex items-center space-x-2">
                            <i class="leading-none fi fi-rr-trash"></i>
                            <span>ลบ</span>
                        </div>
                    </button>
                </div>
                <div>
                    <label for="question-{{ $key }}"
                        class="block mb-1.5 text-base font-medium text-dark-theme">
                        คำถาม
                    </label>
                    <input type="text" id="question-{{ $key }}"
                        class="block w-full px-3 py-2 text-base font-normal bg-white border rounded-md border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary"
                        placeholder="กรุณากรอกคำถาม" wire:model.defer="questions.{{ $key }}.title" />
                    @error('questions.' . $key . '.title')
                        <span class="error text-error">{{ $message }}</span>
                    @enderror

                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="flex items-center space-x-4">
                        <input checked id="radio-choice-{{ $key }}-1" type="radio" value="1"
                            name="radio-choice-{{ $key }}"
                            class="w-6 h-6 bg-gray-100 border-gray-300 cursor-pointer text-primary focus:ring-primary-80"
                            wire:model.defer="questions.{{ $key }}.answer" />
                        <input type="text"
                            class="block w-full px-3 py-2 text-base font-normal bg-white border rounded-md border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary"
                            placeholder="กรุณากรอกตัวเลือก"
                            wire:model.defer="questions.{{ $key }}.choice.1" />
                        @error('questions.' . $key . '.choice.1')
                            <span class="error text-error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex items-center space-x-4">
                        <input id="radio-choice-{{ $key }}-2" type="radio" value="2"
                            name="radio-choice-{{ $key }}"
                            class="w-6 h-6 bg-gray-100 border-gray-300 cursor-pointer text-primary focus:ring-primary-80"
                            wire:model.defer="questions.{{ $key }}.answer" />
                        <input type="text"
                            class="block w-full px-3 py-2 text-base font-normal bg-white border rounded-md border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary"
                            placeholder="กรุณากรอกตัวเลือก"
                            wire:model.defer="questions.{{ $key }}.choice.2" />
                        @error('questions.' . $key . '.choice.2')
                            <span class="error text-error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex items-center space-x-4">
                        <input id="radio-choice-{{ $key }}-3" type="radio" value="3"
                            name="radio-choice-{{ $key }}"
                            class="w-6 h-6 bg-gray-100 border-gray-300 cursor-pointer text-primary focus:ring-primary-80"
                            wire:model.defer="questions.{{ $key }}.answer" />
                        <input type="text"
                            class="block w-full px-3 py-2 text-base font-normal bg-white border rounded-md border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary"
                            placeholder="กรุณากรอกตัวเลือก"
                            wire:model.defer="questions.{{ $key }}.choice.3" />
                        @error('questions.' . $key . '.choice.3')
                            <span class="error text-error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex items-center space-x-4">
                        <input id="radio-choice-{{ $key }}-4" type="radio" value="4"
                            name="radio-choice-{{ $key }}"
                            class="w-6 h-6 bg-gray-100 border-gray-300 cursor-pointer text-primary focus:ring-primary-80"
                            wire:model.defer="questions.{{ $key }}.answer" />
                        <input type="text"
                            class="block w-full px-3 py-2 text-base font-normal bg-white border rounded-md border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary"
                            placeholder="กรุณากรอกตัวเลือก"
                            wire:model.defer="questions.{{ $key }}.choice.4" />
                        @error('questions.' . $key . '.choice.4')
                            <span class="error text-error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                @error('questions.' . $key . '.choice')
                    <span class="error text-error">{{ $message }}</span>
                @enderror
                @error('questions.' . $key . '.answer')
                    <span class="error text-error">{{ $message }}</span>
                @enderror
            @endforeach
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
        <button type="submit" class="btn is-primary" wire:target="submit" wire:loading.attr="disabled">
            <span class="hidden btn-spinner" wire:target="submit" wire:loading.class.remove="hidden">
                <svg aria-hidden="true" role="status" class="inline w-4 h-4 mr-3 text-white animate-spin"
                    viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                        fill="#E5E7EB" />
                    <path
                        d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                        fill="currentColor" />
                </svg>
                กำลังโหลด...
            </span>
            <div class="flex items-center" wire:target="submit" wire:loading.class="hidden">
                <i class="text-lg leading-none fi fi-rr-disk"></i>
                <span class="inline-block ml-2 font-medium">ยืนยัน</span>
            </div>
        </button>
    </div>
</form>
