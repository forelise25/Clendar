<meta http-equiv="content-type" content="text/html;charset=euc-kr">
<?
  $host="localhost";
  $dbid="root";
  $dbpass="1234";
  $dbname="scheduler";
  
  function my_connect($host,$id,$pass,$db){
	$connect=mysql_connect($host,$id,$pass);
	mysql_select_db($db);
	return $connect;
  }
  //mysql ����
  $connect = my_connect($host, $dbid, $dbpass, $dbname);

		$query = "delete from subject_table where subject_pk = '$pk'";
   mysql_query($query, $connect);



	echo "<script>
			window.alert('�����Ǿ����ϴ�.');
			location.href='admin.php';
	  </script> ";

?>
