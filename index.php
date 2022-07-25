
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <br><br>
    <div class="container col-6">
        <div class="card">
            <div class="card-header">
                User Registration
            </div>
            <div class="card-body">
                <?php
                include_once './controller/user_data.php';
                $user_data = getUsers();
                
                    if (isset($_GET['success'])) {
                       ?>
                            <div class="alert alert-success">
                                <h5>User data saved successfully</h5>
                            </div><br>
                            <div>
                                <h5><?php print_r($user_data); ?></h5>
                            </div>
                       <?php
                    }
                    if (isset($_GET['error'])) {
                        ?>
                             <div class="alert alert-danger">
                                 <h5>An error was encountered. Please try again later</h5>
                             </div>
                        <?php
                     }
                ?>
                <form method="POST" action="./controller/user_data.php">
                    <div class="form-group">
                        <label for="type">Name</label>
                        <input type="text" class="form-control" name="name"> 
                    </div>
                    <div class="form-group">
                        <label for="input1">Email</label>
                        <input type="email" class="form-control" name="email"> 
                    </div>
                    <div class="form-group">
                        <label for="input1">DoB</label>
                        <input type="date" class="form-control" name="dob"> 
                    </div>

                    <div class="form-group">
                        <label for="input1">Gender</label>
                        <select class="form-control" name="gender" id="">
                            <option value="">--Select Gender--</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="type">Country</label>
                        <input type="text" class="form-control" name="country"> 
                    </div>
                    
                    <div class="d-flex justify-content-center">
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>