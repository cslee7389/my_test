<?php
class CateData {

	//change private to public
	public $_data = array();

	public function __construct($data){

		$this->_data = $data;

	}

	//add get data
	public function getData(){

	   return $this->_data;

	}

}

$data = array( 'a'=>'Category1', 'b'=>'Category2', 'c'=>'Category3', 'd'=>'Category4',
);

$cate = new CateData($data);

//update $cate to $cate->getData()
foreach($cate->getData() as $key => $val){
	echo "$key : ". $val;
}

//update $cate to $cate->_data
foreach($cate->_data as $key => $val){    
    var_dump("$key: $val");
}

//add for loop to return array
foreach($cate as $key){    
	foreach ($key as $k => $value) {
		var_dump("$k : $value");
	}    
}

?>