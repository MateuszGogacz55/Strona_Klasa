<?PHP
$host="localhost";
$db_name="blog";
$db_user="root";
$db_pass="";
$link=mysqli_connect($host,$db_user,$db_pass,$db_name);
if($link){
	//echo "Succesful connected to database";
}
else
{
	echo "Problems with server";
}
function change_date($date){
				$expl_date=explode('-',$date);
				$new_date=$expl_date[2];
				$new_date.="/";
				$new_date.=$expl_date[1];
				$new_date.="/";
				$new_date.=$expl_date[0];
				return $new_date;
}
?>