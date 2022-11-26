<div class="form-control">
  <div class="input-group">
    <input type="text" placeholder="Enter your task.." value="{{ old('list') ?? $task->list }}"
      class="input input-bordered w-full @error('list') border-error @enderror" name="list" />
    <button class="btn btn-square" type="submit">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
        class="w-5 h-5">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
      </svg>
    </button>
  </div>
</div>
