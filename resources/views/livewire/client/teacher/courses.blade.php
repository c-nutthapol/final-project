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
                    <div class="flex flex-row justify-start space-x-4">
                        <img src="{{ !is_null($item->image) && Storage::exists($item->image) ? Storage::url($item->image) : 'https://www.salonlfc.com/wp-content/uploads/2018/01/image-not-found-1-scaled-1150x647.png' }}"
                            alt="photo" class="object-cover rounded-2xl h-36" />
                        <div>
                            <h4 class="mb-2 text-lg font-bold leading-normal tracking-wide text-secondary line-clamp-2">
                                {{ $item->name }}
                            </h4>
                            <div class="flex justify-start mb-3 space-x-2">
                                <div class="flex items-center space-x-1 text-sm">
                                    <i class="leading-none text-yellow-300 fi fi-rr-star">
                                    </i>
                                    <i class="leading-none text-yellow-300 fi fi-rr-star">
                                    </i>
                                    <i class="leading-none text-yellow-300 fi fi-rr-star">
                                    </i>
                                    <i class="leading-none text-yellow-300 fi fi-rr-star">
                                    </i>
                                    <span class="inline-block pl-1 text-secondary">(4)</span>
                                    {{--  <span class="inline-block text-secondary">
                                    ยังไม่มีการรีวิว
                                </span> --}}
                                </div>
                                <div class="text-sm text-secondary">
                                    -
                                    <span class="inline-block ml-1 tracking-wide">{{ $item->level_th }}</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-start mb-2 space-x-3">
                                <div class="flex items-center text-sm font-normal tracking-wide text-secondary">
                                    <i class="leading-none fi fi-rr-book"></i>
                                    <span class="inline-block ml-1.5 mr-1">4</span>
                                    เนื้อหา
                                </div>
                                <div class="flex items-center gap-2 text-sm font-normal text-primary-80">
                                    <i class="leading-none fi fi-rr-user"></i>
                                    <div>20</div>
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
            @endforelse
        </div>

        <!--------- Pagination   ---------->
        <div class="flex justify-center mt-10" data-aos="fade-up" data-aos-duration="600" data-aos-once="true">
            <nav aria-label="Page navigation">
                <ul class="inline-flex items-center space-x-6">
                    <li>
                        <a href="javascript:void(0)"
                            class="flex items-center justify-center w-10 h-10 ml-0 text-base leading-tight transition duration-300 ease-out bg-white text-dark-theme rounded-xl shadow-pagination hover:bg-gray-100 hover:text-gray-700 active:shadow-none active:brightness-90 active:scale-95">
                            <span class="sr-only">Previous</span>
                            <i class="leading-none fi fi-rr-angle-left"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"
                            class="flex items-center justify-center w-10 h-10 text-base leading-tight text-white transition duration-300 ease-out bg-primary rounded-xl shadow-pagination hover:bg-primary hover:text-white active:shadow-none active:brightness-90 active:scale-95">1</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"
                            class="flex items-center justify-center w-10 h-10 text-base leading-tight transition duration-300 ease-out bg-white text-dark-theme rounded-xl shadow-pagination hover:bg-gray-100 hover:text-gray-700 active:shadow-none active:brightness-90 active:scale-95">2</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"
                            class="flex items-center justify-center w-10 h-10 text-base leading-tight transition duration-300 ease-out bg-white text-dark-theme rounded-xl shadow-pagination hover:bg-gray-100 hover:text-gray-700 active:shadow-none active:brightness-90 active:scale-95">3</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"
                            class="flex items-center justify-center w-10 h-10 ml-0 text-base leading-tight transition duration-300 ease-out bg-white text-dark-theme rounded-xl shadow-pagination hover:bg-gray-100 hover:text-gray-700 active:shadow-none active:brightness-90 active:scale-95">
                            <span class="sr-only">Next</span>
                            <i class="leading-none fi fi-rr-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
