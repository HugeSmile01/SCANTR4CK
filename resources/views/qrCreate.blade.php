<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Generator</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Firebase SDK -->
    <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-firestore.js"></script>
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
    <h1>QR Code Generator</h1>
    <div id="qr-code-generator">
        <input type="text" id="student-id" placeholder="Enter Student ID">
        <button onclick="generateQRCode()">Generate QR Code</button>
        <div id="qr-code"></div>
    </div>
    <script src="{{ asset('js/qrCreate.js') }}"></script>
</body>
</html>
