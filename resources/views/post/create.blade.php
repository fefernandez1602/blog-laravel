<x-app-layout>
    <h1>Formulario para nuevo Post</h1>

    <form action="{{route('posts.store')}}" method="POST">

        @csrf

        <label>
            Titulo: <input type="text" name="title">
        </label>

        <br>
        <br>


        <label>
            Slug: <input type="text" name="slug">
        </label>

        <br>
        <br>

        <label>
            Categoria: <input type="category" name="categoria">
        </label>

        <br>
        <br>
        
        <label>
            Contenido: <textarea name="content" id="" cols="50" rows="10"></textarea>
        </label>

        <br>
        <br>

        <button type="submit"> 
            Crear Post 
        </button>
    </form>
</x-app-layout>