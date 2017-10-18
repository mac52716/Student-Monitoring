<?Php
include('dbcon.php');

$filename = "Studentinfo";//File Name
/*******YOU DO NOT NEED TO EDIT ANYTHING BELOW THIS LINE*******/    
//create MySQL connection   
$sql = "SELECT * FROM studinfo";
//execute query 
$result = $conn->query($sql);
$file_ending = "xls";
//header info for browser

header("Content-Type: application/xls");    
header("Content-Disposition: attachment; filename=$filename.xls");  
header("Pragma: no-cache"); 
header("Expires: 0");
/*******Start of Formatting for Excel*******/   
//define separator (defines columns in excel & tabs in word)
$sep = "\t"; //tabbed character
//start of printing column names as names of MySQL fields
$fields = mysqli_fetch_fields($result);
			$headers = array();
			foreach ($fields as $field) {
				$headers[] = $field->name;
			}

			$fp = fopen('php://output', 'w');
			if ($fp && $result) {
				header('Content-Type: text/csv');
				header('Content-Disposition: attachment; filename="All CIPs report.csv"');
				header('Pragma: no-cache');
				header('Expires: 0');
				fputcsv($fp, $headers);
				while ($row = $result->fetch_array(MYSQLI_NUM)) {
					fputcsv($fp, array_values($row));
				}
				die;
			}
?>