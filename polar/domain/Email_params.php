<?php
/**
 * @copyright Copyright © 2014 - 2016 Kristian Matthews. All rights reserved.
 * @author    Kristian Matthews <kristian.matthews@my.westminster.ac.uk>
 * @package   Polar
 */

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Email parameters.
 *
 * @package Polar\Domain\Params
 */
class Email_params extends Params {

	/**
	 * @var string $email Email.
	 */
	public $email;

	/**
	 * @var string[] $emails Emails.
	 */
	public $emails = array();

	/**
	 * JSON serialize.
	 *
	 * @return object Object.
	 */
	public function jsonSerialize()
	{
		$object = new stdClass();

		$object->email = $this->email;
		$object->emails = $this->emails;

		return $object;
	}

	/**
	 * JSON deserialize.
	 *
	 * @param object $object
	 */
	public function jsonDeserialize($object)
	{
		$object = json_decode($object);

		if (isset($object->email))
		{
			$this->email = $object->email;
		}

		if (isset($object->emails))
		{
			$this->emails = $object->emails;
		}
	}
}