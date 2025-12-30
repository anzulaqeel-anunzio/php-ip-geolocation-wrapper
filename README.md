# IP Geolocation Wrapper (PHP)

A PHP client library for fetching geolocation data from [ip-api.com](https://ip-api.com).

## Features

-   **Get Geolocation**: Retrieve country, city, ISP, lat/lon, and timezone for an IP address.
-   **No API Key Needed**: Uses the free tier (limited to 45 requests/minute).
-   **PSR-4 Autoloading**: Compliant with modern PHP standards.

## Installation

```bash
composer require anunzio/ip-geolocation-php
```

## Usage

```php
require_once 'vendor/autoload.php';

use Anunzio\IpGeolocation\GeoClient;

$client = new GeoClient();

try {
    // Get info for Google's public DNS
    $info = $client->getIpInfo('8.8.8.8');
    
    echo "IP: " . $info['query'] . "\n";
    echo "Location: " . $info['city'] . ", " . $info['country'] . "\n";
    echo "ISP: " . $info['isp'] . "\n";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
```

## Contact

Developed for Anunzio International by Anzul Aqeel.
Contact +971545822608 or +971585515742.

## License

MIT


---
### 🔗 Part of the "Ultimate Utility Toolkit"
This tool is part of the **[Anunzio International Utility Toolkit](https://github.com/anzulaqeel/ultimate-utility-toolkit)**.
Check out the full collection of **180+ developer tools, scripts, and templates** in the master repository.

Developed for Anunzio International by Anzul Aqeel.
