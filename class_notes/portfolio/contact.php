<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
    <form action="includes/scripts/contact.php" method="POST">
        <!-- <input type="email" name="email" id="email"/>
        <input type="text" name="message" id="message"/> -->
        <input type="text" name="title" id="title"/>
        <input type="text" name="description" id="description"/>
        <select name="category_id" id="category_id">
            <option value="1">One</option>
            <option value="2">Two</option>
        </select>
        <button role="submit">Send</button>
    </form>
    
</body>
</html>