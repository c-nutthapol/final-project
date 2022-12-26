<div class="col-span-9">
    <div class="p-8 bg-white rounded-2xl shadow-card-course font-ibm">
        <div class="flex items-center justify-between mb-6">
            <h3 class="text-base font-bold tracking-wide text-secondary">
                คอร์สเรียนทั้งหมด
            </h3>
            <button type="button" class="flex items-center btn is-primary" data-modal-toggle="createCourseModal">
                <i class="leading-none fi fi-rr-plus"></i>
                <span class="inline-block ml-2">เพิ่มคอร์สเรียน</span>
            </button>
        </div>

        <!--------- Courses List  ---------->
        <div class="space-y-4">
            @forelse ($courses as $item)
                <a href="{{ route('client.teacher.course.manage.overview', $item->encode) }}"
                    class="flex justify-between p-4 overflow-hidden duration-200 ease-in-out transform bg-primary-20/20 rounded-2xl hover:bg-primary-20/40 focus:bg-primary-20/60">
                    <div class="flex flex-row justify-start flex-grow space-x-4">
                        <img src="{{ !is_null($item->image) && Storage::disk('public')->exists($item->image) ? Storage::disk('public')->url($item->image) : 'https://www.salonlfc.com/wp-content/uploads/2018/01/image-not-found-1-scaled-1150x647.png' }}"
                            alt="photo" class="object-cover rounded-2xl h-36" />
                        <div>
                            <h4 class="mb-2 text-lg font-bold leading-normal tracking-wide text-secondary line-clamp-2">
                                {{ $item->name }}
                            </h4>
                            <div class="flex justify-start items-center mb-3 space-x-2">
                                <div class="flex items-center space-x-1 text-sm">
                                    @if (floor($item->rating))
                                        @for ($i = 0; $i < floor($item->rating); $i++)
                                            <i class="leading-none text-yellow-300 fi fi-rr-star">
                                            </i>
                                        @endfor
                                        <span class="inline-block pl-1 text-secondary">( {{ $item->rating }} )</span>
                                    @else
                                        <span class="inline-block text-secondary">
                                            ยังไม่มีการรีวิว
                                        </span>
                                    @endif
                                </div>
                                <div class="text-sm text-secondary">
                                    -
                                    <span class="inline-block ml-1 tracking-wide">{{ $item->level_th }}</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-start mb-2 space-x-3">
                                <div class="flex items-center text-sm font-normal tracking-wide text-secondary">
                                    <i class="leading-none fi fi-rr-book"></i>
                                    <span class="inline-block ml-1.5 mr-1">{{ $item->contentCount() }}</span>
                                    เนื้อหา
                                </div>
                                <div class="flex items-center gap-2 text-sm font-normal text-primary-80">
                                    <i class="leading-none fi fi-rr-user"></i>
                                    <div>{{ $item->students->count() }}</div>
                                </div>
                            </div>
                            <div class="flex items-center text-sm tracking-wide text-secondary">
                                <i class="leading-none fi fi-rr-calendar-lines"></i>
                                <span class="inline-block ml-1.5 mr-1">{{ $item->created_at }}</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        {!! $item->status_post !!}
                    </div>
                </a>
            @empty
                <a href="javascript:void(0)"
                    class="flex justify-between p-4 overflow-hidden duration-200 ease-in-out transform bg-primary-20/20 rounded-2xl hover:bg-primary-20/40 focus:bg-primary-20/60">

                    <span class="inline-block text-center text-secondary">
                        ไม่พบข้อมูล
                    </span>

                </a>
            @endforelse
        </div>

        <!--------- Pagination   ---------->
        {{ $courses->links('pagination.livewire.main') }}
    </div>
</div>
