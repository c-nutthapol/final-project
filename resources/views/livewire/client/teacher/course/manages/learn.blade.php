@section('subtitle', $subtitle)
<div class="col-span-9" x-data>
    <div class="p-10 bg-white rounded-2xl shadow-card-course font-ibm">
        <!--------- Heading ---------->
        <div class="flex items-center justify-between mb-8">
            <h3 class="text-base font-bold tracking-wide text-secondary">
                สิ่งที่ผู้เรียนจะได้เรียนรู้ทั้งหมด
            </h3>
            <button type="button" class="flex items-center btn is-primary" data-modal-toggle="create-learn-modal">
                <i class="leading-none fi fi-rr-plus"></i>
                <span class="inline-block ml-2">เพิ่มสิ่งที่ผู้เรียนจะได้</span>
            </button>
        </div>

        <!--------- Table ---------->
        <div class="relative overflow-x-auto border border-secondary/10 sm:rounded-md">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="tracking-wide text-secondary bg-secondary-80/10">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-center">
                            ลำดับ
                        </th>
                        <th scope="col" class="px-6 py-3">
                            สิ่งที่ผู้เรียนจะได้เรียน
                        </th>
                        <th scope="col" class="px-6 py-3 text-right">
                            ตัวเลือก
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($willLearn as $key => $item)
                        <tr class="tracking-wide bg-white border-b hover:bg-gray-50">
                            <th scope="row" class="px-6 py-4 font-bold text-center text-secondary">
                                {{ ++$key }}
                            </th>
                            <td scope="row" class="px-6 py-4 font-medium text-secondary whitespace-nowrap">
                                {{ $item->name }}
                            </td>
                            <td class="px-6 py-4 text-right">
                                <button type="button" class="btn is-warning" data-popover-target="popover-edit"
                                    data-modal-toggle="edit-learn-modal"
                                    x-on:click="nameEdit = '{{ $item->name }}';idEdit = '{{ $item->id }}';">
                                    <div class="flex items-center content-center">
                                        <i class="leading-none fi fi-rr-edit"></i>
                                    </div>
                                </button>
                                <div data-popover id="popover-edit" role="tooltip"
                                    class="absolute z-10 invisible inline-block w-auto text-sm font-light transition-opacity duration-300 bg-white rounded-lg opacity-0 text-secondary shadow-pagination">
                                    <div class="px-3 py-2">
                                        <p>แก้ไข</p>
                                    </div>
                                    <div data-popper-arrow></div>
                                </div>
                                <button type="button" class="btn is-danger" data-popover-target="popover-delete"
                                    wire:click="destroyConfirm({{ $item->id }},'{{ $item->name }}')">
                                    <div class="flex items-center content-center">
                                        <i class="leading-none fi fi-rr-trash"></i>
                                    </div>
                                </button>
                                <div data-popover id="popover-delete" role="tooltip"
                                    class="absolute z-10 invisible inline-block w-auto text-sm font-light transition-opacity duration-300 bg-white rounded-lg opacity-0 text-secondary shadow-pagination">
                                    <div class="px-3 py-2">
                                        <p>ลบ</p>
                                    </div>
                                    <div data-popper-arrow></div>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr class="tracking-wide bg-white border-b hover:bg-gray-50">
                            <th colspan="3" scope="row" class="px-6 py-4 font-bold text-center text-secondary">
                                ไม่พบข้อมูล
                            </th>
                        </tr>
                    @endforelse

                </tbody>
            </table>
        </div>

        <!--------- Pagination   ---------->
        {{ $willLearn->links('pagination.livewire.main') }}
    </div>
</div>
@push('script')
    <script>
        function CreateWillLearn(name) {
            return @this.store(name);
        }

        function UpdateWillLearn(id, name) {
            return @this.update(id, name);
        }
    </script>
@endpush
