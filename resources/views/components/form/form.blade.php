<form {{ $attributes }} action="{{ $action }}" method="POST">
    @csrf
    @method($method)
    {{ $slot }}
</form>
