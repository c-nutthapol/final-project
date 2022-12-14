<div class="col-span-3">
    <div class="sticky left-0 space-y-8 top-24">
        <div class="p-8 bg-white rounded-2xl shadow-card-course font-ibm">
            <h4 class="mb-4 text-base font-bold tracking-wide text-secondary">
                ตั้งค่าการค้นหา
            </h4>

            <form>
                <div class="space-y-4">
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <i class="text-base leading-none fi fi-rr-search"></i>
                        </div>
                        <input type="search" id="search" wire:model="search"
                            class="block w-full py-2 pl-10 text-base font-normal bg-white border rounded-md border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary"
                            placeholder="ค้นหา..." />
                    </div>
                    <div>
                        <select id="filter-category"
                            class="block w-full px-3 py-2 text-base font-normal bg-white border rounded-md border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary"
                            wire:model.lazy="category">
                            <option value="" selected>ค้นหาหมวดหมู่</option>
                            @foreach ($categories as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <select id="filter"
                            class="block w-full px-3 py-2 text-base font-normal bg-white border rounded-md border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary"
                            wire:model.lazy="sort">
                            <option value="desc">คอร์สเรียนใหม่สุด</option>
                            <option value="asc">คอร์สเรียนเก่าสุด</option>
                            <option value="highReview">คะแนนรีวิวสูงที่สุด</option>
                        </select>
                    </div>
                </div>
                <div class="mt-5" x-data="{ all: true, level: ['entry', 'moderate', 'high'] }">
                    <label class="text-base font-bold tracking-wide text-secondary">
                        ระดับคอร์สเรียน
                    </label>
                    <div class="mt-4 space-y-2">
                        <div class="flex items-center">
                            <input id="all-levels" type="checkbox" x-model="all"
                                class="w-4 h-4 bg-gray-100 border-gray-300 rounded cursor-pointer text-primary focus:ring-primary-80"
                                x-on:change="if(all == true) { level = ['entry','moderate','high'] ;} else {level = []} $wire.call('allLevel', all); $wire.requestSearch(); ">
                            <label for="all-levels" class="ml-2 text-base font-normal cursor-pointer text-secondary">
                                ทุกระดับ
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input id="beginners" type="checkbox" x-model="level" value="entry"
                                class="w-4 h-4 bg-gray-100 border-gray-300 rounded cursor-pointer text-primary focus:ring-primary-80"
                                x-on:change="all = level.length == 3 ; $wire.set('level',level) ;$wire.requestSearch();" />
                            <label for="beginners" class="ml-2 text-base font-normal cursor-pointer text-secondary">
                                ระดับเริ่มต้น
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input id="intermediate" type="checkbox" x-model="level" value="moderate"
                                class="w-4 h-4 bg-gray-100 border-gray-300 rounded cursor-pointer text-primary focus:ring-primary-80"
                                x-on:change="all = level.length == 3 ; $wire.set('level',level);$wire.requestSearch();" />
                            <label for="intermediate" class="ml-2 text-base font-normal cursor-pointer text-secondary">
                                ระดับปานกลาง
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input id="advanced" type="checkbox" x-model="level" value="high"
                                class="w-4 h-4 bg-gray-100 border-gray-300 rounded cursor-pointer text-primary focus:ring-primary-80"
                                x-on:change="all = level.length == 3 ; $wire.set('level',level);$wire.requestSearch();" />
                            <label for="advanced" class="ml-2 text-base font-normal cursor-pointer text-secondary">
                                ระดับสูง
                            </label>
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <label class="text-base font-bold tracking-wide text-secondary">
                        คะแนน
                    </label>
                    <div class="mt-4 space-y-2">
                        <div class="flex items-center">
                            <input checked id="radio-review-4" type="radio" value=">=4" name="radio-review"
                                class="w-4 h-4 bg-gray-100 border-gray-300 cursor-pointer text-primary focus:ring-primary-80"
                                wire:model.lazy="reviewScore" />
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
                            <input id="radio-review-3" type="radio" value="3" name="radio-review"
                                class="w-4 h-4 bg-gray-100 border-gray-300 cursor-pointer text-primary focus:ring-primary-80"
                                wire:model.lazy="reviewScore" />
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
                            <input id="radio-review-2" type="radio" value="2" name="radio-review"
                                class="w-4 h-4 bg-gray-100 border-gray-300 cursor-pointer text-primary focus:ring-primary-80"
                                wire:model.lazy="reviewScore" />
                            <label for="radio-review-2"
                                class="flex items-center pl-3 text-base font-normal cursor-pointer text-secondary">
                                <div class="items-center text-lg">
                                    <i class="leading-none text-yellow-300 fi fi-rr-star">
                                    </i>
                                    <i class="leading-none text-yellow-300 fi fi-rr-star">
                                    </i>
                                </div>
                                <span class="ml-2">2</span>
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input id="radio-review-1" type="radio" value="<=1" name="radio-review"
                                class="w-4 h-4 bg-gray-100 border-gray-300 cursor-pointer text-primary focus:ring-primary-80"
                                wire:model.lazy="reviewScore" />
                            <label for="radio-review-1"
                                class="flex items-center pl-3 text-base font-normal cursor-pointer text-secondary">
                                <div class="items-center text-lg">
                                    <i class="leading-none text-yellow-300 fi fi-rr-star">
                                    </i>
                                </div>
                                <span class="ml-2">1</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <label class="text-base font-bold tracking-wide text-secondary">
                        สถานะ
                    </label>
                    <div class="mt-4 space-y-2">
                        <div class="flex items-center">
                            <input id="check-public" type="checkbox" value="public"
                                class="w-4 h-4 bg-gray-100 border-gray-300 rounded cursor-pointer text-success focus:ring-success/60"
                                wire:model.lazy="status" />
                            <label for="check-public"
                                class="px-1.5 py-0.5 rounded ml-3 text-sm font-medium capitalize cursor-pointer text-success bg-success/20">
                                public
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input id="check-private" type="checkbox" value="private"
                                class="w-4 h-4 bg-gray-100 border-gray-300 rounded cursor-pointer text-secondary focus:ring-secondary/60"
                                wire:model.lazy="status" />
                            <label for="check-private"
                                class="px-1.5 py-0.5 rounded ml-3 text-sm font-medium capitalize cursor-pointer text-secondary bg-secondary/20">
                                private
                            </label>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
