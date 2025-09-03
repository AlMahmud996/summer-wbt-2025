<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor Form</title>
    <link rel="stylesheet" href="form.css">
    <style>
        .error {color: #FF0000;}
    </style>
</head>

<body>
    <?php
    $fnameErr = $lnameErr = $companyErr = $add1Err = $add2Err = "";
    $name = $email = $gender = "";


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["fname"])) {
            $fnameErr = "First Name is required";
        } else {
            $fname = htmlSpecialChars()($_POST["fname"]);
            if(!preg_match("^[a-zA-Z-' ]*$/", $fname)){
                $fnameErr = "Only letters and spaces allowed";
            }elseif(strlen($fname) < 2){
                $fnameErr = "First name must be at least 2 character";
            }
        }
    
        if (empty($_POST["lname"])) {
            $lnameErr = "Last Name is required";
        } else {
            $lname = htmlSpecialChars()($_POST["fname"]);
            if(!preg_match("^[a-zA-Z-' ]*$/", $lname)){
                $lnameErr = "Only letters and spaces allowed";
            }elseif(strlen($lname) < 2){
                $lnameErr = "First name must be at least 2 character";
            }
        }
    
        if (empty($_POST["company"])) {
            $companyErr = "Company Name is required";
        } else {
            $company = test_input($_POST["company"]);
        }
        
        if (empty($_POST["add1"])) {
            $website = "";
        } else {
            $website = test_input($_POST["add1"]);
        }
        
        if (empty($_POST["add2"])) {
            $comment = "";
        } else {
            $comment = test_input($_POST["add2"]);
        }
        
        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }
        if (!empty($_POST["phone"])) {
            $phone = test_input($_POST["phone"]);
            if (!preg_match("/^[0-9]{7,15}$/", $phone)) {
                $phoneErr = "Invalid phone number";
            }
        }
        }
    
        function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <div class="full-form">
        <div>
            <h5><strong>*</strong>- Denotes Required Information</h5>
            <ul class="info">
                <li>>Donation</li>
                <li>>Confirmation</li>
                <li>>Thank You</li>
            </ul>
        </div>
        <h2>Donor Information</h2>

        <form method="POST" action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="form-group">
                <label for="name">First Name <strong>*</strong></label>
                <input type="text" id="name" name="fname" value= "<?php echo $fname;?>">
                <span class="error"> * <?php echo $fnameErr;?></span>
                <br><br>
                
            </div>
            <div class="form-group">
                <label for="name">Last Name <strong>*</strong></label>
                <input type="text" id="name" name="lname">
                <span class="error"> * <?php echo $lnameErr;?></span>
                <br><br>
            </div>
            <div class="form-group">
                <label for="company">Company</label>
                <input type="text" id="company" name="company">
                <span class="error"> <?php echo $companyErr;?></span>
                <br><br>
            </div>
            <div class="form-group">
                <label for="address">Address 1 <strong>*</strong></label>
                <input type="text" id="address 1" name="add1">
                <span class="error"> <?php echo $add1Err;?></span>
                <br><br>
            </div>
            <div class="form-group">
                <label for="address">Address 2</label>
                <input type="text" id="address 2" name="add2">
                <span class="error"> <?php echo $add2Err;?></span>
                <br><br>
            </div>
            <div class="form-group">
                <label for="city">City <strong>*</strong></label>
                <input type="text" id="city" name="city">
            </div>
            <div class="form-group">
                <label for="state">State <strong>*</strong></label>
                <select name="" id="">
                    <option value="">Select a State</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Chottogram">Chottogram</option>
                    <option value="Sylhet">Sylhet</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Bogura">Bogura</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Islamabad">Islamabad</option>
                </select>
            </div>
            <div class="form-group">
                <label for="zip">Zip Code <strong>*</strong></label>
                <input type="number" id="zip">
            </div>
            <div class="form-group">
                <label for="country">Country <strong>*</strong></label>
                <select name="" id="">
                    <option value="">Select a Country</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="India">India</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Nepal">Nepal</option>
                </select>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="number" id="phone">
            </div>
            <div class="form-group">
                <label for="phone">Fax</label>
                <input type="number" id="fax">
            </div>
            <div class="form-group">
                <label for="zip">Email<strong>*</strong></label>
                <input type="email" id="email">
            </div>
            <div class="form-group">
                <label for="amount">Donation Amount <strong>*</strong></label>
                <input type="radio" name="gender">None
                <input type="radio" name="gender">$50
                <input type="radio" name="gender">$75
                <input type="radio" name="gender">$100
                <input type="radio" name="gender">$250
                <input type="radio" name="gender">$other
            </div>
            <div class="form-group">
                (Check a button or type in your <br>
                amount) <span>Other Amount $</span> <input type="number" id="">
            </div>
            <div class="form-group">
                <label for="">Recuring Donation </label>
                <input type="checkbox">I am interested in giving on a regular basis-<br>
                Monthly Credit Card $<input type="text" id=""> For <input type="text" id="">
            </div>
        </form>

        <h2>Honorarium and Memorial Donation Information</h2>
        <form method="POST">
            <div class="form-group">
                <label for="amount">I would like to make this <br>donation</label>
                <input type="checkbox" name="">To Honor
                <input type="checkbox" name="">In Memory of
            </div>
            <div class="form-group">
                <label for="text">Name</label>
                <input type="text" id="name">
            </div>
            <div class="form-group">
                <label for="text">Acknowledge Donation to</label>
                <input type="text" id="">
            </div>
            <div class="form-group">
                <label for="text">Address</label>
                <input type="text" id="address">
            </div>
            <div class="form-group">
                <label for="text">City</label>
                <input type="text" id="city">
            </div>
            <div class="form-group">
                <label for="state">State </label>
                <select name="" id="">
                    <option value="">Select a State</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Chottogram">Chottogram</option>
                    <option value="Sylhet">Sylhet</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Bogura">Bogura</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Islamabad">Islamabad</option>
                </select>
            </div>
            <div class="form-group">
                <label for="text">Zip</label>
                <input type="text" id="zip">
            </div>
        </form>
        <h2>Additional Information</h2>
        <h4>Please enter your name, company or organization as you would like to appear in our publication: </h4>
        <div class="form-group">
            <label for="text">Name</label>
            <input type="text" id="zip">
        </div>
        <div class="">
            <input type="checkbox" name="">I would like my gift to remain anonymous. <br>
            <input type="checkbox" name="">My employer offers a matching gift program. I will mail the matching gift
            form. <br>
            <input type="checkbox" name="">Please save the cost of acknowledging this gift by not mailling a thank you
            letter.
        </div>
        <div class="form-group">
            <label for="text">Comments</label>
            <br> (Please type any questions or feedback here)<input type="text" name="comment">
        </div>
        <div class="form-group">
            <section>
                <label for="">How may we contact you?</label>
                <input type="checkbox" name="">Email <br>
                <input type="checkbox" name="">Postal Mail <br>
                <input type="checkbox" name="">Telephone <br>
                <input type="checkbox" name="">Fax <br>
                I would like to receive newsletters and information about special events by:<br>
                <input type="checkbox" name="">E-mail <br>
                <input type="checkbox" name="">Postal Mail
            </section>            
        </div>
        <input type="checkbox" name="">I would like information about volunteering with the
        <hr>
        <div class="form-group">
            <input type="reset" value="Reset">
            <input type="submit" name="submit" value="Continue">
        </div>
        <h4>Donate online with confidence. You are on secure server.</h4>
        <h4>If you have any problems or question, please contact <a href="">support.</a></h4>
    </div>
</body>

</html>