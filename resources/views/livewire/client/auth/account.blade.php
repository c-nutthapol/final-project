 <div>
    <h2 class="mb-6 text-2xl font-medium font-ibm text-secondary">
        บัญชีผู้ใช้
    </h2>
    <form wire:submit.prevent="submit">
        <div class="p-10 mb-4 bg-white rounded-2xl shadow-card-course font-ibm">
            <div class="text-center">
                {{-- @IF สำหรับตอนที่มีรูป --}}
                @if ($avatar_temp && empty($avatar))
                    <img src="{{ !is_null($avatar_temp) && Storage::exists($avatar_temp) ? Storage::url($avatar_temp) : 'https://www.salonlfc.com/wp-content/uploads/2018/01/image-not-found-1-scaled-1150x647.png' }}"
                        alt="Avatar"
                        class="relative z-10 object-cover object-top w-32 h-32 mx-auto mb-6 rounded-full" />
                @elseif ($avatar)
                    <img src="{{ $avatar->temporaryUrl() }}" alt="Avatar"
                        class="relative z-10 object-cover object-top w-32 h-32 mx-auto mb-6 rounded-full" />
                @else
                    {{-- @ELSE สำหรับตอนที่ไม่มีรูป --}}
                    <div
                        class="flex items-center justify-center w-32 h-32 mx-auto mb-6 overflow-hidden text-gray-600 bg-gray-100 rounded-full">
                        <i class="text-5xl leading-none fi fi-rr-portrait"></i>
                    </div>
                @endif
                <label class="inline-block cursor-pointer btn is-secondary">
                    <div class="flex items-center">
                        <i class="text-lg leading-none fi fi-rr-portrait"></i>
                        <span class="inline-block ml-2 font-medium">
                            เปลี่ยนรูปโปรไฟล์
                        </span>
                    </div>
                    <input type="file" class="hidden w-full" wire:model.lazy="avatar" />

                </label>

            </div>
            @error('avatar')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div class="p-10 bg-white rounded-2xl shadow-card-course font-ibm">

            <div class="grid grid-cols-2 gap-4">
                <div class="col-span-2">
                    <label for="username" class="block mb-1.5 text-base font-medium text-dark-theme">
                        ชื่อผู้ใช้
                    </label>
                    <div
                        class="block w-full px-3 py-2 text-base font-normal border rounded-md bg-secondary-80/20 border-secondary-80 text-secondary/60 cursor-no-drop">
                        {{ $username }}
                    </div>
                </div>
                <div class="col-span-2">
                    <label for="email" class="block mb-1.5 text-base font-medium text-dark-theme">
                        อีเมล
                    </label>
                    <div
                        class="block w-full px-3 py-2 text-base font-normal border rounded-md bg-secondary-80/20 border-secondary-80 text-secondary/60 cursor-no-drop">
                        {{ $email }}
                    </div>
                </div>
                <div>
                    <label for="firstname" class="block mb-1.5 text-base font-medium text-dark-theme">
                        ชื่อ
                    </label>
                    <input type="text" id="firstname"
                        class="block w-full px-3 py-2 text-base font-normal bg-white border rounded-md border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary"
                        placeholder="ชื่อ" wire:model.defer="first_name" />
                    @error('first_name')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="lastname" class="block mb-1.5 text-base font-medium text-dark-theme">
                        นามสกุล
                    </label>
                    <input type="text" id="lastname" wire:model.defer="last_name"
                        class="block w-full px-3 py-2 text-base font-normal bg-white border rounded-md border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary"
                        placeholder="นามสกุล" />
                    @error('last_name')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="password" class="block mb-1.5 text-base font-medium text-dark-theme">
                        รหัสผ่านใหม่
                    </label>
                    <input type="password" id="password" wire:model.defer="password"
                        class="block w-full px-3 py-2 text-base font-normal bg-white border rounded-md border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary"
                        placeholder="*********" />
                    @error('password')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="confirm-password" class="block mb-1.5 text-base font-medium text-dark-theme">
                        ยืนยันรหัสผ่านใหม่
                    </label>
                    <input type="password" id="confirm-password" wire:model.defer="password_confirm"
                        class="block w-full px-3 py-2 text-base font-normal bg-white border rounded-md border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary"
                        placeholder="*********" />
                    @error('password_confirm')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="block mt-4 text-right">
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
                    <div class=" flex items-center" wire:target="submit" wire:loading.class="hidden">

                        <i class="text-lg leading-none fi fi-rr-disk"></i>
                        <span class="inline-block ml-2 font-medium">ยืนยัน</span>
                    </div>
                </button>
            </div>

        </div>
    </form>
</div>
