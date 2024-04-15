# PHPUnit
- The sample code will introduce PHP Unit and guide how to use and practice
  + Assertions, Writing a Useful Test and  #[DataProvider('')]
  + Testing Protected/Private Methods, Coverage Reports and CRAP
  + Mock Objects, Stub Methods and Dependency Injection
  + Mock Methods and Overriding Constructors

# Install package
composer install

# Autoload
composer dump-autoload

# Generate coverage
vendor/bin/phpunit --migrate-configuration

./vendor/bin/phpunit --coverage-html coverage
