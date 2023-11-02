// database/migrations/create_invoices_table.php

<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_date');
            $table->string('invoice_number')->nullable();
            $table->string('your_business_name');
            $table->text('your_business_address');
            $table->string('customer_name');
            $table->text('customer_address')->nullable();
            $table->integer('tax_rate');
            $table->date('due_date');
            $table->string('item_description');
            $table->string('item_quantity');
            $table->text('item_price');
              $table->timestamps();
        });
    }
    

    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
