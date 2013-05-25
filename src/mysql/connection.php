<?php

class MySQLConnection{

private $dsn = 'mysql:dbname=examination;host=127.0.0.1';
private $mysql_user = 'root';
private $mysql_passwd = 'tera09';

private $connection;//DPO instance;

function __construct(){
	try{
	$this->connection = new PDO($this->dsn,$this->mysql_user,$this->mysql_passwd);
	$this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
	//echo '接続なう〜<br>';
/*	$sql = 'select * from user';
	foreach ($this->connection->query($sql) as $row) {
		print($row['id']);
		# code...
	} */
	}catch(PDOException $e){
		//echo '接続失敗'.$e->getMessage();
		echo "あれ？何かおかしいようです。<br>管理人にお知らせください＞＜";
	}
}

	function registerUserAuth($userid,$screenName,$oauth_token,$oauth_token_secret){
		//var_dump($this->connection);
		$query =  'INSERT INTO `user` (id,screen_name,oauth_token,oauth_token_secret) VALUES ( ?, ?, ?, ?)';
		$stmt = $this->connection->prepare($query);
		$flag = $stmt->execute(array($userid,$screenName,$oauth_token,$oauth_token_secret));

		if($flag){
		//	echo '登録成功';
		}else{
		//	echo '登録失敗';
		}
	}

	function updateUserAuth($userid,$screenName,$oauth_token,$oauth_token_secret){
		$query = 'UPDATE `user` SET oauth_token = ? ,oauth_token_secret = ? WHERE id = ? AND screen_name = ?';
		$stmt = $this->connection->prepare($query);
		$flag = $stmt->execute(array($oauth_token,$oauth_token_secret,$userid,$screenName));

		if($flag){
		//	echo '更新成功';
		}else{
		//	echo '更新失敗';
		}
	}

	function getUserOAuth_token($userid,$screenName){
		$query = 'SELECT oauth_token FROM user WHERE id = ? AND screen_name = ?';
		$stmt = $this->connection->prepare($query);
		$stmt->bindValue(1,$userid,PDO::PARAM_INT);
		$stmt->bindValue(2,$screenName,PDO::PARAM_STR);
		$stmt->execute();
		$oauth_token = $stmt->fetch();
		return $oauth_token[0];
	}

	function checkAlreadyUser($userid){
	//	echo "check {$userid}<br>";
		$query = 'SELECT id FROM user WHERE id = ?';
		$stmt = $this->connection->prepare($query);
		$stmt->bindValue(1,$userid,PDO::PARAM_INT);
		$stmt->execute();
		$result = $stmt->fetch();
		//echo "{$result} <br>";
		return $result == "" ? FALSE : TRUE;
	}

	//女子小学生可愛い///
	// ('・ω・')
	// (＞ω＜)／ わふ〜 //←可愛い　クド可愛い　やばい　可愛い　可愛い　可愛い　可愛い可愛い可愛い可愛い

}

