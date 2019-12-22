<?php

namespace App\Http\Controllers;

use App\ExamLog;
use Illuminate\Http\Request;

class InputController extends Controller
{
    public function index()
    {
        return view('viewpages.input');
    }


    public function displayview(Request $request)
    {
        // リクエストデータを保持するインスタンスの作成
        $exam_log = new ExamLog();

        // リクエストデータをデータベースに登録
        $exam_log->store($request);
        $exam_log->save();

        // リクエストデータをログファイルに出力
        $exam_log->export_log();

        return view('viewpages.viewpage');
    }
}
