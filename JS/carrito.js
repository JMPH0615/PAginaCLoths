// carrito.js

document.addEventListener("DOMContentLoaded", function () {
    // Función para agregar un producto al carrito
    function agregarAlCarrito(id, nombre, precio) {
        // Lógica para agregar el producto al carrito aquí
        // Por ejemplo, puedes agregar un nuevo elemento a la lista del carrito
        var carritoLista = document.getElementById("carritoLista");
        var nuevoElemento = document.createElement("li");
        nuevoElemento.className = "list-group-item";
        nuevoElemento.textContent = nombre + " - Precio: $" + precio;
        carritoLista.appendChild(nuevoElemento);

        // Actualizar el total del carrito (puedes implementar esta lógica según tus necesidades)
        actualizarTotalCarrito();
    }

    // Lógica para actualizar el total del carrito
    function actualizarTotalCarrito() {
        // Implementa la lógica para calcular el total del carrito y actualizar el elemento correspondiente
        // Puedes usar variables y funciones adicionales según tus necesidades
    }

    // Lógica para obtener la lista de productos mediante AJAX
    function obtenerProductos() {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var productos = JSON.parse(xhr.responseText);

                // Puedes mostrar los productos en la consola para verificar
                console.log(productos);

                // Puedes iterar sobre los productos y agregar botones o lógica de clic según tus necesidades
                productos.forEach(function (producto) {
                    var botonAgregar = document.createElement("button");
                    botonAgregar.className = "btn btn-primary";
                    botonAgregar.textContent = "Agregar al carrito";
                    botonAgregar.onclick = function () {
                        agregarAlCarrito(producto.id, producto.nombre_producto, producto.precio);
                    };

                    // Agregar el botón al DOM según tu estructura HTML
                    // Por ejemplo, puedes agregarlo a un div con un ID específico
                    var contenedorBotones = document.getElementById("contenedorBotones");
                    contenedorBotones.appendChild(botonAgregar);
                });
            }
        };

        xhr.open("GET", "obtener_productos.php", true);
        xhr.send();
    }

    // Llamar a la función para obtener productos al cargar la página
    obtenerProductos();
});
