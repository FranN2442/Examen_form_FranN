<h1>POSTS TABLE</h1>
<form action="{{ route('user.index') }}" method="GET">
    <label for="filter">Filtrar:</label>
    <select name="filter" id="filter">
        <option value="mine">Mis posts</option>
        <option value="all">Todos</option>
    </select>
    <button type="submit">Filtrar</button>
</form>
@if (sizeOf($posts) == 0)

    <p>No tienes ningun post!</p>
@else
    
    <table>

        <th>@lang('Title')</th>
        <th>@lang('Content')</th>

        @foreach ($posts as $post)
            <tr>
                <td>{{ $post->titulo }}</td>
                <td>{{ $post->contenido_post }}</td>
            </tr>
        @endforeach


    </table>
@endif
