<!DOCTYPE html>
<html>
<head>
    <title>Upload CSV</title>
</head>
<body>

<h2>Upload CSV File</h2>

<form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file" required>
    <button type="submit">Upload</button>
</form>

</body>
</html>