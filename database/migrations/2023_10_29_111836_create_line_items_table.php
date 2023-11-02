<?php

// database/migrations/create_line_items_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLineItemsTable extends Migration
{
    public function up()
    {
        Schema::create('line_items', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->integer('quantity');
            $table->decimal('unit_price', 10, 2);
            $table->integer('invoice_id');
            $table->timestamps();

            $table->integer('line_item_id');
            // $table->foreign('invoice_id')->references('id')->on('invoices');
                    });
    }

    public function down()
    {
        Schema::dropIfExists('line_items');
    }
}

