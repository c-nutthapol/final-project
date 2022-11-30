<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>D-Course | Login</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
    @include('layouts.client.partials.header')
</head>

<body>

    <section class="relative flex items-center justify-center h-screen">
        <div class="relative z-10">
            <!--------- Logo  ---------->
            <div class="flex items-center justify-center mb-12" data-aos="fade-down" data-aos-duration="800"
                data-aos-once="true">
                <img src="{{ asset('assets/logo.png') }}" alt="logo" class="w-10 mr-3" />
                <h1 class="mb-0 text-xl font-bold tracking-wide font-montserrat text-primary">
                    D-Course
                </h1>
            </div>
            <!--------- Card login  ---------->
            <div class="p-10 bg-white shadow-card-auth w-[28.75rem] rounded-2xl font-ibm" data-aos="fade-up"
                data-aos-duration="1000" data-aos-once="true">
                <!--------- Card Title  ---------->
                <h2 class="mb-12 text-2xl font-extrabold tracking-wide text-dark-theme">
                    เข้าสู่ระบบ
                </h2>

                <!--------- Card Form  ---------->
                <form>
                    <!--------- Login with Google  ---------->
                    <button type="button"
                        class="w-full font-normal font-montserrat text-base text-[#1E1E1E] flex justify-center items-center tracking-wider bg-white py-2.5 px-4 ring-1 ring-[#F1F1F1] ring-inset rounded-xl transition ease-out duration-300 hover:brightness-95 active:shadow-none active:brightness-90 active:scale-95">
                        <img src="{{ asset('assets/images/icons/icon-google.png') }}" alt="google" class="mr-3" />
                        Login with Google
                    </button>

                    <!--------- OR  ---------->
                    <div class="inline-flex items-center justify-center w-full">
                        <hr class="w-full h-px my-8 bg-gray-200 border-0" />
                        <span
                            class="absolute px-3 font-medium -translate-x-1/2 bg-white text-dark-theme left-1/2">หรือ</span>
                    </div>

                    <div class="mb-5">
                        <label for="email" class="block mb-1.5 text-base font-medium text-dark-theme">
                            ชื่อผู้ใช้ หรือ อีเมล
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <i class="text-lg leading-none text-secondary-80 fi fi-rr-user"></i>
                            </div>
                            <input type="email" id="email"
                                class="bg-white border border-secondary-80 text-base font-normal text-secondary rounded-md placeholder:text-secondary-80 placeholder:font-light focus:text-primary-80 focus:ring-primary focus:border-ring-primary block w-full pl-10 p-2.5"
                                placeholder="name@example.com" />
                        </div>
                    </div>

                    <div class="mb-10">
                        <label for="password" class="block mb-1.5 text-base font-medium text-dark-theme">
                            รหัสผ่าน
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <i class="text-lg leading-none fi fi-rr-lock text-secondary-80"></i>
                            </div>
                            <input type="password" id="password"
                                class="bg-white border border-secondary-80 text-base font-normal text-secondary rounded-md placeholder:text-secondary-80 placeholder:font-light focus:text-primary-80 focus:ring-primary focus:border-ring-primary block w-full pl-10 p-2.5"
                                placeholder="*********" />
                        </div>
                    </div>

                    <button type="button"
                        class="btn-loading block w-full font-normal uppercase text-base text-white text-center tracking-wider bg-primary py-2.5 px-4 rounded-xl shadow-btn transition ease-out duration-300 hover:shadow-[0_4px_10px_#B6B3FF] hover:brightness-95 active:shadow-none active:brightness-90 active:scale-95"
                        onclick="btnLoaded(this)">
                        <span class="hidden btn-spinner">
                            <svg aria-hidden="true" role="status" class="inline w-4 h-4 mr-3 text-white animate-spin"
                                viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                    fill="#E5E7EB" />
                                <path
                                    d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                    fill="currentColor" />
                            </svg>
                            กำลังโหลด...
                        </span>
                        <span class="btn-text">เข้าสู่ระบบ</span>
                    </button>
                </form>
            </div>
            <!--------- Register  ---------->
            <div class="mt-6 text-center font-montserrat" data-aos="fade-up" data-aos-delay="150"
                data-aos-duration="1200" data-aos-once="true">
                <p class="text-sm font-normal tracking-wide text-secondary">
                    ถ้าคุณไม่มีบัญชี?
                    <a href="{{ route('client.auth.register') }}"
                        class="pl-1 font-semibold underline text-dark-theme-80 hover:text-primary active:text-primary">สมัครสมาชิก</a>
                </p>
            </div>
        </div>
        <!--------- Wave  ---------->
        <img src="{{ asset('assets/images/wave-login.svg') }}" class="absolute bottom-0 left-0 z-0 w-full" />
        <!--------- Tree left  ---------->
        <img src="{{ asset('assets/images/icons/tree-lg-color.svg') }}" class="absolute bottom-0 left-10 w-28" />
        <img src="{{ asset('assets/images/icons/tree-md-color.svg') }}" class="absolute bottom-0 w-8 left-64" />
        <img src="{{ asset('assets/images/icons/tree-lg-color.svg') }}" class="absolute bottom-0 left-[32rem] w-28" />
        <img src="{{ asset('assets/images/icons/tree-lg-color.svg') }}" class="absolute bottom-0 left-[42rem] w-20" />
        <!--------- Tree Right  ---------->
        <img src="{{ asset('assets/images/icons/tree-lg-color.svg') }}" class="absolute bottom-0 right-20 w-28" />
        <img src="{{ asset('assets/images/icons/tree-lg-color.svg') }}" class="absolute bottom-0 w-20 right-64" />
        <img src="{{ asset('assets/images/icons/tree-md-color.svg') }}" class="absolute bottom-0 w-8 right-[30rem]" />
    </section>


    @include('layouts.client.partials.script')
</body>

</html>
