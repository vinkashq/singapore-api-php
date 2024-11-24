<?php

namespace Vinkas\Singapore\Api;

use Saloon\Http\Connector as SaloonConnector;
use Vinkas\Singapore\Api\Resource\AirQuality;
use Vinkas\Singapore\Api\Resource\Weather;

/**
 * Real-time API weather services
 *
 * Real-time API documentation of weather services
 */
class Connector extends SaloonConnector
{
	public function __construct()
	{
	}


	public function resolveBaseUrl(): string
	{
		return "https://api-open.data.gov.sg/v2/real-time/api";
	}

	public function airQuality(): AirQuality
	{
		return new AirQuality($this);
	}

	public function weather(): Weather
	{
		return new Weather($this);
	}
}
