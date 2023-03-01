<div class="mt-6">
    <ul class="space-y-4">
        @foreach ($requests as $request)
            <li>
                <a href="#" class="flex items-center justify-between p-4 bg-white rounded-lg shadow-card-course">
                    <!--------- Avatar ---------->
                    <figure class="flex items-center space-x-3">
                        <img src="{{ !is_null($request->user->avatar) && Storage::disk('public')->exists($request->user->avatar) ? Storage::disk('public')->url(auth()->user()->avatar) : 'https://www.salonlfc.com/wp-content/uploads/2018/01/image-not-found-1-scaled-1150x647.png' }}" alt="avatar"
                            class="object-cover object-top w-10 h-10 rounded-full" />
                        <figcaption class="text-base font-semibold text-secondary">
                            {{ $request->user->full_name }}
                        </figcaption>
                    </figure>

                    <div>
                        <span class="text-xs text-secondary/60">
                            เวลาส่งคำขอ
                        </span>
                        <div class="flex items-center space-x-1 text-secondary/60">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-sm font-medium">{{ $request->created_at }}</span>
                        </div>
                    </div>
                </a>
            </li>
        @endforeach
    </ul>
</div>
