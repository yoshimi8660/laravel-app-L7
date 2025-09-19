<?php
 
namespace App\Http\TestQueueController;
 
use Illuminate\Http\Request;
use App\Jobs\SlowJob; // ジョブをインポート
 
class TestQueueController extends Controller
{
    public function dispatchSlowJob(): \Illuminate\Http\JsonResponse
    {
        // 非同期ジョブをディスパッチ（実行）
        SlowJob::dispatch();
 
        return response()->json([
            'message' => 'すぐにレスポンスが返りました（ジョブは裏で動いています）',
            'time' => now()
        ], 200, ['Content-Type' => 'application/json; charset=UTF-8'], JSON_UNESCAPED_UNICODE);
    }
 
}
