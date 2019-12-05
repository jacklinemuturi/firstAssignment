<?php   
    require_once('conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="ie=edge" http-equiv="X-UA-Compatible">
	<title>Document</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container container-fluid" style="margin:10px;">
		<div class="row">
			<form class="form-inline my-2 my-lg-0">
				<input aria-label="Search" class="form-control mr-sm-2" placeholder="Search" type="search"> 
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> 
                <button class='btn btn-primary' data-toggle='modal'style="margin-left:650px;" data-target='#staticBackdrop' type='button'>create new person</button>
                <!-- <button class="btn btn-primary" data-target="#staticBackdrop" data-toggle="modal" style="margin-left:650px;" type="button"></button>  -->

                <!-- <a href="form.php"> -->
                <!-- <a href= "form.php"><button type="button" style ="margin-left:50px;"class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"></a>
                </button> -->
			</form>
		</div>
	</div>
	<table class="table" style="margin:5px;">
		<thead>
			<tr>
				<th scope="colspan">#</th>
				<th scope="colspan">Name</th>
				<th scope="colspan">email</th>
				<th scope="colspan">phone</th>
				<th scope="colspan">gender</th>
				<th scope="colspan">years</th>
				<th scope="colspan">weight</th>
				<th scope="colspan">married</th>
				<th scope="colspan">workin</th>
				<th scope="colspan">action</th>
			</tr>
			<tr></tr>
		</thead>
        <?php
		                $stmt = "SELECT * FROM crud";
		                $result = mysqli_query($conn, $stmt);
		                
		                $resultcheck = mysqli_num_rows($result);

		                if($resultcheck > 0){
		                    while($row = mysqli_fetch_assoc($result)){
		                        echo "
		                        <tr>
		                            <td>".$row['id']."</td>
		                            <td>".$row['Name']."</td>
		                            <td>".$row['Email']."</td>
		                            <td>".$row['phonenumber']."</td>
		                            <td>".$row['Gender']."</td>
		                            <td>".$row['years']."</td>
		                            <td>".$row['Weight']."</td>
		                            <td>".$row['married']."</td>
		                            <td>".$row['Workin']."</td>
		                            <td><button class='btn btn-primary' data-toggle='modal' data-target='#edit".$row['id']."' type='button'>Edit</button></td>
		                            <td><button class='btn btn-danger' data-toggle='modal' data-target='.modal-dialog modal-sm' type='button'>DELETE</button></td>
                                   

                                </tr>";
        ?>
                    <!-- edit modal -->
                    <div aria-hidden="true" aria-labelledby="exampleModalLongTitle" class="modal fade" id="edit<?php echo $row['id']; ?>" role="dialog" tabindex="-1">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">EDIT <?php echo $row['Name']; ?></h5><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                <form action="insert.php" method="post">
                                    <h1 class="text-lg-center" style ="color:black;margin-top:20px;text-align:center">Edit person</h1><hr>
                                    <div class = "form-group">
                                        <div>
                                            <label for = "Username"></label>
                                            <input type="text" class = "form-control" id = "uname" name = "uname" placeholder = "Name" value="<?php echo $row['Name']; ?>">
                                        </div><br>
                                        <div class = "form-group">
                                            <label for = "exampleInputemail1"></label>
                                            <input type = "email" name = "email" class = "form-control" id = "exampleInputEmail1" aria-describedby = "emailHelp" placeholder="Enter E-mail" value="<?php echo $row['Email']; ?>">
                                            <small id = "emailHelp" class="form-text text-muted"></small>
                                        </div>
                                        <div class = "form-group">
                                            <label for = "exampleInputnumber1"></label>
                                            <input type = "number" name = "phone" class = "form-control" id = "exampleInputnumber1" aria-describedby = "Help" placeholder="Enter Your Phonenumber" value="<?php echo $row['phonenumber']; ?>">
                                            <small id = "Help" class="form-text text-muted"></small>
                                        </div><br>
                                        <div>
                                            <label>Gender</label><br>
                                                <input type = "radio" id = "gender" style = "margin-left:10px"; name = "gender" value="<?php echo $row['Gender']; ?>">Male 
                                                <input type = "radio" id = "gender" style = "margin-left:30px"; name = "gender"value="<?php echo $row['Gender']; ?>">female
                                        </div><br>
                                        <div class = "form-group">
                                            <label for = "exampleInputEmail1">Date</label>
                                            <input type = "date" name = "years" class = "form-control" id = "date" aria-describedby = "emailHelp" placeholder="mm/dd/yy" value="<?php echo $row['years']; ?>">
                                            <small id = "emailHelp" class="form-text text-muted"></small>
                                        </div>
                                        <div class = "form-group">
                                            <label for = "exampleInputEmail1">Weight</label>
                                            <input type = "text" name = "weight" class = "form-control" id = "exampleInputEmail1" aria-describedby = "emailHelp" placeholder="Weight" value="<?php echo $row['Weight']; ?>">
                                            <small id = "emailHelp" class="form-text text-muted"></small>
                                        </div>
                                        <div><label>Married:</label><br>
                                                <input type = "radio" id = "married" style = "margin-left:10px"; name = "married" value = "y">Yes
                                                <input type = "radio" id = "married" style = "margin-left:30px"; name = "married" value = "N">No
                                        </div><br>
                                        <div class = "form-group">
                                            <label for = "exampleInputEmail1">Time in:</label>
                                            <input type = "time" name = "workin" class = "form-control" id = "exampleInputEmail1" aria-describedby = "emailHelp" placeholder="--------"value="<?php echo $row['Workin']; ?>">
                                            <small id = "emailHelp" class="form-text text-muted"></small>
                                        </div><br>
                                </form>
                                <div class="col-6 col-md-5"></div><button class="btn btn-primary" name="submit" style="width: 100%;margin-right:150px" type="submit">EDIT</button>
				                </div>
                        </div>
                            </div>
                        </div>
                            <!-- delete modal -->
                            <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm" role="document">
                                <div class="modal-content">
                                    <form action = "insert.php" method = "post">
                                        <div class="col-6 col-md-2" style="background-color:red;height:50px;margin-top:0px;width:275px">
                                            <div class="text" style="text-align:center; margin:5px;color:white;width:250px;">
                                                Are you sure?</div>
                                            <div class="delete;" style="margin:25px;font-size:20px;text-align:center;">Delete person</div>
                                            <div class="color" style="margin-top:-30px;padding-left:50px"><img src="https://thumb1.shutterstock.com/thumb_large/3406661/1167809803/stock-vector-delete-icon-no-sign-close-symbol-vector-cancel-wrong-and-reject-illustration-1167809803.jpg"></div>
                                            <button style="margin:10px; background-color:red;">yes</button><button style="margin:10px;background-color:red;">No</button>
                                        </div>
                                    </form>
                                   
                                </div>
                                </div>
                            </div>
                            </div>

                        <!-- javascript -->
                        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
                        </script> 
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
                        </script> 
                        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
                        </script>
                    </div>
                <?php
		                    }
		                }else{
		                    echo "<td colspan= '3' class= 'text-center'><h1>no data</h1></td>";
		                }
		       
		        ?>
	</table>
    <!-- create Modal -->
    <a class="btn btn-primary" href="form.php">&#60;&#60;BACK</a> 
	<div aria-hidden="true" aria-labelledby="staticBackdropLabel" class="modal fade" data-backdrop="static" id="staticBackdrop" role="dialog" tabindex="-1">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">create new person</h5><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">
					<!-- form work -->
					<form action="insert.php" method="post">
						<h1 class="text-lg-center" style="color:black;margin-top:20px;text-align:center">create new person</h1>
						<hr>
						<div class="form-group">
							<div>
								<label for="Username"></label> <input class="form-control" id="uname" name="uname" placeholder="Name" type="text">
							</div><br>
							<div class="form-group">
								<label for="exampleInputemail1"></label> <input aria-describedby="emailHelp" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter E-mail" type="email"> <small class="form-text text-muted" id="emailHelp"></small>
							</div>
							<div class="form-group">
								<label for="exampleInputnumber1"></label> <input aria-describedby="Help" class="form-control" id="exampleInputnumber1" name="phone" placeholder="Enter Your Phonenumber" type="number"> <small class="form-text text-muted" id="Help"></small>
							</div><br>
							<div>
								<label>Gender</label><br>
								<input id="gender" name="gender" style="margin-left:10px;" type="radio" value="M">Male <input id="gender" name="gender" style="margin-left:30px;" type="radio" value="F">female
							</div><br>
							<div class="form-group">
								<label for="exampleInputEmail1">Date</label> <input aria-describedby="emailHelp" class="form-control" id="date" name="years" placeholder="mm/dd/yy" type="date"> <small class="form-text text-muted" id="emailHelp"></small>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Weight</label> <input aria-describedby="emailHelp" class="form-control" id="exampleInputEmail1" name="weight" placeholder="Weight" type="text"> <small class="form-text text-muted" id="emailHelp"></small>
							</div>
							<div>
								<label>Married:</label><br>
								<input id="married" name="married" style="margin-left:10px" type="radio" value="y">Yes <input id="married" name="married" style="margin-left:30px" type="radio" value="N">No
							</div><br>
							<div class="form-group">
								<label for="exampleInputEmail1">Time in:</label> <input aria-describedby="emailHelp" class="form-control" id="exampleInputEmail1" name="workin" placeholder="--------" type="time"> <small class="form-text text-muted" id="emailHelp"></small>
							</div><br>
						</div>
					</form>
					<div class="col-6 col-md-5"></div><button class="btn btn-primary" name="submit" style="width: 100%;margin-right:150px" type="submit">ADD</button>
				</div>
			</div>
		</div>
	</div>
    
</body>
</html>