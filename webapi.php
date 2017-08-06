<?php

require __DIR__ . '/vendor/autoload.php';

use Automattic\WooCommerce\Client;

function api( $header )
{

  $woocommerce = new Client(
    $header['url'],
    $header['consumer_key'],
    $header['consumer_secret'],
    [
      'wp_api' => true,
      'version' => 'wc/v1',
    ]
  );

  $data = $_REQUEST;

  if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    print_r($woocommerce->get( $header['api'] , $data));

  } if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    print_r($woocommerce->post( $header['url'] , $data));

  } if ($_SERVER['REQUEST_METHOD'] === 'PUT') {

    print_r($woocommerce->put( $header['url'] , $data));

  } if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {

    print_r($woocommerce->delete( $header['url'] , $data));

  }

}

function checkHeaderAndRequest()
{
  if ( !empty( getallheaders() ) ) {

    $header = getallheaders();

    if (
      !empty( $header['url'] ) &&
      !empty( $header['consumer_key'] ) &&
      !empty( $header['consumer_secret'] ) &&
      !empty( $header['api'] )
    ) {

      api( $header );

    } else {

      throw new Exception("Missing some required Header, please check if you already send all the required Header.");

    }

  }

}


try {

  checkHeaderAndRequest();

}
catch(Exception $e) {

  echo $e->getMessage();

}
