<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('num')->unique()->comment('專案編號');
            $table->string('name')->comment('專案名稱');
            $table->longText('description')->nullable()->comment('專案描述');
            $table->integer('status')->default(0)->comment('專案狀態【0=尚未進行、1=進行中、2=驗收中、3=收款中、4=結案】');
            $table->text('remark')->nullable()->comment('備註');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
