    <header>
        <h2 class="text-4xl font-bold my-6 text-center text-primary-600">
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
          <div class="prose prose-lg max-w-none
                      prose-headings:text-gray-900 prose-headings:font-bold
                      prose-h2:text-3xl prose-h2:mt-8 prose-h2:mb-4 prose-h2:text-primary-600
                      prose-h3:text-2xl prose-h3:mt-6 prose-h3:mb-3
                      prose-p:text-gray-700 prose-p:leading-relaxed prose-p:mb-4
                      prose-a:text-primary-600 prose-a:no-underline hover:prose-a:text-primary-700 hover:prose-a:underline
                      prose-strong:text-gray-900 prose-strong:font-bold
                      prose-ul:my-6 prose-ol:my-6
                      prose-li:text-gray-700 prose-li:my-2
                      prose-img:rounded-xl prose-img:shadow-md prose-img:my-8
                      prose-blockquote:border-l-4 prose-blockquote:border-primary-500 prose-blockquote:pl-4 prose-blockquote:italic prose-blockquote:text-gray-600
                      prose-code:bg-gray-100 prose-code:text-primary-600 prose-code:px-1 prose-code:py-0.5 prose-code:rounded
                      prose-pre:bg-gray-900 prose-pre:text-gray-100">
            @php(the_content())
          </div>
        </div>
      </div>
    </div>
  </section>

</article>