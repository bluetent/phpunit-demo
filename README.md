# PHPUnit Demo

## Useful links
- [PHPUnit Site](https://phpunit.de/)
- [PHPUnit Documentations (v7.3)](https://phpunit.readthedocs.io/en/7.3/)
- [PHPUnit Documentations (v5.7 - used in this demo)](https://phpunit.de/manual/5.7/en/writing-tests-for-phpunit.html)
- [Composer](https://getcomposer.org/)

## Using this demo

```bash
# Install dependencies
$ composer install

# Run a test
$ composer test

# Generate coverage analysis
$ composer coverage
```

The coverage documents will generate a HTML site in `/coverage` directory.

# Benefits of unit test, when to use, etc.

Unit testing can force you to think about how your code is designed. Writing tests before you write your program can help you work out how the individual parts of the code work together.

Unit testing can also be very helpful during refactors and regressions. For example, if you wanted to change the return type of the following method from a `string` to a `bool`.

```php
Class Dolphins {
  public $name = 'Dolphins';
  ...
  // Previously returned "Dolphins can produce milk"
  public function produceMilk () {
    return $this->name . " can produce milk";
  }

  // Refactored to return true
  public function produceMilk() {
    return true;
  }
```

This could result in a regression in your code if you are validating against the string:

```php
// Where previously this would return true, it will now incorrectly return false
if ($dolphins->produceMilk() === 'Dolphins can produce milk')
```

But luckily, your existing test can automatically detected this, preventing the errors from being deployed. This is an important reason why you should try to achieve full testing coverage of your code – so you can detect all instances of errors.

```php
public function testProduceMilk () {
  $dolphins = new Dolphins();
  $produceMilk = $dolphins->produceMilk();
  $this->assertEquals($this->name . ' can produce milk', $produceMilk);
}
```

## Write new test when encountering a bug

Writing additional tests can help prevent future regressions. So if you encounter and fix a bug, this is a good time to write a new test to check for that bug.

Example: You changed the return type of a method from a string to a boolean. You should then write a new test to make sure it always returns a boolean.

```php
public function produceMilk () {
  return $this->name . " can produce milk";
  // into
  return true;
}
...
public function testProduceMilkType)() {
  $dolphins = new Dolphins();
  $produceMilk = $dolphins->produceMilk();
  $this->assertEquals(true, is_bool($produceMilk));
}
```
