<div id="add-teacher-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full"
    wire:ignore.self>
    <div class="relative w-full h-full max-w-2xl md:h-auto font-ibm">
        <!-- Modal content -->
        <div class="relative bg-white shadow rounded-2xl">
            <!-- Modal body -->
            <div class="p-6">
                <div class="grid grid-cols-2 gap-x-3 gap-y-4">
                    <div class="col-span-2">
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <i class="text-lg leading-none text-secondary-80 fi fi-rr-user-add"></i>
                            </div>
                            <input type="text"
                                class="bg-white border border-secondary-80 text-base font-normal text-secondary rounded-md placeholder:text-secondary-80 placeholder:font-light focus:text-primary-80 focus:ring-primary focus:border-ring-primary block w-full pl-10 p-2.5"
                                placeholder="ค้นหาชื่อผู้ใช้, ชื่อผู้สอนหรืออีเมลของผู้สอน" wire:model="search" />
                        </div>
                    </div>
                </div>
                @foreach ($users as $item)
                    <div class="grid grid-cols-2 gap-x-3 gap-y-4">
                        {{ $item->full_name }}
                        {{ $item->email }}
                        {{ $item->username }}
                        <button wire:click="addLecturer({{ $item->id }})">add</button>
                    </div>
                @endforeach
            </div>

            <!-- Modal footer -->
            <div class="flex items-center justify-end p-6 space-x-2 border-t border-gray-200 rounded-b">
                <button data-modal-toggle="add-teacher-modal" type="button" class="btn is-secondary">
                    <div class="flex items-center">
                        <i class="text-lg leading-none fi fi-rr-cross-small"></i>
                        <span class="inline-block ml-2 font-medium">ยกเลิก</span>
                    </div>
                </button>
                <button data-modal-toggle="add-teacher-modal" type="submit" class="btn is-primary">
                    <div class="flex items-center">
                        <i class="text-lg leading-none fi fi-rr-disk"></i>
                        <span class="inline-block ml-2 font-medium">ยืนยัน</span>
                    </div>
                </button>
            </div>
        </div>
    </div>
</div>
