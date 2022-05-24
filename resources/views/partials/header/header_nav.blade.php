<section class="container-fluid">
    <div class="row">
        <nav class="bg-primary">
            <ul class="d-flex list-unstyled align-items-baseline py-2">
                <li class="nav-item">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{-- config name --}}
                        {{ config('app.name', 'Boolblog') }} <em>(@yield('title'))</em>
                    </a>
                </li>
                
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                    @else
                    <li class="nav-item">
                        {{-- %class for toggle-- nav-item dropdown nav-link dropdown-toggle --}}
                        <a id="navbarDropdown" class="mx-2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Welcome  {{ Auth::user()->name }}
                        </a>
                    </li>
                    <li class="nav-item">
                        {{-- # link to the form create --}}
                        <a class="nav-link mx-2" href="{{route('posts.create')}}">Insert new Post</a>
                    </li>
                    <li class="nav-item">
                        {{-- Route to see all the posts  --}}
                        <a class="nav-link mx-2" href="{{route('posts.index')}}"> Show all your posts </a>
                    </li>

                    <li class="nav-item"> 
                        <div aria-labelledby="navbarDropdown">
                            <a class="ms-2" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
                
            </ul>
        </nav>
    </div>
</section>

