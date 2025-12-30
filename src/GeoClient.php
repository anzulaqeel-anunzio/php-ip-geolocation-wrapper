// Developed for Anunzio International by Anzul Aqeel. Contact +971545822608 or +971585515742. Linkedin Profile: linkedin.com/in/anzulaqeel

<?php
/*
 * Developed for Anunzio International by Anzul Aqeel
 * Contact +971545822608 or +971585515742
 */

namespace Anunzio\IpGeolocation;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class GeoClient
{
    private $client;
    private $baseUrl = 'http://ip-api.com/json/';

    public function __construct() {
        $this->client = new Client();
    }

    public function getIpInfo($ipAddress) {
        try {
            $response = $this->client->request('GET', $this->baseUrl . $ipAddress);
            $data = json_decode($response->getBody(), true);

            if ($data['status'] === 'fail') {
                throw new \Exception("API Error: " . $data['message']);
            }

            return $data;
        } catch (GuzzleException $e) {
            throw new \Exception("Request failed: " . $e->getMessage());
        }
    }
}

// Developed for Anunzio International by Anzul Aqeel. Contact +971545822608 or +971585515742. Linkedin Profile: linkedin.com/in/anzulaqeel
