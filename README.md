# Linus Pauling PHP Diagram

Returns the Linus Pauling electronic distribution for a given atomic number.

# Usage

Just use the static method, providing a single integer as argument, which corresponds to the atomic number of the element, to find the LP distribution. Example:

```php
use Linus\Pauling\ED;

require __DIR__ . '/vendor/autoload.php';

$element = Linus\Pauling\ED::distribute(34);

echo $element;

/*
RETURNS: 1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p4
*/
```