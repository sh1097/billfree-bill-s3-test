<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <style>
    /* CSS for the table and its content */
    .invoice-table {
        width: 100%;
        border-collapse: collapse;
    }

    .invoice-table th, .invoice-table td {
        padding: 10px;
        border: 1px solid #ccc;
        text-align: left;
    }

    .invoice-table th {
        background-color: #f0f0f0;
        font-weight: bold;
    }

    .invoice-table tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .invoice-table tr:hover {
        background-color: #e0e0e0;
    }

    /* CSS for the table and its content */
.invoice-table {
    width: 100%;
    border-collapse: collapse;
}

.invoice-table th, .invoice-table td {
    padding: 10px;
    border: 1px solid #ccc;
    text-align: left;
}

.invoice-table th {
    background-color: #f0f0f0;
    font-weight: bold;
}

.invoice-table tr:nth-child(even) {
    background-color: #f2f2f2;
}

.invoice-table tr:hover {
    background-color: #e0e0e0;
}
/* CSS for the table and its content */
.invoice-table {
    width: 100%;
    border-collapse: collapse;
}

.invoice-table th, .invoice-table td {
    padding: 10px;
    border: 1px solid #ccc;
    text-align: left;
}

.invoice-table th {
    background-color: #f0f0f0;
    font-weight: bold;
}

.invoice-table tr:nth-child(even) {
    background-color: #f2f2f2;
}

.invoice-table tr:hover {
    background-color: #e0e0e0;
}

</style>

</head>
<body>
<div>
<span><span>
                 <a href="{{ route('invoices.create') }}" class="btn btn-primary">Create New Invoice</a></span></span>
</div>
@section('content')
<h1>All Invoices</h1>

    <table>
        <thead>
            <tr>
                <th>Invoice Number</th>
                <th>Customer Name</th>
                <th>Invoice Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($invoices as $invoice)
                <tr>
                    <td>{{ $invoice->invoice_number }}</td>
                    <td>{{ $invoice->customer_name }}</td>
                    <td>{{ $invoice->invoice_date }}</td>

                </tr>
            @endforeach



                 <a style="text-align:right;" href="{{ route('invoices.downloadPdf', ['id' => $invoice->id]) }}"><strong>Export PDF</a>
            

        </tbody>
    </table>
</section>


<style>
    /* Define your internal CSS styles here */
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 10px;
        border: 1px solid #ccc;
        text-align: left;
    }

    th {
        background-color: #f0f0f0;
        font-weight: bold;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #e0e0e0;
    }
</style>