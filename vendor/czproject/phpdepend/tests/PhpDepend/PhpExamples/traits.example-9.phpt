<?php
use Tester\Assert;
require __DIR__ . '/../bootstrap.php';
require __DIR__ . '/../../../src/PhpDepend.php';

$phpdepend = new Cz\PhpDepend;

// Example #9 Static Variables
// http://www.php.net/manual/en/language.oop5.traits.php
$phpdepend->parse('<?php
trait Counter {
    public function inc() {
        static $c = 0;
        $c = $c + 1;
        echo "$c\n";
    }
}

class C1 {
    use Counter;
}

class C2 {
    use Counter;
}

$o = new C1(); $o->inc(); // echo 1
$p = new C2(); $p->inc(); // echo 1
');

Assert::same(array(
	'Counter',
	'C1',
	'C2',
), $phpdepend->getClasses());
Assert::same(array(
	'Counter',
	'C1',
	'C2',
), $phpdepend->getDependencies());
