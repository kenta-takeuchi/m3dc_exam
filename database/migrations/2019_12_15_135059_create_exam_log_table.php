<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatTable extends Migration
{
    /**
     * 情報入力ページで入力したデータを格納するテーブル
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_log', function (Blueprint $table) {
            $table->increments('id')->comment('自動番号付与(AI)');
            $table->dateTime('crnt_date')->comment('YYYY-MM-DD HH:MM:SS型データ');;
            $table->string('todohuken', 50)->comment('都道府県データ格納');;
            $table->string('fname', 10)->comment('氏名の一番目のデータ格納');;
            $table->string('lname', 15)->comment('氏名の二番目データ格納');;
            $table->integer('viewcnt')->comment('参加人数データ格納');
            $table->String('ip_addr', 30)->comment('ユーザーIP Address格納');
            $table->String('referer', 200)->comment('ユーザーReferer格納');
            $table->String('usr_agent', 200)->comment('ユーザーAgent格納');
        });
    }

    /**
     * マイグレーションのリセット
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('exam_log');
    }
}
