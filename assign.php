<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>
	- - - -
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="ie=edge" http-equiv="X-UA-Compatible">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="assign.css" rel="stylesheet">
	<div class="container-fluid">
		<div style="text-align:center; margin:15px;">
			<b>DATABASE CRUD</b>
		</div>
		<hr>
		<div class="row">
			<div aria-label="Basic example" class="col-md-3 btn-group" role="group" style="margin:30px;">
				<form action="assign.php" class="example" style="margin:auto;max-width:700px">
					<input name="search2" placeholder="Search by Name,Email or Phonenumber" type="text"> <input name="submit" type="submit" value="search">
				</form>
			</div>
			<div class="col-md-8 mt-5" style="padding-left:660px">
				<button class="btn btn-primary" data-target="#exampleModalScrollable" data-toggle="modal" type="button">ADD NEW PERSON</button>
			</div>
			<table class="table table-bordered" style="width: 98%;margin-right:70px;">
				<thead>
					<tr>
						<th scope="id">#</th>
						<th scope="name">Name</th>
						<th scope="email">Email</th>
						<th scope="phone">Phone number</th>
						<th scope="gender">Gender</th>
						<th scope="year">Year(s)</th>
						<th scope="weight">Weight(KG)</th>
						<th scope="married">Married</th>
						<th scope="working">Working</th>
						<th scope="act">Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">1</th>
						<td>Rando</td>
						<td>rando@gmail.com</td>
						<td>0712899076</td>
						<td>m</td>
						<td>69</td>
						<td>250.98</td>
						<td>true</td>
						<td>10:00:00</td>
						<td><button class="btn btn-primary" data-target="#exampleModalCenter" data-toggle="modal" type="button">Edit</button>
						<button class="btn btn-danger" data-target=".bd-example-modal-lg" data-toggle="modal" type="button">DELETE</button></td>
					</tr>
					<tr>
						<th scope="row">2</th>
						<td>jackie</td>
						<td>jackie@gmail.com</td>
						<td>0790080767</td>
						<td>f</td>
						<td>30</td>
						<td>67.98</td>
						<td>false</td>
						<td>08:30:00</td>
						<td><button class="btn btn-primary" data-target="#exampleModalCenter" data-toggle="modal" type="button">Edit</button> 
						<button class="btn btn-danger" data-target=".bd-example-modal-lg" data-toggle="modal" type="button">DELETE</button></td>
					</tr>
					<tr>
						<th scope="row">3</th>
						<td>Geeb</td>
						<td>Geeb@gmail.com</td>
						<td>07133464987</td>
						<td>m</td>
						<td>29</td>
						<td>58.7</td>
						<td>true</td>
						<td>09:22:00</td>
						<td><button class="btn btn-primary" data-target="#exampleModalCenter" data-toggle="modal" type="button">Edit</button> 
						<button class="btn btn-danger" data-target=".bd-example-modal-lg" data-toggle="modal" type="button">DELETE</button></td>
					</tr>
					<tr>
						<th scope="row">4</th>
						<td>Larvine</td>
						<td>larvine@gmail.com</td>
						<td>0788393474</td>
						<td>f</td>
						<td>19</td>
						<td>98.6</td>
						<td>true</td>
						<td>09:50:20</td>
						<td><button class="btn btn-primary" data-target="#exampleModalCenter" data-toggle="modal" type="button">Edit</button> 
						<button class="btn btn-danger" data-target=".bd-example-modal-lg" data-toggle="modal" type="button">DELETE</button></td>
					</tr>
					<tr>
						<th scope="row">5</th>
						<td>Dennis</td>
						<td>denno@gmail.com</td>
						<td>0733264673</td>
						<td>m</td>
						<td>32</td>
						<td>76.6</td>
						<td>false</td>
						<td>08:32:00</td>
						<td><button class="btn btn-primary" data-target="#exampleModalCenter" data-toggle="modal" type="button">Edit</button> 
						<button class="btn btn-danger" data-target=".bd-example-modal-lg" data-toggle="modal" type="button">DELETE</button></td>
					</tr>
				</tbody>
			</table><!-- delete modal -->
			<div aria-hidden="true" aria-labelledby="mySmallModalLabel" class="modal fade bd-example-modal-lg" role="dialog" tabindex="-1">
				<div class="modal-dialog modal-sm" role="document">
					<div class="modal-content">
						<div class="container" style = "border-style: ridge; width:280px;height:280px;margin:50px;text-align:center;">
						<div class="row">
							<form action="" method="post">
								<div class="col-6 col-md-2" style="height:100px;margin-right:70px;width:275px">
									<div class="text" style="text-align:center; margin:5px;color:white;width:100px;">
										Are you sure?
									</div>
									<div class="delete;" style="font-size:20px;text-align:center;margin:-36px;padding-left:50px;">
										Delete person?? <div class="color" style="margin-top:-30px;padding-left:50px"><img src="https://thumb1.shutterstock.com/thumb_large/3406661/1167809803/stock-vector-delete-icon-no-sign-close-symbol-vector-cancel-wrong-and-reject-illustration-1167809803.jpg"></div> -->
										 <button style="margin:10px; background-color:red;">yes</button> <button style="margin:10px;background-color:red;padding-left:-80px;">No</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- < eddit -->
			<div aria-hidden="true" aria-labelledby="exampleModalCenterTitle" class="modal fade" id="exampleModalCenter" role="dialog" tabindex="-1">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLongTitle"></h5><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
						</div>
						<div class="modal-body">
							<-- form -->
							<form action="" method="post">
								<h1 class="text-lg-center" style="color:black;margin-top:20px;text-align:center">Edit person</h1>
								<hr>
								<div class="form-group">
									<div>
										<label for="Username"></label> <input class="form-control" id="uname" name="uname" placeholder="Name" type="text">
									</div><br>
									<div class="form-group">
										<label for="exampleInputemail1"></label> <input aria-describedby="emailHelp" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter E-mail" type="email"> <small class="form-text text-muted" id="emailHelp"></small>
									</div>
									<div class="form-group">
										<label for="exampleInputnumber1"></label> <input aria-describedby="Help" class="form-control" id="exampleInputnumber1" name="number" placeholder="Enter Your Phonenumber" type="number"> <small class="form-text text-muted" id="Help"></small>
									</div><br>
									<div>
										<label>Gender</label><br>
										<input id="gender" name="gender" style="margin-left:10px" type="radio" value="Gender">Male <input id="gende" name="gender" style="margin-left:30px" type="radio" value="Gender">female
									</div><br>
									<div class="form-group">
										<label for="exampleInputEmail1">Date</label> <input aria-describedby="emailHelp" class="form-control" id="date" name="date" placeholder="mm/dd/yy" type="date"> <small class="form-text text-muted" id="emailHelp"></small>
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Weight</label> <input aria-describedby="emailHelp" class="form-control" id="exampleInputEmail1" name="weight" placeholder="Weight" type="text"> <small class="form-text text-muted" id="emailHelp"></small>
									</div>
									<div>
										<label>Married:</label><br>
										<input id="gender" name="gender" style="margin-left:10px" type="radio" value="Gender">Yes <input id="gende" name="gender" style="margin-left:30px" type="radio" value="Gender">No
									</div><br>
									<div class="form-group">
										<label for="exampleInputEmail1">Time in:</label> <input aria-describedby="emailHelp" class="form-control" id="exampleInputEmail1" name="time" placeholder="--------" type="time"> <small class="form-text text-muted" id="emailHelp"></small>
									</div><br>
								</div>
							</form>
							<div class="col-6 col-md-5"></div><button class="btn btn-primary" name="edit" style="width: 100%;margin-right:150px" type="submit">EDIT</button>
						</div>
					</div>
					<!-- <div class="modal-footer">
						<button class="btn btn-secondary" data-dismiss="modal" type="button"></button> <button class="btn btn-primary" type="button"></button>
					</div> -->
				</div>
			</div><!-- add person Modal -->
			<div aria-hidden="true" aria-labelledby="exampleModalScrollableTitle" class="modal fade" id="exampleModalScrollable" role="dialog" tabindex="-1">
				<div class="modal-dialog modal-dialog-scrollable" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalScrollableTitle">ADD NEW PERSON</h5><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
						</div>
						<div class="modal-body">
							<!-- form work -->
							<form action="insert.php" method="post">
                    <h1 class="text-lg-center" style ="color:black;margin-top:20px;text-align:center">create New person</h1><hr>
                    <div class = "form-group">
                        <div>
                            <label for = "Username"></label>
                            <input type = "text" class = "form-control" id = "uname" name = "uname" placeholder = "Name">
                        </div><br>
                        <div class = "form-group">
                            <label for = "exampleInputemail1"></label>
                            <input type = "email" name = "email" class = "form-control" id = "exampleInputEmail1" aria-describedby = "emailHelp" placeholder="Enter E-mail">
                            <small id = "emailHelp" class="form-text text-muted"></small>
                        </div>
                        <div class = "form-group">
                            <label for = "exampleInputnumber1"></label>
                            <input type = "number" name = "phone" class = "form-control" id = "exampleInputnumber1" aria-describedby = "Help" placeholder="Enter Your Phonenumber">
                            <small id = "Help" class="form-text text-muted"></small>
                        </div><br>
                        <div>
                            <label>Gender</label><br>
                                <input type = "radio" id = "gender" style = "margin-left:10px"; name = "gender" value = "M">Male 
                                <input type = "radio" id = "gender" style = "margin-left:30px"; name = "gender" value = "F">female
                        </div><br>
                        <div class = "form-group">
                            <label for = "exampleInputEmail1">Date</label>
                            <input type = "date" name = "years" class = "form-control" id = "date" aria-describedby = "emailHelp" placeholder="mm/dd/yy">
                            <small id = "emailHelp" class="form-text text-muted"></small>
                        </div>
                        <div class = "form-group">
                            <label for = "exampleInputEmail1">Weight</label>
                            <input type = "text" name = "weight" class = "form-control" id = "exampleInputEmail1" aria-describedby = "emailHelp" placeholder="Weight">
                            <small id = "emailHelp" class="form-text text-muted"></small>
                        </div>
                        <div><label>Married:</label><br>
                                <input type = "radio" id = "married" style = "margin-left:10px"; name = "married" value = "y">Yes
                                <input type = "radio" id = "married" style = "margin-left:30px"; name = "married" value = "N">No
                        </div><br>
                        <div class = "form-group">
                            <label for = "exampleInputEmail1">Time in:</label>
                            <input type = "time" name = "workin" class = "form-control" id = "exampleInputEmail1" aria-describedby = "emailHelp" placeholder="--------">
                            <small id = "emailHelp" class="form-text text-muted"></small>
                        </div><br>
                </form>
                    <div class = "col-6 col-md-5"></div>
                    <button type = "submit" name = "submit" class = "btn btn-primary" style = "width: 100%;margin-right:150px">ADD</button>
                   

        </div>
						<!-- <div class="modal-footer">
							<button class="btn btn-secondary" data-dismiss="modal" type="button">Close</button> <button class="btn btn-primary" type="button">Save changes</button>
						</div> -->
					</div>
				</div>
			</div>
			<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js">
			</script> 
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js">
			</script> 
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">
			</script>
		</div>
	</div>
	
</body>
</html>