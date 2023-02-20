      <!-- Sidebar -->
      <aside class="sticky top-0 left-0 z-20 flex-initial h-full -mr-6 bg-transparent w-80">
          <div class="h-full bg-primary rounded-tr-2xl rounded-br-2xl">
              <!-- Sidebar Head -->
              <div class="flex mb-6 p-7">
                  <h1 class="text-2xl font-semibold tracking-wide text-white">
                      D-Course
                  </h1>
              </div>

              <!-- Menu -->
              <ul>
                  <li>
                      <a href="{{ route('admin.home') }}"
                          class="block w-full py-5 text-base tracking-wide  border-b-2 cursor-pointer px-7 border-secondary/20 {{ Route::currentRouteName() == 'admin.home' ? 'font-semibold text-white bg-secondary/40' : 'text-gray-100 hover:text-white hover:bg-secondary/20' }}">
                          <div class="flex items-center space-x-4">
                              <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                  </path>
                              </svg>
                              <span class="inline-block">หน้าหลัก</span>
                          </div>
                      </a>
                  </li>
                  <li>
                      <a href="{{ route('admin.instructor') }}"
                          class="block w-full py-5 text-base font-medium tracking-wide text-white transition duration-150 ease-linear border-b-2 cursor-pointer px-7 border-secondary/20 {{ Route::currentRouteName() == 'admin.instructor' ? 'font-semibold text-white bg-secondary/40' : 'text-gray-100 hover:text-white hover:bg-secondary/20' }}">
                          <div class="flex items-center space-x-4">
                              <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <path
                                      d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z">
                                  </path>
                              </svg>
                              <span class="inline-block"> ข้อมูลผู้สอน </span>
                          </div>
                      </a>
                  </li>
                  {{-- <li>
                      <a href="{{ route('admin.courses') }}"
                          class="block w-full py-5 text-base font-medium tracking-wide text-gray-100 transition duration-150 ease-linear border-b-2 cursor-pointer px-7 border-secondary/20 {{ Route::currentRouteName() == 'admin.courses' ? 'font-semibold text-white bg-secondary/40' : 'text-gray-100 hover:text-white hover:bg-secondary/20' }}">
                          <div class="flex items-center space-x-4">
                              <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <path d="M9 9a2 2 0 114 0 2 2 0 01-4 0z"></path>
                                  <path fill-rule="evenodd"
                                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a4 4 0 00-3.446 6.032l-2.261 2.26a1 1 0 101.414 1.415l2.261-2.261A4 4 0 1011 5z"
                                      clip-rule="evenodd"></path>
                              </svg>
                              <span class="inline-block"> ตรวจสอบคอร์ส </span>
                          </div>
                      </a>
                  </li> --}}
              </ul>
          </div>
      </aside>
