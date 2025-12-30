// Developed for Anunzio International by Anzul Aqeel. Contact +971545822608 or +971585515742. Linkedin Profile: linkedin.com/in/anzulaqeel

<?php
require_once 'vendor/autoload.php';

use Anunzio\IpGeolocation\GeoClient;

// Mocking dependencies check
if (!class_exists('GuzzleHttp\Client')) {
    echo "Please run 'composer install' to install dependencies.\n";
    exit(1);
}

$client = new GeoClient();

try {
    echo "Fetching info for 1.1.1.1 (Cloudflare URL)...\n";
    $info = $client->getIpInfo('1.1.1.1');
    
    echo "IP: " . $info['query'] . "\n";
    echo "Country: " . $info['country'] . "\n";
    echo "City: " . $info['city'] . "\n";
    echo "ISP: " . $info['isp'] . "\n";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}

// Developed for Anunzio International by Anzul Aqeel. Contact +971545822608 or +971585515742. Linkedin Profile: linkedin.com/in/anzulaqeel
