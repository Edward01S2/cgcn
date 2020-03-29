<footer>
  <div class="bg-black">
    <div class="container mx-auto px-4 pb-8 sm:px-6 lg:px-8">
      <div class="text-white text-center">
        <div class="border-b border-c-white py-4 md:py-8 lg:max-w-4xl lg:mx-auto">
          @foreach($links as $x)
            <a class="uppercase px-4 py-2 md:text-xl lg:px-8 hover:font-semibold transition duration-300" 
            href="{!! $x['Link'] ['url'] !!}" target="_blank">{!! $x['Link'] ['title'] !!}</a>
          @endforeach
        </div>
        <p class="text-center py-4 mb-0 text-base md:py-8">{!! $subtitle !!}</p>
        <div class="flex items-center justify-center">
          @foreach($logos as $x)
            <a class="px-4 py-2 md:px-8 transform transition hover:scale-105 duration-300" href="{!! $x['Logo Link']['url'] !!}" target="_blank">
              <img class="h-12 md:h-20" src="{!! $x['Logo']['url'] !!}" alt="">
            </a>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</footer>
