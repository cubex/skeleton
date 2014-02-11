<?php

class ProjectTest extends PHPUnit_Framework_TestCase
{
  public function testProjectIsCubexKernel()
  {
    $cubex = new \Cubex\Cubex(__DIR__);
    $cubex->prepareCubex();
    $cubex->processConfiguration($cubex->getConfiguration());

    $this->assertInstanceOf(
      '\Cubex\Kernel\CubexKernel',
      $cubex->make('\Cubex\Kernel\CubexKernel')
    );
  }
}
