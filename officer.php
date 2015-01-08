<?php
include "connect.php";
mysql_query("set character_set_results=utf8");
mysql_query("set character_set_connection=utf8");
mysql_query("set character_set_client=utf8");

$department = $_GET['department'];
    
$sql ='SELECT * FROM officer WHERE department_id="'.$department.'"';

$data = array();
//$sql ='select od.id as id_dx,concat(p.fname," ",p.lname) as ptname,o.hn,o.vstdttm,od.icd10,od.cnt,o.vn from ovst o left outer join ovstdx od on od.vn=o.vn left outer join pt p on p.hn=o.hn   where date(o.vstdttm) = "'.$visit_date.'" and od.cnt="1" order by o.vstdttm limit '.$limit.', 10 ';

$result = mysql_query($sql,$con);

while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
   
    $row_array['officer_name'] = $row['officer_name'];
    $row_array['officer_pos'] = $row['officer_pos'];
    $row_array['officer_image'] = $row['officer_image'];
      
    array_push($data,$row_array);
   
}
echo json_encode($data);
exit;
?>