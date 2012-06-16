<?php
if(isset($_SESSION["login"])){
	if($_SESSION["login"] == true){
		$is_logged = true;
		$logged = $_SESSION["login_data"];
	}
}