/**
 * BookFactory classes
 */
const AbstractBookFactory = (function () {
    const obj = function () { 
        if (this.constructor === abst) {
            throw new Error('No se puede instanciar la clase abstracta');
        }
    };
    obj.prototype.makePHPBook = function () { 
        throw new Error('No se puede llamar al método abstracto')
    };
    obj.prototype.makeMySQLBook = function () { 
        throw new Error('No se puede llamar al método abstracto')
    };
    return obj;
})();

const OReillyBookFactory = (function () {
    const obj = function () {};
    obj.prototype = Object.create(AbstractBookFactory.prototype);
    obj.prototype.constructor = obj;
    obj.prototype.context = "OReilly";
    obj.prototype.makePHPBook = function () {
        return Object.freeze(new OReillyPHPBook);
    };
    obj.prototype.makeMySQLBook = function () {         
         return Object.freeze(new OReillyMySQLBook);
    };
    return obj;
})();

const SamsBookFactory = (function () {
    const obj = function () {};
    obj.prototype = Object.create(AbstractBookFactory.prototype);
    obj.prototype.constructor = obj;
    obj.prototype.context = "OReilly";
    obj.prototype.makePHPBook = function () {
        return Object.freeze(new SamsPHPBook);
    };
    obj.prototype.makeMySQLBook = function () {         
         return Object.freeze(new SamsMySQLBook);
    };
    return obj;
})();

