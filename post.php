<?php
ini_set('display_errors', 1);
require_once('TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "1546941728141238272-GNDTn6JWJiH2mul25Jl5bQyUcrvD0S",
    'oauth_access_token_secret' => "sRjm68XHDsCn9swqS0iW2ngPHAbB2Pb10uPcPKnLeaYub",
    'consumer_key' => "WyGuJ4p7Se73QDrbUX518yy4U",
    'consumer_secret' => "GV0iG8oPd6SY65y5qXbP4cUjJ1pqdCFg8lC6SYvKq6fD7PN4UZ"
);

/** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ **/
$url = 'https://api.twitter.com/1.1/statuses/update.json'; //'https://api.twitter.com/1.1/blocks/create.json';
$requestMethod = 'POST';

/** POST fields required by the URL above. See relevant docs as above **/
$postfields = array(
    'screen_name' => 'usernameToBlock',
    'skip_status' => '1'
);

if($_POST){
    if($_POST['text_area']){
        $postdata = array('status' => "UN SALUDO A TODOS....
        SOY *PERCY MAUCAYLLE HUAMAN*
        ".$_POST['text_area']);

        $twitter = new TwitterAPIExchange($settings);
        echo $twitter->setPostfields($postdata)
            ->buildOauth($url, $requestMethod)
            ->performRequest();
        


        header('location:index.php');
    }else{
        Echo "Ingrese Descrición del Tweet";
        header('location:index.php');
    }
    
}else{
    header('location:index.php');
}

/********/
$postdata = array('status' => "UN SALUDO A TODOS....
    SOY *PERCY MAUCAYLLE HUAMAN*
");

// $twitter = new TwitterAPIExchange($settings);
// echo $twitter->setPostfields($postdata)
//     ->buildOauth($url, $requestMethod)
//     ->performRequest();
/*********/

/** Perform a POST request and echo the response **/
// $twitter = new TwitterAPIExchange($settings);
// echo $twitter->buildOauth($url, $requestMethod)
//              ->setPostfields($postfields)
//              ->performRequest();



/** Perform a GET request and echo the response **/
/** Note: Set the GET field BEFORE calling buildOauth(); **/
// $url = 'https://api.twitter.com/1.1/followers/ids.json';
// $getfield = '?screen_name=J7mbo';
// $requestMethod = 'GET';
// $twitter = new TwitterAPIExchange($settings);
// echo $twitter->setGetfield($getfield)
//              ->buildOauth($url, $requestMethod)
//              ->performRequest();


// Size restrictions for uploading via API 
// Image 5 MB
// GIF 15 MB
// Video 512 MB (when using media_category=amplify)










//consumer keys
$api_key = "WyGuJ4p7Se73QDrbUX518yy4U";
$api_key_secret = "GV0iG8oPd6SY65y5qXbP4cUjJ1pqdCFg8lC6SYvKq6fD7PN4UZ";

//Authentication tokens
$bearer_token = "AAAAAAAAAAAAAAAAAAAAAIsKewEAAAAA%2F9MEWXWpJaPza4kZLUHssaEScu8%3DAI2bpQh3drNiANWYuUHZkIIqlnsVv0KyTmiRlhoQ2keVwhNtEA";
$access_token = "1546941728141238272-GNDTn6JWJiH2mul25Jl5bQyUcrvD0S";
$acces_token_secret = "sRjm68XHDsCn9swqS0iW2ngPHAbB2Pb10uPcPKnLeaYub";


///Auth 2.0 Client ID and Client Secret
//client id OE5TYWlfaWdBd2tWN05zdXRTdG46MTpjaQ
//client secret   BF41kAeudfXxqlNVwS65Kw6ifmSPE0g9yK8ya6y3PWXwB7PBGv
// // 

// App details 
// name: testmanuco
// id: 24840843
