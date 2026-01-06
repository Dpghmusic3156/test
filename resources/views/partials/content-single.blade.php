    <header>
        <h2 class="text-4xl font-bold my-6 mx-auto text-center text-primary-600">
            <a href="{{ get_permalink() }}">
                {!! $title !!}
            </a>
        </h2>

    </header>

  {{-- Content Area --}}
  <section class="py-12 ">
    <div class="container mx-auto px-4">
      <div class="max-w-4xl mx-auto">
        
        {{-- Main Content --}}
        <div class="rounded-2xl shadow-lg p-8 md:p-12 mb-12">
          <div class="text-gray-500">
            @php(the_content())
          </div>
        </div>
      </div>
    </div>
  </section>

</article>