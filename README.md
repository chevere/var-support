# VarSupport

![Chevere](chevere.svg)

[![Build](https://img.shields.io/github/actions/workflow/status/chevere/var-support/test.yml?branch=1.0&style=flat-square)](https://github.com/chevere/var-support/actions)
![Code size](https://img.shields.io/github/languages/code-size/chevere/var-support?style=flat-square)
[![Apache-2.0](https://img.shields.io/github/license/chevere/var-support?style=flat-square)](LICENSE)
[![PHPStan](https://img.shields.io/badge/PHPStan-level%209-blueviolet?style=flat-square)](https://phpstan.org/)
[![Mutation testing badge](https://img.shields.io/endpoint?style=flat-square&url=https%3A%2F%2Fbadge-api.stryker-mutator.io%2Fgithub.com%2Fchevere%2Fvar-support%2F1.0)](https://dashboard.stryker-mutator.io/reports/github.com/chevere/var-support/1.0)

[![Quality Gate Status](https://sonarcloud.io/api/project_badges/measure?project=chevere_var-support&metric=alert_status)](https://sonarcloud.io/dashboard?id=chevere_var-support)
[![Maintainability Rating](https://sonarcloud.io/api/project_badges/measure?project=chevere_var-support&metric=sqale_rating)](https://sonarcloud.io/dashboard?id=chevere_var-support)
[![Reliability Rating](https://sonarcloud.io/api/project_badges/measure?project=chevere_var-support&metric=reliability_rating)](https://sonarcloud.io/dashboard?id=chevere_var-support)
[![Security Rating](https://sonarcloud.io/api/project_badges/measure?project=chevere_var-support&metric=security_rating)](https://sonarcloud.io/dashboard?id=chevere_var-support)
[![Coverage](https://sonarcloud.io/api/project_badges/measure?project=chevere_var-support&metric=coverage)](https://sonarcloud.io/dashboard?id=chevere_var-support)
[![Technical Debt](https://sonarcloud.io/api/project_badges/measure?project=chevere_var-support&metric=sqale_index)](https://sonarcloud.io/dashboard?id=chevere_var-support)
[![CodeFactor](https://www.codefactor.io/repository/github/chevere/var-support/badge)](https://www.codefactor.io/repository/github/chevere/var-support)

## Summary

Extra tools for handling variables.

## Installing

VarSupport is available through [Packagist](https://packagist.org/packages/chevere/var-support) and the repository source is at [chevere/var-support](https://github.com/chevere/var-support).

```sh
composer require chevere/var-support
```

## ObjectVariable

The `ObjectVariable` component is in charge of handling an object variable.

### Creating ObjectVariable

```php
use Chevere\VarSupport\ObjectVariable;

$object = new ObjectVariable($var);
$var = $object->variable();
```

### Assert clonable

Use `assertClonable` to assert if the object variable can be cloned.

```php
$boolean = $object->assertClonable();
```

## StorableVariable

The `StorableVariable` component is in charge of handling a variable that can be stored (state).

A storable variable for Chevere is any PHP variable that can be stored as a string representation. All variable types can be stored with the exception of type `resource`.

### Creating StorableVariable

```php
use Chevere\VarSupport\StorableVariable;

$storable = new StorableVariable($var);
$var = $storable->variable();
```

### Export

The `toExport` method exports the variable, this return value should be used when creating a file return.

```php
$export = $storable->toExport();
file_put_contents(
    'file-return.php',
    '<?php return '.$export.';'
);
```

### Serialize

The `toSerialize` method provides a shortcut for `serialize($var)`.

```php
$string = $storable->toSerialize();
```

## Documentation

Documentation is available at [chevere.org](https://chevere.org/packages/var-support).

## License

Copyright 2023 [Rodolfo Berrios A.](https://rodolfoberrios.com/)

Chevere is licensed under the Apache License, Version 2.0. See [LICENSE](LICENSE) for the full license text.

Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing permissions and limitations under the License.
