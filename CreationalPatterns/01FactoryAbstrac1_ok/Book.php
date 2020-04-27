<?php
/**
 * Book classes
 */
abstract class AbstractBook {
    abstract function getAuthor();
    abstract function getTitle();
}

abstract class AbstractMySQLBook extends AbstractBook {
    protected $subject = "MySQL";
}

abstract class AbstractPHPBook extends AbstractBook {
    protected $subject = "PHP";
}

class OReillyMySQLBook extends AbstractMySQLBook {
    private $author;
    private $title;
    function __construct() {
        $this->author = 'George Reese, Randy Jay Yarger, and Tim King';
        $this->title = 'Managing and Using MySQL';
    }
    function getAuthor() {
        return $this->author;
    }
    function getTitle() {
        return $this->title;
    }
}

class SamsMySQLBook extends AbstractMySQLBook {
    private $author;
    private $title;
    function __construct() {
        $this->author = 'Paul Dubois';
        $this->title = 'MySQL, 3rd Edition';
    }
    function getAuthor() {
        return $this->author;
    }
    function getTitle() {
        return $this->title;
    }
}

class OReillyPHPBook extends AbstractPHPBook {
    private $author;
    private $title;
    private static $oddOrEven = 'odd';
    function __construct() {        
        if ('odd' == self::$oddOrEven) {//alternate between 2 books
            $this->author = 'Rasmus Lerdorf and Kevin Tatroe';
            $this->title = 'Programming PHP';
            self::$oddOrEven = 'even';
        }
        else {
            $this->author = 'David Sklar and Adam Trachtenberg';
            $this->title = 'PHP Cookbook';
            self::$oddOrEven = 'odd';
        }
    }
    function getAuthor() {
        return $this->author;
    }
    function getTitle() {
        return $this->title;
    }
}

class SamsPHPBook extends AbstractPHPBook {
    private $author;
    private $title;
    private static $oddOrEven = 'odd';
    function __construct() {
        if ('odd' == self::$oddOrEven) {
            $this->author = 'George Schlossnagle';
            $this->title = 'Advanced PHP Programming';
            self::$oddOrEven = 'even';
        }
        else {
            $this->author = 'Christian Wenz';
            $this->title = 'PHP Phrasebook';
            self::$oddOrEven = 'odd';
        }
    }
    function getAuthor() {
        return $this->author;
    }
    function getTitle() {
        return $this->title;
    }
}

