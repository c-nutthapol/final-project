<div class="container relative z-10 mx-auto mt-8">
    @section('subtitle', $subtitle)
    <div class="mx-auto font-ibm">
        <div class="flex items-center justify-between mb-6">
            <div>
                {{-- <select id="filter-category"
                    class="block px-3 py-2 w-56 text-base font-normal bg-white border rounded-md border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary">
                    <option selected>ความคืบหน้าทั้งหมด</option>
                    <option value="">ความคืบหน้ามากที่สุด</option>
                    <option value="">ความคืบหน้าน้อยที่สุด</option>
                </select> --}}
            </div>
            <div class="flex space-x-3">
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <i class="text-base leading-none fi fi-rr-search"></i>
                    </div>
                    <input type="search" id="search"
                        class="block w-full py-2 pl-10 text-base font-normal bg-white border rounded-md border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary"
                        placeholder="ค้นหา..." wire:model="search" />
                </div>
                <div
                    class="flex items-center  border-primary border overflow-hidden rounded-md text-sm flex-row-reverse bg-white">
                    <div class="px-3 bg-primary text-white h-full flex items-center">
                        <i class="fi fi-rr-users leading-none"></i>
                    </div>
                    <div class="px-3 text-secondary font-medium h-full flex items-center"">
                        {{ $students->count() }}
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-3 gap-5">
            @foreach ($students as $item)
                <div
                    class="flex items-center justify-between px-4 py-6 bg-white rounded-xl shadow-card-course overflow-hidden ">
                    <div class="justify-between items-center">
                        <figure class="flex items-center space-x-3">
                            <img src="{{ !is_null($item->avatar) && Storage::exists($item->avatar) ? Storage::url($item->avatar) : 'https://www.salonlfc.com/wp-content/uploads/2018/01/image-not-found-1-scaled-1150x647.png' }}"
                                alt="avatar" class="object-cover object-top w-10 h-10 rounded-full" />
                            <figcaption class="text-base font-normal text-secondary">
                                {{ $item->full_name }}
                            </figcaption>
                        </figure>
                        <!--------- Progress  ---------->
                        <div class="w-52 mx-auto mt-3">
                            <div class="w-full rounded-full bg-primary-20/40">
                                <div class="bg-primary text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full"
                                    style="width: 45%">
                                    45%
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        @php($review = $item->reviews()->find($idTable))
                        @if ($review)
                            <div class="flex items-center gap-2 text-sm font-semibold text-yellow-300 font-ibm">
                                <i class="leading-none fi fi-rr-star"></i>
                                <div>{{ $review->scores }}</div>
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach

        </div>
        <!--------- Pagination   ---------->
        {{ $students->links('pagination.livewire.main') }}
    </div>
</div>
