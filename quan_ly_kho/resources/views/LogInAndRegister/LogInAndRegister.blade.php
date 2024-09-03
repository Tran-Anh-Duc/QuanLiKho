<!DOCTYPE html>
<html lang="en">
<head>

    <!--  Meta  -->
    <meta charset="UTF-8" />
    <title>Login/Sign Up</title>

    <!--  Styles  -->
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="login-page" >
    <div class="form" >
        <form class="login-form" >
            <input type="email" name="email" size="50" maxlength="256"  placeholder="Enter e-mail" >
            <input type="password" name="password" minlength="6" maxlength="32" placeholder="Password" />
                   <button type="submit">login</button>

               <label class="container">Remember me
                <input type="checkbox">
                <span class="checkmark"></span>
            </label>
            <p>Not registered?  <a href="#">Create account</a></p>
            <p>Forgot Password?  <a href="#" target="_blank">Click here</a></p>
        </form>

        <form class="reg-form" >
            <input type="text" name="fullName" size="40" maxlength="38" pattern="^[a-zA-Z]'?[-'a-zA-Z]+$" placeholder="Full Name" >
            <input type="email" name="email" size="50" maxlength="256" placeholder="Your contact e-mail" />
            <input type="text" name="username"  placeholder="Choose username"  >
            <input list="region" placeholder ="Region" >
            <datalist id="region">
                <option value="Africa">
                <option value="Antarctica">
                <option value="Asia">
                <option value="Australia">
                <option value="Europe">
                <option value="North America">
                <option value="South America">
            </datalist>

            <input type="password" name="password" minlength="6" maxlength="32" placeholder="Password" >
            <input type="password" name="password" placeholder="Confirm password" />
            <button type="submit">create</button>
            <p>Already registered? <a href="#" >Login</a></p>
        </form>
    </div>
</div>
<!-- <div class="loader"></div>-->


<!--script-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script type="text/javascript">
    $('p a').click(function(){
        $('form').animate({height: "toggle", opacity:"toggle"}, "slow");
    });
    //Still working  on this part
    /*  $('button').click(function(){    $('.loafter,  form').animate({height:"toggle", opacity:"toggle"}, "slow");
       });*/
</script>
<style>
    * {
        box-sizing: border-box;
    }
    /*Styling the body & background*/
    body {
        /*background-image: url("http://www.bideew.com/photos/thumbnail/7718/master/");*/
        background-color: #4caf50;
        height: 100vh;
        background-position: center;
        background-size: cover;
    }
    /*The Login page*/
    .login-page {
        padding: 10% 0 0;
        width: 360px;
        margin: auto;
    }
    /*Styling the form*/
    .form {
        z-index: 1;
        position: relative;
        margin: 0 auto 100px;
        padding: 45px;
        text-align: left;
        background: #3ac69f;
        border-radius: 7px;
        max-width: 360px;
    }
    /*Styling the input boxes*/
    .form input {
        background: #f2f2f2;
        outline: 1em;
        border: 1px solid #bbb;
        font-family: Baskerville;
        margin: 0 0 15px;
        padding: 15px;
        box-sizing: border-box;
        font-size: 1em;
        width: 100%;
        border-radius: 0.2rem;
    }
    /*Customizing the reddish buttons for submitting the form.*/
    .form button {
        font-family: monospace;
        outline: 0;
        color: #ffffff;
        width: 100%;
        border: 0;
        font-size: 1em;
        background-color: #90000f;
        padding: 15px;
        border-radius: 6px;
        text-transform: uppercase;
        cursor: pointer;
        position: relative;
        top: 1px;
        transition: 0.4s all ease-in;
    }

    .buttonload {
        background-color: #4caf50;
        border: none;
        color: white;
        padding: 12px 16px;
        font-size: 16px;
        display: none;
    }

    /*For the paragraphs*/
    .form p {
        margin: 15px 0;
        color: black;
        text-align: center;
    }

    /* Customize the label (the container) */
    .container {
        display: block;
        position: relative;
        padding-left: 35px;
        margin: 15px 0;
        cursor: pointer;
        font-size: 1em;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /* Hide the browser's default checkbox */
    .container input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
    }

    /* Create a custom checkbox */
    .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 18px;
        width: 18px;
        background-color: #eee;
    }

    /* On mouse-over, add a grey background color */
    .container:hover input ~ .checkmark {
        background-color: #ccc;
    }

    /* When the checkbox is checked, add a blue background */
    .container input:checked ~ .checkmark {
        background-color: #2196f3;
    }

    /* Create the checkmark/indicator (hidden when not checked) */
    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    /* Show the checkmark when checked */
    .container input:checked ~ .checkmark:after {
        display: block;
    }

    /* Style the checkmark/indicator */
    .container .checkmark:after {
        left: 6px;
        top: 3px;
        width: 3px;
        height: 8px;
        border: solid white;
        border-width: 0 3px 3px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
    }
    /*The form's links*/
    .form a {
        text-decoration: none;
        color: #f2f2f2;
    }
    /*Hovering effect over button*/
    .form button:hover,
    .form button:active {
        background: #90000f;
        position: relative;
        top: 1px;
    }
    /*Hiding the registeration form until clicked*/
    .form .reg-form {
        display: none;
    }

    /*Validating the input texts*/
    .reg-form input:valid,
    input:focus,
    input:invalid {
        box-shadow: none;
    }

    .reg-form input:focus:valid,
    input:valid {
        border: 2px solid green;
    }

    input:focus:invalid {
        border: 2px solid red;
    }

    /*Still working on this*/
    /*.loader {
     border-top: 16px solid blue;
     border-right: 16px solid green;
     border-bottom: 16px solid red;
     border-left: 16px solid pink;
     display: none;
     border-radius: 50%;
     width: 120px;
     height: 120px;
     animation: spin 2s linear infinite;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }*/

</style>
</body>
</html>
