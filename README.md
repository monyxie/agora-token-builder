# agora-token-builder
Agora Token Builder generates tokens for Agora Client SDKs.

## Installation
```
# composer require monyxie/agora-token-builder
```

## Usage
```php
use Monyxie\Agora\TokenBuilder\TokenFactory;
use Monyxie\Agora\TokenBuilder\AccessControl\Role;

$appId = "your app id";
$appCertificate = "your app certificate";
$channelName = "your channel name";
$uid = 91919191; // your uid
$privileges = Role::PRIVILEGES_PUBLISHER;

$token = (new TokenFactory($appId, $appCertificate))->create($channelName, $uid, $privileges);

var_dump($token->toString());
```