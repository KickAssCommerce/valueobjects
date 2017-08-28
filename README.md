# ValueObjects

[![Build Status](https://travis-ci.org/KickAssCommerce/valueobjects.svg?branch=master)](https://travis-ci.org/KickAssCommerce/valueobjects)

Please note: this project is, for now, in alpha while I try to figure out what works best

A set of common value objects. 

Types are grouped by categories like `Identity`. Each object extends a scalar type for basic validation and return type enforcing

## Usage

```
use KickAss\ValueObjects\Identity\EmailValue;
use KickAss\ValueObjects\ValidationException;

try {
   $value = new EmailValue('test@example.com');
} catch(ValidationException $error) {
   // handle the exception for invalid values
}

echo $value->value();
echo (string)$value;
``` 

Outputs
```
test@example.com
test@example.com
```

## Installation
Install module via composer

## Contributing

I would love to have some help on this project. With PRs, bug reporting or just give your opinion on how this
could be improved via a feature issue.