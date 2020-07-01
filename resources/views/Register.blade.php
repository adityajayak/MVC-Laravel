<!DOCTYPE html>
<html>

<head>
    <title>Register </title>
</head>

<body>

    <h1>Buat Akun Baru!</h1>
    <h2 style="font-size:18px;">Sing Up Form </h2>

    <form action="/welcome" method="Post">
        @csrf 
        <label>Name:</label><br><br>
        <input type="text" name="fname"><br><br>
        Last Name:<br><br>
        <input type="text" name="lname">
        <br></br>

        <label>Gender:</label><br><br>
        <input type="radio" name="GenderU" value="0">Male <br>
        <input type="radio" name="GenderU" value="1">Female<br>
        <input type="radio" name="GenderU" value="2">Other <br><br>

        <label>Nasionality:</label><br><br>
        <select>
            <option>Indonesian</option>
            <option>Singapore</option>
            <option>Malaysia</option>
        </select><br><br>

        <label>Language Spoken</label><br><br>
        <input type="checkbox">Indonesian <br>
        <input type="checkbox">English<br>
        <input type="checkbox">Other <br><br>

        <label>Bio:</label><br><br>
        <textarea cols="25" rows=" 10"></textarea><br>

        <input type="submit" value="Sing Up"></input>


    </form>

</body>

</html>