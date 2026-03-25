<!DOCTYPE html>
<html>
<head>
    <title>Result</title>
</head>
<body>

<h2>Verification Result</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>Chip ID</th>
        <th>Input</th>
        <th>Expected</th>
        <th>Actual</th>
        <th>Status</th>
    </tr>

    @foreach($results as $row)
        <tr>
            <td>{{ $row['chip_id'] }}</td>
            <td>{{ $row['input'] }}</td>
            <td>{{ $row['expected'] }}</td>
            <td>{{ $row['actual'] }}</td>
            <td style="color: {{ $row['status']=='PASS' ? 'green' : 'red' }}">
                {{ $row['status'] }}
            </td>
        </tr>
    @endforeach
</table>

</body>
</html>