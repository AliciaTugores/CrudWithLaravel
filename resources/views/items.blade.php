<!DOCTYPE html>
<html>
    <body>
        <form action="{{ route('item.store') }}" method ="POST">
            @csrf
            <!-- 
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach -->

            @error('id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br/>
            @error('nombre')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br/>
            @error('categoria')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br/>
            @error('precio')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br/>
            @error('stock')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br/>

            <label>
                Id:
                <input type="number" name="id" value="{{ old('id')}}" placeholder="El id del producto" >
                <br/>
            </label>
            <br>
            <label>
                Nombre:
                <input type="text" name="nombre" value="{{ old('nombre')}}" placeholder="nombre" >
                <br/>
            </label>
            <br>
            <label>
                Categoría:
                <input type="text" name="categoria" value="{{ old('categoria')}}" placeholder="categoría" >
                <br/>
            </label>
            <br>
            <label>
                Precio:
                <input type="number" name="precio" value="{{ old('precio')}}" placeholder="precio" >
                <br/>
            </label>
            <br>
            <label>
                Stock:
                <input type="number" name="stock" value="{{ old('stock')}}" placeholder="stock" >
                <br/>
            </label>
            <br>
            <input type="submit" value="Guardar">
        </form>
    </body>
</html>