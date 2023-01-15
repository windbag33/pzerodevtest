

<?PHP

if(file_exists('coronadata.json'))
{
	$filename = 'coronadata.json';
	$data = file_get_contents($filename); //data read from json file
	//print_r($data);

	$Country = json_decode($data);  //decode a data
	//print_r($Country); //array format data printing



	 $message = "<h3 class='text-success'>Corona Virus Data</h3>";
}else{
	 $message = "<h3 class='text-danger'>JSON file Not found</h3>";
}


?>




<!DOCTYPE html>
 <html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
  <title>Read a JSON File</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<style>
#tbstyle {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

#tbstyle td, #tbstyle th {
  border: 1px solid 
#ddd;
  padding: 8px;
}

#tbstyle tr:nth-child(even){background-color: 
#f2f2f2;}

#tbstyle tr:hover {background-color: 
#ddd;}

#tbstyle th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: 
  #007bff;
  color: 
White;
}
</style>
      </head>
	  <body>
	   <div class="container" style="width:500px;">
	   <div class="table-container">
       <h1>Basic Admin Section</h1>
	   <?php
			 if(isset($message))
			 {
				  echo $message;

			 ?>
		<table id="tbstyle">
			<tbody>
				<tr>
					<th>Country</th>
					<th>Total Cases</th>
					<th>New Cases</th>
					<th>Total Deaths</th>
					<th>New Deaths</th>
                    <th>Total Recovered </th>
				</tr>
				<?php foreach ($Country as $countrydata) { ?>
				<tr>
					<td> <?= $countrydata->name; ?> </td>
					<td> <?= $countrydata->totalcases; ?> </td>
					<td> <?= $countrydata->newcases; ?> </td>
					<td> <?= $countrydata->totaldeaths; ?> </td>
					<td> <?= $countrydata->newdeaths; ?> </td>
                    <td> <?= $countrydata->totalrecovered; ?> </td>
				</tr>
				<?php }
			 }
			 else
				echo $message;
			 ?>
    </tbody>
</table>
</div>
</div>
</body>
</html>


