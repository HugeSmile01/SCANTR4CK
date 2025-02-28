<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentation</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Documentation</h1>
    <div id="documentation">
        <h2>Setup Firebase</h2>
        <p>Initialize Firebase in your project by including the Firebase SDK and configuring it with your Firebase project credentials. This is done in files like <code>public/dash.html</code> and <code>public/scanner.html</code>.</p>

        <h2>User Authentication</h2>
        <p>Implement user authentication using Firebase Authentication. This allows users to sign in using their Google accounts. Refer to <code>public/login.html</code> and <code>public/Script/auth.js</code> for implementation details.</p>

        <h2>QR Code Generation</h2>
        <p>Create a QR code generator that allows users to generate QR codes for students. This is implemented in <code>public/qrCreate.html</code> and <code>public/Script/qrCreate.js</code>.</p>

        <h2>QR Code Scanning</h2>
        <p>Implement a QR code scanner to scan and mark attendance. This functionality is provided in <code>public/scanner.html</code> and <code>public/Script/scanner.js</code>.</p>

        <h2>Attendance Dashboard</h2>
        <p>Create a dashboard to display attendance data. This includes fetching data from Firebase and displaying it in a user-friendly format. Refer to <code>public/dash.html</code> and <code>public/Script/dashboard.js</code>.</p>

        <h2>Search Functionality</h2>
        <p>Implement a search feature to allow users to search for student attendance logs. This is done in <code>public/search.html</code> and <code>public/Script/search.js</code>.</p>

        <h2>Responsive Design</h2>
        <p>Ensure the application is mobile-friendly and responsive. This is achieved through CSS files like <code>public/Css/style.css</code> and <code>public/Css/search.css</code>.</p>

        <h2>Documentation</h2>
        <p>Provide documentation to guide users on how to use the system. This is available in <code>public/docs.html</code>.</p>
    </div>
</body>
</html>
