<?php
/**
 * Базовое Runtime-исключение при работе с библиотекой
 *
 * @package    go\DB
 * @subpackage Exceptions
 * @author     Григорьев Олег aka vasa_c
 */

namespace go\DB\Exceptions;

abstract class Runtime extends \RuntimeException implements Exception
{
    
}