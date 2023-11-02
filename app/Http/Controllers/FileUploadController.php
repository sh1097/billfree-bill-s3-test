<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Aws\S3\S3Client;

class FileUploadController extends Controller
{
    public function showUploadForm()
    {
        return view('file-upload');
    }

    public function uploadFile(Request $request)
    {
                $request->validate([
            'file' => 'required|file',
        ]);

        $file = $request->file('file');
        $filename = $file->getClientOriginalName();
        $path = 'uploads/' . $filename;
    
        // Upload the file to S3
        $s3 = new S3Client([
            'version' => 'latest',
            'region' => 'ap-south-1',
            'credentials' => [
                'key'    => "AKIA2YINAA7PVV3OL7GJ",
                'secret' => "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",
            ],
        ]);

        $s3->putObject([
            'Bucket' => "billfree-assignment",
            'Key'    => $path,
            'Body'   => fopen($file, 'rb'),
        ]);

        return response()->json(['message' => 'File Uploaded Successfully']);
    }
}
