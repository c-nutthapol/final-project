              <aside class="sticky left-0 space-y-8 top-24">
                  <ul class="flex flex-col flex-wrap text-base font-medium font-ibm">
                      <li>
                          <a href="{{ route('client.teacher.course.manage.overview') }}"
                              class="block p-4 text-left  {{ Route::currentRouteName() == 'client.teacher.course.manage.overview' ? 'text-primary' : 'text-secondary' }}">
                              ภาพรวมของหลักสูตร
                          </a>
                      </li>
                      <li>
                          <a href="{{ route('client.teacher.course.manage.learn') }}"
                              class="block p-4 text-left {{ Route::currentRouteName() == 'client.teacher.course.manage.learn' ? 'text-primary' : 'text-secondary' }}">
                              สิ่งที่ผู้เรียนจะได้เรียนรู้
                          </a>
                      </li>
                      <li>
                          <a href="{{ route('client.teacher.course.manage.requirements') }}"
                              class="block p-4 text-left {{ Route::currentRouteName() == 'client.teacher.course.manage.requirements' ? 'text-primary' : 'text-secondary' }}">
                              สิ่งที่ผู้เรียนต้องมี
                          </a>
                      </li>
                  </ul>
              </aside>
