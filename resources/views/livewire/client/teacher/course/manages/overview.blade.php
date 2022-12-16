@section('subtitle', $subtitle)
<form wire:submit.prevent="submit">
    <!--------- Inputs  ---------->
    <div class="grid grid-cols-2 gap-6">
        <div class="col-span-2">
            <div class="text-center">
                @if ($image_temp && empty($image))
                    {{-- <!--------- @IF กรณีที่มีรูป  ----------> --}}
                    <img src="{{ !is_null($image_temp) && Storage::exists($image_temp) ? Storage::url($image_temp) : 'https://www.salonlfc.com/wp-content/uploads/2018/01/image-not-found-1-scaled-1150x647.png' }}"
                        alt="Course {{ $name }}"
                        class="relative z-10 object-cover object-top mx-auto mb-4 w-[28.75rem] h-60 rounded-xl" />
                @elseif ($image)
                    <img src="{{ $image->temporaryUrl() }}" alt="Course {{ $name }}"
                        class="relative z-10 object-cover object-top mx-auto mb-4 w-[28.75rem] h-60 rounded-xl" />
                @else
                    {{-- <!--------- @ELSE กรณีที่ไม่มีรูป  ----------> --}}
                    <div
                        class="flex items-center justify-center w-[28.75rem] h-60 mx-auto mb-4 overflow-hidden text-gray-600 bg-gray-100 rounded-xl">
                        <i class="leading-none text-8xl fi fi-rr-picture"></i>
                    </div>
                @endif
                <label class="inline-block cursor-pointer btn is-secondary">
                    <div class="flex items-center">
                        <i class="text-lg leading-none fi fi-rr-picture"></i>
                        <span class="inline-block ml-2 font-medium">
                            เลือกรูปปกคอร์สเรียน
                        </span>
                    </div>
                    <input type="file" class="hidden w-full" wire:model.defer="image" />
                </label>
            </div>
        </div>
        <div class="col-span-2">
            <label for="name" class="block mb-1.5 text-base font-medium text-dark-theme">
                ชื่อคอร์ส
            </label>
            <input type="text" id="name"
                class="block w-full px-3 py-2 text-base font-normal bg-white border rounded-md border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary"
                placeholder="ชื่อคอร์ส" wire:model.defer="name" />
        </div>
        <div>
            <label for="category" class="block mb-1.5 text-base font-medium text-dark-theme">
                หมวดหมู่
            </label>
            <select id="category"
                class="block w-full px-3 py-2 text-base font-normal bg-white border rounded-md border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary"
                wire:model.lazy="category">
                <option value="" selected>เลือกหมวดหมู่</option>
                @foreach ($categories as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
            @error('category')
                <span class="error text-error">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="subcategory" class="block mb-1.5 text-base font-medium text-dark-theme">
                หมวดหมู่ย่อย
            </label>
            <select id="subcategory"
                class="block w-full px-3 py-2 text-base font-normal bg-white border rounded-md border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary"
                wire:model.lazy="sub_category_id">
                <option value="">เลือกหมวดหมู่ย่อย</option>
                @foreach ($sub_categories as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
            @error('sub_category')
                <span class="error text-error">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-span-2">
            <label for="rank" class="block mb-1.5 text-base font-medium text-dark-theme">
                ระดับคอร์สเรียน
            </label>
            <div class="space-y-2">
                <div class="flex items-center">
                    <input id="radio-beginners" type="radio" value="entry" wire:model.defer="level"
                        name="radio-review"
                        class="w-4 h-4 bg-gray-100 border-gray-300 cursor-pointer text-primary focus:ring-primary-80" />
                    <label for="radio-beginners" class="pl-3 text-base font-normal cursor-pointer text-secondary">
                        ระดับเริ่มต้น
                    </label>
                </div>
                <div class="flex items-center">
                    <input id="radio-intermediate" type="radio" value="moderate" wire:model.defer="level"
                        name="radio-review"
                        class="w-4 h-4 bg-gray-100 border-gray-300 cursor-pointer text-primary focus:ring-primary-80" />
                    <label for="radio-intermediate" class="pl-3 text-base font-normal cursor-pointer text-secondary">
                        ระดับปานกลาง
                    </label>
                </div>
                <div class="flex items-center">
                    <input id="radio-advanced" type="radio" value="high" wire:model.defer="level"
                        name="radio-review"
                        class="w-4 h-4 bg-gray-100 border-gray-300 cursor-pointer text-primary focus:ring-primary-80" />
                    <label for="radio-advanced" class="pl-3 text-base font-normal cursor-pointer text-secondary">
                        ระดับสูง
                    </label>
                </div>
            </div>
            @error('level')
                <span class="error text-error">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-span-2">
            <label for="description" class="block mb-1.5 text-base font-medium text-dark-theme">
                รายละเอียด
            </label>
            <textarea id="description" rows="5" wire:model="description"
                class="block w-full p-3 text-base bg-white border rounded-lg border-secondary-80 text-secondary placeholder:text-secondary-80 focus:ring-primary focus:border-primary"
                placeholder="รายละเอียดคอร์ส..."></textarea>
        </div>
        @if ($video_temp)
            <div>
                <a href="{{ !is_null($video_temp) && Storage::exists($video_temp) ? Storage::url($video_temp) : '' }}"
                    target="popup" class="btn is-success">
                    <span>ดูวิดีโอ</span>
                </a>
            </div>
        @endif

        <div class="col-span-2" x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true"
            x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false"
            x-on:livewire-upload-progress="progress = $event.detail.progress">
            <label for="file_video" class="block mb-1.5 text-base font-medium text-dark-theme">
                เลือกวิดีโอแนะนำคอร์ส
            </label>

            <input
                class="block w-full text-base bg-white border rounded-md cursor-pointer border-secondary-80 text-secondary focus:ring-primary focus:border-ring-primary"
                id="file_video" type="file" wire:model="video" accept="video/mp4,video/x-m4v,video/*" />
            @error('video')
                <span class="error text-error">{{ $message }}</span>
            @enderror
            <div x-show="isUploading">
                <progress max="100" x-bind:value="progress"></progress>
            </div>
        </div>

    </div>
    <!--------- Submit  ---------->
    <div class="block mt-6 text-right">
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
