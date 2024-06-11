<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Job Details</title>
</head>
<body>
@if(!empty($job))
    <h1>{{ $job['jobTitle'] }}</h1>
    <p>Salary: {{ $job['salary'] }}</p>
@else
    <p>Job not found.</p>
@endif
</body>
</html>
