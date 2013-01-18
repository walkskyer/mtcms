<?php
class BaseModel extends CActiveRecord {
	

	public function select($select='*'){
		$this->getDbCriteria()->mergeWith(array(
        'select'=>$select,
    	));
    	return $this;
	}
	public function order($order='recommend_level desc,id desc')
	{
    	$this->getDbCriteria()->mergeWith(array(
        'order'=>$order,
    	));
    	return $this;
	}	
	public function limit($limit){
		$this->getDbCriteria()->mergeWith(array(
        'limit'=>$limit,
    	));
    	return $this;
	}
	public function offset($offset=-1){
		$this->getDbCriteria()->mergeWith(array(
        'offset'=>$offset,
    	));
    	return $this;
	}
}