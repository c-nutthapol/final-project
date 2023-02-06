 <div>
     <h2 class="mb-6 text-2xl font-medium font-ibm text-secondary">
         คอร์สเรียนของฉัน
     </h2>
     <!--------- Courses  ---------->
     <div class="grid grid-cols-3 gap-x-4 gap-y-6">
         <!--------- Card  ---------->
         @foreach ($courses as $course)
             <a href="{{ route('client.auth.courses.view',$course->encode) }}" class="group">
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
                             <!--------- Avatar ---------->
                             <figure class="flex items-center gap-2 mb-4">
                                 <img src="{{ !is_null($course->user->avatar) && Storage::disk('public')->exists($course->user->avatar) ? Storage::disk('public')->url($course->user->avatar) : 'https://www.salonlfc.com/wp-content/uploads/2018/01/image-not-found-1-scaled-1150x647.png' }}"
                                     alt="avatar" class="object-cover object-top w-8 h-8 rounded-full" />
                                 <figcaption class="text-sm font-medium text-secondary">
                                     {{ $course->user->full_name }}
                                 </figcaption>
                             </figure>
                             <!--------- Progress  ---------->
                             {{-- <div class="mb-1 text-sm font-medium text-secondary font-ibm">
                             ความคืบหน้า
                         </div>
                         <div class="w-full rounded-full bg-primary-20/40">
                             <div class="bg-primary text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full"
                                 style="width: 45%">
                                 45%
                             </div>
                         </div> --}}
                         </div>
                     </div>

                     <!--------- Card Footer ---------->
                     @php
                         $review = $course->reviews->where('created_by', auth()->user()->id)->first();
                     @endphp
                     <div class="flex justify-end px-4 py-4 mt-4 bg-transparent border-t-2 border-t-gray-50">
                         <div class="flex items-center gap-2 text-sm font-semibold text-yellow-300 font-ibm">
                             <i class="leading-none fi fi-rr-star"></i>
                             <div>{{ $review->scores }}</div>
                         </div>
                     </div>
                 </div>
             </a>
         @endforeach

     </div>
     <!--------- Pagination   ---------->
     {{ $courses->links('pagination.livewire.main') }}
 </div>
