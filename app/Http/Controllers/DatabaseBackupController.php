<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;
use Carbon\Carbon;

class DatabaseBackupController extends Controller
{
    public function download()
    {
        $db = env('DB_DATABASE');
        $user = env('DB_USERNAME');
        $pass = env('DB_PASSWORD');
        $host = env('DB_HOST');

        $fileName = $db . '_' . Carbon::now()->format('Y-m-d_H-i-s') . '.sql';
        $filePath = storage_path('app/' . $fileName);

        // Full path to mysqldump.exe (Windows) or just 'mysqldump' (Linux/Mac)
        $mysqldumpPath = 'C:\\xampp\\mysql\\bin\\mysqldump.exe'; // <-- change this if different

        // Run mysqldump
        $command = "\"$mysqldumpPath\" -h {$host} -u {$user} -p\"{$pass}\" {$db} > \"{$filePath}\" 2>&1";
        $output = null;
        $returnVar = null;
        exec($command, $output, $returnVar);

        if ($returnVar !== 0) {
            return back()->with('error', 'Backup failed: ' . implode("\n", $output));
        }

        return Response::download($filePath)->deleteFileAfterSend(true);
    }
}
