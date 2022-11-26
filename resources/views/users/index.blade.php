<x-app-layout title="Users">
  <article class="prose mx-auto px-5 pb-12 pt-20">
    <h1>Users</h1>
    <div>
      <ul>
        @foreach ($users as $user)
          <li><a href="{{ route('users.show', $user) }}">{{ $user->name }}</a></li>
        @endforeach
      </ul>
    </div>
  </article>
</x-app-layout>
