<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropUsersCodesUnique extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('users_codes', function (Blueprint $table) {
            $table->dropUnique('users_codes_email_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('users_codes', function (Blueprint $table) {
            $table->unique('email');
        });
    }

}
