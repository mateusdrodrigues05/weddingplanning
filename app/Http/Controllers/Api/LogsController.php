<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LogsController extends Controller
{
    public function index()
    {
        $logPath = storage_path('logs');
        $files = File::files($logPath);

        $result = [];

        foreach ($files as $file) {
            $filename = $file->getFilename();

            if (!str_ends_with($filename, '.log')) {
                continue;
            }

            $content = file_get_contents($file->getPathname());
            $entries = $this->parseLogEntries($content);

            $result[] = [
                'nameFile' => $filename,
                'date' => date('Y-m-d H:i:s', $file->getMTime()),
                'environment' => config('app.env'),
                'entries' => array_map(fn($e) => [
                    'time' => $e['time'],
                    'level' => $e['level'],
                    'message' => $e['message'],
                ], array_reverse($entries)),
            ];
        }

        return response()->json(['files' => $result]);
    }

    private function parseLogEntries(string $content): array
    {
        $pattern = '/\[(?<time>[\d\-: ]+)\] (?<env>\w+)\.(?<level>\w+): (?<message>.*?)(?=\n\[\d{4}-|\z)/s';
        preg_match_all($pattern, $content, $matches, PREG_SET_ORDER);

        return array_map(fn($m) => [
            'time' => $m['time'],
            'env' => $m['env'],
            'level' => $m['level'],
            'message' => trim($m['message']),
        ], $matches);
    }
}
