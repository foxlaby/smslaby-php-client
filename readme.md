# foxlaby/smslaby-php-client
You can send sms through a our server using your sender id by encryption key.

## Install via composer
```bash
$ composer require foxlaby/smslaby-client
```

## Use
```php
use FoxLaby\SMSLaby\Send;

$sms = Send::init('<hash_key>')
    ->lang('ar')
    ->to('01×××××××××')
    // ->sandbox(true)
    ->message('body');
```

## Use in laravel
```php
$sms = smslaby()
    ->lang('ar')
    ->to('01×××××××××')
    // ->sandbox(true)
    ->message('body');
```

### Hash Key:-
Add a value you choose but you must add this value in a .env file
```
SMSLABY_HASH_KEY=<hash_key>
```

### Methods:-
- lang: Add lang alpha-2 (ar|en).
- to: Add the recipient number.
- sandbox: For trial only, in this case the message will not be sent to the recipient but to our dashboard.
- message: Message content.