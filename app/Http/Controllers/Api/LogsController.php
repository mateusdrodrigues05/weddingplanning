<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogsController extends Controller
{
    public function index()
    {
        $path = storage_path("logs/activity.log");

        if (!file_exists($path)) {
            return response()->json(['entries' => []]);
        }

        $content = file_get_contents($path);
        $entries = $this->parseLogEntries($content);

        return response()->json(['entries' => array_reverse($entries)]);
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
