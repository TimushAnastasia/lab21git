<?php

// database/migrations/дата_створення_create_materials_table.php

Schema::create('materials', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->text('description')->nullable();
    $table->decimal('price', 8, 2);
    $table->integer('quantity');
    $table->unsignedBigInteger('category_id');
    $table->timestamps();

    $table->foreign('category_id')->references('id')->on('categories');
});
