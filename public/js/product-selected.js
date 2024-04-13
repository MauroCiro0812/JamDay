window.onload = function () {
    const selectElement = document.getElementById('id_producto');
    const productInfoElement_nombre = document.getElementById('product-info-nombre');
    const productInfoElement_categoria = document.getElementById('product-info-categoria');
    const productInfoElement_subCategoria = document.getElementById('product-info-subCategoria');
    const productInfoElement_color = document.getElementById('product-info-color');
    const productInfoElement_precio = document.getElementById('product-info-precio');
    let imgElement = document.getElementById('product-image');



    // Unirse al canal y escuchar el evento una sola vez cuando se carga la página
    Echo.join('product-selected')
        .listen('ProductSelected', (e) => {
            console.log(e.product);
            // Actualizar la información del producto cada vez que se recibe el evento
            productInfoElement_nombre.innerText = `Nombre: ${e.product.nombre}`;
            productInfoElement_categoria.innerText = `Categoría: ${e.product.nombre_categoria}`;
            productInfoElement_subCategoria.innerText = `Subcategoría: ${e.product.nombre_subCategoria}`;
            productInfoElement_color.innerText = `Color: ${e.product.nombre_color}`;
            productInfoElement_precio.innerText = `Precio: ${e.product.precio}`;
        });

    selectElement.addEventListener('change', function () {
        const productId = this.value;

        // Hacer una solicitud AJAX para obtener la información del producto
        axios.post('/select-product', { product: productId })
            .then(function (response) {
                console.log(response.data);
                // Actualizar la información del producto en los divs
                productInfoElement_nombre.innerText = `Nombre: ${response.data.nombre}`;
                productInfoElement_categoria.innerText = `Categoría: ${response.data.nombre_categoria}`;
                productInfoElement_subCategoria.innerText = `Subcategoría: ${response.data.nombre_subCategoria}`;
                productInfoElement_color.innerText = `Color: ${response.data.nombre_color}`;
                productInfoElement_precio.innerText = `Precio: ${response.data.precio}`;
                imgElement.src = response.data.foto;
            })
            .catch(function (error) {
                console.log(error);
            });

    });
}
