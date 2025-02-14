<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SignUp Form </title>
</head>
<body>
<h1>Buat account baru</h1>
<h3>SignUp Form</h3>
<form method="post" action="{{ route('welcome') }}">
    @csrf
    <label for="first_name">First name:</label> <br> <br>
    <input type="text" id="first_name" name="first_name" placeholder="First name" required> <br> <br>
    <label for="last_name">Last name:</label> <br> <br>
    <input type="text" id="last_name" name="last_name" placeholder="Last name" required> <br> <br>
    <label>Gender:</label> <br> <br>
    <input type="radio" name="gender" id="male">Male <br>
    <input type="radio" name="gender" id="female">Female <br>
    <input type="radio" name="gender" id="other">Other <br> <br>
    <label for="Nationality">Nationality:</label> <br> <br>
    <select id="Nationality" name="Nationality">
        <option value="Indonesia">Indonesia</option>
        <option value="Singapura">Singapura</option>
        <option value="Thailand">Thailand</option>
    </select> <br> <br>
    <label >Language Spoken:</label> <br> <br>
    <input type="checkbox" name="bahasa"> Bahasa Indonesia <br>
    <input type="checkbox" name="bahasa"> English <br>
    <input type="checkbox" name="bahasa"> Other <br> <br>

    <label for="bio">Bio:</label> <br> <br>
    <textarea name="bio" id="bio" cols="30" rows="10"></textarea> <br> <br>
    <input type="submit" value="Sign Up">
</form>
</body>
</html>
