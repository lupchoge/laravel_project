<x-layouts.app   
    title="Create new post"
    meta-description="Formulario para crear un nuevo blog post"
>
<h1>Create new post</h1>

<form action="{{ route('posts.store') }}" method="post">
    @csrf
    <label>
        Title <br>
        <input name="title" type="text" value="{{ old('title') }}">  
        @error('title')
            <br>
            <small style="color: red">{{ $message }}</small>
        @enderror
    </label> <br>
    <label>
        Body <br>
        <textarea name="body">{{old('body')}}</textarea> <br>
        @error('body')
            <small style="color: red">{{ $message }}</small> 
            <br>
        @enderror
    </label>
    <button type="submit">Enviar</button> 
</form> 
<a href="{{ route('posts.index') }}">Regresar</a>
</x-layouts.app>