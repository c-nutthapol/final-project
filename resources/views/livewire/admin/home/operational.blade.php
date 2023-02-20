<div class="grid grid-cols-4 gap-6">
    <div class="flex items-center justify-start p-10 space-x-4 bg-white rounded-xl shadow-card-course">
        <div class="flex items-center justify-center w-20 h-20 rounded-full bg-primary/10">
            <svg class="w-12 h-12 text-primary" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z">
                </path>
            </svg>
        </div>
        <div>
            <strong class="text-3xl tracking-wider text-secondary">{{ $courses }}</strong>
            <h4 class="text-sm font-bold tracking-wide text-secondary/40">
                จำนวนคอร์สเรียน
            </h4>
        </div>
    </div>

    <div class="flex items-center justify-start p-10 space-x-4 bg-white rounded-xl shadow-card-course">
        <div class="flex items-center justify-center w-20 h-20 rounded-full bg-yellow-300/10">
            <svg class="w-12 h-12 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z">
                </path>
            </svg>
        </div>
        <div>
            <strong class="text-3xl tracking-wider text-secondary">
                {{ $lectureres }}
            </strong>
            <h4 class="text-sm font-bold tracking-wide text-secondary/40">
                จำนวนผู้สอน
            </h4>
        </div>
    </div>

    <div class="flex items-center justify-start p-10 space-x-4 bg-white rounded-xl shadow-card-course">
        <div class="flex items-center justify-center w-20 h-20 rounded-full bg-green-300/10">
            <svg class="w-12 h-12 text-green-300" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z">
                </path>
            </svg>
        </div>
        <div>
            <strong class="text-3xl tracking-wider text-secondary">
                {{ $students }}
            </strong>
            <h4 class="text-sm font-bold tracking-wide text-secondary/40">
                จำนวนผู้เรียน
            </h4>
        </div>
    </div>

    <div class="flex items-center justify-start p-10 space-x-4 bg-white rounded-xl shadow-card-course">
        <div class="flex items-center justify-center w-20 h-20 rounded-full bg-red-400/10">
            <svg class="w-12 h-12 text-red-500" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2h-1.528A6 6 0 004 9.528V4z">
                </path>
                <path fill-rule="evenodd"
                    d="M8 10a4 4 0 00-3.446 6.032l-1.261 1.26a1 1 0 101.414 1.415l1.261-1.261A4 4 0 108 10zm-2 4a2 2 0 114 0 2 2 0 01-4 0z"
                    clip-rule="evenodd"></path>
            </svg>
        </div>
        <div>
            <strong class="text-3xl tracking-wider text-secondary">
                {{ $request }}
            </strong>
            <h4 class="text-sm font-bold tracking-wide text-secondary/40">
                จำนวนคำขอเป็นผู้สอนที่รออนุมัติ
            </h4>
        </div>
    </div>
</div>
