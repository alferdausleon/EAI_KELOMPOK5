<!DOCTYPE html>
<html>
<head>
    <title>Test Hasura Fetch</title>
</head>
<body>
    <form action="/fetch-data" method="POST">
        @csrf
        <button type="submit">Fetch Data</button>
    </form>
</body>
</html>
