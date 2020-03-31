<div class="bg-center bg-cover" style="background-image:url({!! $bg['url'] !!});">
  <div class="container mx-auto py-12 px-4 py-8 sm:px-6 md:py-16 lg:px-8 lg:pt-24">
    <div class="logic-content max-w-5xl mx-auto">
      {!! $content !!}
    </div>
  </div>
</div>
<div class="bg-c-blue-200">
  <div class="container mx-auto px-4 py-8 sm:px-6 lg:px-8">
    <h3 class="text-white font-semibold text-center text-3xl pb-4 leading-snug md:max-w-2xl md:mx-auto md:text-5xl md:py-8">{!! $title !!}</h3>
    <div class="bg-white max-w-5xl mx-auto">
      @php echo do_shortcode('[decisiontree id="58"]'); @endphp
    </div>
    <div class="text-center pt-12 pb-4 md:pt-20 md:pb-12">
      <a class="uppercase font-semibold text-c-blue-200 bg-c-blue-100 px-8 py-3 text-3xl hover:border-c-blue-100 hover:border-2 hover:bg-c-blue-200 hover:text-c-blue-100 md:py-4" href="{!! $btn['link'] !!}" target="blank">{!! $btn['title'] !!}</a>
    </div>
  </div>
</div>
<div class="bg-c-blue-100 shadow-md">
  <div class="container mx-auto px-4 py-8 pb-12 sm:px-6 lg:px-8">
    <h3 class="text-c-blue-200 font-semibold text-center text-3xl pb-4 leading-snug md:max-w-2xl md:mx-auto md:text-5xl md:py-8">{!! $forgive_title !!}</h3>
    <div class="text-center md:pt-4 md:pb-8">
      <a class="uppercase font-semibold text-c-blue-100 bg-c-blue-200 bg-c-blue-100 px-8 py-3 text-3xl hover:border-c-blue-200 hover:border-2 hover:bg-c-blue-100 hover:text-c-blue-200 md:py-4" href="{!! $forgive_btn['link'] !!}" target="blank">{!! $forgive_btn['title'] !!}</a>
    </div>
  </div>
</div>