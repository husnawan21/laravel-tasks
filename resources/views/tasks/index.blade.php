<x-app-layout title="All Tasks">
  <article class="prose mx-auto px-5 pb-12 pt-20">
    <div class=" px-8 pt-6 pb-10 rounded-2xl shadow-xl shadow-primary/20 bg-base-200">
      <div class="flex justify-between">
        <h1>Tasks</h1>
        <span class=""><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-9 h-9">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75" />
          </svg>
        </span>
      </div>
      <div>
        @include('tasks._create')
      </div>
      <ul class="px-3 py-2 mt-8 rounded-xl bg-base-100 shadow-sm shadow-primary/10">
        @foreach ($tasks as $task)
          <li class="list-none flex rounded-md border-b py-2 border-base-200 hover:bg-base-200 last:border-b-0">
            <div><span class="indicator-item badge badge-primary mr-2 py-3">{{ $loop->iteration }}</span></div>
            <div class="justify-between flex w-full">
              <div>{{ $task->list }}</div>
              <div class="flex flex-row mx-2">
                <a href="{{ route('tasks.edit', $task->id) }}"
                  class="btn btn-sm btn-circle btn-outline mr-2 hover:bg-success hover:border-none hover:shadow">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="w-4 h4">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                  </svg>
                </a>
                <form action="{{ route('tasks.destroy', $task->id) }}" method="post" class="flex">
                  @csrf
                  @method('delete')
                  <button type="submit"
                    class="btn btn-sm btn-circle btn-outline hover:bg-error hover:border-none hover:shadow">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                      stroke="currentColor" class="w-4 h4">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>

                  </button>
                </form>
              </div>
            </div>
          </li>
        @endforeach
      </ul>
    </div>
  </article>
</x-app-layout>
