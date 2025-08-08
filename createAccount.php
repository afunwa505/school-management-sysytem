<?php
include "conn.php";

$firstnameError="";$lastnameError="";$usernameError="";$password1Error="";$password2Error="";$emailError="";$DOBError="";
if(isset($_POST['register'])){
    $id="";
    $firstName = mysqli_real_escape_string($conn,$_POST['firstName']);
    $lastName = mysqli_real_escape_string($conn,$_POST['lastName']);
    $DOB = mysqli_real_escape_string($conn,$_POST['DOB']);
    $gender = mysqli_real_escape_string($conn,strtolower($_POST['gender']));
     $class = mysqli_real_escape_string($conn,strtolower($_POST['class']));
    $password1 = mysqli_real_escape_string($conn,$_POST['password1']);
    $hash = password_hash($password1, PASSWORD_DEFAULT);
    $password2 = mysqli_real_escape_string($conn,$_POST['password2']);
    //$profileImage = mysqli_real_escape_string($conn,$_POST['image']);
    $parentName = mysqli_real_escape_string($conn,$_POST['parentName']);
    $parentNumber = mysqli_real_escape_string($conn,$_POST['parentNumber']);
    $parentAddress = mysqli_real_escape_string($conn,$_POST['parentAddress']);
     
    
   

    $sql = "INSERT INTO strdregister VALUES('$id','$firstName','$lastName',' $DOB','$gender','$class','$hash','$parentName','$parentNumber','$parentAddress')";

    

    if(empty($firstName)){
        $firstnameError = "Enter your firstname";
    }elseif(empty($lastName)){
        $lastnameError = "Enter your Last Name";
    }elseif(empty($DOB)){
        $DOBError = "Enter your date of birth";
    }elseif(empty($password1)){
        $password1Error = "Enter your password";
    }elseif(strlen($password1) <= 4){
        $password1Error = "Password must be up to 5 characters";
    }elseif(empty($password2)){
        $password2Error = "Verify your password";
    }elseif($password2 != $password1){
        $password2Error = "Password does not match";
    }elseif(mysqli_query($conn,$sql)){
        header('location:login.php');
    }else{
        echo "ERROR: something went wrong!!!"
            .mysqli_error($conn);
    }
}
    
mysqli_close($conn);

?>

<?php 
// Include the database configuration file 
include 'conn.php'; 
 
$statusMsg = ''; 
 
// File upload directory 
$targetDir = "uploads/"; 
 
if(isset($_POST["register"])){ 
    $id = "";
    if(!empty($_FILES["image"]["name"])){ 
        $fileName = basename($_FILES["image"]["name"]); 
        $targetFilePath = $targetDir . $fileName; 
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION); 
     
        // Allow certain file formats 
        $allowTypes = array('JPG','jpg','PNG','JPEG','GIF','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            // Upload file to server 
            if(move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)){ 
                // Insert image file name into database 
                $insert = "INSERT INTO image (image) VALUES ('".$fileName."')"; 
                mysqli_query($conn,$insert);
                if($insert){ 
                    $statusMsg = " ".$fileName. " has been uploaded successfully."; 
                }else{ 
                    $statusMsg = "File upload failed, please try again."; 
                }  
            }else{ 
                $statusMsg = "Sorry, there was an error uploading your file."; 
            } 
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select a file to upload.'; 
    } 
} 
 
// Display status message 
echo $statusMsg; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>::SMS::</title>
    <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"/>
    <!-- Bootstrap Jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- ICON FONTS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Martian+Mono:wght@100..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <!-- CSS -->
     <link rel="stylesheet" href="/CSS/style.css">
      <link rel="stylesheet" href="custom.css">
     <!-- JS -->
      <link rel="stylesheet" href="/JS/script.js">
