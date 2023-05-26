<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>Register form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</head>
<body>
<main>
    <form action="save1.php" method="post">
        <h1>REGISTRATION FORM</h1>
        <div>
            <label for="firstname">Enter your first name:</label>
            <input type="text" name="name" placeholder="enter your first name" id="firstname">
        </div>
        <div>
            <label for="lastname">Enter your last name:</label>
            <input type="text" name="lastname" placeholder="enter your last name" id="lastname">
        </div>
        <div>
            <label for="password">Enter your Password:</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <label for="password">ReEnter your Password:</label>
            <input type="password" name="repassword" id="password">
        </div>
        <div>
            <label for="email">Enter your email:</label>
            <input type="email" name="email" id="email">
        </div>
    
        <div>
            <label for="phonenumber">Enter your phone number:</label>
            <input type="phnno" name="phnno" id="phnno">
        </div>
         <div>
            <label for="address">Enter your address:</label>
            <textarea class="form-control" name="address" rows="4" id="address"> </textarea>
        </div>
        <div>
            <label for="gender">Select your Gender:</label>
            Male <input type="radio" name="gender" id="gender">
            Female <input type="radio" name="gender" id="gender">
        </div>
        <div>
            <label for="hobbies"> Select your Hobbies:</label>
            hobby1 <input type="radio" name="hobby" id="hobby">
            hobby2 <input type="radio" name="hobby" id="hobby">
            hobby3 <input type="radio" name="hobby" id="hobby">
        </div>
        <div>
                 <label for="dob">Select your DOB:</label>
                <input type="date" id="dob" name="dob">
                </div>
                <div>
         <label for="country" id="country" name="country"> Select your Country:</label>
            <select>
         <option value="Afghanistan">Afghanistan</option>
         <option value="srilanka">srilanka</option>
         <option value="Algeria">Algeria</option>
         <option value="India">India</option>
                  <option value="pakistan">Pakistan</option>
              </select></div>
        
            <label for="agree">
                <input type="checkbox" name="agree" id="agree" value="yes"/> I agree
                with the
                <a href="#" title="term of services">term of services</a>
            </label>
        </div>
        <button type="submit">Register</button>
        <footer>Already a member? <a href="login.php">Login here</a></footer>
    </form>
</main>
</body>
</html>