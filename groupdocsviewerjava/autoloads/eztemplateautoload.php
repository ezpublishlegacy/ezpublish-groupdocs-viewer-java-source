<?php
include_once( 'extension/groupdocsviewerjava/classes/groupdocsviewerjava.php' );

/** 
 * Operator: gvdj('list') and gvdj('count') <br> 
 * Count: {gvdj('count')} <br> 
 * Liste: {gvdj('list')|attribute(show)} 
 */ 
class GVDJOperator
{ 
    public $Operators;
 
    public function __construct( $name = 'gvdj' )
    { 
        $this->Operators = array( $name ); 
    }
 
    /** 
     * Returns the template operators.
     * @return array
     */ 
    function operatorList()
    { 
        return $this->Operators; 
    }
 
    /**
     * Returns true to tell the template engine that the parameter list 
     * exists per operator type. 
     */ 
    public function namedParameterPerOperator() 
    { 
        return true; 
    }
 
    /**
     * @see eZTemplateOperator::namedParameterList 
     **/ 
    public function namedParameterList() 
    { 
        return array( 'gvdj' => array( 'result_type' => array( 'type' => 'string',    
                                                              'required' => true, 
                                                              'default' => 'list' ))
                    ); 
    }
 
    /**
     * Depending of the parameters that have been transmitted, fetch objects JACExtensionData 
     * {gvdn('list)} or count data {gvdn('count')} 
     */ 
    public function modify( $tpl, $operatorName, $operatorParameters, $rootNamespace, $currentNamespace, &$operatorValue, $namedParameters )
    { 
        $result_type = $namedParameters['result_type']; 
        if( $result_type == 'list') 
            $operatorValue = GroupDocsViewerJava::fetchList(true); 
        else if( $result_type == 'count') 
            $operatorValue = GroupDocsViewerJava::getListCount(); 
    } 
} 
?>