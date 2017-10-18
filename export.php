<?Php
include('dbcon.php');


/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$filename = "Studentinfo";//File Name
/*******YOU DO NOT NEED TO EDIT ANYTHING BELOW THIS LINE*******/    
//create MySQL connection   
$sql = "SELECT * FROM studinfo ORDER BY idno ASC";
//execute query 
$result = $conn->query($sql);
$file_ending = "xls";
//header info for browser

header("Content-Type: application/xls");    
header("Content-Disposition: attachment; filename=$filename.xls");  
header("Pragma: no-cache"); 
header("Expires: 0");

$fields = mysqli_fetch_fields($result);
			$headers = array();
			foreach ($fields as $field) {
				$headers[] = $field->name;
				
			}

			$fp = fopen('php://output', 'w');
			if ($fp && $result) {
				header('Content-Type: text/csv');
				header('Content-Disposition: attachment; filename="Students Info.csv"');
				header('Pragma: no-cache');
				header('Expires: 0');
				fputcsv($fp, $headers);
				while ($row = $result->fetch_array(MYSQLI_NUM)) {
					fputcsv($fp, array_values($row));
				}
				die;
			}
?>
/* close connection */
mysqli_close($conn);
?>