<?php


namespace AppCreational\AbstractFactory;

/**
 * And this Concrete Product provides PHPTemplate page title templates.
 */
class PHPTemplateTitleTemplate implements TitleTemplate
{
  public function getTemplateString(): string
  {
    return "<h1><?= $title; ?></h1>";
  }
}