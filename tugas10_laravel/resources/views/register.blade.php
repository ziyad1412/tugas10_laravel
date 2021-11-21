<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Form</title>
</head>
<body>
    <div>
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>
    </div>

    <div>
        <form action="/welcome" method="post">
            @csrf
            <label for="first">First Name:</label> <br> <br>
            <input type="text"  name="first">
            <br>
            <br>    
            <label for="last">Last Name:</label> <br> <br>
            <input type="text"  name="last"> <br> <br>    
            <label>Gender:</label> <br><br>
            <input type="radio" name="gender" value="0">Male <br>
            <input type="radio" name="gender" value="1">Female <br>
            <input type="radio" name="gender" value="2">Other <br><br>
            <label>Nationality:</label> <br><br>
            <select>
                <option value="0">Indonesian</option>
                <option value="1">Singaporean</option>
                <option value="2">Malaysian</option>
                <option value="3">Australian</option>
            </select> <br><br>
            <label>Language Spoken:</label> <br><br>
            <input type="checkbox" name="bahasa" value="">Bahasa Indonesia <br>
            <input type="checkbox" name="bahasa" value="">English <br>
            <input type="checkbox" name="bahasa" value="">Other <br><br>
            <label>Bio:</label> <br><br>
            <textarea cols="30" rows="10"></textarea> <br>
            <input type="submit" value="Sign Up">
        </form>
    </div>
</body>
</html>