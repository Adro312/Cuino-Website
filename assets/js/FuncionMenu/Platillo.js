class Platillo extends Dato {
    static contadorPlatillo = 0;

    constructor(descripcion, valor) {
        super(descripcion, valor);
        this._id = ++Platillo.contadorPlatillo; 
    }

    get id() {
        return this._id;
    }
}