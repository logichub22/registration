<?php
namespace App\Services;

use App\Models\Visitor;

class VisitorCounter
{
    public function __construct($request)
    {
        $ip = $this->getUserIP($request);
        Visitor::create([
            'ip_address' => $ip,
            'country' => $this->getCountryByIp($ip),
            'page_url' => $request->server('REQUEST_URI'),
            'referer' => $request->server('HTTP_REFERER')
        ]);
    }

    private function getUserIP($request)
    {
        $ipAddress =
            $request->server('HTTP_CLIENT_IP') ??
            $request->server('HTTP_X_FORWARDED_FOR') ??
            $request->server('HTTP_X_FORWARDED') ??
            $request->server('HTTP_FORWARDED_FOR') ??
            $request->server('HTTP_FORWARDED') ??
            $request->server('REMOTE_ADDR') ??
            'UNKNOWN';
        return $ipAddress;
    }

    private function getCountryByIp($ip)
    {
        $url = "http://ip-api.com/json/{$ip}";
        $response = file_get_contents($url);
        $data = json_decode($response);

        if ($data->status == 'success') {
            return $data->country;
        } else {
            return "Unknown";
        }
    }
}
?>
