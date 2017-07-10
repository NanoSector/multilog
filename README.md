# Multilog
[![Build Status](https://scrutinizer-ci.com/g/Yoshi2889/multilog/badges/build.png?b=3.0)](https://scrutinizer-ci.com/g/Yoshi2889/multilog/build-status/master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Yoshi2889/multilog/badges/quality-score.png?b=3.0)](https://scrutinizer-ci.com/g/Yoshi2889/multilog/?branch=master)
[![Latest Stable Version](https://poser.pugx.org/yoshi2889/multilog/v/stable)](https://packagist.org/packages/yoshi2889/multilog)
[![Latest Unstable Version](https://poser.pugx.org/yoshi2889/multilog/v/unstable)](https://packagist.org/packages/yoshi2889/multilog)
[![Total Downloads](https://poser.pugx.org/yoshi2889/multilog/downloads)](https://packagist.org/packages/yoshi2889/multilog)

A PSR-3 compliant proxy for logging to multiple other PSR-3 compliant loggers.

## Installation
You can install this class via `composer`:

```composer require yoshi2889/multilog```

## Usage
Create an instance of Multilog\Proxy and add any instance of LoggerInterface to it,
either via the constructor or via the `addLogger` method. Logging via PSR-3 methods will 
cause Multilog to log to all registered loggers.

## License
This code is released under the MIT License. Please see `LICENSE` to read it.