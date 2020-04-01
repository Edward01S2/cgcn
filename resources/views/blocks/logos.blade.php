<div id="logo-container" class="bg-white shadow shadow-md z-40 transition duration-300">
  <div class="relative">
    <div class="text-center absolute top-0 left-0 right-0 -mt-6">
      <div class="sticky-subtitle bg-c-blue-200 text-white font-semibold px-8 tracking-wider py-2 inline-block text-sm md:text-base lg:text-lg transition duration-300">{!! $subtitle!!}</div>
    </div>
    <div class="sticky-container flex items-center justify-center py-12 pb-8 lg:py-20">
      <div class="sticky-text mr-4 pb-1 font-semibold hidden md:text-lg md:mr-8">{!! $sticky !!}</div>
      <div class="sticky-logos flex items-center justify-center">
        <a class="block hover:opacity-75 transition duration-300" href="{!! $logos[0]['Logo Link']['url'] !!}" target="_blank">
          <img class="h-12 md:h-20 lg:h-24 transition duration-300" src="{!! $logos[0]['Logo']['url'] !!}" alt="">
        </a>
        <span class="font-caslon font-black text-4xl px-8 md:text-6xl lg:px-12">&</span>
        <a class="block hover:opacity-75 transition duration-300 transform" href="{!! $logos[1]['Logo Link']['url'] !!}" target="_blank">
          <img class="h-12 md:h-20 lg:h-24 transition duration-300" src="{!! $logos[1]['Logo']['url'] !!}" alt="">
        </a>
      </div>
    </div>
  </div>
</div>
<div id="sticky_header" class="hidden sticky top-0 bg-white shadow shadow-md z-40 transition duration-300">
  <div class="relative">
    <div class="sticky-container flex items-center justify-center py-2 pt-3">
      <div class="sticky-text mr-4 pb-1 font-semibold md:text-lg md:mr-8">{!! $sticky !!}</div>
      <div class="sticky-logos flex items-center justify-center">
        <a class="block hover:opacity-75 transition duration-300" href="{!! $logos[0]['Logo Link']['url'] !!}" target="_blank">
          <img class="h-8 transition duration-300" src="{!! $logos[0]['Logo']['url'] !!}" alt="">
        </a>
        <span class="font-caslon font-black text-xl px-2 pb-1">&</span>
        <a class="block hover:opacity-75 transition duration-300 transform" href="{!! $logos[1]['Logo Link']['url'] !!}" target="_blank">
          <img class="h-8 transition duration-300" src="{!! $logos[1]['Logo']['url'] !!}" alt="">
        </a>
      </div>
    </div>
  </div>
</div>
