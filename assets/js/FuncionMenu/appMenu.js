let total = 0;
let id = 100;

const totalHTML = document.getElementById('precioTotal');
totalHTML.innerHTML = total;

const carrito = document.getElementById('listaCompras');

const platillos = [];

let totalPlatillos = () => {
    let precioFinal = 0;
    for(let platillo of platillos) {
        precioFinal += platillo.valor;
    }
    return precioFinal;
}

let actualizarTotalTicket = () => {
    total = totalPlatillos();
    totalHTML.innerHTML = total;
}

let actualizarItemsTicket = () => {
    let _HTML = "";

    if (platillos.length == 0) {
        _HTML = `                
            <p style="font-size: 2.6em;">
                Click on the "ADD" button of the dish you would like to order so you can add it to the shopping cart.
            </p>
        `;
    } else {
        for(let platillo of platillos) {
            _HTML += `
                <div class="card-header pb-0 ticket-item">
                    <div>
                        <h3 style="color: #000;">${platillo.descripcion}</h3>
                    </div>
                    <div class="ticket-item-2">
                        <h3 style="color: #000">$${platillo.valor}</h3>
                        <button style="margin-left: 20px; background-color: #fff; border: none; border-radius: 10px; dispaly: flex; align-items: center; justify-content: center;">
                            <ion-icon name="trash-bin-outline" style="font-size: 30px; color: red; margin-top: auto; margin-bottom: auto;" onclick="eliminarPlatillo(${platillo.id})"></ion-icon>
                        </button>
                    </div>
                </div>
            `;
        }
    }

    carrito.innerHTML = _HTML;
}

const eliminarPlatillo = (id) => {
    let indiceEliminar = platillos.findIndex( platillo => platillo.id === id ); 
    platillos.splice(indiceEliminar, 1);
    actualizarItemsTicket();
    actualizarTotalTicket();
}

let addToTicket = (name, price) => {
    platillos.push(new Platillo(name, price));
    actualizarItemsTicket();
    actualizarTotalTicket();
}