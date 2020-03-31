<div class="faq_block xl:max-w-5xl xl:mx-auto">
  <div class="">
    <div class="bg-white">
      <h3 class="text-2xl bg-c-blue-100 mb-0 text-c-blue-200 px-4 py-2 md:text-3xl lg:text-4xl lg:px-6 lg:py-4">{!! $title !!}</h3>
      <div>
        @foreach($items as $i)
          <div class="faq-item border-b border-c-gray-100 shadow-xs" x-data="{ open: false }">
            <div class="flex items-center justify-between mx-4 py-4 lg:mx-6 lg:py-4">
              <div class="font-semibold text-p-gray-300 text-lg md:text-2xl">{!! $i['Question'] !!}</div>
              <button @click="open = !open" type="button" class="inline-block bg-c-gray-100 p-1 outline-none rounded transform ml-2 focus:outline-none lg:ml-8">
                <svg class="h-5 w-5 fill-current text-black md:h-8 md:w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                  <path x-show="open" d="M17 11a1 1 0 0 1 0 2H7a1 1 0 0 1 0-2h10z"/>
                  <path x-show="!open" d="M17 11a1 1 0 0 1 0 2h-4v4a1 1 0 0 1-2 0v-4H7a1 1 0 0 1 0-2h4V7a1 1 0 0 1 2 0v4h4z" />
                </svg>
              </button>
            </div>
            <div x-show="open" class="px-4 faq-content md:pb-4 lg:px-6">
              {!! $i['Answer'] !!}
            </div>

          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>

