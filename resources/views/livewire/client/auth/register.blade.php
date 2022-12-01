<form wire:submit.prevent="submit">
    @csrf
    <!--------- Login with Google  ---------->
    <button type="button" wire:click="googleRedirect"
        class="w-full font-normal font-montserrat text-base text-[#1E1E1E] flex justify-center items-center tracking-wider bg-white py-2.5 px-4 ring-1 ring-[#F1F1F1] ring-inset rounded-xl transition ease-out duration-300 hover:brightness-95 active:shadow-none active:brightness-90 active:scale-95">
        <img src="{{ asset('assets/images/icons/icon-google.png') }}" alt="google" class="mr-3" />
        สมัครสมาชิกด้วย Google
    </button>

    <!--------- OR  ---------->
    <div class="inline-flex items-center justify-center w-full">
        <hr class="w-full h-px my-8 bg-gray-200 border-0" />
        <span class="absolute px-3 font-medium -translate-x-1/2 bg-white text-dark-theme left-1/2">หรือ</span>
    </div>

    <div class="mb-5">
        <label for="username" class="block mb-1.5 text-base font-medium text-dark-theme">
            ชื่อผู้ใช้
        </label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <i class="text-lg leading-none text-secondary-80 fi fi-rr-user"></i>
            </div>
            <input type="text" id="username" wire:model.defer="username"
                class="bg-white border border-secondary-80 text-base font-normal text-secondary rounded-md placeholder:text-secondary-80 placeholder:font-light focus:text-primary-80 focus:ring-primary focus:border-ring-primary block w-full pl-10 p-2.5"
                placeholder="Username" />
        </div>
    </div>

    <div class="mb-5">
        <label for="first_name" class="block mb-1.5 text-base font-medium text-dark-theme">
            ชื่อ
        </label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <i class="text-lg leading-none fi fi-rr-envelope text-secondary-80"></i>
            </div>
            <input type="text" id="first_name" wire:model.defer="first_name"
                class="bg-white border border-secondary-80 text-base font-normal text-secondary rounded-md placeholder:text-secondary-80 placeholder:font-light focus:text-primary-80 focus:ring-primary focus:border-ring-primary block w-full pl-10 p-2.5"
                placeholder="First name" />
        </div>
    </div>

    <div class="mb-5">
        <label for="last_name" class="block mb-1.5 text-base font-medium text-dark-theme">
            นามสกุล
        </label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <i class="text-lg leading-none fi fi-rr-envelope text-secondary-80"></i>
            </div>
            <input type="text" id="last_name" wire:model.defer="last_name"
                class="bg-white border border-secondary-80 text-base font-normal text-secondary rounded-md placeholder:text-secondary-80 placeholder:font-light focus:text-primary-80 focus:ring-primary focus:border-ring-primary block w-full pl-10 p-2.5"
                placeholder="Last name" />
        </div>
    </div>

    <div class="mb-5">
        <label for="email" class="block mb-1.5 text-base font-medium text-dark-theme">
            อีเมล
        </label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <i class="text-lg leading-none fi fi-rr-envelope text-secondary-80"></i>
            </div>
            <input type="email" id="email" wire:model.defer="email"
                class="bg-white border border-secondary-80 text-base font-normal text-secondary rounded-md placeholder:text-secondary-80 placeholder:font-light focus:text-primary-80 focus:ring-primary focus:border-ring-primary block w-full pl-10 p-2.5"
                placeholder="name@example.com" />
        </div>
    </div>

    <div class="mb-5">
        <label for="password" class="block mb-1.5 text-base font-medium text-dark-theme">
            รหัสผ่าน
        </label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <i class="text-lg leading-none fi fi-rr-lock text-secondary-80"></i>
            </div>
            <input type="password" id="password" wire:model.defer="password"
                class="bg-white border border-secondary-80 text-base font-normal text-secondary rounded-md placeholder:text-secondary-80 placeholder:font-light focus:text-primary-80 focus:ring-primary focus:border-ring-primary block w-full pl-10 p-2.5"
                placeholder="*********" />
        </div>
    </div>

    <div class="mb-10">
        <label for="confirm-password" class="block mb-1.5 text-base font-medium text-dark-theme">
            ยืนยันรหัสผ่าน
        </label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <i class="text-lg leading-none fi fi-rr-lock text-secondary-80"></i>
            </div>
            <input type="password" id="confirm-password" wire:model.defer="password_confirm"
                class="bg-white border border-secondary-80 text-base font-normal text-secondary rounded-md placeholder:text-secondary-80 placeholder:font-light focus:text-primary-80 focus:ring-primary focus:border-ring-primary block w-full pl-10 p-2.5"
                placeholder="*********" />
        </div>
    </div>

    <button type="submit"
        class="block w-full font-normal uppercase text-base text-white text-center tracking-wider bg-primary py-2.5 px-4 rounded-xl shadow-btn transition ease-out duration-300 hover:shadow-[0_4px_10px_#B6B3FF] hover:brightness-95 active:shadow-none active:brightness-90 active:scale-95"
        wire:target="submit" wire:loading.attr="disabled">
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
        <span class="btn-text" wire:target="submit" wire:loading.class="hidden">สมัครสมาชิก</span>
    </button>
</form>
