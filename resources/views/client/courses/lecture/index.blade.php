@extends('client.courses.lecture.layout')

@section('title', 'การบรรยาย')

@section('subtitle', $course->name)

@section('content')
    <main class="relative bg-white font-ibm">
        <div class="h-full bg-gradient-to-b from-primary-20">
            <nav class="flex items-center justify-between w-full h-16 p-4 bg-white/80 backdrop-blur-md">
                <div class="flex items-center justify-start space-x-4 text-secondary">
                    <a href="{{ route('client.auth.courses.view', $cidHash) }}" class="inline-block text-2xl leading-none">
                        <i class="fi fi-rr-arrow-left"></i>
                    </a>
                    <h1 class="text-xl font-medium">
                        {{ $course->name }}
                    </h1>
                </div>
            </nav>
            <div class="flex flex-row justify-start h-full">
                {{-- Menu --}}
                <aside
                    class="sticky top-0 left-0 h-full overflow-x-hidden overflow-y-auto w-96 backdrop-blur-md bg-white/20">
                    <div id="curriculum" data-accordion="collapse">
                        @foreach ($course->sections as $section)
                            <div>
                                <h2 id="curriculum-heading-{{ $tidHash . '-' . $section->encode }}">
                                    <button type="button"
                                        class="flex items-center justify-between w-full p-4 text-base font-semibold tracking-wide text-left text-dark-theme bg-primary-40/20"
                                        data-accordion-target="#curriculum-body-{{ $tidHash . '-' . $section->encode }}"
                                        aria-expanded="false"
                                        aria-controls="curriculum-body-{{ $tidHash . '-' . $section->encode }}">
                                        <span>{{ $section->name }}</span>
                                        <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="curriculum-body-{{ $tidHash . '-' . $section->encode }}" class="hidden"
                                    aria-labelledby="curriculum-heading-{{ $tidHash . '-' . $section->encode }}">
                                    <div class="px-4 py-5 font-light">
                                        <ul class="flex flex-col flex-wrap gap-y-4">
                                            @foreach ($section->episodes as $episode)
                                                @php
                                                    $epid = Hashids::encode(100, $cid, $section->id, $episode->id);
                                                @endphp
                                                <li class="flex items-center justify-between basis-1/4">
                                                    <a id="{{ 100 . '-' . $section->encode . '-' . $episode->encode }}"
                                                        href="{{ route('client.auth.courses.lecture', $epid) }}">
                                                        <div
                                                            class="flex items-center space-x-3 @if ($tid == 100 && $episode->encode == $eqidHash) text-primary @endif">

                                                            <i class="text-sm leading-none fi fi-rr-play"></i>

                                                            <span
                                                                class="inline-block text-sm font-normal leading-normal @if ($tid == 100 && $episode->encode == $eqidHash) text-primary @endif">
                                                                {{ $episode->name }}
                                                            </span>
                                                        </div>
                                                    </a>
                                                </li>
                                            @endforeach
                                            @foreach ($section->quizzes as $quiz)
                                                @php
                                                    $qid = Hashids::encode(200, $cid, $section->id, $quiz->id);
                                                @endphp
                                                <li class="flex items-center justify-between basis-1/4">
                                                    <a id="{{ 200 . '-' . $section->encode . '-' . $episode->encode }}"
                                                        href="{{ route('client.auth.courses.lecture', $qid) }}">
                                                        <div
                                                            class="flex items-center space-x-3 @if ($tid == 100 && $episode->encode == $eqidHash) text-primary @endif">
                                                            <i class="text-sm leading-none fi fi-rr-document-signed"></i>
                                                            <span
                                                                class="inline-block text-sm font-normal leading-normal @if ($tid == 200 && $quiz->encode == $eqidHash) text-primary @endif">
                                                                {{ $quiz->name }}
                                                            </span>
                                                        </div>
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </aside>

                {{-- Content --}}
                <div class="flex-1 h-full overflow-hidden">
                    @if ($ep)
                        {{-- Video --}}
                        <div class="relative bg-transparent">
                            <video id="player" allow="autoplay" playsinline controls
                                data-poster="{{ Storage::disk('public')->url($ep->video) }}">
                                <source src="{{ Storage::disk('public')->url($ep->video) }}" type="video/mp4" />
                            </video>
                        </div>
                        {{-- Quiz --}}
                    @elseif($quz)
                        @livewire('client.courses.lecture.quiz', ['quz' => $quz])
                    @endif
                    @if ($ep)
                        {{-- เอกสารประกอบ --}}
                        <div class="p-6 mb-8">
                            <h4 class="mb-8 text-2xl font-semibold tracking-wide text-secondary">เอกสารประกอบ</h4>

                            <div class="grid grid-cols-2 gap-4 lg:grid-cols-3 xl:grid-cols-6">
                                <a href="#">
                                    <div
                                        class="flex items-center px-4 py-4 space-x-2 break-words transition duration-150 ease-linear rounded-md bg-primary-20/30 text-secondary hover:bg-primary-20/60">
                                        <i class="text-base leading-none fi fi-rr-document"></i>
                                        <div class="text-sm line-clamp-1">
                                            Document
                                        </div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div
                                        class="flex items-center px-4 py-4 space-x-2 break-words transition duration-150 ease-linear rounded-md bg-primary-20/30 text-secondary hover:bg-primary-20/60">
                                        <i class="text-base leading-none fi fi-rr-document"></i>
                                        <div class="text-sm line-clamp-1">
                                            Document
                                        </div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div
                                        class="flex items-center px-4 py-4 space-x-2 break-words transition duration-150 ease-linear rounded-md bg-primary-20/30 text-secondary hover:bg-primary-20/60">
                                        <i class="text-base leading-none fi fi-rr-document"></i>
                                        <div class="text-sm line-clamp-1">
                                            Document
                                        </div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div
                                        class="flex items-center px-4 py-4 space-x-2 break-words transition duration-150 ease-linear rounded-md bg-primary-20/30 text-secondary hover:bg-primary-20/60">
                                        <i class="text-base leading-none fi fi-rr-document"></i>
                                        <div class="text-sm line-clamp-1">
                                            Document
                                        </div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div
                                        class="flex items-center px-4 py-4 space-x-2 break-words transition duration-150 ease-linear rounded-md bg-primary-20/30 text-secondary hover:bg-primary-20/60">
                                        <i class="text-base leading-none fi fi-rr-document"></i>
                                        <div class="text-sm line-clamp-1">
                                            Document
                                        </div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div
                                        class="flex items-center px-4 py-4 space-x-2 break-words transition duration-150 ease-linear rounded-md bg-primary-20/30 text-secondary hover:bg-primary-20/60">
                                        <i class="text-base leading-none fi fi-rr-document"></i>
                                        <div class="text-sm line-clamp-1">
                                            Document
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endif
                    {{-- Footer --}}
                    <footer class="py-4 bg-secondary">
                        <p class="text-xs font-light tracking-wide text-center text-white font-montserrat">
                            © 2022 D-Course. All Right Reserved.
                        </p>
                    </footer>
                </div>
            </div>
        </div>
    </main>
