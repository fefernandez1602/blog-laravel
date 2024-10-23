<x-app-layout>
    <h1>Formulario para modificar Post</h1>

    <form action="{{ route('posts.update', $post) }}" method="POST">

        @csrf

        @method('PUT')

        <label>
            Titulo: <input type="text" name="title" value="{{old('title', $post->title)}}">
        </label>

        @error('title')
            <p>
                {{ $message }}
            </p>
        @enderror


        <br>
        <br>

        <label>
            Slug: <input type="text" name="slug" value="{{old('slug', $post->slug)}}">
        </label>


        @error('slug')
            <p>
                {{ $message }}
            </p>
        @enderror

        <br>
        <br>


        <label>
            Categoria: <input type="category" name="categoria" value="{{old('categoria', $post->categoria)}}">
        </label>

        @error('categoria')
            <p>
                {{ $message }}
            </p>
        @enderror

        <br>
        <br>

        <label>
            Contenido:
            <textarea name="content" id="" cols="50" rows="10">value="{{old('content', $post->content)}}"</textarea>
        </label>

        @error('content')
            <p>
                {{ $message }}
            </p>
        @enderror

        <br>
        <br>

        <button type="submit">
            Modificar Post
        </button>
    </form>
</x-app-layout>
