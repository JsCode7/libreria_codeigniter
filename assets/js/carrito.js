document.addEventListener('DOMContentLoaded', () => {
  // Variables
  const baseDeDatos = [
      {
          id: 1,
          nombre: 'Astrofisica para gente apurada',
          autor:'Neil deGrasse Tyson',
          precio: 9990
      },
      {
          id: 2,
          nombre: 'Narraciones Extraordinarias',
          autor:'Edgar Allan Poe',
          precio: 6990
      },
      {
          id: 3,
          nombre: 'Frankenstein',
          autor: 'Mary Shelley',
          precio: 6990
      },
      {
          id: 4,
          nombre: 'Homo Deus',
          autor: 'Yuval Noah Harari',
          precio: 9990
      },
      {
          id: 5,
          nombre: 'Harry Potter y la Piedra Filosofal',
          autor: 'J.K Rowling',
          precio: 8990
      },
      {
          id: 6,
          nombre: 'Los mejores cuentos de Horacio Quiroga',
          autor: 'Horacio Quiroga',
          precio: 9990
      },
      {
          id: 7,
          nombre: 'Matilda',
          autor: 'Roald Dahl',
          precio: 9990
      },
      {
          id: 8,
          nombre: 'Joyland',
          autor: 'Stephen King',
          precio: 13990
      },
      {
          id: 9,
          nombre: 'El principito',
          autor: 'Antoine de Saint-Exupery',
          precio: 6990
      }
  ];

  let carrito = [];
  const divisa = '$';
  const DOMitems = document.querySelector('#items');
  const DOMcarrito = document.querySelector('#carrito');
  const DOMtotal = document.querySelector('#total');
  const DOMbotonVaciar = document.querySelector('#boton-vaciar');

  // Funciones

  /**
  * Dibuja todos los productos a partir de la base de datos. No confundir con el carrito
  */
  function renderizarProductos() {
      baseDeDatos.forEach((info) => {
        // Nodo Superior (Tarjeta + boton)
        const miNodo2 = document.createElement('div');
        miNodo2.classList.add('nodo2', 'col-4');
          // Estructura
          const miNodo = document.createElement('div');
          miNodo.classList.add('card');
          // Body
          const miNodoCardBody = document.createElement('div');
          miNodoCardBody.classList.add('card-body');
          // Titulo
          const miNodoTitle = document.createElement('h5');
          miNodoTitle.classList.add('titulo-libro');
          miNodoTitle.textContent = info.nombre;
          //Autor
          const miNodoAutor = document.createElement('p');
          miNodoAutor.classList.add('aut-libro');
          miNodoAutor.textContent = info.autor;
          // Imagen
          /*const miNodoImagen = document.createElement('img');
          miNodoImagen.classList.add('img-fluid');
          miNodoImagen.setAttribute('src', info.imagen);*/
          // Precio
          const miNodoPrecio = document.createElement('p');
          miNodoPrecio.classList.add('precio-libro');
          miNodoPrecio.textContent = `${divisa}${info.precio}`;
          // Boton 
          const miNodoDivBoton = document.createElement('div');
          miNodoDivBoton.classList.add('div-boton');
          const miNodoBoton = document.createElement('button');
          miNodoBoton.classList.add('btn-libro');
          miNodoBoton.textContent = 'Comprar';
          miNodoBoton.setAttribute('marcador', info.id);
          miNodoBoton.addEventListener('click', anyadirProductoAlCarrito);
          // Insertamos
          //miNodoCardBody.appendChild(miNodoImagen);
          miNodoCardBody.appendChild(miNodoTitle);
          miNodoCardBody.appendChild(miNodoAutor);
          miNodoCardBody.appendChild(miNodoPrecio);
          miNodoDivBoton.appendChild(miNodoBoton);
          miNodo.appendChild(miNodoCardBody);
          miNodo2.appendChild(miNodo);
          miNodo2.appendChild(miNodoDivBoton);
          DOMitems.appendChild(miNodo2);
      });
  }

  /**
  * Evento para añadir un producto al carrito de la compra
  */
  function anyadirProductoAlCarrito(evento) {
      // Añadimos el Nodo a nuestro carrito
      carrito.push(evento.target.getAttribute('marcador'))
      // Actualizamos el carrito 
      renderizarCarrito();
  }

  /**
  * Dibuja todos los productos guardados en el carrito
  */
  function renderizarCarrito() {
      // Vaciamos todo el html
      DOMcarrito.textContent = '';
      // Quitamos los duplicados
      const carritoSinDuplicados = [...new Set(carrito)];
      // Generamos los Nodos a partir de carrito
      carritoSinDuplicados.forEach((item) => {
          // Obtenemos el item que necesitamos de la variable base de datos
          const miItem = baseDeDatos.filter((itemBaseDatos) => {
              // ¿Coincide las id? Solo puede existir un caso
              return itemBaseDatos.id === parseInt(item);
          });
          // Cuenta el número de veces que se repite el producto
          const numeroUnidadesItem = carrito.reduce((total, itemId) => {
              // ¿Coincide las id? Incremento el contador, en caso contrario no mantengo
              return itemId === item ? total += 1 : total;
          }, 0);
          // Creamos el nodo del item del carrito
          const miNodo = document.createElement('li');
          miNodo.classList.add('list-group-item', 'text-right', 'mx-2');
          miNodo.textContent = `${numeroUnidadesItem} x ${miItem[0].nombre} - ${divisa}${miItem[0].precio}`;
          // Boton de borrar
          const miBoton = document.createElement('button');
          miBoton.classList.add('btn', 'btn-danger', 'mx-5');
          miBoton.textContent = 'eliminar';
          miBoton.style.marginLeft = '1rem';
          miBoton.dataset.item = item;
          miBoton.addEventListener('click', borrarItemCarrito);
          // Mezclamos nodos
          miNodo.appendChild(miBoton);
          DOMcarrito.appendChild(miNodo);
      });
     // Renderizamos el precio total en el HTML
     DOMtotal.textContent = calcularTotal();
  }

  /**
  * Evento para borrar un elemento del carrito
  */
  function borrarItemCarrito(evento) {
      // Obtenemos el producto ID que hay en el boton pulsado
      const id = evento.target.dataset.item;
      // Borramos todos los productos
      carrito = carrito.filter((carritoId) => {
          return carritoId !== id;
      });
      // volvemos a renderizar
      renderizarCarrito();
  }

  /**
   * Calcula el precio total teniendo en cuenta los productos repetidos
   */
  function calcularTotal() {
      // Recorremos el array del carrito 
      return carrito.reduce((total, item) => {
          // De cada elemento obtenemos su precio
          const miItem = baseDeDatos.filter((itemBaseDatos) => {
              return itemBaseDatos.id === parseInt(item);
          });
          // Los sumamos al total
          return total + miItem[0].precio;
      }, 0).toFixed(2);
  }

  /**
  * Varia el carrito y vuelve a dibujarlo
  */
  function vaciarCarrito() {
      // Limpiamos los productos guardados
      carrito = [];
      // Renderizamos los cambios
      renderizarCarrito();
  }

  // Eventos
  DOMbotonVaciar.addEventListener('click', vaciarCarrito);

  // Inicio
  renderizarProductos();
  renderizarCarrito();
});