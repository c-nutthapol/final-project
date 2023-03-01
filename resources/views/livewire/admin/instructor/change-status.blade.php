<div id="statusModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full" wire:ignore.self>
    <div class="relative w-full h-full max-w-md md:h-auto font-ibm">
        <!-- Modal content -->
        <div class="relative shadow bg-white/60 backdrop-blur-md rounded-2xl">
            <form>
                <!-- Modal body -->
                <div class="p-6 space-y-4">
                    <!--------- Avatar ---------->
                    <!-- <div
                        class="inline-block p-6 border rounded-lg border-secondary/20"
                      > -->
                    <figure class="flex flex-col items-center space-y-4">
                        <img src="{{ asset('assets/images/users/avatar.jpg') }}" alt="avatar"
                            class="object-cover object-top w-20 h-20 rounded-full" />
                        <figcaption class="text-base font-semibold text-secondary">
                            Michele Hoffman
                        </figcaption>
                    </figure>
                    <!-- </div> -->
                    <div>
                        <label for="status" class="block mb-1.5 text-base font-medium text-dark-theme">
                            สถานะ
                        </label>
                        <select id="status"
                            class="block w-full px-3 py-2 text-base font-normal bg-transparent border rounded-md border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary">
                            <option selected>รอการอนุมัติ</option>
                            <option value="">อนุมัติ</option>
                            <option value="">ปฎิเสธ</option>
                        </select>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center justify-center p-6 space-x-2 border-t rounded-b border-secondary/10">
                    <button data-modal-toggle="statusModal" type="submit" class="btn is-primary">
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
