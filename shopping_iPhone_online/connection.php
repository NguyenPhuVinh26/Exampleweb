<?php
    //$conn = mysqli_connect('localhost', 'root', '', 'shoping_online') or die("Can not connect database".mysqli_connect_error());
	/*$Connect = mysqli_connect("localhost","root","","qlbh") or die("Lỗi".mysqli_error($Connect));
	
	mysqli_query($Connect,'SET NAMES "utf8"');
	//mysqli_close($Connect);*/
	$Connect = pg_connect("postgres://irazhjycrycebu:2958d802a2f10daccbcfcd5c88fc3afadc7dbf9c6893d8ec969cff97ee7ae480@ec2-18-234-15-247.compute-1.amazonaws.com:5432/dc83ouue9v2ndu");
    //$Connect = pg_connect("host=localhost port=5432 dbname=postgres");
	//$Connect = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=123456");
	
    if (!$Connect) {
        die("Connection failed");
    }

?>