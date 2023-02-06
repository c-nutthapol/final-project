<!--------- Items  ---------->
<div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
    @foreach ($courses as $course)
        <!--------- Card  ---------->
        <a href="{{ route('client.courses.detail') }}" class="group" data-aos="fade-up" data-aos-delay="400"
            data-aos-duration="1000" data-aos-once="true">
            <div
                class="flex flex-col justify-between bg-white overflow-hidden h-full rounded-xl cursor-pointer box-border shadow-card-course transition duration-150 ease-out group-hover:ease-in group-hover:scale-105 group-hover:-translate-y-2 group-hover:shadow-[0_12px_40px_rgba(182,179,255,0.3)] group-active:scale-100 group-active:opacity-80 group-active:translate-y-0">
                <div>
                    <!--------- Card Image ---------->
                    <img src="{{ !is_null($course->image) && Storage::disk('public')->exists($course->image) ? Storage::disk('public')->url($course->image) : 'https://www.salonlfc.com/wp-content/uploads/2018/01/image-not-found-1-scaled-1150x647.png' }}"
                        alt="photo" class="object-cover w-full h-52" />
                    <!--------- Card Body ---------->
                    <div class="p-4 bg-transparent font-montserrat">
                        <h4 class="mb-3 text-base font-semibold leading-relaxed text-dark-theme line-clamp-2">
                            {{ $course->name }}
                        </h4>
                        <div class="flex gap-4 mb-5">
                            <span class="flex items-center text-sm tracking-wide text-secondary">
                                <i class="leading-none fi fi-rr-book"></i>
                                <div class="ml-1.5 mr-1">{{ $course->contentCount() }}</div>
                                เนื้อหา
                            </span>
                            <span class="flex items-center text-sm tracking-wide text-secondary">
                                <i class="fi fi-rr-calendar-lines leading-none mr-1.5"></i>
                                {{ $course->created_at }}
                            </span>
                        </div>
                        <!--------- Avatar ---------->
                        <figure class="flex items-center gap-2">
                            <img src="{{ !is_null($course->user->avatar) && Storage::disk('public')->exists($course->user->avatar) ? Storage::disk('public')->url($course->user->avatar) : 'https://www.salonlfc.com/wp-content/uploads/2018/01/image-not-found-1-scaled-1150x647.png' }}"
                                alt="avatar" class="object-cover object-top w-8 h-8 rounded-full" />
                            <figcaption class="text-sm font-medium text-secondary">
                                {{ $course->user->full_name }}
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <!--------- Card Footer ---------->
                <div class="flex justify-between px-4 py-4 mt-4 bg-transparent border-t-2 border-t-gray-50">
                    <div class="flex items-center gap-2 text-sm font-semibold text-yellow-300 font-montserrat">
                        <i class="leading-none fi fi-rr-star"></i>
                        <div>{{ $course->rating }}</div>
                    </div>
                    <div class="flex items-center gap-2 text-sm font-semibold font-montserrat text-primary-80">
                        <i class="leading-none fi fi-rr-user"></i>
                        <div>{{ $course->students->count() }}</div>
                    </div>
                </div>
            </div>
        </a>
    @endforeach
</div>
