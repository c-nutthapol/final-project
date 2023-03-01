@section('subtitle', $subtitle)
<div class="container relative z-10 mx-auto mt-8 space-y-6">
    <div class="max-w-screen-lg p-10 mx-auto overflow-hidden bg-white rounded-xl shadow-card-course font-ibm">
        <div class="flex items-center justify-between mb-6">
            <h5 class="text-xl">ผู้สอน</h5>
            <button type="button" class="flex items-center btn is-primary" data-modal-toggle="add-teacher-modal">
                <i class="leading-none fi fi-rr-user-add"></i>
                <span class="inline-block ml-2">เพิ่มผู้สอน</span>
            </button>
        </div>
        <div class="grid grid-cols-3 gap-3">
            @foreach ($lecturers as $item)
                <div
                    class="flex items-center justify-between bg-white border border-secondary/10 p-3 rounded-lg transition duration-150 ease-linear cursor-default hover:bg-secondary/5">
                    <div class="grow">
                        <figure class="flex justify-start items-center overflow-hidden space-x-3">
                            <img src="{{ !is_null($item->avatar) && Storage::exists($item->avatar) ? Storage::url($item->avatar) : 'https://www.salonlfc.com/wp-content/uploads/2018/01/image-not-found-1-scaled-1150x647.png' }}"
                                alt="avatar" class="object-cover object-top w-8 h-8 rounded-full" />
                            <div class="w-36 line-clamp-1">
                                <figcaption class="text-base font-normal text-secondary">
                                    {{ $item->full_name }}
                                </figcaption>
                            </div>
                        </figure>
                    </div>
                    @if ($created_by != $item->id)
                        <button type="button" class="btn is-danger" data-popover-target="popover-teacher-delete">
                            <div class="flex items-center content-center">
                                <i class="text-sm leading-none fi fi-rr-remove-user"></i>
                            </div>
                        </button>
                        <div data-popover id="popover-teacher-delete" role="tooltip"
                            class="absolute z-10 invisible inline-block w-auto text-sm font-light transition-opacity duration-300 bg-white rounded-lg opacity-0 text-secondary shadow-pagination">
                            <div class="px-3 py-2">
                                <p>ลบผู้สอน</p>
                            </div>
                            <div data-popper-arrow></div>
                        </div>
                    @endif
                </div>
            @endforeach

        </div>
    </div>
    <div class="max-w-screen-lg p-10 mx-auto overflow-hidden bg-white rounded-xl shadow-card-course font-ibm">
        <ul class="list-none">
            <li class="flex items-center justify-between px-4 py-6 border-b border-b-secondary/10">
                <div>ชื่อคอร์สเรียน</div>
                <div>{{ $subtitle }}</div>
            </li>
            <li class="flex items-center justify-between px-4 py-6 border-b border-b-secondary/10"
                x-data="{ post_status: $wire.get('post_status') }">
                <div>สถานะ</div>
                <div class="flex items-center">
                    {{-- <label for="status" class="mr-3 text-base font-normal text-secondary">
                        Private
                    </label> --}}
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input id="status" type="checkbox" x-model="post_status"
                            x-on:change="$wire.changePostStatus(post_status)" class="sr-only peer" />
                        <div
                            class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary-20 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary">
                        </div>
                        <span class="ml-3 text-base font-normal text-secondary">
                            Public
                        </span>
                    </label>
                </div>
            </li>
            {{-- @if ($status != 'no_status')
                <li class="flex items-center justify-between px-4 py-6 border-b border-b-secondary/10">
                    <div>การตรวจสอบ</div>
                    <div>
                        @if ($status == 'terminate')
                            <span class="bg-red-50 text-danger text-sm font-medium px-2.5 py-0.5 rounded">
                                คอร์สเรียนนี้ไม่มีสามารถเผยแพร่ได้
                            </span>
                        @elseif($status == 'checking')
                            <span class="bg-yellow-50 text-warning text-sm font-medium px-2.5 py-0.5 rounded">
                                กำลังตรวจสอบคอร์สเรียน
                            </span>
                        @elseif($status == 'correct')
                            <span class="bg-green-50 text-success text-sm font-medium px-2.5 py-0.5 rounded">
                                ตรวจสอบเสร็จสิ้น
                            </span>
                        @endif
                    </div>
                </li>
            @endif --}}
            <li class="flex items-center justify-between px-4 py-6 border-b border-b-secondary/10">
                <div>ผู้สร้างคอร์ส</div>
                <div>
                    <figure class="flex items-center space-x-3">
                        <img src="{{ !is_null($avatar) && Storage::exists($avatar) ? Storage::url($avatar) : 'https://www.salonlfc.com/wp-content/uploads/2018/01/image-not-found-1-scaled-1150x647.png' }}"
                            alt="avatar" class="object-cover object-top w-8 h-8 rounded-full" />
                        <figcaption class="text-base font-normal text-secondary">
                            {{ $full_name }}
                        </figcaption>
                    </figure>
                </div>
            </li>
            <li class="flex items-center justify-between px-4 py-6 border-b border-b-secondary/10">
                <div>ลบคอร์สเรียน</div>
                <div>
                    <button type="button" class="btn is-danger" data-popover-target="popover-delete" wire:click="destroyConfirm('{{ $subtitle }}')">
                        <div class="flex items-center content-center">
                            <i class="leading-none fi fi-rr-trash"></i>
                        </div>
                    </button>
                    <div data-popover id="popover-delete" role="tooltip"
                        class="absolute z-10 invisible inline-block w-auto text-sm font-light transition-opacity duration-300 bg-white rounded-lg opacity-0 text-secondary shadow-pagination">
                        <div class="px-3 py-2">
                            <p>ลบ</p>
                        </div>
                        <div data-popper-arrow></div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
