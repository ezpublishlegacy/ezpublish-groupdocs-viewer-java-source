<?php
/**
 * File containing the ezjscoreDemoServerCallFunctions class.
 *
 * @package ezjscore_demo
 * @version //autogentag//
 * @copyright Copyright (C) 2005-2009 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */
 include_once( 'extension/ezjscore/classes/ezjscserverfunctions.php' );
 include_once( 'lib/ezutils/classes/ezhttptool.php' );
 include_once( 'kernel/classes/ezpersistentobject.php' );
class GroupdocsviewerjavaServerCallFunctions extends ezjscServerFunctions
{


    public static function search( $args )
    {
        if ( isset( $args[0] ) )
        {
            return 'Wrong access ;)';
        }
        else
        {
            $http = eZHTTPTool::instance();
            if ( $http->hasPostVariable( 'arg1' ) )
            {
                return 'Hello World, you sent 
                        me post : ' . $http->postVariable( 'arg1' );
            }
        }
 
	$db = eZDB::instance();
	$dataArray = '';
	// prepear js array
	$dataArray.= '{';

	$query = 'SELECT * FROM gdvj'; 
	$rows = $db -> arrayQuery( $query );

	$count = sizeof($rows);
	$c = 1;
	if($rows) foreach($rows as $row){
		if($row['width']==='0') 
			$row['width'] = '100%'; 
		else 
			$row['width'] = $row['width'].'px';
		if($row['height']==='0') 
			$row['height'] = '300px';
		else
			$row['height'] = $row['height'].'px';
		// forming js array
		$dataArray.= '"'.$row['file_hook'].'":["'.$row['url'].'","'.$row['width'].'","'.$row['height'].'"]';
		if($count>$c) $dataArray.= ',';  
	    $c++;
	}
	$dataArray.= '}';
        return ($count)?$dataArray:'';
    }
}
?>