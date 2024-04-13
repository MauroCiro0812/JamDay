<head>
    <meta charset="utf-8">
    <title>Profile Card</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/card-producto.css') }}">
</head>


<div class="container">
    {{ Form::open(['route' => 'productosindex', 'method' => 'GET']) }}
    

    <div class="row">
        <div class="form-group">
            {{ Form::select('id_categoria', $productos2->pluck('categoria.nombre', 'id_categoria'), null, ['class' => 'form-control', 'placeholder' => 'Categoría']) }}
        </div>
    </div>

    <div class="row">
        <div class="form-group">
            {{ Form::select('id_marca', $productos2->pluck('marca.nombre', 'id_marca'), null, ['class' => 'form-control', 'placeholder' => 'Marca']) }}
        </div>
    </div>

    <div class="row">
        <div class="form-group" style="display: none;">
            {{ Form::select('id_color', $productos2->pluck('color.nombre', 'id_color'), null, ['class' => 'form-control', 'placeholder' => 'Color', 'id' => 'colorSelect']) }}
        </div>
        <div class="form-group">
            <div class="color">
                <div class="btn-group " role="group" aria-label="Colores" style="flex-wrap: wrap;">
                    <button type="button" class="btn" style="background-color: black;" value="1"></button>
                    <button type="button" class="btn" style="background-color: white;" value="2"></button>
                    <button type="button" class="btn" style="background-color: beige;" value="3"></button>
                    <button type="button" class="btn" style="background-color: gray;" value="4"></button>
                    <button type="button" class="btn" style="background-color: brown;" value="5"></button>
                    <button type="button" class="btn" style="background-color: blue;" value="6"></button>
                    <button type="button" class="btn" style="background-color: yellow;" value="7"></button>     
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="btn-group" role="group" aria-label="Colores" style="flex-wrap: wrap;">
                            <button type="button" class="btn" style="background-color: orange;" value="8"></button>
                            <button type="button" class="btn" style="background-color: rgb(106, 12, 12); " value="9"></button>
                            <button type="button" class="btn" style="background-color: green;" value="10"></button>
                            <button type="button" class="btn" style="background-color: gold;" value="11"></button>
                            <button type="button" class="btn" style="background-color: pink;" value="12"></button>
                            <button type="button" class="btn" style="background-color: red;" value="13"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
        $(".color .btn-group .btn ").click(function() {
        var value = $(this).val(); // Obtiene el valor del botón
        $("#colorSelect").val(value); // Establece el valor del select
    });
});
</script>    


    <div class="row " style="display: block; ">
        <div class="form-group" style="display: none;" >
            {{ Form::select('id_talla', $productos2->pluck('talla.tallas', 'id_talla'), null, ['class' => 'form-control', 'placeholder' => 'Talla']) }}
        </div>
        <div class="talla" >
            <div class="form-group">
                <div class="btn-group" role="group" aria-label="Tallas">
                    <button type="button" class="btn btn-light" value="1">XS</button>
                    <button type="button" class="btn btn-light" value="2">S</button>
                    <button type="button" class="btn btn-light" value="3">M</button>
                    <button type="button" class="btn btn-light" value="4">L</button>
                    <button type="button" class="btn btn-light" value="5">XL</button>
                </div>
            </div>
        </div>
        
    </div>

    <script>
        $(document).ready(function() {
        $(".talla .btn-group .btn").click(function() {
        var value = $(this).val(); // Obtiene el valor del botón
        $("select[name='id_talla']").val(value); // Establece el valor del select
        });
    });

    </script>


    <div class="row">
        <div class="form-group">
            {{ Form::select('id_sub_categoria', $productos2->pluck('sub_categoria.nombre', 'id_sub_categoria'), null, ['class' => 'form-control', 'placeholder' => 'Sub categoria']) }}
        </div>
    </div>


    <div class="row">
        <div class="form-group">
            <button type="submit" class="btn btn-default">
                <i class="bi bi-search"></i>
            </button>
        </div>
    </div>
    {{ Form::close() }}
</div>
