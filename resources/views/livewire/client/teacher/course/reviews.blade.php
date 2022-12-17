@section('subtitle', $subtitle)
<div class="mx-auto font-ibm">
    <div class="flex items-center justify-between mb-6 space-x-6">
        <div class="p-6 bg-white basis-2/4 rounded-xl shadow-card-course">
            <label class="text-base font-bold tracking-wide text-secondary">
                คะแนน
            </label>
            <div class="mt-1.5 flex space-x-6">
                <div class="flex items-center">
                    <input checked="" id="radio-review-all" type="radio" value="" name="radio-review"
                        class="w-4 h-4 bg-gray-100 border-gray-300 cursor-pointer text-primary focus:ring-primary-80">
                    <label for="radio-review-all"
                        class="flex items-center pl-3 text-base font-normal cursor-pointer text-secondary">
                        <span>ทั้งหมด</span>
                    </label>
                </div>{{--  --}}
                <div class="flex items-center">
                    <input id="radio-review-4" type="radio" value="" name="radio-review"
                        class="w-4 h-4 bg-gray-100 border-gray-300 cursor-pointer text-primary focus:ring-primary-80">
                    <label for="radio-review-4"
                        class="flex items-center pl-3 text-base font-normal cursor-pointer text-secondary">
                        <div class="items-center text-lg">
                            <i class="leading-none text-yellow-300 fi fi-rr-star">
                            </i>
                            <i class="leading-none text-yellow-300 fi fi-rr-star">
                            </i>
                            <i class="leading-none text-yellow-300 fi fi-rr-star">
                            </i>
                            <i class="leading-none text-yellow-300 fi fi-rr-star">
                            </i>
                        </div>
                        <span class="ml-2">4 ขึ้นไป</span>
                    </label>
                </div>
                <div class="flex items-center">
                    <input id="radio-review-3" type="radio" value="" name="radio-review"
                        class="w-4 h-4 bg-gray-100 border-gray-300 cursor-pointer text-primary focus:ring-primary-80">
                    <label for="radio-review-3"
                        class="flex items-center pl-3 text-base font-normal cursor-pointer text-secondary">
                        <div class="items-center text-lg">
                            <i class="leading-none text-yellow-300 fi fi-rr-star">
                            </i>
                            <i class="leading-none text-yellow-300 fi fi-rr-star">
                            </i>
                            <i class="leading-none text-yellow-300 fi fi-rr-star">
                            </i>
                        </div>
                        <span class="ml-2">3</span>
                    </label>
                </div>
                <div class="flex items-center">
                    <input id="radio-review-2" type="radio" value="" name="radio-review"
                        class="w-4 h-4 bg-gray-100 border-gray-300 cursor-pointer text-primary focus:ring-primary-80">
                    <label for="radio-review-2"
                        class="flex items-center pl-3 text-base font-normal cursor-pointer text-secondary">
                        <div class="items-center text-lg">
                            <i class="leading-none text-yellow-300 fi fi-rr-star">
                            </i>
                            <i class="leading-none text-yellow-300 fi fi-rr-star">
                            </i>
                        </div>
                        <span class="ml-2">น้อยกว่า 2</span>
                    </label>
                </div>
            </div>
        </div>
        <div>
            <div
                class="flex flex-row-reverse items-center overflow-hidden text-sm bg-white border border-yellow-300 rounded-md">
                <div class="flex items-center h-full px-3 py-3 text-white bg-yellow-300">
                    <i class="leading-none fi fi-rr-star"></i>
                </div>
                <div class="flex items-center h-full px-3 font-medium bg-white text-secondary">
                    {{ number_format($reviews->avg('scors'), 1, '.', '') }}
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-2 gap-5">
        @foreach ($reviews as $item)
            <figure class="flex items-start p-6 space-x-3 break-words bg-white rounded-xl" data-aos="fade-up"
                data-aos-delay="260" data-aos-duration="1200" data-aos-once="true">
                <img src="{{ !is_null($item->user->avatar) && Storage::exists($item->user->avatar) ? Storage::url($item->user->avatar) : 'https://www.salonlfc.com/wp-content/uploads/2018/01/image-not-found-1-scaled-1150x647.png' }}"
                    alt="avatar" class="object-cover object-top w-12 h-12 rounded-xl shadow-avatar">
                <div class="flex-1">
                    <figcaption class="inline text-base font-semibold text-secondary">
                        {{ $item->user->full_name }}
                    </figcaption>
                    <span class="inline ml-1 text-sm text-primary-40">{{ $item->created_at }}
                    </span>
                    <div class="flex flex-row mt-1 space-x-1">
                        @for ($i = 0; $i < 5; $i++)
                            @if ($item->scors > $i)
                                <i class="text-yellow-300 fi fi-rr-star"></i>
                            @else
                                <i class="fi fi-rr-star"></i>
                            @endif
                        @endfor
                    </div>
                    <p class="mt-3 text-sm font-normal leading-relaxed tracking-wide text-secondary">
                        {{ $item->comment }}
                    </p>
                </div>
            </figure>
        @endforeach
    </div>
    <!--------- Pagination   ---------->
    {{ $reviews->links('pagination.livewire.main') }}
</div>
