  <div class="col-span-5 space-y-4">
      @foreach ($courses as $course)
          <div class="flex flex-row h-40 overflow-hidden break-all bg-white rounded-2xl shadow-card-course">
              <div class="relative flex-initial w-60">
                  <img src="{{ !is_null($course->image) && Storage::disk('public')->exists($course->image) ? Storage::disk('public')->url($course->image) : 'https://www.salonlfc.com/wp-content/uploads/2018/01/image-not-found-1-scaled-1150x647.png' }}"
                      alt="image" class="object-cover w-full max-h-40" />
                  <span
                      class="absolute z-10 flex items-center py-1 px-1.5 space-x-1 text-xs text-white rounded-full top-2 left-2 bg-primary/60">
                      <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd"
                              d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                              clip-rule="evenodd"></path>
                      </svg>
                      <span> {{ $course->created_at }}</span>
                  </span>
              </div>
              <div class="flex-auto p-4">
                  <div class="flex flex-col justify-between h-full">
                      <div>
                          <h4 class="font-bold text-secondary line-clamp-1">
                              {{ $course->name }}
                          </h4>
                          <div class="flex mt-2 space-x-4">
                              <span class="flex items-center text-sm font-medium tracking-wide text-yellow-300">
                                  <i class="leading-none fi fi-rr-star mr-1.5"></i>
                                  <span>{{ $course->rating }}</span>
                              </span>
                          </div>
                      </div>
                      <!--------- Avatar ---------->
                      <figure class="flex items-center space-x-2">
                          <img src="{{ !is_null($course->user->avatar) && Storage::disk('public')->exists($course->user->avatar) ? Storage::disk('public')->url($course->user->avatar) : 'https://www.salonlfc.com/wp-content/uploads/2018/01/image-not-found-1-scaled-1150x647.png' }}"
                              alt="avatar" class="object-cover object-top rounded-full w-7 h-7" />
                          <figcaption class="text-sm font-semibold text-secondary">
                              {{ $course->user->full_name }}
                          </figcaption>
                      </figure>
                  </div>
              </div>
          </div>
      @endforeach
  </div>
