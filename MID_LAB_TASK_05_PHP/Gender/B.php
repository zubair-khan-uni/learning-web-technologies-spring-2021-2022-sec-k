<?php 

	if(isset($_REQUEST['submit'])){
		if($_REQUEST['gender'] == null){
			echo "Please select a gender";
		}
        else{
			echo "Gender : ".$_REQUEST['gender'];;
		}
	}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        .buttonS{
            margin-top: 15px;
        }
    </style>
    <form method="post" action="">
        <fieldset>
            <legend>Gender</legend>
            <table border="1">
                <tr>
                    <input type="radio" name="gender" id="" value="Male"/>Male
                    <input type="radio" name="gender" id="" value="Female"/>Female
                    <input type="radio" name="gender" id="" value="Other"/>Other
                </tr>
            </br>
                <tr >
                    <input class="buttonS" type="submit" name="submit" value="Submit"/>
                    <h4>Gender: <?=$gender?></h4>
                </tr>
            </fieldset>
            </table>
    </form>
</body>

</html> 