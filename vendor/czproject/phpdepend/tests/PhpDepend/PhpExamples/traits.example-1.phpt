
<?php
use Tester\Assert;
require __DIR__ . '/../bootstrap.php';
require __DIR__ . '/../../../src/PhpDepend.php';

$phpdepend = new Cz\PhpDepend;

// Example #1 Trait example
// http://www.php.net/manual/en/language.oop5.traits.php
$phpdepend->parse("<?php
trait ezcReflectionReturnInfo {
    function getReturnType() { /*1*/ }
    function getReturnDescription() { /*2*/ }
}

class ezcReflectionMethod extends ReflectionMethod {
    use ezcReflectionReturnInfo;
    /* ... */
}

class ezcReflectionFunction extends ReflectionFunction {
    use ezcReflectionReturnInfo;
    /* ... */
}
");

Assert::same(array(
	'ezcReflectionReturnInfo',
	'ezcReflectionMethod',
	'ezcReflectionFunction',
), $phpdepend->getClasses());
Assert::same(array(
	'ReflectionMethod',
	'ezcReflectionReturnInfo',
	'ReflectionFunction',
), $phpdepend->getDependencies());
