<form action="/tasks" method="post">
  @csrf
  @include('tasks._form')
  @error('list')
    <p class="text-red-600">
      {{ $message }}
    </p>
  @enderror
</form>
