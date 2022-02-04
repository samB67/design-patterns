<?php


abstract class AbstractDocument
{
  public function render()
  {
    $this->addPage(1, $this->createPage());
  }

  public function addPage($num, AbstractPage)
  {

  }

  abstract public function createPage();
}