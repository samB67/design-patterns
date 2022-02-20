<?php


namespace AppCreational\AbstractFactory;

/**
 * This is another Abstract Product type, which describes whole page templates.
 */
interface PageTemplate
{
  public function getTemplateString(): string;
}