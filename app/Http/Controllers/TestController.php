<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SlowJob;

class TestController extends Controller
{
    public function dispatchSlowJob()
    {
        SlowJob::dispatch(); // ジョブをディスパッチ
        return 'ジョブを実行しました！';
    }
}
