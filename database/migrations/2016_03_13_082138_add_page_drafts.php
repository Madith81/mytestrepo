<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPageDrafts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(
            'pages', function (Blueprint $table) {
                $table->boolean('draft')->default(false);
                $table->index('draft');
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(
            'pages', function (Blueprint $table) {
                $table->dropColumn('draft');
            }
        );
    }
}
