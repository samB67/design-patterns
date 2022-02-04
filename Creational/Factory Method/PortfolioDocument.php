<?php


class PortfolioDocument extends AbstractDocument
{
  public function createPage()
  {
    return new PortfolioPage();
  }
}