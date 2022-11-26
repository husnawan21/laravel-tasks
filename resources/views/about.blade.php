<x-app-layout title="About">
  <div class="bg-gradient-to-b from-primary to-base-300">
    <article class="px-5 pt-20 pb-12 mx-auto prose">
      <div class="pt-12 hero">
        <div class="text-center hero-content">
          <div class="max-w-md">
            <h1 class="text-5xl font-bold">Hello
              @auth
                {{ auth()->user()->name }}
              @else
                there
              @endauth </h1>
            <p class="py-6">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
              quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
          </div>
        </div>
      </div>
    </article>
  </div>
</x-app-layout>
