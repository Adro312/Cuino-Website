<script type="text/javascript">
    let total = 0;
    let id = 100;

    document.getElementById('precioTotal').innerHTML = total;
    
    // function addToTicket(name, price) {
    //     // Vaciamos carrito
    //     document.getElementById('listaCompras').innerHTML = "";
    //     // Creamos un nuevo item en el carrito
    //     const div = document.createElement("div");
    //     // Agregamos clases a ese item
    //     div.classList.add("card-header");
    //     div.classList.add("pb-0");
    //     div.classList.add("ticket-item");
    //     // HTML quer ira dentro de ese item
    //     div.textContent = `
    //         <div>
    //             <h3 style="color: #000;">${name}</h3>
    //         </div>
    //         <div class="ticket-item-2">
    //             <h3 style="color: #000">$${price}</h3>
    //             <button style="margin-left: 20px; background-color: #fff; border: none; border-radius: 10px;">
    //                 <ion-icon name="trash-outline" style="font-size: 30px; color: red;"></ion-icon>
    //             </button>
    //         </div>
    //     `; 
    //     // Agregar el item al carrito
    //     document.getElementById('listaCompras').insertAdjacentElement("beforeend", div);
    //     // Hacemos la suma del total
    //     total += price;
    //     // Actualizamos el precio total
    //     document.getElementById('precioTotal').innerHTML = total;
    // }
</script>