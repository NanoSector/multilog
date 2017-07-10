<?php
/**
 * Copyright 2017 NanoSector
 *
 * You should have received a copy of the MIT license with the project.
 * See the LICENSE file for more information.
 */

namespace Yoshi2889\Multilog;


use Psr\Log\LoggerInterface;

class Proxy implements LoggerInterface
{
	/**
	 * @var LoggerInterface[]
	 */
	protected $loggers = [];

	/**
	 * Proxy constructor.
	 *
	 * @param LoggerInterface[] $loggers
	 */
	public function __construct(LoggerInterface ...$loggers)
	{
		$this->loggers = $loggers;
	}

	/**
	 * @param LoggerInterface $logger
	 *
	 * @return bool
	 */
	public function addLogger(LoggerInterface $logger)
	{
		if (in_array($logger, $this->loggers))
			return false;

		$this->loggers[] = $logger;
		return true;
	}

	/**
	 * @param LoggerInterface $logger
	 *
	 * @return bool
	 */
	public function removeLogger(LoggerInterface $logger)
	{
		if (!in_array($logger, $this->loggers))
			return false;

		unset($this->loggers[array_search($logger,$this->loggers)]);
		return true;
	}

	/**
	 * @param string $message
	 * @param array $context
	 */
	public function alert($message, array $context = [])
	{
		foreach ($this->loggers as $logger)
			$logger->alert($message, $context);
	}

	/**
	 * @param string $message
	 * @param array $context
	 */
	public function critical($message, array $context = [])
	{
		foreach ($this->loggers as $logger)
			$logger->critical($message, $context);
	}

	/**
	 * @param string $message
	 * @param array $context
	 */
	public function debug($message, array $context = [])
	{
		foreach ($this->loggers as $logger)
			$logger->debug($message, $context);
	}

	/**
	 * @param string $message
	 * @param array $context
	 */
	public function emergency($message, array $context = [])
	{
		foreach ($this->loggers as $logger)
			$logger->emergency($message, $context);
	}

	/**
	 * @param string $message
	 * @param array $context
	 */
	public function error($message, array $context = [])
	{
		foreach ($this->loggers as $logger)
			$logger->error($message, $context);
	}

	/**
	 * @param string $message
	 * @param array $context
	 */
	public function warning($message, array $context = [])
	{
		foreach ($this->loggers as $logger)
			$logger->warning($message, $context);
	}

	/**
	 * @param string $message
	 * @param array $context
	 */
	public function notice($message, array $context = [])
	{
		foreach ($this->loggers as $logger)
			$logger->notice($message, $context);
	}

	/**
	 * @param string $message
	 * @param array $context
	 */
	public function info($message, array $context = [])
	{
		foreach ($this->loggers as $logger)
			$logger->info($message, $context);
	}

	/**
	 * @param mixed $level
	 * @param string $message
	 * @param array $context
	 */
	public function log($level, $message, array $context = [])
	{
		foreach ($this->loggers as $logger)
			$logger->log($level, $message, $context);
	}
}