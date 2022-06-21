<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('drinks', function (Blueprint $table) {
			$table->uuid('id')->primary();
			$table->string('name');
			$table->decimal('price', 5, 2);
			$table->enum('size', ['0,2', '0,33', '0,5', '1,0', '1,5'])->default('0,33');
			$table->integer('amount');
			// $table->enum('category', ['Water', 'Alcoholic', 'Non-Alcoholic' ])->default('Water');
			$table->uuid('category_id');
			$table->timestamps();
			$table->softDeletes();


			$table->foreign('category_id')->references('id')->on('drinks_categories')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('drinks');
	}
};
