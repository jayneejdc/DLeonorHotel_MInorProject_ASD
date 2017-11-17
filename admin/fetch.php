<?php

$connect = mysqli_connect("localhost", "root", "", "hotel_reservation");
$columns = array('user_ID', 'username', 'activity', 'date and time');
$query = "SELECT * FROM history WHERE";

	if($_POST["is_date_search"]== "yes")
	{
		$query .='date and time BETWEEN "' .$_POST["start_date"]. '" AND "' .$_POST["end_date"] .'"AND "';
	}

	if(isset(($_POST["search"]["value"]))
	{
		$query .= '
		(user_ID LIKE "%' .$_POST["search"]["value"]. '%" OR username LIKE "%' .$_POST["search"]["value"]. '%" OR activity LIKE "%'.$_POST["search"]["value"]. '%" ) 
		';
	}
	if(isset($_POST["order"]))
	{
		$query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir']. '
		';

	}
	else
	{
		$query .= 'ORDER BY user_ID DESC ';
	}
	$query1 = '';
	if($_POST["length"] != -1)
	{
		$query1 = 'LIMIT' . $_POST['start'] . ', '. $_POST['length'];
	}

	$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));
	$result = mysqli_query($connect, $query . $query1);

	$data = array();

	while ($row = mysqli_fetch_array($result))
	 {
		$sub_array = array();
		$sub_array[] = $row ["user_ID"];
		$sub_array[] = $row ["username"];
		$sub_array[] = $row ["activity"];
		$sub_array[] = $row ["date and time"];
		$data[] = $sub_array;
	}
	function get_all_data($connect)
	{
		$query = "SELECT * FROM history";
		$result = mysql_query($connect, $query);
		return mysqli_num_rows($result);
	}
	
	$output = arra(
		"draw" 				=> intval($_POST["draw"]),
		"recordsTotal"	    => get_all_data($connect),
		"recordsFiltered"   =>$number_filter_row,
		"data"				=>$data
	);

	echo json_encode($output);