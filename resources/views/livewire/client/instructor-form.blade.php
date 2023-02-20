<div class="shadow-card-auth w-[32rem] bg-white mx-auto p-10 rounded-2xl font-ibm">
    <h2 class="mb-6 text-xl font-semibold text-secondary">ร่วมสอนกับเรา</h2>
    <form wire:submit.prevent="submit">
        <div>
            <label for="record" class="block mb-1.5 text-base font-medium text-dark-theme">
                ประวัติการทํางานที่เกี่ยวข้อง
            </label>
            <textarea id="record" rows="10"
                class="block w-full text-base bg-white border rounded-md cursor-pointer border-secondary-80 text-secondary focus:ring-primary focus:border-ring-primary"
                wire:model.defer="record"></textarea>
            @error('record')
                <span class="error text-error">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="experience" class="block mb-1.5 text-base font-medium text-dark-theme mt-6">
                ประสบการณ์การทำงานที่เกี่ยวข้อง (เดือน)
            </label>
            <input type="number" id="experience"
                class="block w-full text-base bg-white border rounded-md cursor-pointer border-secondary-80 text-secondary focus:ring-primary focus:border-ring-primary"
                wire:model.defer="experience">
            @error('experience')
                <span class="error text-error">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="target-audience" class="block mb-1.5 text-base font-medium text-dark-theme mt-6">
                กลุ่มเป้าหมายผู้เรียน
            </label>
            <input type="text" id="target-audience"
                class="block w-full text-base bg-white border rounded-md cursor-pointer border-secondary-80 text-secondary focus:ring-primary focus:border-ring-primary"
                wire:model.defer="target_audience">
            @error('target_audience')
                <span class="error text-error">{{ $message }}</span>
            @enderror
        </div>
        <div class="mt-6">
            <button type="submit" class="flex items-center ml-auto btn is-primary">
                <i class="leading-none fi fi-rr-paper-plane"></i>
                <span class="inline-block ml-2 text-sm">ส่ง</span>
            </button>
        </div>
    </form>
</div>
