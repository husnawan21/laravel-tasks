<x-app-layout title="Register">
  <div class="mx-auto px-5 pb-12 pt-40 prose max-w-lg">
    <div class="px-8 py-8 rounded-2xl shadow-xl shadow-primary/20 bg-base-200">
      <h1>Register</h1>
      <div>
        <form action="{{ route('register') }}" method="post">
          @csrf
          <div class="form-control w-full my-2">
            <label for="email" class="label">
              <span class="label-text">Email</span>
            </label>
            <input type="email" id="email" name="email" placeholder="name@email.com"
              value="{{ old('email') ?? '' }}"
              class="input input-bordered w-full @error('email') border-error @enderror" />
            @error('email')
              <p class="text-red-600 leading-none">
                {{ $message }}
              </p>
            @enderror
          </div>
          <div class="form-control w-full my-2">
            <label for="name" class="label">
              <span class="label-text">Name</span>
            </label>
            <input type="text" id="name" name="name" placeholder="Your name" value="{{ old('name') ?? '' }}"
              class="input input-bordered w-full @error('name') border-error @enderror" />
            @error('name')
              <p class="text-red-600 leading-none">
                {{ $message }}
              </p>
            @enderror
          </div>
          <div class="form-control w-full my-2">
            <label for="username" class="label">
              <span class="label-text">Username</span>
            </label>
            <input type="text" id="username" name="username" placeholder="Your username"
              value="{{ old('username') ?? '' }}"
              class="input input-bordered w-full @error('username') border-error @enderror" />
            @error('username')
              <p class="text-red-600 leading-none">
                {{ $message }}
              </p>
            @enderror
          </div>
          <div class="form-control w-full my-2">
            <label for="password" class="label">
              <span class="label-text">Password</span>
            </label>
            <input type="password" id="password" name="password" placeholder="Your password"
              class="input input-bordered w-full @error('password') border-error @enderror" />
            @error('password')
              <p class="text-red-600 leading-none">
                {{ $message }}
              </p>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary w-full my-4">Create account</button>
        </form>
        <p>Already have an account? <a href="{{ route('login') }}" class="text-primary font-semibold hover:italic">Sign
            in</a>
      </div>
    </div>
</x-app-layout>
