<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Invoice</title>
    <style>
        /* General styles for the entire invoice */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        /* #header {
            /* text-align: center;
            padding: 10px;
            background-color: #333;
            color: #fff;
        } */ 

        /* Styles for the 'from' and 'to' sections */
        #from, #to {
            width: 20%;
            display: inline-block;
            vertical-align: top;
            padding: 10px;
        }

        /* Styles for the 'dates' section */
        #dates {
            width: 100%;
            text-align: center;
            padding: 10px;
        }

        /* Styles for the table */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #000;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        #details-container {
            display: flex;
            justify-content: space-between;
            padding: 10px;
        }

        #from, #to {
            width: 48%;
        }

        /* Add specific styles for the 'from' section */
        #from {
            background-color: #f1f1f1; /* Example background color */
        }

        /* Add specific styles for the 'to' section */
        #to {
            background-color: #e1e1e1; /* Example background color */
        }
        /* Styles for the 'summary' section */
        #summary {
            width: 100%;
            text-align: right;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div id="header">
        <img src="https://app.useanvil.com/img/email-logo-black.png" alt="Company Logo">
    </div>
    <div id="details-container">
        <div id="from">
            <p>FROM</p>
            <p>{{ $invoiceItems[0]['your_business_name'] }}</p>
            <p>{{ $invoiceItems[0]['your_business_address'] }}</p>
        </div>
        <div id="to">
            <p>Client's details: TO</p>
            <p>{{ $invoiceItems[0]['customer_name'] }}</p>
            <p>{{ $invoiceItems[0]['customer_address'] }}</p>
        </div>
    </div>

    <div id= "dates">
        <p>{{ $invoiceItems[0]['invoice_date'] }}</p>
        <p>Due Date: {{ $invoiceItems[0]['due_date'] }}</p>
        <p>Invoice No: {{ $invoiceItems[0]['invoice_number'] }}</p>
    </div>

    <div id="items">
        <table>
            <tr>
                <th>description</th>
                <th>Item</th>
                <th>Rate</th>
                <th>Tax</th>
                <th>Subtotal</th>
            </tr>
            @foreach ($invoiceItems as $item)
            <tr>
                <td>{{ $item['item_description'] }}</td>
                <td>{{ $item['item_quantity'] }}</td>
                <td>{{ $item['item_price'] }}</td>
                <td>Tax Calculation Here</td>
                <td>Subtotal Calculation Here</td>
            </tr>
            @endforeach
        </table>
    </div>
    <div id="summary">
        <p>Total Amount: ${{ $totalAmount }}</p>
    </div>
</body>
</html>
