<?php
 include_once( 'extension/groupdocsviewerjava/classes/groupdocsviewerjava.php' );
/*
class GroupdocsViewerJavaFunctionCollection
{

function GroupdocsViewerJavaFunctionCollection()
{
}

function &fetchList( $offset, $limit )
{
$parameters = array( 'offset' => $offset,
'limit' => $limit );
$lista =& Groupdocsviewerjava( $parameters );

return array( 'result' => &$lista );
}

}
*/
class eZModul2FunctionCollection
{ 
    public function __construct() 
    {
        // ...
    }
 
    /*
     * Is opened by('modul1', 'list', hash('as_object', $bool ) ) fetch
     * @param bool $asObject
     */ 
    public static function fetchList( $asObject ) 
    { 
        return array( 'result' => GroupDocsViewerJava::fetchList( $asObject ) ); 
    }
 
    /*
     * Is opened by('modul1', 'count', hash() ) fetch
     */
    public static function fetchJacExtensionDataListCount()
    { 
        return array( 'result' => GroupDocsViewerJava::getListCount() ); 
    } 
} 
?>