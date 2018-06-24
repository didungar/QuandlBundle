<?php
/**
 * Created by PhpStorm.
 * User: didungar
 * Date: 24/06/18
 * Time: 18:53
 */

/**
 * Class QuandlService
 * composer require dannyben/php-quandl
 * {@link https://github.com/DannyBen/php-quandl}
 */
class QuandlService extends \Quandl
{
	const FORMAT_OBJECT = 'object';

	public function __construct(?string $quandl_api_key=null, string $format = self::FORMAT_OBJECT)
	{
		parent::__construct($quandl_api_key, $format);
	}

}