<div class="col-span-3">
    <div class="sticky left-0 space-y-8 top-24">
        <div class="p-8 bg-white rounded-2xl shadow-card-course font-ibm">
            <h4 class="mb-4 text-base font-bold tracking-wide text-secondary">
                ตั้งค่าการค้นหา
            </h4>

            <form>
                <div class="space-y-4">
                    <div class="relative">
                        <div
                            class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <i class="text-base leading-none fi fi-rr-search"></i>
                        </div>
                        <input type="search" id="search"
                            class="block w-full py-2 pl-10 text-base font-normal bg-white border rounded-md border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary"
                            placeholder="ค้นหา..." required />
                    </div>
                    <div>
                        <select id="filter-category"
                            class="block w-full px-3 py-2 text-base font-normal bg-white border rounded-md border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary">
                            <option selected>ค้นหาหมวดหมู่</option>
                            <option value="">United States</option>
                            <option value="">Canada</option>
                            <option value="">France</option>
                            <option value="">Germany</option>
                        </select>
                    </div>
                    <div>
                        <select id="filter"
                            class="block w-full px-3 py-2 text-base font-normal bg-white border rounded-md border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary">
                            <option value="">คอร์สเรียนใหม่สุด</option>
                            <option value="">คอร์สเรียนเก่าสุด</option>
                            <option value="">คะแนนรีวิวสูงที่สุด</option>
                        </select>
                    </div>
                </div>
                <div class="mt-5">
                    <label class="text-base font-bold tracking-wide text-secondary">
                        ระดับคอร์สเรียน
                    </label>
                    <div class="mt-4 space-y-2">
                        <div class="flex items-center">
                            <input id="all-levels" type="checkbox" value=""
                                class="w-4 h-4 bg-gray-100 border-gray-300 rounded cursor-pointer text-primary focus:ring-primary-80"
                                checked />
                            <label for="all-levels"
                                class="ml-2 text-base font-normal cursor-pointer text-secondary">
                                ทุกระดับ
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input id="beginners" type="checkbox" value=""
                                class="w-4 h-4 bg-gray-100 border-gray-300 rounded cursor-pointer text-primary focus:ring-primary-80" />
                            <label for="beginners"
                                class="ml-2 text-base font-normal cursor-pointer text-secondary">
                                ระดับเริ่มต้น
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input id="intermediate" type="checkbox" value=""
                                class="w-4 h-4 bg-gray-100 border-gray-300 rounded cursor-pointer text-primary focus:ring-primary-80" />
                            <label for="intermediate"
                                class="ml-2 text-base font-normal cursor-pointer text-secondary">
                                ระดับปานกลาง
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input id="advanced" type="checkbox" value=""
                                class="w-4 h-4 bg-gray-100 border-gray-300 rounded cursor-pointer text-primary focus:ring-primary-80" />
                            <label for="advanced"
                                class="ml-2 text-base font-normal cursor-pointer text-secondary">
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
                            <input checked id="radio-review-4" type="radio" value=""
                                name="radio-review"
                                class="w-4 h-4 bg-gray-100 border-gray-300 cursor-pointer text-primary focus:ring-primary-80" />
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
                                class="w-4 h-4 bg-gray-100 border-gray-300 cursor-pointer text-primary focus:ring-primary-80" />
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
                                <span class="ml-2">3 ขึ้นไป</span>
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input id="radio-review-2" type="radio" value="" name="radio-review"
                                class="w-4 h-4 bg-gray-100 border-gray-300 cursor-pointer text-primary focus:ring-primary-80" />
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
                            <input id="radio-review-1" type="radio" value=""
                                name="radio-review"
                                class="w-4 h-4 bg-gray-100 border-gray-300 cursor-pointer text-primary focus:ring-primary-80" />
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
                            <input id="check-public" type="checkbox" value=""
                                class="w-4 h-4 bg-gray-100 border-gray-300 rounded cursor-pointer text-success focus:ring-success/60"
                                checked />
                            <label for="check-public"
                                class="px-1.5 py-0.5 rounded ml-3 text-sm font-medium capitalize cursor-pointer text-success bg-success/20">
                                public
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input id="check-private" type="checkbox" value=""
                                class="w-4 h-4 bg-gray-100 border-gray-300 rounded cursor-pointer text-secondary focus:ring-secondary/60"
                                checked />
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
