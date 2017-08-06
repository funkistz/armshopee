<?php

$server = new League\OAuth1\Client\Server\Bitbucket(array(
    'identifier' => 'ck_aae3f908a2bbdd08a95a56e2714ebe2e15c77a6c',
    'secret' => 'cs_d7e0e9f9f35e106f37b54a5eec28ea19dbbbb37e',
    'callback_uri' => "http://armshopee.com.my/wp-json/wc/v2/products?",
));

echo $server;
