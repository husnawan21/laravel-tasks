<div class="navbar bg-base-300/60 fixed top-0 z-30 backdrop-blur-lg">
  <div class="navbar-start">
    <div class="dropdown">
      <label tabindex="0" class="btn btn-ghost lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
        </svg>
      </label>
      <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
        @foreach ($navbar as $name => $url)
          <li><a href="{{ $url }}">{{ $name }}</a></li>
        @endforeach
      </ul>
    </div>
    <a href="/" class="btn btn-ghost normal-case text-xl">uTask</a>
  </div>
  <div class="navbar-center hidden lg:flex">
    <ul class="menu menu-horizontal p-0">
      @foreach ($navbar as $name => $url)
        <li><a href="{{ $url }}">{{ $name }}</a></li>
      @endforeach
    </ul>
  </div>
  <div class="navbar-end">
    @auth
      <div class="dropdown dropdown-end">
        <label tabindex="0" class="btn btn-ghost btn-circle sm:btn-block avatar">
          <span class="hidden md:block ml-4 mr-2 font-semibold capitalize text-base">Halo,
            {{ auth()->user()->name }}</span>
          <div class="w-10 rounded-full">
            <img src="{{ asset('images/default.png') }}" />
          </div>
        </label>
        <ul tabindex="0" class="mt-3 p-2 shadow menu menu-compact dropdown-content bg-base-100 rounded-box w-52">
          <li>
            <a class="justify-between">
              Profile
              <span class="badge">New</span>
            </a>
          </li>
          <li><a>Settings</a></li>
          <div class="divider my-0"></div>
          <li>
            <form action="{{ route('logout') }}" method="post">
              @csrf
              <button type="submit">Logout</button>
            </form>
          </li>
        </ul>
      </div>
    @else
      <a href="{{ route('login') }}" class="btn btn-primary {{ Request::is('login') ? 'hidden' : '' }}">Login</a>
    @endauth
  </div>
</div>
