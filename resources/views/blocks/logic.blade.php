<div class="bg-center bg-cover" style="background-image:url({!! $bg['url'] !!});">
  <div class="container mx-auto py-12 px-4 py-8 sm:px-6 md:py-16 lg:px-8 lg:pt-24">
    <div class="logic-content max-w-5xl mx-auto">
      {!! $content !!}
    </div>
    <div class="py-12">
      <div class="bg-white max-w-5xl mx-auto">
        @php echo do_shortcode('[decisiontree id="58"]'); @endphp
      </div>
    </div>
  </div>
</div>