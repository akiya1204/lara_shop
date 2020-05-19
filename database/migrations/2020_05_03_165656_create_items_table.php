<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    // Schema:: スキーマビルダ、テーブルの作成・編集が可能
    // カラムタイプ、コマンド　$table->{カラムタイプ}('{カラムの名前}');

    public function up() //　up() テーブル作成時の記述
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id('item_id'); // id() idが自動で割り振られる
            $table->string('item_name'); // string() VARCHARカラム、文字列
            $table->text('detail'); // text() textカラム
            $table->decimal('price'); // decimal() 有効（全体）桁数と小数点以下桁数指定のDECIMALカラム
            $table->string('image');
            $table->tinyInteger('ctg_id'); // tinyInteger() TINYINTカラム
            $table->timestamps(); // 有効（全体）桁数指定のTIMESTAMPカラム
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() // down テーブル削除時の記述
    {
        Schema::dropIfExists('items');
    }
}
