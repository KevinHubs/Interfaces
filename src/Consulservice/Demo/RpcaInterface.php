<?php
declare(strict_types=1);


namespace Consulservice\Demo;

/**
 * composer rpc Interface
 * Interface RpcaInterface
 * @package Consulservice
 */

interface RpcaInterface
{

	public function add(int $a,int $b):int ;

	public function mix(int $a,int $b):int ;
}