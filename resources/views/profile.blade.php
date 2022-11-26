<x-app-layout title="{{ $username ?? 'Profile' }}">

  <article class="prose mx-auto my-12 px-5">
    <h1>Profile</h1>
    <h3>Halo, namaku {{ $username }}</h3>
  </article>

</x-app-layout>
