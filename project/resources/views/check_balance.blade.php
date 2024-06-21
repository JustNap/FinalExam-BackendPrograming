<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Balance</title>
</head>
<body>
    <h1>Check Your Balance</h1>
    <button id="check-balance-button">Check Balance</button>
    <p id="balance-result"></p>

    <script>
        document.getElementById('check-balance-button').addEventListener('click', function() {
            fetch('/check-balance')
                .then(response => response.json())
                .then(data => {
                    document.getElementById('balance-result').innerText = `Your balance is $${data.balance}`;
                })
                .catch(error => console.error('Error:', error));
        });
    </script>
</body>
</html>
