<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Attendance Logs</title>
    <link rel="stylesheet" href="{{ asset('css/search.css') }}">
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
    <h1>Search Attendance Logs</h1>
    <form id="search-form">
        <label for="student-id">Student ID:</label>
        <input type="text" id="student-id" name="student_id" required>
        <button type="submit">Search</button>
    </form>
    <div id="search-results">
        <!-- Search results will be displayed here -->
    </div>
    <script src="{{ asset('js/search.js') }}"></script>
</body>
</html>
