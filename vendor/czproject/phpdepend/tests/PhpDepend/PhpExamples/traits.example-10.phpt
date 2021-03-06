<?php
use Tester\Assert;
require __DIR__ . '/../bootstrap.php';
require __DIR__ . '/../../../src/PhpDepend.php';

$phpdepend = new Cz\PhpDepend;

// Example #10 Static Methods
// http://www.php.net/manual/en/language.oop5.traits.php
$phpdepend->parse('<?php
trait StaticExample {
    public static function doSomething() {
        return \'Doing something\';
    }
}

class Example {
    use StaticExample;
}

Example::doSomething();
');

Assert::same(array(
	'StaticExample',
	'Example',
), $phpdepend->getClasses());
Assert::same(array(
	'StaticExample',
	'Example',
), $phpdepend->getDependencies());
