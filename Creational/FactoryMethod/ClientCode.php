<?php

require '../../vendor/autoload.php';
header('Content-type: text/plain');

use AppCreational\FactoryMethod\FacebookPoster;
use AppCreational\FactoryMethod\LinkedInPoster;
use AppCreational\FactoryMethod\SocialNetworkPoster;

/**
 * The client code can work with any subclass of SocialNetworkPoster since it
 * doesn't depend on concrete classes.
 */
function clientCode(SocialNetworkPoster $creator)
{
  $creator->post("Hello world!");
}

/**
 * During the initialization phase, the app can decide which social network it
 * wants to work with, create an object of the proper subclass, and pass it to
 * the client code.
 */
echo "Testing ConcreteCreator1: \n";
clientCode(new FacebookPoster("john_smith", "******"));
echo "\n\n";

echo "Testing ConcreteCreator2: \n";
clientCode(new LinkedInPoster("john_smith@example.com", "******"));

