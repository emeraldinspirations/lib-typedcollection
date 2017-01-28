![Logo of the project](http://vps56132.vps.ovh.ca/logo.gitHub.png)

# typedCollection
> A component of emeraldinspiration's library.

An immutable class containing an array where each element has been verified to
be of a specific type.

Most implementations of a typed collection in PHP are overly complicated.  
Developers try to simulate what is found in other languages.  However, much of
this functionality is not needed.  When accepting a typed collection as a
parameter, the only thing the function truly needs is to know that all of the
elements are of a particular type.  Any manipulation of the array can be done
outside of the collection, then a new collection can be created.  This keeps
the validation of the data consistently at the creation of the object.  

## Installing / Getting started

This project has no dependencies, so can be cloned directly from the git repo

### Option 1 - Clone with HTTPS

```shell
git clone https://github.com/emeraldinspirations/lib-typedcollection.git
```

### Option 2 - Clone with SSH

```shell
git clone git@github.com:emeraldinspirations/lib-typedcollection.git
```

### Option 3 - Require with Composer

Add the following lines to your `composer.json` file

```json
    ...
    "repositories" : [
        ...
        {
            "type" : "vcs",
            "url" : "https://github.com/emeraldinspirations/lib-typedcollection.git"
        },
        ...
    ],
    "require": {
        ...
        "emeraldinspirations/lib-typedcollection":"*",
        ...
    },
    ...
```

## Features

- Validate the array passed has elements containing only one type
- Return a copy of the array when requested

## Example

```php
<?php // {projectPath}/Controller/DemoCollection.php

namespace {vendor}\{product}\Controller;

use emeraldinspirations\library\typedCollection\TypedCollection;

class DemoCollection extends TypedCollection
{

    public function __construct(array $Array) {
       parent::__construct(MockInterface::class, $Array);
    }

}
```

## Documentation
Further documentation is available thanks to [phpDocumentor2](https://www.phpdoc.org/) and [PHPDocumentor Markdown generator](https://github.com/evert/phpdoc-md):

- [Documentation](phpdoc/md/ApiIndex.md)

## Contributing

One of the goals of this project is simplicity.  This is a "bandaid" until PHP
implements a typed array.  Therefore I am not looking for additional features.  
However, optimization is always a plus.  If you'd like to contribute, please
fork the repository and use a feature branch.

I am also open to feedback about how well I am being compliant with standards
and "best practices."  I have written software solo for years, and am trying to
learn how to work better with others.

## Licensing

The code in this project is licensed under [MIT license](LICENSE).
