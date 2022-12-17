@extends('client.courses.lecture.layout')

@section('title', 'หลักสูตร')

@section('subtitle', '| Angular - The Complete Guide (2022 Edititon)')

@section('content')
    <main class="relative bg-white font-ibm">
        <div class="h-screen bg-gradient-to-b from-primary-20">
            <nav class="flex items-center justify-between w-full h-16 bg-white/80 backdrop-blur-md p-4">
                <div class="flex items-center justify-start space-x-4 text-secondary">
                    <a href="{{ route('client.auth.courses.view') }}" class="inline-block leading-none text-2xl">
                        <i class="fi fi-rr-arrow-left"></i>
                    </a>
                    <h1 class="text-xl font-medium">
                        Angular - The Complete Guide (2022 Edititon)
                    </h1>
                </div>
            </nav>
            <div class="flex flex-row justify-start h-full">
                {{-- Menu --}}
                <aside
                    class="w-96 h-full backdrop-blur-md bg-white/20 overflow-y-auto overflow-x-hidden sticky left-0 top-0">
                    <div id="curriculum" data-accordion="collapse">
                        <div>
                            <h2 id="curriculum-heading-1">
                                <button type="button"
                                    class="flex items-center justify-between w-full p-4 text-base font-semibold tracking-wide text-left text-dark-theme bg-primary-40/20"
                                    data-accordion-target="#curriculum-body-1" aria-expanded="false"
                                    aria-controls="curriculum-body-1">
                                    <span>First Step</span>
                                    <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor"
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
                                            <div class="flex items-center space-x-3 text-success">
                                                <i class="text-sm leading-none fi fi-rr-check"></i>
                                                <span class="inline-block text-sm font-normal leading-normal text-success">
                                                    What is Angular?
                                                </span>
                                            </div>
                                            <span class="text-sm font-normal text-secondary">
                                                05:42
                                            </span>
                                        </li>
                                        <li>
                                            <a href="#" class="flex items-center justify-between basis-1/4">
                                                <div class="flex items-center space-x-3 text-primary">
                                                    <i class="text-sm leading-none fi fi-rr-play"></i>
                                                    <span
                                                        class="inline-block text-sm font-normal leading-normal text-primary">
                                                        Structure
                                                    </span>
                                                </div>
                                                <span class="text-sm font-normal text-secondary">
                                                    02:14
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex items-center justify-between basis-1/4">
                                                <div class="flex items-center space-x-3">
                                                    <i class="text-sm leading-none fi fi-rr-play"></i>
                                                    <span
                                                        class="inline-block text-sm font-normal leading-normal text-secondary">
                                                        Course Requirements
                                                    </span>
                                                </div>
                                                <span class="text-sm font-normal text-secondary">
                                                    10:04
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h2 id="curriculum-heading-2">
                                <button type="button"
                                    class="flex items-center justify-between w-full p-4 text-base font-semibold tracking-wide text-left  text-dark-theme bg-primary-40/20"
                                    data-accordion-target="#curriculum-body-2" aria-expanded="false"
                                    aria-controls="curriculum-body-2">
                                    <span>Two Step</span>
                                    <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor"
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
                                        <li>
                                            <a href="#" class="flex items-center justify-between basis-1/4">
                                                <div class="flex items-center space-x-3">
                                                    <i class="text-sm leading-none fi fi-rr-play"></i>
                                                    <span
                                                        class="inline-block text-sm font-normal leading-normal text-secondary">
                                                        What is Angular?
                                                    </span>
                                                </div>
                                                <span class="text-sm font-normal text-secondary">
                                                    05:42
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex items-center justify-between basis-1/4">
                                                <div class="flex items-center space-x-3">
                                                    <i class="text-sm leading-none fi fi-rr-play"></i>
                                                    <span
                                                        class="inline-block text-sm font-normal leading-normal text-secondary">
                                                        Structure
                                                    </span>
                                                </div>
                                                <span class="text-sm font-normal text-secondary">
                                                    02:14
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>

                {{-- Content --}}
                <div class="flex-1 overflow-x-hidden">
                    <div class="h-3/4 bg-transparent">
                        {{-- Video --}}
                        <div>
                            <video id="player" playsinline controls data-poster="/path/to/poster.jpg" class="w-full">
                                <source src="/path/to/video.mp4" type="video/mp4" />
                            </video>
                        </div>
                        {{-- Quiz --}}
                        {{-- <div class="flex items-center justify-center h-full">
                            <div class="bg-white/70 backdrop-blur-lg w-[42rem] p-8 rounded-2xl shadow-card-course">
                                <form>
                                    <h3 class="text-lg text-secondary font-medium tracking-wide">HTML คืออะไร</h3>
                                    <div class="mt-6 space-y-4">
                                        <div class="flex items-center">
                                            <input id="radio-quiz-1" type="radio" name="quiz"
                                                class="w-4 h-4 bg-gray-100 border-gray-300 cursor-pointer text-primary focus:ring-primary-80" />
                                            <label for="radio-quiz-1"
                                                class="pl-3 text-base font-normal cursor-pointer text-secondary">
                                                เป็นภาษาคอมพิวเตอร์ในรูปแบบหนึ่งที่ใช้สำหรับสร้างหน้าเว็บ (Web Page)
                                            </label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="radio-quiz-2" type="radio" name="quiz"
                                                class="w-4 h-4 bg-gray-100 border-gray-300 cursor-pointer text-primary focus:ring-primary-80" />
                                            <label for="radio-quiz-2"
                                                class="pl-3 text-base font-normal cursor-pointer text-secondary">
                                                ภาษาที่ใช้สำหรับตกแต่งเอกสาร HTML/XHTML ให้มีหน้าตา สีสัน ระยะห่าง
                                                พื้นหลัง
                                                เส้นขอบและอื่นๆ ตามที่ต้องการ
                                            </label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="radio-quiz-3" type="radio" name="quiz"
                                                class="w-4 h-4 bg-gray-100 border-gray-300 cursor-pointer text-primary focus:ring-primary-80" />
                                            <label for="radio-quiz-3"
                                                class="pl-3 text-base font-normal cursor-pointer text-secondary">
                                                ภาษาโปรแกรมที่นักพัฒนาใช้ในการสร้างหน้าเว็บแบบอินเทอร์แอคทีฟ
                                                ตั้งแต่การรีเฟรชฟีดสื่อโซเชียลไปจนถึงการแสดงภาพเคลื่อนไหวและแผนที่แบบอินเทอร์แอคทีฟ
                                            </label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="radio-quiz-4" type="radio" name="quiz"
                                                class="w-4 h-4 bg-gray-100 border-gray-300 cursor-pointer text-primary focus:ring-primary-80" />
                                            <label for="radio-quiz-4"
                                                class="pl-3 text-base font-normal cursor-pointer text-secondary">
                                                ภาษาคอมพิวเตอร์จำพวก scripting language
                                                ภาษาจำพวกนี้คำสั่งต่างๆจะเก็บอยู่ในไฟล์ที่เรียกว่า script
                                                และเวลาใช้งานต้องอาศัยตัวแปรชุดคำสั่ง
                                            </label>
                                        </div>
                                    </div>
                                    <div class="float-right mt-6">
                                        <button type="submit" class="flex items-center btn is-primary">
                                            <i class="leading-none  fi fi-rr-paper-plane"></i>
                                            <span class="inline-block ml-2 text-sm">ส่งคำตอบ</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div> --}}
                    </div>
                    {{-- เอกสารประกอบ --}}
                    <div class="p-6">
                        <h4 class="text-2xl font-semibold text-secondary tracking-wide mb-8">เอกสารประกอบ</h4>

                        <div class="grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-6 gap-4">
                            <a href="#">
                                <div
                                    class="flex items-center space-x-2 bg-primary-20/30 text-secondary py-4 px-4 rounded-md break-words transition ease-linear duration-150 hover:bg-primary-20/60">
                                    <i class="fi fi-rr-document leading-none text-base"></i>
                                    <div class="text-sm line-clamp-1">
                                        Document
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div
                                    class="flex items-center space-x-2 bg-primary-20/30 text-secondary py-4 px-4 rounded-md break-words transition ease-linear duration-150 hover:bg-primary-20/60">
                                    <i class="fi fi-rr-document leading-none text-base"></i>
                                    <div class="text-sm line-clamp-1">
                                        Document
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div
                                    class="flex items-center space-x-2 bg-primary-20/30 text-secondary py-4 px-4 rounded-md break-words transition ease-linear duration-150 hover:bg-primary-20/60">
                                    <i class="fi fi-rr-document leading-none text-base"></i>
                                    <div class="text-sm line-clamp-1">
                                        Document
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div
                                    class="flex items-center space-x-2 bg-primary-20/30 text-secondary py-4 px-4 rounded-md break-words transition ease-linear duration-150 hover:bg-primary-20/60">
                                    <i class="fi fi-rr-document leading-none text-base"></i>
                                    <div class="text-sm line-clamp-1">
                                        Document
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div
                                    class="flex items-center space-x-2 bg-primary-20/30 text-secondary py-4 px-4 rounded-md break-words transition ease-linear duration-150 hover:bg-primary-20/60">
                                    <i class="fi fi-rr-document leading-none text-base"></i>
                                    <div class="text-sm line-clamp-1">
                                        Document
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div
                                    class="flex items-center space-x-2 bg-primary-20/30 text-secondary py-4 px-4 rounded-md break-words transition ease-linear duration-150 hover:bg-primary-20/60">
                                    <i class="fi fi-rr-document leading-none text-base"></i>
                                    <div class="text-sm line-clamp-1">
                                        Document
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>


                    {{-- Footer --}}
                    <footer class="py-4 bg-secondary mt-10">
                        <p class="text-xs font-light tracking-wide text-center text-white font-montserrat">
                            © 2022 D-Course. All Right Reserved.
                        </p>
                    </footer>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('script')
    <script>
        const player = new Plyr('#player', plyrDefaults);

        // player.on('ready', (event) => {
        //     const instance = event.detail.plyr;
        //     console.log(event.detail.plyr.currentTime);
        // });

        // setInterval(() => {
        //     console.log(player.currentTime);
        // }, 1000);
    </script>
@endsection
