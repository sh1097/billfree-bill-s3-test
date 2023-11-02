<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>
    <h1>Upload a File to S3</h1>
    <form method="POST" action="{{ route('upload') }}" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="file" name="file">
        <button type="submit">Upload</button>
    </form>
</body>
</html>