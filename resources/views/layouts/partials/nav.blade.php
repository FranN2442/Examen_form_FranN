<nav class="mb-4 bg-primary">

    @auth
        <button><a href="{{route('user.log-out')}}" style="text-decoration: none">@lang('Logout')</a></button>
        <button><a href="{{route('post.create-page')}}" style="text-decoration: none">@lang('Create Post')</a></button>
    @else
        <button><a href="{{route('user.login-page')}}" style="text-decoration: none">@lang('Login')</a></button>
    @endauth
    <form id="languageForm" action="{{ route('lang.switch', app()->getLocale()) }}" method="GET">
        @csrf
        <select name="locale" onchange="this.form.submit()">
            <option value="en" {{ app()->getLocale() === 'en' ? 'selected' : '' }}>@lang('English')</option>
            <option value="es" {{ app()->getLocale() === 'es' ? 'selected' : '' }}>@lang('Spanish')</option>
        </select>
    </form>


</nav>
