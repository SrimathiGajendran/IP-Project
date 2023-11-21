<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
      body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.profile-container {
    text-align: center;
}

input, button {
    margin: 10px;
    padding: 8px;
    font-size: 16px;
}

button {
    background-color: #007BFF;
    color: #fff;
    border: none;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

      </style>
</head>
<body>
    <div class="profile-container">
        <h1>User Profile</h1>
        <form id="profileForm">
            <label for="username">Name:</label>
            <input type="text" id="username" name="username" required>
            <button type="submit">Update</button>
        </form>
    </div>
    <script >
      document.getElementById('profileForm').addEventListener('submit', function(event) {
    event.preventDefault();
    var username = document.getElementById('username').value;
    // Send the username to the server for updating (not implemented in this example).
    alert('Profile updated successfully!');
});

    </script>
</body>
</html>
