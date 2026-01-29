<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <form action="includes/formhandler.php" method="post">
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" required><br><br>
            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" required><br><br>

            <label for="favouriteFruit">Favourite Fruit:</label>
            <select name="favouriteFruit" id="favouriteFruit" required>
                <option value="banana">Banana</option>
                <option value="apple">Apple</option>
                <option value="mango">Mango</option>
                <option value="ponkan">Ponkan</option>
            </select>

            <button type="submit">Submit</button>
        </form>
    </main>

</body>

</html>