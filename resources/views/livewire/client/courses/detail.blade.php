@section('subtitle', $subtitle)
<main class="relative overflow-hidden bg-white lg:pb-72">
    <!--------- Heading  ---------->
    <div class="h-[25rem] relative bg-primary-20/20">
        <!--------- Blobs left ---------->
        <img src="{{ asset('assets/images/icons/blobs-left.svg') }}" class="absolute z-0 w-80 -top-28 -left-10" />
        <!--------- Blobs right ---------->
        <img src="{{ asset('assets/images/icons/blobs-right.svg') }}" class="absolute z-0 w-96 -top-20 -right-10" />
        <!--------- Content ---------->
        <div class="container relative z-20 px-3 py-24 mx-auto lg:px-6 font-montserrat">
            <div class="absolute left-0 w-full top-32">
                <div class="w-full px-8 mx-auto overflow-hidden bg-white rounded-xl shadow-wrapper-search py-9">
                    <div class="flex space-x-4">
                        <div class="flex-initial w-[28.75rem] h-60 overflow-hidden rounded-xl">
                            <img src="{{ !is_null($image) && Storage::disk('public')->exists($image) ? Storage::disk('public')->url($image) : 'https://www.salonlfc.com/wp-content/uploads/2018/01/image-not-found-1-scaled-1150x647.png' }}"
                                alt="photo" class="object-cover w-full h-full" />
                        </div>
                        <div class="flex flex-col justify-between grow">
                            <div class="pb-6">
                                <!--------- Title ---------->
                                <h1
                                    class="mb-4 text-3xl font-bold leading-normal tracking-wide text-dark-theme line-clamp-2">
                                    {{ $name }}
                                </h1>
                                <div class="flex mb-6 space-x-4">
                                    <span class="flex items-center text-sm font-medium tracking-wide text-yellow-300">
                                        <i class="leading-none fi fi-rr-star mr-1.5"></i>
                                        <span>{{ $rating }}</span>
                                    </span>
                                    <span class="flex items-center text-sm tracking-wide text-secondary">
                                        <i class="leading-none fi fi-rr-book"></i>
                                        <div class="ml-1.5 mr-1">{{ $contentCount }}</div>
                                        เนื้อหา
                                    </span>
                                    <span class="flex items-center text-sm tracking-wide text-secondary">
                                        <i class="fi fi-rr-clock leading-none mr-1.5"></i>
                                        {{ $created_at }}
                                    </span>
                                </div>
                                <!--------- Avatar ---------->
                                <figure class="flex items-center space-x-2">
                                    <img src="{{ !is_null($avatar) && Storage::disk('public')->exists($avatar) ? Storage::disk('public')->url($avatar) : 'https://www.salonlfc.com/wp-content/uploads/2018/01/image-not-found-1-scaled-1150x647.png' }}"
                                        alt="avatar" class="object-cover object-top w-10 h-10 rounded-full" />
                                    <figcaption class="text-base font-semibold text-secondary">
                                        {{ $full_name }}
                                    </figcaption>
                                </figure>
                            </div>
                            <div>

                                @if (!$check_register)
                                    <button type="button" wire:click="register"
                                        class="font-normal uppercase text-base text-white text-center tracking-wider font-ibm bg-primary py-2.5 px-20 rounded-xl shadow-btn transition ease-out duration-300 hover:shadow-[0_4px_10px_#B6B3FF] hover:brightness-95 active:shadow-none active:brightness-90 active:scale-95">
                                        ลงทะเบียน
                                    </button>
                                @else
                                    <a href="{{ route('client.auth.courses.view', $idHash) }}"
                                        class="font-normal uppercase text-base text-white text-center tracking-wider font-ibm bg-primary py-2.5 px-20 rounded-xl shadow-btn transition ease-out duration-300 hover:shadow-[0_4px_10px_#B6B3FF] hover:brightness-95 active:shadow-none active:brightness-90 active:scale-95">
                                        เข้าคอร์สเรียน
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--------- Course Detail  ---------->
    <div class="container relative z-10 px-3 py-24 mx-auto bg-transparent lg:px-6 font-montserrat" wire:ignore>
        <!--------- Course Overview  ---------->
        <div class="mb-20" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1100" data-aos-once="true">
            <h4 class="mb-8 text-2xl font-semibold tracking-wide text-dark-theme font-ibm">
                ภาพรวมคอร์สเรียน
            </h4>
            <p class="mb-4 text-base font-normal leading-normal text-secondary">
                {{ $description }}
            </p>
        </div>

        <!--------- What you’ll learn  ---------->
        <div class="mb-20" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1100" data-aos-once="true">
            <h4 class="mb-8 text-2xl font-semibold tracking-wide text-dark-theme font-ibm">
                สิ่งที่ผู้เรียนจะได้เรียนรู้ทั้งหมด
            </h4>
            <ul class="flex flex-row flex-wrap gap-y-4">
                @foreach ($will_learn as $item)
                    <li class="flex items-start space-x-3 basis-1/4">
                        <i class="leading-none fi fi-rr-check"></i>
                        <span class="inline-block text-base font-normal leading-normal text-secondary">
                            {{ $item->name ?? '' }}
                        </span>
                    </li>
                @endforeach
            </ul>
        </div>

        <!--------- Requirements  ---------->
        <div class="mb-20" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1100" data-aos-once="true">
            <h4 class="mb-8 text-2xl font-semibold tracking-wide text-dark-theme font-ibm">
                สิ่งที่ผู้เรียนต้องมี
            </h4>
            <ul class="flex flex-col flex-wrap gap-y-4">
                @foreach ($must_have as $item)
                    <li class="flex items-start space-x-3 basis-1/4">
                        <i class="leading-none fi fi-rr-check"></i>
                        <span class="inline-block text-base font-normal leading-normal text-secondary">
                            {{ $item->name ?? '' }}
                        </span>
                    </li>
                @endforeach
            </ul>
        </div>

        <!--------- Curriculum  ---------->
        <div class="mb-20" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1100" data-aos-once="true">
            <h4 class="mb-8 text-2xl font-semibold tracking-wide text-dark-theme font-ibm">
                เนื้อหา
            </h4>

            <div id="curriculum" data-accordion="collapse">
                @foreach ($sections as $key => $section)
                    <h2 id="curriculum-heading-{{ $section->encode }}"
                        @if ($key != 0) class="mt-3" @endif>
                        <button type="button"
                            class="flex items-center justify-between w-full p-4 text-base font-semibold tracking-wide text-left rounded-lg ring-2 ring-inset ring-primary-40 text-dark-theme bg-primary-40/10"
                            data-accordion-target="#curriculum-body-{{ $section->encode }}" aria-expanded="false"
                            aria-controls="curriculum-body-{{ $section->encode }}">
                            <span>{{ $section->name }}</span>
                            <svg data-accordion-icon="" class="w-6 h-6 rotate-180 shrink-0" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </h2>
                    <div id="curriculum-body-{{ $section->encode }}" class="hidden"
                        aria-labelledby="curriculum-heading-{{ $section->encode }}">
                        <div class="px-4 py-5 font-light">
                            <ul class="flex flex-col flex-wrap gap-y-4">
                                @foreach ($section->episodes as $episode)
                                    <li class="flex items-center justify-between basis-1/4">
                                        <div class="flex items-center space-x-3">
                                            <i class="text-sm leading-none fi fi-rr-play"></i>
                                            <span
                                                class="inline-block text-sm font-normal leading-normal text-secondary">
                                                {{ $episode->name }}
                                            </span>
                                        </div>
                                        {{-- <span class="text-sm font-normal text-secondary">
                                            05:42
                                        </span> --}}
                                    </li>
                                @endforeach
                                @foreach ($section->quizzes as $quiz)
                                    <li class="flex items-center justify-between basis-1/4">
                                        <div class="flex items-center space-x-3">
                                            <i class="text-sm leading-none fi fi-rr-document-signed"></i>
                                            <span
                                                class="inline-block text-sm font-normal leading-normal text-secondary">
                                                {{ $quiz->name }}
                                            </span>
                                        </div>
                                        {{-- <span class="text-sm font-normal text-secondary">
                                            05:42
                                        </span> --}}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!--------- Reviews  ---------->
        <div>
            <h4 class="mb-8 text-2xl font-semibold tracking-wide text-dark-theme font-ibm" data-aos="fade-up"
                data-aos-delay="100" data-aos-duration="1000" data-aos-once="true">
                รีวิว<span class="inline-block ml-2">({{ $reviews->count() }})</span>
            </h4>
            <div class="flex flex-col w-full gap-y-6">
                <!--------- Avatar ---------->
                @foreach ($reviews as $review)
                    <figure class="flex items-start space-x-3" data-aos="fade-up" data-aos-delay="260"
                        data-aos-duration="1200" data-aos-once="true">
                        <img src="{{ asset('assets/images/users/avatar-3.jpg') }}" alt="avatar"
                            class="object-cover object-top w-12 h-12 rounded-xl shadow-avatar" />
                        <div class="flex-1">
                            <figcaption class="inline text-base font-semibold text-secondary">
                                {{ $review->user->full_name }}
                            </figcaption>
                            <span class="inline ml-1 text-sm text-primary-40">{{ $review->created_at }}
                            </span>
                            <div class="flex flex-row mt-1 space-x-1">
                                @for ($i = 0; $i < 5; $i++)
                                    @if ($review->scores > $i)
                                        <i class="text-yellow-300 fi fi-rr-star"></i>
                                    @else
                                        <i class="fi fi-rr-star"></i>
                                    @endif
                                @endfor
                            </div>
                            <p class="mt-3 text-sm font-normal leading-relaxed tracking-wide text-secondary">
                                {{ $review->comment }}
                            </p>
                        </div>
                    </figure>
                @endforeach
            </div>
        </div>
    </div>

    <!--------- Dots top left ---------->
    <img src="{{ asset('assets/images/icons/dots.svg') }}" class="absolute w-36 top-52 -left-10" />

    <!--------- Dots top right ---------->
    <img src="{{ asset('assets/images/icons/dots.svg') }}" class="absolute w-36 top-[36rem] -right-20" />

    <!--------- Dots bottom left ---------->
    <img src="{{ asset('assets/images/icons/dots.svg') }}" class="absolute z-0 w-36 top-[92rem] -left-20" />

    <!--------- Wave  ---------->
    <img src="{{ asset('assets/images/wave-footer.svg') }}" class="absolute left-0 z-0 w-full -bottom-0" />
</main>
