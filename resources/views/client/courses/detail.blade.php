@extends('layouts.client.app')

@section('title', 'หลักสูตร')

@section('subtitle', '| Angular - The Complete Guide (2022 Edititon)')

@section('content')
    <!--------- Content  ---------->
    <main class="relative overflow-hidden bg-white lg:pb-72">
        <!--------- Heading  ---------->
        <div class="h-[25rem] relative bg-primary-20/20">
            <!--------- Blobs left ---------->
            <img src="{{ asset('assets/images/icons/blobs-left.svg') }}" class="absolute z-0 w-80 -top-28 -left-10" />
            <!--------- Blobs right ---------->
            <img src="{{ asset('assets/images/icons/blobs-right.svg') }}" class="absolute z-0 w-96 -top-20 -right-10" />
            <!--------- Content ---------->
            <div class="container relative z-20 px-3 py-24 mx-auto lg:px-6 font-montserrat">
                <div class="absolute left-0 w-full top-32" data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000"
                    data-aos-once="true">
                    <div class="w-full px-8 mx-auto overflow-hidden bg-white rounded-xl shadow-wrapper-search py-9">
                        <div class="flex space-x-4">
                            <div class="flex-initial w-[28.75rem] h-60 overflow-hidden rounded-xl">
                                <img src="{{ asset('assets/images/rooms/room-2.jpg') }}" alt="photo"
                                    class="object-cover w-full h-full" />
                            </div>
                            <div class="flex flex-col justify-between grow">
                                <div class="pb-6">
                                    <!--------- Title ---------->
                                    <h1
                                        class="mb-4 text-3xl font-bold leading-normal tracking-wide text-dark-theme line-clamp-2">
                                        Angular - The Complete Guide (2022 Edititon)
                                    </h1>
                                    <div class="flex mb-6 space-x-4">
                                        <span class="flex items-center text-sm font-medium tracking-wide text-yellow-300">
                                            <i class="leading-none fi fi-rr-star mr-1.5"></i>
                                            <span>4.5</span>
                                        </span>
                                        <span class="flex items-center text-sm tracking-wide text-secondary">
                                            <i class="leading-none fi fi-rr-book"></i>
                                            <div class="ml-1.5 mr-1">4</div>
                                            Lessons
                                        </span>
                                        <span class="flex items-center text-sm tracking-wide text-secondary">
                                            <i class="fi fi-rr-clock leading-none mr-1.5"></i>
                                            4h 20m
                                        </span>
                                    </div>
                                    <!--------- Avatar ---------->
                                    <figure class="flex items-center space-x-2">
                                        <img src="{{ asset('assets/images/users/avatar.jpg') }}" alt="avatar"
                                            class="object-cover object-top w-10 h-10 rounded-full" />
                                        <figcaption class="text-base font-semibold text-secondary">
                                            Michele Hoffman
                                        </figcaption>
                                    </figure>
                                </div>
                                <div>
                                    <a href="{{ route('client.auth.courses.lecture') }}"
                                        class="font-normal uppercase text-base text-white text-center tracking-wider bg-primary py-2.5 px-20 rounded-xl shadow-btn transition ease-out duration-300 hover:shadow-[0_4px_10px_#B6B3FF] hover:brightness-95 active:shadow-none active:brightness-90 active:scale-95">
                                        Register
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--------- Course Detail  ---------->
        <div class="container relative z-10 px-3 py-24 mx-auto bg-transparent lg:px-6 font-montserrat">
            <!--------- Course Overview  ---------->
            <div class="mb-20" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1100" data-aos-once="true">
                <h4 class="mb-8 text-2xl font-semibold tracking-wide text-dark-theme">
                    Course Overview
                </h4>
                <p class="mb-4 text-base font-normal leading-normal text-secondary">
                    At vero eos et accusamus et iusto odio dignissimos ducimus qui
                    blanditiis praesentium voluptatum deleniti atque corrupti quos
                    dolores et quas molestias excepturi sint occaecati cupiditate non
                    provident, similique sunt in culpa qui officia deserunt mollitia
                    animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis
                    est et expedita distinctio.
                </p>
                <p class="mb-4 text-base font-normal leading-normal text-secondary">
                    Aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                    architecto. Sam voluptatem quia voluptas sit aspernatur aut odit aut
                    fugit, sed quia consequuntur magni dolores eos qui ratione
                    voluptatem sequi nesciunt.
                </p>
                <p class="text-base font-normal leading-normal text-secondary">
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                    accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                    quae ab illo inventore veritatis et quasi architecto beatae vitae
                    dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                    aspernatur aut odit aut fugit, sed quia consequuntur magni dolores
                    eos qui ratione voluptatem sequi.
                </p>
            </div>

            <!--------- What you’ll learn  ---------->
            <div class="mb-20" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1100" data-aos-once="true">
                <h4 class="mb-8 text-2xl font-semibold tracking-wide text-dark-theme">
                    What you’ll learn
                </h4>
                <ul class="flex flex-row flex-wrap gap-y-4">
                    <li class="flex items-start space-x-3 basis-1/4">
                        <i class="leading-none fi fi-rr-check"></i>
                        <span class="inline-block text-base font-normal leading-normal text-secondary">
                            Become a UX designer.
                        </span>
                    </li>
                    <li class="flex items-start space-x-3 basis-1/4">
                        <i class="leading-none fi fi-rr-check"></i>
                        <span class="inline-block text-base font-normal leading-normal text-secondary">
                            Become a UX designer.
                        </span>
                    </li>
                    <li class="flex items-start space-x-3 basis-1/4">
                        <i class="leading-none fi fi-rr-check"></i>
                        <span class="inline-block text-base font-normal leading-normal text-secondary">
                            Become a UX designer.
                        </span>
                    </li>
                    <li class="flex items-start space-x-3 basis-1/4">
                        <i class="leading-none fi fi-rr-check"></i>
                        <span class="inline-block text-base font-normal leading-normal text-secondary">
                            Become a UX designer.
                        </span>
                    </li>
                    <li class="flex items-start space-x-3 basis-1/4">
                        <i class="leading-none fi fi-rr-check"></i>
                        <span class="inline-block text-base font-normal leading-normal text-secondary">
                            Become a UX designer.
                        </span>
                    </li>
                    <li class="flex items-start space-x-3 basis-1/4">
                        <i class="leading-none fi fi-rr-check"></i>
                        <span class="inline-block text-base font-normal leading-normal text-secondary">
                            Become a UX designer.
                        </span>
                    </li>
                    <li class="flex items-start space-x-3 basis-1/4">
                        <i class="leading-none fi fi-rr-check"></i>
                        <span class="inline-block text-base font-normal leading-normal text-secondary">
                            Become a UX designer.
                        </span>
                    </li>
                    <li class="flex items-start space-x-3 basis-1/4">
                        <i class="leading-none fi fi-rr-check"></i>
                        <span class="inline-block text-base font-normal leading-normal text-secondary">
                            Become a UX designer.
                        </span>
                    </li>
                </ul>
            </div>

            <!--------- Requirements  ---------->
            <div class="mb-20" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1100" data-aos-once="true">
                <h4 class="mb-8 text-2xl font-semibold tracking-wide text-dark-theme">
                    Requirements
                </h4>
                <ul class="flex flex-col flex-wrap gap-y-4">
                    <li class="flex items-start space-x-3 basis-1/4">
                        <i class="leading-none fi fi-rr-check"></i>
                        <span class="inline-block text-base font-normal leading-normal text-secondary">
                            You will need a copy of Adobe XD 2022 or above. A free trial can
                            be downloaded from Adobe.
                        </span>
                    </li>
                    <li class="flex items-start space-x-3 basis-1/4">
                        <i class="leading-none fi fi-rr-check"></i>
                        <span class="inline-block text-base font-normal leading-normal text-secondary">
                            No previous design experience is needed.
                        </span>
                    </li>
                    <li class="flex items-start space-x-3 basis-1/4">
                        <i class="leading-none fi fi-rr-check"></i>
                        <span class="inline-block text-base font-normal leading-normal text-secondary">
                            No previous Adobe XD skills are needed.
                        </span>
                    </li>
                </ul>
            </div>

            <!--------- Curriculum  ---------->
            <div class="mb-20" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1100" data-aos-once="true">
                <h4 class="mb-8 text-2xl font-semibold tracking-wide text-dark-theme">
                    Curriculum
                </h4>

                <div id="curriculum" data-accordion="collapse">
                    <h2 id="curriculum-heading-1">
                        <button type="button"
                            class="flex items-center justify-between w-full p-4 text-base font-semibold tracking-wide text-left rounded-lg ring-2 ring-inset ring-primary-40 text-dark-theme bg-primary-40/10"
                            data-accordion-target="#curriculum-body-1" aria-expanded="false"
                            aria-controls="curriculum-body-1">
                            <span>First Step</span>
                            <svg data-accordion-icon="" class="w-6 h-6 rotate-180 shrink-0" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </h2>
                    <div id="curriculum-body-1" class="hidden" aria-labelledby="curriculum-heading-1">
                        <div class="px-4 py-5 font-light">
                            <ul class="flex flex-col flex-wrap gap-y-4">
                                <li class="flex items-center justify-between basis-1/4">
                                    <div class="flex items-center space-x-3">
                                        <i class="text-sm leading-none fi fi-rr-play"></i>
                                        <span class="inline-block text-sm font-normal leading-normal text-secondary">
                                            What is Angular?
                                        </span>
                                    </div>
                                    <span class="text-sm font-normal text-secondary">
                                        05:42
                                    </span>
                                </li>
                                <li class="flex items-center justify-between basis-1/4">
                                    <div class="flex items-center space-x-3">
                                        <i class="text-sm leading-none fi fi-rr-play"></i>
                                        <span class="inline-block text-sm font-normal leading-normal text-secondary">
                                            Structure
                                        </span>
                                    </div>
                                    <span class="text-sm font-normal text-secondary">
                                        02:14
                                    </span>
                                </li>
                                <li class="flex items-center justify-between basis-1/4">
                                    <div class="flex items-center space-x-3">
                                        <i class="text-sm leading-none fi fi-rr-play"></i>
                                        <span class="inline-block text-sm font-normal leading-normal text-secondary">
                                            Course Requirements
                                        </span>
                                    </div>
                                    <span class="text-sm font-normal text-secondary">
                                        10:04
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <h2 id="curriculum-heading-2" class="mt-3">
                        <button type="button"
                            class="flex items-center justify-between w-full p-4 text-base font-semibold tracking-wide text-left rounded-lg ring-2 ring-inset ring-primary-40 text-dark-theme bg-primary-40/10"
                            data-accordion-target="#curriculum-body-2" aria-expanded="false"
                            aria-controls="curriculum-body-2">
                            <span>Two Step</span>
                            <svg data-accordion-icon="" class="w-6 h-6 rotate-180 shrink-0" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </h2>
                    <div id="curriculum-body-2" class="hidden" aria-labelledby="curriculum-heading-2">
                        <div class="px-4 py-5 font-light">
                            <ul class="flex flex-col flex-wrap gap-y-4">
                                <li class="flex items-center justify-between basis-1/4">
                                    <div class="flex items-center space-x-3">
                                        <i class="text-sm leading-none fi fi-rr-play"></i>
                                        <span class="inline-block text-sm font-normal leading-normal text-secondary">
                                            What is Angular?
                                        </span>
                                    </div>
                                    <span class="text-sm font-normal text-secondary">
                                        05:42
                                    </span>
                                </li>
                                <li class="flex items-center justify-between basis-1/4">
                                    <div class="flex items-center space-x-3">
                                        <i class="text-sm leading-none fi fi-rr-play"></i>
                                        <span class="inline-block text-sm font-normal leading-normal text-secondary">
                                            Structure
                                        </span>
                                    </div>
                                    <span class="text-sm font-normal text-secondary">
                                        02:14
                                    </span>
                                </li>
                                <li class="flex items-center justify-between basis-1/4">
                                    <div class="flex items-center space-x-3">
                                        <i class="text-sm leading-none fi fi-rr-play"></i>
                                        <span class="inline-block text-sm font-normal leading-normal text-secondary">
                                            Course Requirements
                                        </span>
                                    </div>
                                    <span class="text-sm font-normal text-secondary">
                                        10:04
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!--------- Reviews  ---------->
            <div>
                <h4 class="mb-8 text-2xl font-semibold tracking-wide text-dark-theme" data-aos="fade-up"
                    data-aos-delay="100" data-aos-duration="1000" data-aos-once="true">
                    Reviews<span class="inline-block ml-2">(2)</span>
                </h4>
                <div class="flex flex-col w-full gap-y-6">
                    <!--------- Avatar ---------->
                    <figure class="flex items-start space-x-3" data-aos="fade-up" data-aos-delay="260"
                        data-aos-duration="1200" data-aos-once="true">
                        <img src="{{ asset('assets/images/users/avatar-3.jpg') }}" alt="avatar"
                            class="object-cover object-top w-12 h-12 rounded-xl shadow-avatar" />
                        <div class="flex-1">
                            <figcaption class="inline text-base font-semibold text-secondary">
                                Kara Ellis
                            </figcaption>
                            <span class="inline ml-1 text-sm text-primary-40">August 19, 2022
                            </span>
                            <div class="flex flex-row mt-1 space-x-1">
                                <i class="text-yellow-300 fi fi-rr-star"></i>
                                <i class="text-yellow-300 fi fi-rr-star"></i>
                                <i class="text-yellow-300 fi fi-rr-star"></i>
                                <i class="text-yellow-300 fi fi-rr-star"></i>
                                <i class="fi fi-rr-star"></i>
                            </div>
                            <p class="mt-3 text-sm font-normal leading-relaxed tracking-wide text-secondary">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type
                                specimen book. It has survived not only five centuries, but
                                also the leap into electronic typesetting, remaining
                                essentially unchanged. It was popularised in the 1960s with
                                the release of Letraset sheets containing Lorem Ipsum
                                passages, and more recently with desktop publishing software
                                like Aldus PageMaker including versions of Lorem Ipsum.
                            </p>
                        </div>
                    </figure>

                    <figure class="flex items-start space-x-3" data-aos="fade-up" data-aos-delay="260"
                        data-aos-duration="1200" data-aos-once="true">
                        <img src="{{ asset('assets/images/users/avatar-5.jpg') }}" alt="avatar"
                            class="object-cover object-top w-12 h-12 rounded-xl shadow-avatar" />
                        <div class="flex-1">
                            <figcaption class="inline text-base font-semibold text-secondary">
                                Clara Franklin
                            </figcaption>
                            <span class="inline ml-1 text-sm text-primary-40">August 21, 2022
                            </span>
                            <div class="flex flex-row mt-1 space-x-1">
                                <i class="text-yellow-300 fi fi-rr-star"></i>
                                <i class="text-yellow-300 fi fi-rr-star"></i>
                                <i class="text-yellow-300 fi fi-rr-star"></i>
                                <i class="fi fi-rr-star"></i>
                                <i class="fi fi-rr-star"></i>
                            </div>
                            <p class="mt-3 text-sm font-normal leading-relaxed tracking-wide text-secondary">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type
                                specimen book. It has survived not only five centuries, but
                                also the leap into electronic typesetting, remaining
                                essentially unchanged. It was popularised in the 1960s with
                                the release of Letraset sheets containing Lorem Ipsum
                                passages, and more recently with desktop publishing software
                                like Aldus PageMaker including versions of Lorem Ipsum.
                            </p>
                        </div>
                    </figure>
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
@endsection
