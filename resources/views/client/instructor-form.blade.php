@extends('layouts.client.app')

@section('title', 'หน้าหลัก')

@section('content')
    <!--------- Content  ---------->
    <main class="relative overflow-hidden bg-primary-20/[0.2] lg:pb-72">
        <div class="container py-64 mx-auto">
            <div class="shadow-card-auth w-[32rem] bg-white mx-auto p-10 rounded-2xl font-ibm">
                <h2 class="mb-6 text-xl font-semibold text-secondary">ร่วมสอนกับเรา</h2>
                <form>
                    <div>
                        <label for="file_resume" class="block mb-1.5 text-base font-medium text-dark-theme">
                            Resume (PDF)
                        </label>
                        <input
                            class="block w-full text-base bg-white border rounded-md cursor-pointer border-secondary-80 text-secondary focus:ring-primary focus:border-ring-primary"
                            id="file_resume" type="file" />
                    </div>

                    <div class="mt-6">
                        <button type="submit" class="flex items-center ml-auto btn is-primary">
                            <i class="leading-none fi fi-rr-paper-plane"></i>
                            <span class="inline-block ml-2 text-sm">ส่ง</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>


        <!--------- Wave  ---------->
        <img src="{{ asset('assets/images/wave-footer.svg') }}" class="absolute left-0 z-0 w-full -bottom-0" />
    </main>
@endsection
