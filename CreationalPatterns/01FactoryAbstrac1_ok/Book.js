/**
 * Book classes
 */
const AbstractBook = (function () {
    const obj = function () { 
        if (this.constructor === AbstractBook) {
            throw new Error('No se puede instanciar la clase abstracta');
        }
    };
    obj.prototype.getAuthor = function () { 
        throw new Error('No se puede llamar al método abstracto')
    };
    obj.prototype.getTitle = function () { 
        throw new Error('No se puede llamar al método abstracto')
    };
    return obj;
})();

const AbstractMySQLBook = (function () {
    const obj = function () { 
        if (this.constructor === AbstractMySQLBook) {
            throw new Error('No se puede instanciar la clase abstracta');
        }
    };
    obj.prototype = Object.create(AbstractBook.prototype);
    obj.prototype.constructor = obj;
    obj.prototype.subject = "MySQL"; //protected ?
    return obj;
})();

const AbstractPHPBook = (function () {
    const obj = function () { 
        if (this.constructor === AbstractPHPBook) {
            throw new Error('No se puede instanciar la clase abstracta');
        }
    };
    obj.prototype = Object.create(AbstractBook.prototype);
    obj.prototype.constructor = obj;
    obj.prototype.subject = "PHP"; //protected ?
    return obj;
})();

const OReillyMySQLBook = (function () {
    const obj = function () {
        this.author = 'George Reese, Randy Jay Yarger, and Tim King';
        this.title = 'Managing and Using MySQL';
    };
    obj.prototype = Object.create(AbstractMySQLBook.prototype);
    obj.prototype.constructor = obj;
    obj.prototype.getAuthor = function () {
        return this.author;
    };
    obj.prototype.getTitle = function () {
         return this.title;
    };
    return obj;
})();

const SamsMySQLBook = (function () {
    const obj = function () {
        this.author = 'Paul Dubois';
        this.title = 'MySQL, 3rd Edition';
    };
    obj.prototype = Object.create(AbstractMySQLBook.prototype);
    obj.prototype.constructor = obj;
    obj.prototype.getAuthor = function () {
        return this.author;
    };
    obj.prototype.getTitle = function () {
         return this.title;
    };
    return obj;
})();

const OReillyPHPBook = (function () {
    let _oddOrEven = 'odd';
    const obj = function () {
        if ('odd' == _oddOrEven ) { //alternate between 2 books
            this.author = 'Rasmus Lerdorf and Kevin Tatroe';
            this.title = 'Programming PHP';
            _oddOrEven = 'even';
        } else {
            this.author = 'David Sklar and Adam Trachtenberg';
            this.title = 'PHP Cookbook';
            _oddOrEven = 'odd';
        }
    };
    obj.prototype = Object.create(AbstractPHPBook.prototype);
    obj.prototype.constructor = obj;
    obj.prototype.getAuthor = function () {
        return this.author;
    };
    obj.prototype.getTitle = function () {
         return this.title;
    };
    return obj;
}());

const SamsPHPBook = (function () {
    let oddOrEven = 'odd';
    const obj = function () {        
        if ('odd' == oddOrEven) {
            this.author = 'George Schlossnagle';
            this.title = 'Advanced PHP Programming';
            oddOrEven = 'even';
        } else {
            this.author = 'Christian Wenz';
            this.title = 'PHP Phrasebook';
            oddOrEven = 'odd';
        }
    };
    obj.prototype = Object.create(AbstractPHPBook.prototype);
    obj.prototype.constructor = obj;
    obj.prototype.getAuthor = function () {
        return this.author;
    };
    obj.prototype.getTitle = function () {
         return this.title;
    };
    return obj;
}());

