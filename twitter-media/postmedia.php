<?php
ini_set('display_errors', 1);
require_once('TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "-your_key",
    'oauth_access_token_secret' => "your_key",
    'consumer_key' => "your_key",
    'consumer_secret' => "your_key"
);

/** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ **/
$url = 'https://upload.twitter.com/1.1/media/upload.json';
//https://upload.twitter.com/1.1/media/upload.json  => media
$requestMethod = 'POST';


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Twitter
{

    function getMediaId($settings)
    {

        $url = 'https://upload.twitter.com/1.1/media/upload.json';
        $method = 'POST';
        $twitter = new TwitterAPIExchange($settings);

        $file = file_get_contents('http://desarrollolibre.net/public/images/example/php/facebook/facebook-php.png');
        $data = base64_encode($file);

        $params = array(
            'media_data' => $data
        );

        try {
            $data = $twitter->request($url, $method, $params);
        } catch (Exception $e) {
            echo 'Excepción capturada: ', $e->getMessage(), "\n";
            // hacer algo
            return NULL;
        }

        // para obtener más facilmente el media_id
        $obj = json_decode($data, true);

        // media_id en formato string
        return $obj["media_id_string"];
    }

    function sendTweets()
    {
        $url = "https://api.twitter.com/1.1/statuses/update.json";
        $requestMethod = 'POST';

        // configuracion de la cuenta
        // configuracion de la cuenta
        $settings = array(
            'oauth_access_token' => '-your key',
            'oauth_access_token_secret' => 'your key',
            'consumer_key' => 'your key',
            'consumer_secret' => 'your key',
        );

        // establecer el mensaje
        $postfields = array('status' => '¿Cómo enviar tweets con imágenes en PHP?');
        // establecer el media_id
        $postfields['media_ids'] = $this->getMediaId($settings);

        // crea la coneccion con Twitter
        $twitter = new TwitterAPIExchange($settings);

        // envia el tweet
        $twitter->buildOauth($url, $requestMethod)
            ->setPostfields($postfields)
            ->performRequest();
    }
}

$t = new Twitter();

$t->sendTweets();
