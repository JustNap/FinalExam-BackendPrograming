<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Balance</title>
    <!-- Load Bootstrap for styling (optional) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div id="balance-container">
            <button class="btn btn-primary mt-3" onclick="showBalance()">Show Balance</button>
        </div>
    </div>

    <script>
        function showBalance() {
            alert("Balance: {{ Auth::user()->balance }}");
        }
    </script>
</body>
</html>
