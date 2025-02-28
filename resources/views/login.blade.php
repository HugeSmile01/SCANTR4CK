<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Firebase SDK -->
    <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-auth.js"></script>
    <!-- Firebase project credentials -->
    <script>
        var firebaseConfig = {
            apiKey: "YOUR_API_KEY",
            authDomain: "YOUR_AUTH_DOMAIN",
            projectId: "YOUR_PROJECT_ID",
            storageBucket: "YOUR_STORAGE_BUCKET",
            messagingSenderId: "YOUR_MESSAGING_SENDER_ID",
            appId: "YOUR_APP_ID"
        };
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
    </script>
</head>
<body>
    <h1>Login</h1>
    <form id="login-form">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Login</button>
    </form>
    <script>
        document.getElementById('login-form').addEventListener('submit', function(event) {
            event.preventDefault();
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;
            firebase.auth().signInWithEmailAndPassword(email, password)
                .then((userCredential) => {
                    // Signed in
                    var user = userCredential.user;
                    console.log('User signed in:', user);
                    // Redirect to dashboard or another page
                    window.location.href = '/dashboard';
                })
                .catch((error) => {
                    var errorCode = error.code;
                    var errorMessage = error.message;
                    console.error('Error signing in:', errorCode, errorMessage);
                });
        });
    </script>
</body>
</html>
