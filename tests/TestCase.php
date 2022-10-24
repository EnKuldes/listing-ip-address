<?php

namespace EnKuldes\ListingIPAddress\Tests;

use EnKuldes\ListingIPAddress\ListingIPAddress;

class TestCase extends \Orchestra\Testbench\TestCase
{
  public function setUp(): void
  {
    parent::setUp();
    // additional setup
  }

  protected function getPackageProviders($app)
  {
    return [
      ListingIPAddress::class,
    ];
  }

  protected function getEnvironmentSetUp($app)
  {
    // perform environment setup
  }
}