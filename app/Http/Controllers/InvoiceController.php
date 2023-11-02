<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use PDF; // Import the PDF facade

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        $invoices= Invoice::all();
        return view('invoices.index', compact('invoices'));
    }

    public function downloadPdf()
    {
        $id=$_GET['id'];
        $invoiceItems = Invoice::all();
 
        
        $invoiceItems = $invoiceItems->toArray();

        $totalAmount = array_reduce($invoiceItems, function ($carry, $item) {
            return $carry + ($item['item_quantity'] * $item['item_price']);
        }, 0);
    //   echo"<pre>";  print_r($invoiceItems);die;
        $pdf = PDF::loadView('invoices.downloadPdf', [
            'invoiceItems' => $invoiceItems,
            'totalAmount' => $totalAmount,
        ]);
        $pdf->setPaper('A4', 'portrait'); // Set paper size and orientation
        $pdf->save(storage_path('app/pdf/invoice.pdf'));
        return response()->json(['message' => 'Invoice Download successfully at Path successfully'.storage_path('app/pdf/invoice.pdf')]);

    }

    public function store(Request $request)
    {

        // echo "<hii>";die;
        $data = $request->validate([
            'invoice_date' => 'required|date',
            'invoice_number' => 'nullable|alpha_dash',
            'your_business_name' => 'required|string|max:255',
            'your_business_address' => 'required|string',
            'customer_name' => 'required|string|max:255',
            'customer_address' => 'nullable|string',
            'item_description' => 'required|string',
            'item_quantity' => 'required|numeric',
            'item_price' => 'required|numeric',
            'tax_rate' => 'nullable|numeric',
            'due_date' => 'required|date',
        ]);

        $invoice = Invoice::create($data);

        $invoice->invoice_date = $data['invoice_date'];
        $invoice->invoice_number = $data['invoice_number'];
        $invoice->your_business_name = $data['your_business_name'];
        $invoice->your_business_address = $data['your_business_address'];
        $invoice->customer_name = $data['customer_name'];
        $invoice->customer_address = $data['customer_address'];
        $invoice->item_description = $data['item_description'];
        $invoice->item_quantity = $data['item_quantity'];
        $invoice->item_price = $data['item_price'];

        $invoice->tax_rate = $data['tax_rate'];
        $invoice->due_date = $data['due_date'];
  
        // Save the invoice
        $invoice->save();

  


        return response()->json(['message' => 'Invoice store successfully']);
    }
// app/Http/Controllers/InvoiceController.php
public function create()
{
    return view('invoice_template');
}



 
}
