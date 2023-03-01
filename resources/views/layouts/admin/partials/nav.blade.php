          <nav
              class="sticky top-0 right-0 z-10 flex items-center justify-between w-full bg-white p-7 shadow-card-course">
              <!-- Nav Brand -->
              <div class="ml-6 cursor-pointer">
                  <svg class="w-10 h-10 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                      </path>
                  </svg>
              </div>
              <!-- Nav Menu -->
              <div>
                  <ul class="flex flex-row items-center space-x-5">
                      <li>
                          <div
                              class="flex items-center px-2 py-1.5 space-x-4 rounded-full bg-primary/10 text-primary font-bold tracking-wide">
                              <img src="{{ !is_null(auth()->user()->avatar) && Storage::disk('public')->exists(auth()->user()->avatar) ? Storage::disk('public')->url(auth()->user()->avatar) : 'https://www.salonlfc.com/wp-content/uploads/2018/01/image-not-found-1-scaled-1150x647.png' }}"
                                  alt="Avatar" class="object-cover object-center w-10 h-10 rounded-full" />
                              <span>{{ auth()->user()->full_name }}</span>
                          </div>
                      </li>
                      <li>
                          <a href="{{ route('client.home') }}"
                              class="flex items-center justify-center w-12 h-12 rounded-full hover:bg-primary/10 text-secondary">
                              <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd"
                                      d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z"
                                      clip-rule="evenodd"></path>
                              </svg>
                          </a>
                      </li>
                  </ul>
              </div>
          </nav>
