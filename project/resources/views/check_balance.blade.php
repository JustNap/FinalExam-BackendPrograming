<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Balance</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 600px;
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Check Your Balance</h1>
        <div class="text-center mt-4">
            <button id="check-balance-button" class="btn btn-primary">Check Balance</button>
        </div>
        <p id="balance-result" class="mt-3 text-center"></p>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.getElementById('check-balance-button').addEventListener('click', function() {
            fetch('{{ route('check-balance-page') }}')
                .then(response => response.json())
                .then(data => {
                    document.getElementById('balance-result').innerText = `Your balance is $${data.balance}`;
                })
                .catch(error => console.error('Error:', error));
        });
    </script>
</body>
</html>
