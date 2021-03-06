<?php
/**
 * PEAR2\DATABASE\Pl2Method\Pl2Method
 *
 * PHP version 5
 *
 * @category  DB
 * @package   PEAR2_DATABASE_Pl2Method
 * @author    Ivo Nascimento <ivo@o8o.com.br>
 * @copyright 2011 Ivo Nascimento
 * @license   http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @version   SVN: $Id$
 * @link      http://svn.php.net/repository/pear2/PEAR2_DATABASE_Pl2Method
 */

/**
 * Main class for PEAR2_DATABASE_Pl2Method
 *
 * @category  Database
 * @package   PEAR2_DATABASE_Pl2Method
 * @author    Ivo Nascimento <ivo@o8o.com.br>
 * @copyright 2011 Ivo Nascimento
 * @license   http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @link      http://svn.php.net/repository/pear2/PEAR2_DATABASE_Pl2Method
 */
namespace PEAR2\DB\Pl2Method;
class Pl2Method
{
	public static function getInstance(\PDO $conn){
		return self::getDriverInstance($conn);
	}
	/**
	 *
	 * Enter description here ...
	 * @param PDO $conn
	 * @return SGDBDriver
	 * @access Private
	 */
	private static function getDriverInstance(\PDO $conn){
		$driverName = "\\PEAR2\\DB\\Pl2Method\\Driver\\".ucfirst($conn->getAttribute( \PDO::ATTR_DRIVER_NAME));
		return New $driverName($conn);
	}
}
