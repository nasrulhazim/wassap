# Trigger which version Whatsapp to sent messages

Original code from [Jasdy](https://gist.github.com/akutaktau/09d11a5d2228f4f4fb348f3bc3dda856), convert to PHP classes.

# Installation

```
composer require nasrulhazim/wassap
```

# Usage

```php
<?php 

require 'vendor/autoload.php';

use Wassap\Wassap;

Wassap::send('your-phone-number', 'you-messages');

```

> P/S: You may add phone number and some text validation before sending messages.