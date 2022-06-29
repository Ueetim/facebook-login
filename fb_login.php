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
        <form action="">
            <!-- name -->
            <div class="name">
                <div class="fname">
                    <input type="text" name="fname" id="fname" placeholder="First name">
                </div>
                <div class="lname">
                <input type="text" name="lname" id="lname" placeholder="Surname">
                </div>
            </div>

            <!-- email -->
            <div class="email">
                <input type="text" name="email" id="email" placeholder="Mobile number or email address">
            </div>

            <!-- password -->
            <input type="password" name="pword" id="pword" placeholder="Password">

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

            <!-- gender -->
            <p class="input-info">Gender <i class="fa fa-question-circle" aria-hidden="true"></i></p>
            <div class="gender">
                <div class="gender-options">
                    <div class="female">
                        <label for="fmale">Female</label>
                        <input type="radio" name="gender" value="female" id="fmale">
                    </div>
                    <div class="male">
                        <label for="male">Male</label>
                        <input type="radio" name="gender" value="male" id="male">
                    </div>
                    <div class="custom">
                        <label for="custom">Custom</label>
                        <input type="radio" name="gender" value="custom" id="custom">
                    </div>
                </div>

                <!-- custom option -->
                <div class="custom-container">
                    <select name="custom" id="custom-sel">
                        <option value="default" selected disabled>Select your pronoun</option>
                        <option value="she">She: "Wish her a happy birthday!"</option>
                        <option value="he">He: "Wish him a happy birthday!"</option>
                        <option value="they">They: "Wish them a happy birthday!"</option>
                    </select>
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
                <input type="submit" value="Sign Up">
            </div>
        </form>
    </div>
</body>
</html>