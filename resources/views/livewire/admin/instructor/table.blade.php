<div class="block overflow-hidden bg-white rounded-lg">
    <!--------- Filter   ---------->
    <div class="flex items-center justify-between p-6">
        <div class="flex space-x-4">
            <select class="block px-3 py-2 text-base font-normal bg-white border rounded-md w-52 border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary" wire:model="sort">
                <option value="desc">ล่าสุด</option>
                <option value="asc">เก่าสุด</option>
            </select>
            <select class="block px-3 py-2 text-base font-normal bg-white border rounded-md w-52 border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary" wire:model="status">
                <option value="">สถานะทั้งหมด</option>
                <option value="pending">รอการอนุมัติ</option>
                <option value="approve">อนุมัติ</option>
                <option value="refuse">ปฎิเสธ</option>
            </select>
        </div>
        <div>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <i class="text-base leading-none fi fi-rr-search"></i>
                </div>
                <input type="search" id="search" class="block w-full py-2 pl-10 text-base font-normal bg-white border rounded-md border-secondary-80 text-secondary placeholder:text-secondary-80 placeholder:font-light focus:ring-primary focus:border-ring-primary" placeholder="ค้นหา..." wire:model="search" />
            </div>
        </div>
    </div>
    <!--------- Table   ---------->
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left text-secondary">
            <thead class="text-sm uppercase text-secondary/60 bg-primary/5">
                <tr>
                    <th scope="col" class="px-6 py-3">ชื่อ-นามสกุล</th>
                    <th scope="col" class="px-6 py-3">เวลาส่งคำขอ</th>
                    <th scope="col" class="px-6 py-3">สถานะ</th>
                    <th scope="col" class="px-6 py-3">ตัวเลือก</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($requests as $request)
                <tr>
                    <th scope="row" class="flex items-center px-6 py-4 space-x-3 whitespace-nowrap">
                        <!--------- Avatar ---------->
                        <figure class="flex items-center space-x-3">
                            <img src="{{ !is_null($request->user->avatar) && Storage::disk('public')->exists($request->user->avatar) ? Storage::disk('public')->url(auth()->user()->avatar) : 'https://www.salonlfc.com/wp-content/uploads/2018/01/image-not-found-1-scaled-1150x647.png' }}" alt="avatar" class="object-cover object-top w-10 h-10 rounded-full" />
                            <figcaption class="text-base font-semibold text-secondary">
                                {{ $request->user->full_name }}
                            </figcaption>
                        </figure>
                        <button type="button" class="flex items-center justify-center w-8 h-8 rounded-full bg-secondary/5 hover:bg-secondary/20">
                            <svg class="w-5 h-5 text-secondary" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </th>
                    <td class="px-6 py-4">
                        <div class="flex items-center space-x-1">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-sm font-medium">{{ $request->created_at }}</span>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        @if ($request->status == 0)
                        <span class="px-2 py-1 text-sm font-bold text-yellow-400 rounded-md bg-yellow-300/20">
                            รอการอนุมัติ
                        </span>
                        @elseif ($request->status == 111)
                        <span class="px-2 py-1 text-sm font-bold text-green-400 rounded-md bg-green-300/20">
                            อนุมัติ
                        </span>
                        @else
                        <span class="px-2 py-1 text-sm font-bold text-red-400 rounded-md bg-red-300/20">
                            ปฎิเสธ
                        </span>
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        <button type="button" class="font-medium text-primary hover:underline" data-modal-toggle="statusModal" onclick="getInstructor({{ $request->id }})">
                            จัดการ
                        </button>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4">ไม่พบข้อมูล</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <!--------- Pagination   ---------->
    {{ $requests->links('pagination.livewire.main') }}
</div>

@push('script')
<script>
    function getData() {
        return {
            formData: {
                description: "",
                status: "",
            },
            idEdit: null,
            record: null,
            experience: null,
            target_audience: null,
            full_name: null,
            avatar: null,
        }
    }

    async function getInstructor(id) {

        let data = await @this.getInstructor(id)
        console.log(id, data,data.id);
        this.idEdit = data.id
        this.record = data.record
        this.experience = data.experience
        this.target_audience = data.target_audience
        this.full_name = data.full_name
        this.avatar = data.avatar

        console.log(this.idEdit);

    }

    function updateInstructor() {
        if (this.formData.status != '') {
            @this.update(this.idEdit, this.formData)
            // return this.formData = "";
        }
    }
</script>
@endpush