<x-app-layout title="Home Page">
  <div class="bg-gradient-to-b from-primary to-base-300">
    <article class="prose mx-auto px-5 pb-12 pt-20">
      <div class="hero pt-12">
        <div class="hero-content text-center">
          <div class="max-w-md">
            <h1 class="text-5xl font-bold">Hello there</h1>
            @if (session()->has('success'))
              <h3>{{ session()->get('success') }}</h3>
            @endif
            <p class="py-6">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
              quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
            <a href="{{ route('tasks.index') }}" class="btn btn-primary">Get Started</a>
          </div>
        </div>
      </div>
    </article>
  </div>
</x-app-layout>
