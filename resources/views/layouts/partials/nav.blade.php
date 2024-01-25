<nav class="mb-4 bg-primary">

    @auth
    <button><a href="{{route('user.log-out')}}" style="text-decoration: none">@lang('Logout')</a></button>
    <button><a href="{{route('post.create-page')}}" style="text-decoration: none">@lang('Create post')</a></button>
    @else
    <button><a href="{{route('user.login-page')}}" style="text-decoration: none">@lang('Login')</a></button>
    <button>
        <a href="{{route("user.register-page")}}" style="text-decoration: none">@lang('Register')</a>
    </button>
    @endauth
    @include('layouts.partials.lang')


</nav>
