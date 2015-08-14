<?php
// 本类是用户类
class UserAction extends Action {
    public function user(){
		
		$username=M("username");
		$arr=$username->select();
//		var_dump($arr);
		$this->assign('data',$arr);
		$this->display();
	}
	
	public function del(){
	
		$id=$_GET["id"];
		$m=M("username");
		$count=$m->delete($id);
		if($count>0){
		
			$this->success("数据删除成功！");
		}else{
		
			$this->error("XXXXX数据删除失败XXXXX");
		}
	}
	
	
	public function update(){
	
		$id=$_GET["id"];
		$m=M("username");
		$arr=$m->find($id);
		$this->assign('newname',$arr);
		$this->display();
		
	}
	
	public function update2(){
		
		$m=M("username");
		$newdate["id"]=$_POST['id'];
		$newdate["username"]=$_POST['username'];
		$newdate["sexy"]=$_POST['sexy'];
		$arr=$m->save($newdate);
		if($arr>0){
			$this->success('数据修改成功','/index.php/User/user');
		}else{
			$this->error('数据修改失败');
		}
		
	}
	
}

?>