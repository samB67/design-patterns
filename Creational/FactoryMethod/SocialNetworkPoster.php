<?php

namespace AppCreational\FactoryMethod;

/**
 * The Creator declares a factory method that can be used as a substitution for
 * the direct constructor calls of products, for instance:
 *
 * - Before: $p = new FacebookConnector();
 * - After: $p = $this->getSocialNetwork;
 *
 * This allows changing the type of the product being created by
 * SocialNetworkPoster's subclasses.
 */
abstract class SocialNetworkPoster
{
  abstract public function getSocialNetwork(): SocialNetworkConnector;

  public function post($content): void
  {
    // Call the factory method to create a Product object...
    $network = $this->getSocialNetwork();
    // ...then use it as you will.
    $network->logIn();
    $network->createPost($content);
    $network->logout();
  }
}