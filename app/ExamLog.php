<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

/**
 * セミナーに参加するユーザーの情報を管理するクラス
 *
 * @package App
 */
class ExamLog extends Model
{
    protected $table = 'exam_log';

    protected $guarded = [
        'id',
        'crnt_date',
        'ip_addr',
        'referer',
        'user_agent',
    ];

    public $timestamps = false;

    protected $dates = [
        'crnt_date',
    ];


    /**
     * 登録日時、「情報入力入ページ」の入力データ、IPアドレス、Referer、User Agentをセットする。
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request) {
        $this->crnt_date = date('Y-m-d H:i:s');
        $this->todohuken = $request->todohuken;
        $this->fname = $request->fname;
        $this->lname = $request->lname;
        $this->viewcnt = $request->viewcnt;
        $this->ip_addr = $request->ip();
        $this->referer = url()->previous();
        $this->usr_agent = $request->userAgent();

    }

    /**
     * 「情報入力入ページ」の入力データを、以下の形式で出力する
     *
     * ファイル名: [YYYY_MM-d H:i:s]形式の日時
     * ファイル内容: 出力日時, 都道府県, 氏名(姓), 氏名(名), 参加人数, IPアドレス, Referer, User Agent
     *
     * @return void
     */
    public function export_log() {
        $log_file_name = base_path().'/logs/'.$this->crnt_date->format('Y_m_d H:i:s');
        $logs = array(
            $this->crnt_date->format('Y_m_d H:i:s'),
            $this->todohuken,
            $this->fname,
            $this->lname,
            $this->viewcnt,
            $this->ip_addr,
            $this->referer,
            $this->usr_agent,
        );

        $stream = fopen($log_file_name, 'w');
        fputcsv($stream, $logs);
        fclose($stream);
    }
}
