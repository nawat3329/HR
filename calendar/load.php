<?php

//load calendar

require("../connect.php");

$data = array();

$query = "SELECT Event_ID,Event_Name,Event_Date_Start,Event_Date_End FROM company_event";

$statement = $mysqli->query($query);

while($row = $statement->fetch_array())
{
 $data[] = array(
  'id'   => $row["Event_ID"],
  'title'   => $row["Event_Name"],
  'start'   => $row["Event_Date_Start"],
  'end'   => $row["Event_Date_End"]
 );
}
echo json_encode($data);

?>