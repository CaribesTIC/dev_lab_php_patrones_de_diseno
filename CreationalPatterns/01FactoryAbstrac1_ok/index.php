<?php

require_once "BookFactory.php";
require_once "Book.php";

echo "<h1>Patterns Dising (Creational Patterns)</h1>";
echo "<h2>Factory Abstrac1</h2>";

function writeln($line_in) {
    echo $line_in."<br/>";
}

function testConcreteFactory($bookFactoryInstance) {
    $phpBookOne = $bookFactoryInstance->makePHPBook();
    writeln('first php Author: '.$phpBookOne->getAuthor());
    writeln('first php Title: '.$phpBookOne->getTitle());

    $phpBookTwo = $bookFactoryInstance->makePHPBook();
    writeln('second php Author: '.$phpBookTwo->getAuthor());
    writeln('second php Title: '.$phpBookTwo->getTitle());

    $mySqlBook = $bookFactoryInstance->makeMySQLBook();
    writeln('MySQL Author: '.$mySqlBook->getAuthor());
    writeln('MySQL Title: '.$mySqlBook->getTitle());
}

/**
 * Initialization
 */

writeln('BEGIN TESTING ABSTRACT FACTORY PATTERN');
writeln('');

writeln('testing OReillyBookFactory');
$bookFactoryInstance1 = new OReillyBookFactory;
testConcreteFactory($bookFactoryInstance1);
writeln('');

writeln('testing SamsBookFactory');
$bookFactoryInstance2 = new SamsBookFactory;
testConcreteFactory($bookFactoryInstance2);

writeln("END TESTING ABSTRACT FACTORY PATTERN");
writeln('');

/*
BEGIN TESTING ABSTRACT FACTORY PATTERN

testing OReillyBookFactory
first php Author: Rasmus Lerdorf and Kevin Tatroe
first php Title: Programming PHP
second php Author: David Sklar and Adam Trachtenberg
second php Title: PHP Cookbook
MySQL Author: George Reese, Randy Jay Yarger, and Tim King
MySQL Title: Managing and Using MySQL

testing SamsBookFactory
first php Author: George Schlossnagle
first php Title: Advanced PHP Programming
second php Author: Christian Wenz
second php Title: PHP Phrasebook
MySQL Author: Paul Dubois
MySQL Title: MySQL, 3rd Edition
END TESTING ABSTRACT FACTORY PATTERN
*/

