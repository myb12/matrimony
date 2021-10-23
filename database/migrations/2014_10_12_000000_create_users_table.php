<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            $table->text('image')->nullable();
            $table->string('biodata_type')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('birth_year')->nullable();
            $table->string('age')->nullable();
            $table->string('district')->nullable();
            $table->string('phone')->unique()->nullable();
            $table->string('guardians_phone')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('occupation')->nullable();
            $table->text('permanent_address')->nullable();
            $table->text('present_address')->nullable();
            $table->string('highest_degree')->nullable();
            $table->string('other_degree')->nullable();
            $table->string('fathers_name')->nullable();
            $table->string('mothers_name')->nullable();
            $table->string('fathers_occupation')->nullable();
            $table->string('mothers_occupation')->nullable();
            $table->string('num_of_sister')->nullable();
            $table->string('num_of_brother')->nullable();
            $table->string('sisters_occupation')->nullable();
            $table->string('brothers_occupation')->nullable();
            $table->string('chachas_occupation')->nullable();
            $table->string('mamas_occupation')->nullable();
            $table->text('about_you')->nullable();
            $table->text('idea_about_marriage')->nullable();
            $table->text('partners_attributes')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
