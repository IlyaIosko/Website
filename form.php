<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>Title</title>
</head>
<style type="text/css">
    .error {
         border: 2px solid red;
    }

	.container {

		padding-left: 450px;
		padding-top: 300px;	
}
</style>
<body>
<?php
include "myFunctions.php";
include "DBupdating.php";
createRowInDB();
greet();
?>

<div class="container">


<form
        action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
        method = "post"
>
  
        <legend>Creating account</legend>
        <strong><label for="username">Your name</label></strong><br>
        <input type="text" name="username" id="username" value="<?php echo $ControlName; ?>">
        <span class = "error">* <?php echo $ifUserNameIsEmpty; ?></span><br>
        <strong><label for="password">Password</label></strong><br>
        <input type="password" name="password" id="password">
	<span class = "error">* <?php echo $ifPasswordIsEmpty; ?></span><br>
        <strong><label for="repeatPassword">Re-enter password</label></strong><br>
        <input type="password" name="repeatPassword" id="repeatPassword">
	<span class = "error">* <?php echo $ifPasswordsAreNotTheSame; ?></span><br>
	<br>
        <input class="btn btn-primary" type="submit" name="submit" value="Create account">
   
</form>

</div>

<script>
    function checkName(form) {
        if (username.value.length < 3) {
            alert("Your name is too short");
            event.preventDefault();
            username.classList.add("error");
            form.username.focus();
        }
    }


    function checkEmail(form) {
        if (email.value.indexOf("@") == -1) {
            alert("Email is incorrect");
            event.preventDefault();
            email.classList.add("error");
            form.email.focus();
        }
    }


    function checkPass(form) {
        if (password.value.length < 8) {
            alert("your password must contain at least eight characters");
            event.preventDefault();
            password.classList.add("error");
            form.password.focus();
        }
    }


    function checkRepeatPassword(form) {
        if (repeatPassword.value != password.value) {
            alert("Your password does not match");
            event.preventDefault();
            repeatPassword.classList.add("error");
            form.repeatPassword.focus();
        }
    }


    function checkIfNameAndPassDiffer(form) {
        if (password.value == username.value) {
            alert("Password must be different from Your name");
            event.preventDefault();
        }
    }
    var form = document.querySelector("form");
    form.addEventListener("submit", checkName);
    form.addEventListener("submit", checkEmail);
    form.addEventListener("submit", checkPass);
    form.addEventListener("submit", checkIfNameAndPassDiffer);
    form.addEventListener("submit", checkRepeatPassword)
</script>
</form>
</body>
</html>
