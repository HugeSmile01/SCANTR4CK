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
    <style>
        button {
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        input[type="email"], input[type="password"] {
            transition: border-color 0.3s ease;
        }

        input[type="email"]:focus, input[type="password"]:focus {
            border-color: #007bff;
        }

        @media (max-width: 768px) {
            button {
                width: 100%;
                padding: 15px;
            }

            input[type="email"], input[type="password"] {
                padding: 15px;
            }
        }

        button[aria-label] {
            position: relative;
        }

        button[aria-label]::after {
            content: attr(aria-label);
            position: absolute;
            left: -9999px;
            top: auto;
            width: 1px;
            height: 1px;
            overflow: hidden;
        }
    </style>
</head>
<body style="background-color: #20232a;">
    <h1 style="color: #61dafb;">Login</h1>
    <form id="login-form" style="background-color: #282c34;">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit" aria-label="Login">Login</button>
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