@endsection
@if ($ep)
    @section('script')
        <script>
            const player = new Plyr('#player', plyrDefaults);

            player.on("ready", function() {
                let settime = setInterval(() => {
                    player.currentTime = {{ $second ?? 0 }}
                    if (Math.round(player.currentTime) == Math.round({{ $second ?? 0 }})) {
                        clearInterval(settime);
                        player.play();
                    }
                }, 300);

            })

            // player.on('play', (event) => {
            //     setInterval(() => {
            //         const data = {
            //             id: '{{ 100 . '-' . $section->encode . '-' . $episode->encode }}',
            //             time: player.currentTime
            //         }

            //         localStorage.setItem("current_time_video", JSON.stringify(data));
            //     }, 3000);
            // });

            // setInterval(() => {
            //     let data = jQuery.parseJSON(localStorage.getItem("current_time_video"));
            //     $.each(data, function(id, time) {
            //         // let tagA = $('#' + id);
            //         // let oldUrl = $('#' + id).attr('href');
            //         console.log(id);
            //         let urlObject = $.url(oldUrl);
            //         let param = $.param({
            //             s: time
            //         });
            //         let newUrl = urlObject.attr('base') + '?' + param;
            //         tagA.attr('href', newUrl)
            //         console.log(newUrl);
            //     });
            // }, 3000);
        </script>
    @endsection
@endif
