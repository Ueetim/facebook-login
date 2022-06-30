<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook - sign up</title>

    <!-- links -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./fontawesome-free-6.0.0-beta3-web/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="form-header">
            <div class="header-info">
                <h1>Sign Up</h1>
                <p>It's quick and easy.</p>
            </div>
            <button>&times;</button>
        </div>
        <hr>
        <form action="fb_login_controller.php" method="POST">
            <!-- name -->
            <div class="name">
                <!-- first name -->
                <div class="fname">
                    <div class="input-field">
                        <input type="text" name="fname" id="fname" placeholder="First name" value="<?= htmlspecialchars($fname) ?>" <?php if(!empty($errors['fname'])) { ?>style="border:1px solid rgb(202, 1, 1)" <?php } ?>>
                        <i class="fas fa-exclamation-circle exclaim" <?php if(!empty($errors['fname'])) { ?> style="visibility: visible" <?php } ?>></i>
                    </div>
                    <p class="error-txt"><?php echo $errors['fname'] ?></p>
                </div>

                <!-- last name -->
                <div class="lname">
                    <div class="input-field">
                        <input type="text" name="lname" id="lname" placeholder="Surname" value="<?= htmlspecialchars($lname) ?>" <?php if(!empty($errors['lname'])) { ?>style="border:1px solid rgb(202, 1, 1)" <?php } ?>>
                        <i class="fas fa-exclamation-circle exclaim" <?php if(!empty($errors['lname'])) { ?> style="visibility: visible" <?php } ?>></i>
                    </div>
                    <p class="error-txt"><?php echo $errors['lname'] ?></p>
                </div>
            </div>

            <!-- email -->
            <div class="email">
                <div class="input-field">
                    <input type="text" name="email" id="email" value="<?= htmlspecialchars($email) ?>" placeholder="Mobile number or email address" <?php if(!empty($errors['email'])) { ?>style="border:1px solid rgb(202, 1, 1)" <?php } ?>>
                    <i class="fas fa-exclamation-circle exclaim" <?php if(!empty($errors['email'])) { ?> style="visibility: visible" <?php } ?>></i>
                </div>
                <p class="error-txt"><?php echo $errors['email'] ?></p>
            </div>

            <!-- password -->
            <div class="password">
                <div class="input-field">
                    <input type="password" name="pword" id="pword" placeholder="Password" value="<?= htmlspecialchars($pword) ?>" <?php if(!empty($errors['pword'])) { ?>style="border:1px solid rgb(202, 1, 1)" <?php } ?>>
                    <i class="fas fa-exclamation-circle exclaim" <?php if(!empty($errors['pword'])) { ?> style="visibility: visible" <?php } ?>></i>
                </div>
                <p class="error-txt"><?php echo $errors['pword'] ?></p>
            </div>

            <!-- date of birth -->
            <p class="input-info">Date of birth <i class="fa fa-question-circle" aria-hidden="true"></i></p>
            <div class="dob">
                <select name="day" id="day">
                    <!-- options -->
                </select>
                <select name="month" id="month">
                    <!-- options -->
                </select>
                <select name="year" id="year">
                    <!-- options -->
                </select>
            </div>
            <p class="error-txt"></p>

            <!-- gender -->
            <p class="input-info">Gender <i class="fa fa-question-circle" aria-hidden="true"></i></p>
            <div class="gender">
                <div class="gender-options">
                    <div class="gender-opt female" <?php if(!empty($errors['gender'])) { ?>style="border:1px solid rgb(202, 1, 1)" <?php } ?>>
                        <input type="radio" name="gender" value="female" id="fmale" <?php if ($gender == 'female') { ?> checked <?php } ?>>
                        <label for="fmale">Female</label>
                    </div>
                    <div class="gender-opt male" <?php if(!empty($errors['gender'])) { ?>style="border:1px solid rgb(202, 1, 1)" <?php } ?>>
                        <input type="radio" name="gender" value="male" id="male" <?php if ($gender == 'male') { ?> checked <?php } ?>>
                        <label for="male">Male</label>
                    </div>
                    <div class="gender-opt custom" <?php if(!empty($errors['gender'])) { ?>style="border:1px solid rgb(202, 1, 1)" <?php } ?>>
                        <input type="radio" name="gender" value="custom" id="custom" <?php if ($gender == 'custom') { ?> checked <?php } ?>>
                        <label for="custom">Custom</label>
                    </div>
                </div>
                <p class="error-txt"><?php echo $errors['gender'] ?></p>

                <!-- custom option -->
                <div class="custom-container" <?php if ($gender == 'custom') { ?> style="display: flex;" <?php } ?>>
                    <div>
                        <select name="pronoun" id="custom-sel" <?php if(!empty($errors['pronoun'])) { ?>style="border:1px solid rgb(202, 1, 1)" <?php } ?>>
                            <option value="default" <?php if($pronoun == '') { ?> selected <?php } ?> disabled>Select your pronoun</option>
                            <option value="she" <?php if($pronoun == 'she') { ?> selected <?php } ?>>She: "Wish her a happy birthday!"</option>
                            <option value="he" <?php if($pronoun == 'he') { ?> selected <?php } ?>>He: "Wish him a happy birthday!"</option>
                            <option value="they" <?php if($pronoun == 'them') { ?> selected <?php } ?>>They: "Wish them a happy birthday!"</option>
                        </select>
                        <p class="error-txt"><?php echo $errors['pronoun'] ?></p>
                    </div>
                    <p class="input-info">Your pronoun is visible to everyone.</p>
    
                    <input type="text" name="gender-opt" id="gender-opt" placeholder="Gender (optional)">
                </div>

            </div>

            <!-- terms and agreement -->
            <div class="terms">
                <p>People who use our service may have uploaded your contact information to Facebook. <a href="#">Learn more</a>.</p>
                <p>By clicking Sign Up, you agree to our <a href="#">Terms</a>, <a href="#">Data Policy</a> and <a href="#">Cookie Policy</a>. You may receive SMS notifications from us and can opt out at any time.</p>
            </div>

            <div class="submit-btn">
                <input type="submit" value="Sign Up" name="submit">
            </div>
        </form>
    </div>

    <!-- script -->

    <script src="main.js"></script>
</body>
</html>