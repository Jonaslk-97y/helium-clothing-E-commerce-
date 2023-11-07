<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cards</title>
</head>

<h1>Add Items</h1>

<body bgcolor="	#FFFF00">
    <div><h2>Product Form</h2></div><br><br>
    <form id="form1" action="connect.php" method="post">
        <label for="users">Name</label>
        <input type="text" name="name" required/> <br><br>

        <label for="address">Surname</label>
        <input type="text" name="surname" id="surname" required/> <br><br>

        <label for="address">Gender</label>
        <input type="text" name="gender" id="gender" required/> <br><br>
        
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required/> <br><br>

        <label for="phone">Phone</label>
        <input type="phone" name="phone" id="phone" required/><br><br>


        <label for="address">Address</label>
        <input type="text" name="address" id="address" required/> <br><br>

        <input type="submit" name ="submit" id="submit"/>
    </form><br><br>

<section id ="proform">
    <form action ="connect.php" method ="post">
        <label for="products">Product name</label>
        <input type="text" name="pname" id="pname" required><br><br>

        <label for="description">Description</label>
        <input type="text" name="description" id="description" required><br><br>

        <label for="price">Price</label>
        <input type="text" name="price" id="price" required><br><br>

        <input type="submit" name ="upload" id = "upload">

    </form>
</section>
</body>
</html>