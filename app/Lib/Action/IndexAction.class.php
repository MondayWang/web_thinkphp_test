<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){

    // $name="monday";
    // $this->assign(data,$name);

    $m=M("username");
//    $arr=$m->where('id=1')->getField('username');
//	$m->where('username="chen1"')->delete();
	$data['id']=5;
	$data['username']='MondayWxiugai';
	$arr=$m->save($data);
	echo $arr;
//	var_dump($arr);
//	$this->assign('data',$arr);
    $this->display();	
	}

	// public function show(){
	// 	// echo "string".$_GET['username'];
	// }
}

?>