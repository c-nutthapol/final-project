<div class="relative h-[75vh] bg-transparent m-4">
    @if ($status == 'done')
        <div class="flex items-center justify-center h-full">
            <div class="bg-white/70 backdrop-blur-lg w-[42rem] p-8 rounded-2xl shadow-card-course">
                <div class="grid grid-cols-10 gap-3 grid-flow-row">
                    คะแนน {{ $answer_scores . ' / ' . $quest_length }}
                </div>
            </div>
        </div>
    @else
        <div class="flex items-center justify-center h-full grid grid-cols-2 grid-flow-col">
            <div class="bg-white/70 backdrop-blur-lg w-[42rem] p-8 rounded-2xl shadow-card-course">
                <h3 class="text-lg font-medium tracking-wide text-secondary">{{ $title }}</h3>
                <div class="mt-6 space-y-4">
                    @foreach ($choices as $c_key => $choice)
                        <div class="flex items-center">
                            <input id="radio-quiz-{{ $c_key }}" type="radio" name="quiz"
                                value="{{ $c_key }}"
                                class="w-4 h-4 bg-gray-100 border-gray-300 cursor-pointer text-primary focus:ring-primary-80"
                                wire:model="questions.{{ $key }}.reply" />
                            <label for="radio-quiz-{{ $c_key }}"
                                class="pl-3 text-base font-normal cursor-pointer text-secondary">
                                {{ $choice }}
                            </label>
                        </div>
                    @endforeach
                </div>
                <div class="flex items-center justify-end space-x-2 mt-6">
                    @if ($key > 0)
                        <button type="button" class="flex items-center btn is-primary"
                            onclick="@this.set('q','{{ Hashids::encodeHex($key - 1) }}')">
                            <span class="inline-block ml-2 text-sm">ก่อนหน้า</span>
                        </button>
                    @endif
                    @if ($key < $quest_length && $key != $quest_length - 1)
                        <button type="button" class="flex items-center btn is-primary"
                            onclick="@this.set('q','{{ Hashids::encodeHex($key + 1) }}')">
                            <span class="inline-block ml-2 text-sm">ต่อไป</span>
                        </button>
                    @endif

                    @if ($sent_reply)
                        <button type="button" onclick="@this.submit()" class="flex items-center btn is-primary">
                            <i class="leading-none fi fi-rr-paper-plane"></i>
                            <span class="inline-block ml-2 text-sm">ส่งคำตอบ</span>
                        </button>
                    @endif
                </div>
            </div>
            <div class="bg-white/70 backdrop-blur-lg w-[42rem] p-8 rounded-2xl shadow-card-course">
                <div class="grid grid-cols-10 gap-3 grid-flow-row">
                    @php($i = 1)
                    @foreach ($questions as $i_key => $item)
                        <div>
                            @php($hash = Hashids::encodeHex($i_key))
                            @if ($i_key == $key)
                                <button id="questions-{{ $hash }}" type="button"
                                    class="items-center btn is-primary">
                                    <span class="inline-block text-sm">{{ $i++ }}</span>
                                </button>
                            @else
                                <button id="questions-{{ $hash }}" type="button"
                                    class="items-center btn @if (in_array($i_key, $unanswered)) is-danger @else is-success @endif"
                                    onclick="@this.set('q','{{ $hash }}')">
                                    <span class="inline-block text-sm">{{ $i++ }}</span>
                                </button>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif


</div>
