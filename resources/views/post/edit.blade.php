<x-app-layout>
    <h1>Formulario para modificar Post</h1>

    <form action="{{route('posts.update', $post)}}" method="POST">

        @csrf

        @method('PUT')

        <label>
            Titulo: <input type="text" name="title" value="{{$post->title}}">
        </label>

        <br>
        <br>

        <label>
            Slug: <input type="text" name="slug" value="{{$post->slug}}">
        </label>

        <br>
        <br>


        <label>
            Categoria: <input type="category" name="categoria" value="{{$post->categoria}}">
        </label>

        <br>
        <br>
        
        <label>
            Contenido: <textarea name="content" id="" cols="50" rows="10" >{{$post->content}}</textarea>
        </label>

        <br>
        <br>

        <button type="submit"> 
            Modificar Post 
        </button>
    </form>
</x-app-layout>