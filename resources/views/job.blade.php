<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/action_page.php">
        <label for="id">TenantID:</label>
        {{-- <input onkey="return /[0-9]/g.test(event.key)" type="number" id="id" name="id"> --}}
        <input type="number" id="id" name="id" onkeyup="myFunction()" onkeydown="keydownFunction()" >

        <br>
        <br>

        <label for="name">TenantName</label>
        <input onkeydown="return /[a-z]/i.test(event.key)" type="text" id="name" name="name">

        <br>
        <br>

        <label for="country">Country:</label>
        <select name="country" id="country">
            <option value="">--- Choose a country ---</option>
            <option value="red">Red</option>
            <option value="green">Green</option>
            <option value="blue">Blue</option>
        </select>

        <label for="state">State:</label>
        <select name="state" id="state">
            <option value="">--- Choose a state ---</option>
            <option value="red">Red</option>
            <option value="green">Green</option>
            <option value="blue">Blue</option>
        </select>

        <label for="city">City:</label>
        <select name="city" id="city">
            <option value="">--- Choose a city ---</option>
            <option value="red">Red</option>
            <option value="green">Green</option>
            <option value="blue">Blue</option>
        </select>

        <label for="pmanager">PropertyManager:</label>
        <select name="pmanager" id="pmanager">
            <option value="">--- Choose a PropertyManager ---</option>
            <option value="red">Red</option>
            <option value="green">Green</option>
            <option value="blue">Blue</option>
        </select>

        <br>
        <br>

        <label for="gsearch">Search Google:</label>
        <input type="search" id="gsearch" name="gsearch">

        <br>
        <br>

        <input type="submit" value="Submit">
      </form>


        <script>
            function keydownFunction()
            {
                var x = document.getElementById("id").value;
                if (isNaN(x) )
                {
                    document.getElementById("id").style.backgroundColor = "red";
                } else {
                    document.getElementById("id").style.backgroundColor = "green";
                }
            }

            function myFunction() {
                document.getElementById("id").style.backgroundColor = "white";
            }
        </script>
 </body>
</html>
