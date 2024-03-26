<!DOCTYPE html>
<html>

<head>
    <style>
        #formContainer {
            margin-top: 100px;
        }

        fieldset {
            width: 300px;
            margin: auto;
        }

        input[type=text] {
            display: flex;
            flex: 1;
        }

        input[type=submit] {
            position: relative;
            left: 250px;
        }
    </style>
</head>

<body>
    <div id="formContainer">
        <fieldset>
            <legend>Login</legend>
            <form>
                <label name="username">Username</label>
                <input type="text" name="username" /> <br>
                <label name="password">Password</label>
                <input type="text" name="password" />
                <input type="submit" value="Login" />
            </form>
        </fieldset>
    </div>
</body>

</html>