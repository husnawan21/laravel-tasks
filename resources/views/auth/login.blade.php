<x-app-layout title="Login">
  <div class="mx-auto px-5 pb-12 pt-52 prose max-w-lg">
    @if (session()->has('logginError'))
      <h3>{{ session()->get('loginError') }}</h3>
    @endif
    <div class="px-8 py-8 rounded-2xl shadow-xl shadow-primary/20 bg-base-200">
      <h1>Login</h1>
      <div>
        <form action="{{ route('login') }}" method="post">
          @csrf
          <div class="form-control w-full my-4">
            <label for="email" class="label">
              <span class="label-text">Email</span>
            </label>
            <input type="email" id="email" name="email" placeholder="name@email.com"
              value="{{ old('email') ?? '' }}"
              class="input input-bordered w-full @error('email') border-error @enderror" required />
            @error('email')
              <p class="text-red-600 leading-none">
                {{ $message }}
              </p>
            @enderror
          </div>
          <div class="form-control w-full my-4">
            <label for="password" class="label">
              <span class="label-text">Password</span>
            </label>
            <input type="password" id="password" name="password" placeholder="Your password"
              class="input input-bordered w-full @error('password') border-error @enderror" required />
            @error('password')
              <p class="text-red-600 leading-none">
                {{ $message }}
              </p>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary w-full my-4">Sign in</button>
        </form>
        <p>Don't have an account? <a href="{{ route('register') }}" class="text-primary font-semibold hover:italic">Sign
            up now</a>
        </p>
      </div>
    </div>
</x-app-layout>
