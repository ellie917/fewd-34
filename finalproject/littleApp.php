<?php
echo "<h2>Simple Twitter API Test</h2>";

require_once('TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "2421710734-zBw5t1PBDpaSfCApmFMXUlkTQSYjUfML4ZWGJ4j",
    'oauth_access_token_secret' => "rlcbVgRLgpHEbsVqsHMwVNijMgSep0P2lasGZJnj4tHal",
    'consumer_key' => "y6zwV0Pr9OpmCTJ2Q0lvw01AN",
    'consumer_secret' => "rNLIluLJmBKyjXGayKC4QQjo11xWTFU81FRKI2Y4N7dYWJcR3r"
);

// Set the GET field BEFORE calling buildOauth(); and everything else is the same:
$url = 'https://api.twitter.com/1.1/statuses/show.json';
$getfield = '?id=645388617993445376';
$requestMethod = 'GET';

$twitter = new TwitterAPIExchange($settings);
echo $twitter->setGetfield($getfield)
    ->buildOauth($url, $requestMethod)
    ->performRequest();


?>
