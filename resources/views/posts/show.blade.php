<x-layouts.app   
    :title="$post->title"
    meta-description="Default meta description"
>
<h1>{{ $post->title }}</h1>
<a href="{{ route('posts.index') }}">Regresar</a>
</x-layouts.app> 