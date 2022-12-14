<div id="createCourseModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full"
    wire:ignore.self>
    <div class="relative w-full h-full max-w-2xl md:h-auto font-ibm">
        <!-- Modal content -->
        <div class="relative bg-white shadow rounded-2xl">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 border-b rounded-t">
                <h3 class="flex items-center space-x-2 text-xl font-semibold text-secondary">
                    <i class="leading-none fi fi-rr-plus"></i>
                    <span>เพิ่มคอร์สเรียน</span>
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-toggle="createCourseModal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <form wire:submit.prevent="submit">
                @csrf
                <!-- Modal body -->
                <div class="p-6">
                    <div class="grid grid-cols-2 gap-x-3 gap-y-4">
                        <div class="col-span-2">
                            <label for="name" class="block mb-1.5 text-base font-medium text-dark-theme">
                                ชื่อคอร์ส
                            </label>
                            <input type="text" id="name"
                                class="block w-full px-3 py-2 text-base font-normal bg-white border rounded-md border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary"
                                placeholder="ชื่อคอร์ส" wire:model.defer="name" />
                            @error('name')
                                <span class="error text-error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="category" class="block mb-1.5 text-base font-medium text-dark-theme">
                                หมวดหมู่
                            </label>
                            <select id="category"
                                class="block w-full px-3 py-2 text-base font-normal bg-white border rounded-md border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary"
                                wire:model.lazy="category" wire:change="$set('sub_category_id',null)">
                                <option value="">เลือกหมวดหมู่</option>
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
                                wire:model.defer="sub_category_id">
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
                                    <input checked id="radio-beginners" type="radio" value="entry"
                                        name="radio-review"
                                        class="w-4 h-4 bg-gray-100 border-gray-300 cursor-pointer text-primary focus:ring-primary-80"
                                        wire:model.defer="level" />
                                    <label for="radio-beginners"
                                        class="pl-3 text-base font-normal cursor-pointer text-secondary">
                                        ระดับเริ่มต้น
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input checked id="radio-intermediate" type="radio" value="moderate"
                                        name="radio-review"
                                        class="w-4 h-4 bg-gray-100 border-gray-300 cursor-pointer text-primary focus:ring-primary-80"
                                        wire:model.defer="level" />
                                    <label for="radio-intermediate"
                                        class="pl-3 text-base font-normal cursor-pointer text-secondary">
                                        ระดับปานกลาง
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input checked id="radio-advanced" type="radio" value="high" name="radio-review"
                                        class="w-4 h-4 bg-gray-100 border-gray-300 cursor-pointer text-primary focus:ring-primary-80"
                                        wire:model.defer="level" />
                                    <label for="radio-advanced"
                                        class="pl-3 text-base font-normal cursor-pointer text-secondary">
                                        ระดับสูง
                                    </label>
                                </div>
                            </div>
                            @error('level')
                                <span class="error text-error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center justify-end p-6 space-x-2 border-t border-gray-200 rounded-b">
                    <button data-modal-toggle="createCourseModal" type="button" class="btn is-secondary">
                        <div class="flex items-center">
                            <i class="text-lg leading-none fi fi-rr-cross-small"></i>
                            <span class="inline-block ml-2 font-medium">ยกเลิก</span>
                        </div>
                    </button>
                    <button type="submit" class="btn is-primary">
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
                        <div class=" flex items-center" wire:target="submit" wire:loading.class="hidden">

                            <i class="text-lg leading-none fi fi-rr-disk"></i>
                            <span class="inline-block ml-2 font-medium">ยืนยัน</span>
                        </div>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
