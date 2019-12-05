
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>assignment</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
            integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> 
        <link rel="stylesheet" href="assign.css">
    </head>
    <body>
        <div class="row">
            <div class="col-6 col-md-2"></div>
            <div class="col-6 col-md-5" style = "background-color:#DCDCDC; margin:60px;height:760px">
                    <!-- form work -->
                <form action="insert.php" method="post">
                    <h1 class="text-lg-center" style ="color:black;margin-top:20px;text-align:center">Edit person</h1><hr>
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
                            <input type = "number" name = "number" class = "form-control" id = "exampleInputnumber1" aria-describedby = "Help" placeholder="Enter Your Phonenumber">
                            <small id = "Help" class="form-text text-muted"></small>
                        </div><br>
                        <div>
                            <label>Gender</label><br>
                                <input type = "radio" id = "gender" style = "margin-left:10px"; name = "gender" value = "Gender">Male 
                                <input type = "radio" id = "gende" style = "margin-left:30px"; name = "gender" value = "Gender">female
                        </div><br>
                        <div class = "form-group">
                            <label for = "exampleInputEmail1">Date</label>
                            <input type = "date" name = "date" class = "form-control" id = "date" aria-describedby = "emailHelp" placeholder="mm/dd/yy">
                            <small id = "emailHelp" class="form-text text-muted"></small>
                        </div>
                        <div class = "form-group">
                            <label for = "exampleInputEmail1">Weight</label>
                            <input type = "text" name = "weight" class = "form-control" id = "exampleInputEmail1" aria-describedby = "emailHelp" placeholder="Weight">
                            <small id = "emailHelp" class="form-text text-muted"></small>
                        </div>
                        <div><label>Married:</label><br>
                                <input type = "radio" id = "gender" style = "margin-left:10px"; name = "gender" value = "Gender">Yes
                                <input type = "radio" id = "gende" style = "margin-left:30px"; name = "gender" value = "Gender">No
                        </div><br>
                        <div class = "form-group">
                            <label for = "exampleInputEmail1">Time in:</label>
                            <input type = "time" name = "time" class = "form-control" id = "exampleInputEmail1" aria-describedby = "emailHelp" placeholder="--------">
                            <small id = "emailHelp" class="form-text text-muted"></small>
                        </div><br>
                </form>
                    <div class = "col-6 col-md-5"></div>
                    <button type = "submit" name = "edit" class = "btn btn-primary" style = "width: 100%;margin-right:150px">EDit</button>
                   

        </div>
    </body>
</html>