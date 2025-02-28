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
<body style="background-color: #20232a;">
    <h1 style="color: #61dafb;">Search Attendance Logs</h1>
    <form id="search-form" style="background-color: #282c34;">
        <label for="student-id">Student ID:</label>
        <input type="text" id="student-id" name="student_id" required>
        <button type="submit" aria-label="Search">Search</button>
    </form>
    <div id="search-results">
        <!-- Search results will be displayed here -->
    </div>
    <div id="loading-spinner" aria-label="Loading" style="display: none;">
        <img src="{{ asset('images/spinner.gif') }}" alt="Loading...">
    </div>
    <div id="error-message" aria-label="Error" style="display: none; color: red;">
        Failed to fetch data. Please try again later.
    </div>
    <script src="{{ asset('js/search.js') }}"></script>
</body>
</html>
