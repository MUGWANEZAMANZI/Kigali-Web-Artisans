<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="container mx-auto mt-10 mb-10">
    <h1 class="items-center text-center p-2 bg-blue-500 text-white mx-auto w-1/2 border rounded-lg">Events Registration Page</h1>
    <form method="POST" action="sendEmail.php" class="w-1/2 mx-auto p-4">
        <label for="name">Name:</label>
        <input type="text"  name="name" required class="border p-2 mb-4 w-full">
        <label for="email">Email:</label>
        <input type="email" name="email" required class="border p-2 mb-4 w-full">
        <label for="event">Select Event:</label>
        <select name="event" required class="border p-2 mb-4 w-full">
            <option value="Workshop01 - Intro to PHP">Workshop01 - Intro to PHP</option>
            <option value="Workshop02 - Form processing and php Mail">Workshop02 - Form processing and php Mail</option>
            <option value="Workshop03 - Wrap up - PHP + Database interaction">Workshop03 - Wrap up - PHP + Database interaction</option>
        </select>
        <input type="submit" value="Register" class="bg-blue-500 text-white p-2 rounded">
    </form>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>