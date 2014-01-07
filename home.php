<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>App42 Sample Php-Redis Application</title>
<link href="css/style-User-Input-Form.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div class="App42PaaS_header_wrapper">
    	<div class="App42PaaS_header_inner">
        	<div class="App42PaaS_header">  
                <div class="logo"> 
                    <a href="http://app42paas.shephertz.com"><img border="0" alt="App42PaaS" src="images/logo.png"></img></a>
                 </div>     
            </div> 
    	</div>
	</div>
<!------------------------------------Header Closed------------------------------------------->
	<div class="App42PaaS_body_wrapper">
    	<div class="App42PaaS_body">
        	<div class="App42PaaS_body_inner">
            <div class="contactPage_title">
            	<table>
                	<thead class="table-head">
                    	<tr>
                        <td>Name</td>
                        </tr>
                	</thead><tbody>
<?php 
//connection to the database
require "DBManager.php";

$client = new DBManager();
$result = $client->getAllData();
   
foreach ($result as $row) {
  echo "<tr><td>".$row."</td></tr>";
}
?>
</tbody>
         </table>
			<div align="left"></div><br/><br/><a href="index.php">Back</a>
            </div>
            </div>
    	</div>
    </div>
</body>
</html>