</head>
<body>
    <!-- CREATE-ACCOUNT PAGE -->
    <div class="container ">
        <div class="card border-0">
            <div class="card-body  d-flex justify-content-center align-items-center">
                    <img src="logo3.png" class="img-fluid" height="50" width="50" alt="">
                    <h1 class="text-brown text-center fs-1">WELCOME</h1>
            </div>
        </div>
        <div class="row justify-content-center align-items-center mb-1 rounded">
            <div class="col-md-12  d-flex justify-content-center align-items-center">
                <div class="card border-0">
                    <div class="card-body">
                        <h4 class="fs-7 text-muted fw-bold">Registration Form</h4>
                        <form class="fs-7 text-muted fw-bold shadow-lg px-5 py-3 " action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" enctype="multipart/form-data">
                            <div style="font-size: 10px;" class="fw-bold d-flex justify-content-center align-items-center mb-3">
                                <div>
                                    <p class="text-center m-0 p-0">Student Information</p>
                                    <hr class="border-2 border-secondary border-bottom m-0 p-0 w-100">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text" class="form-control fs-7 text-muted" id="firstName" placeholder="Enter first name" name="firstName">
                                </div>
                                
                                <div class="col-md-6">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control fs-7 text-muted" id="lastName" placeholder="Enter last name" name="lastName">
                                </div>
                                <div style="color: red; text-align:center;"><?php echo $lastnameError?></div> 
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                <label for="dateOfBirth" class="form-label">Date of Birth</label>
                                <input type="date" class="form-control fs-7 text-muted" id="dateOfBirth" name="DOB" placeholder="Enter your date of birth">
                                <div style="color: red; text-align:center;"><?php echo $DOBError?></div> 
                                </div>
                                <div class="col-md-6">
                                <label for="gender" class="form-label">Gender</label>
                             <input type="text" class="form-control fs-7 text-muted" id="gender" placeholder="Enter your gender" name="gender">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                <label for="lastName" class="form-label">Select class</label>
                                <br>
                                <select name="class" id="Nusery" >
                                    <option value="" >None</option>
                                    <option value="Nusery 1">Nusery 1</option>
                                    <option value="Nusery 2">Nusery 2</option>
                                    <option value="Nusery 3">Nusery 3</option>
                                     <option value="Primary 1">Primary 1</option>
                                    <option value="Primary 2">Primary 2</option>
                                    <option value="Primary 3">Primary 3</option>
                                    <option value="Primary 4">Primary 4</option>
                                    <option value="Primary 5">Primary 5</option>
                                    <option value="Primary 6">Primary 6</option>
                                    <option value="jss1">jss1</option>
                                    <option value="jss2">jss2</option>
                                    <option value="jss3">jss3</option>
                                    <option value="ss1">ss1</option>
                                    <option value="ss2">ss2</option>
                                    <option value="ss3">ss3</option>
                                </select>
                                </div>
                               
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                <label for="firstName" class="form-label">Password</label>
                                <input type="password" class="form-control fs-7 text-muted" id="password" placeholder="Enter password" name="password1">
                                </div>
                                <div class="col-md-6">
                                <label for="lastName" class="form-label">Confirm password</label>
                                <input type="password" class="form-control fs-7 text-muted" id="confirm_pwd" placeholder="Confirm password" name="password2">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="profileImage" class="form-label">Profile Image</label>
                                <input type="file" class="form-control fs-7 text-muted" id="profileImage" accept="image/*" name="image">
                            </div>
                            <div style="font-size: 10px;" class="fw-bold d-flex justify-content-center align-items-center mb-3">
                                <div>
                                    <p class="text-center m-0 p-0">Parent/Guardian Information</p>
                                    <hr class="border-2 border-secondary border-bottom m-0 p-0 w-100">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                <label for="parentName" class="form-label">Parent/Guardian Name</label>
                                <input type="text" class="form-control fs-7 text-muted" id="parentName" placeholder="Enter parent/guardian name" name="parentName">
                                </div>
                                <div class="col-md-6">
                                <label for="parentPhoneNumber" class="form-label">Parent/Guardian Number</label>
                                <input type="tel" class="form-control fs-7 text-muted" id="parentPhoneNumber" placeholder="Enter parent/guardian phone number" name="parentNumber">
                                </div>
                            </div>
                            <h4 style="font-size: 10px; font-weight: bold;">Address Information</h4>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control fs-7 text-muted" id="address" rows="3" placeholder="Enter address" name="parentAddress">
                            </div>
                            <div id="message" class="text-danger text-center fs-7 fw-bold my-1"></div>
                            <div class="d-grid gap-2 d-flex justify-content-center align-items-center">
                                <button type="submit" class="btn btn-primary btn-sm w-50 fs-7 fw-bold" name="register">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
      /*
       function log(){
         // for create account
// Get the form elements
const firstName = document.getElementById('firstName');
const lastName = document.getElementById('lastName');
const dateOfBirth = document.getElementById('dateOfBirth');
const gender = document.getElementById('gender');
const password = document.getElementById('password');
const confirmPwd = document.getElementById('confirm_pwd');
const parentName = document.getElementById('parentName');
const parentPhoneNumber = document.getElementById('parentPhoneNumber');
const address = document.getElementById('address');
const message = document.getElementById('message');


// Add event listener to the form submit
document.querySelector('form').addEventListener('submit', (e) => {
  // Prevent default form submission
  e.preventDefault();

  // Check if first name is not empty
  if (firstName.value.trim() !== '') {
    // Check if last name is not empty
    if (lastName.value.trim() !== '') {
      // Check if date of birth is selected
      if (dateOfBirth.value !== '') {
        // Check if gender is selected
        if (gender.value !== 'Choose a gender') {
          // Check if password is not empty and matches confirm password
          if (password.value !== '' && password.value === confirmPwd.value) {
            // Check if parent/guardian name is not empty
            if (parentName.value.trim() !== '') {
              // Check if parent/guardian phone number is not empty
              if (parentPhoneNumber.value.trim() !== '') {
                // Check if address is not empty
                if (address.value.trim() !== '') {
                  // If all conditions are met, submit the form
                  document.getElementById('message').innerHTML = 'Form submitted successfully!';
                  
                  // document.querySelector('form').submit();
                } else {
                  document.getElementById('message').innerHTML = 'Please enter address!';
                }
              } else {
                document.getElementById('message').innerHTML = 'Please enter parent/guardian phone number!';
              }
            } else {
              document.getElementById('message').innerHTML = 'Please enter parent/guardian name!';
            }
          } else {
            document.getElementById('message').innerHTML = 'Passwords do not match!';
          }
        } else {
          document.getElementById('message').innerHTML = 'Please select a gender!';
        }
      } else {
        document.getElementById('message').innerHTML = 'Please select date of birth!';
      }
    } else {
      document.getElementById('message').innerHTML ='Please enter last name!';
    }
  } else {
    document.getElementById('message').innerHTML = 'Please enter first name!';
  }
});
       }
*/
    </script>
    

  
      <!-- Bootstrap Javascript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
</body>
</html>