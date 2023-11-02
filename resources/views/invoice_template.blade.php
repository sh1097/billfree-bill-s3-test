<style>
    /* Overall form style */
form {
    max-width: 500px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f5f5f5;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
}

/* Label style */
label {
    display: block;
    font-weight: bold;
    margin-top: 10px;
}

/* Input and Textarea style */
input[type="text"],
input[type="date"],
input[type="number"],
textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

/* Button style */
button {
    background-color: #007BFF;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    font-size: 18px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

/* Styling for the calculated total and subtotal spans */
#subtotal,
#total_amount {
    font-weight: bold;
    font-size: 18px;
}

/* Optional: Add some spacing between form elements */
br {
    display: none;
    content: " ";
    margin-top: 10px;
}

</style><form action="/submit-invoice" method="post">
    @csrf

    <!-- Invoice Date -->
    <label for="invoice_date">Invoice Date:</label>
    <input type="date" name="invoice_date" id="invoice_date" required><br><br>

    <!-- Invoice Number (optional) -->
    <label for="invoice_number">Invoice Number:</label>
    <input type="text" name="invoice_number" id="invoice_number"><br><br>

    <!-- Your Business Information -->
    <label for="your_business_name">Your Business Name:</label>
    <input type="text" name="your_business_name" id="your_business_name" required><br><br>

    <!-- Your Business Address -->
    <label for="your_business_address">Your Business Address:</label>
    <textarea name="your_business_address" id="your_business_address" rows="4" required></textarea><br><br>

    <!-- Customer's Information -->
    <label for="customer_name">Customer Name:</label>
    <input type="text" name="customer_name" id="customer_name" required><br><br>

    <!-- Customer's Address (optional) -->
    <label for="customer_address">Customer Address:</label>
    <textarea name="customer_address" id="customer_address" rows="4"></textarea><br><br>

    <!-- Description of Goods/Services (as an example, you can add multiple items) -->
    <label for="item_description">Item Description:</label>
    <input type="text" name="item_description" required><br><br>

    <label for="item_quantity">Quantity:</label>
    <input type="number" name="item_quantity" required><br><br>

    <label for="item_price">Price per Unit:</label>
    <input type="number" step="0.01" name="item_price" required><br><br>

    <!-- Add more item fields as needed -->

    <!-- Subtotal (calculate in the backend) -->
    <p><strong>Subtotal:</strong> <span id="subtotal">To be calculated</span></p>

    <!-- Taxes (optional) -->
    <label for="tax_rate">Tax Rate:</label>
    <input type="number" step="0.01" name="tax_rate"><br><br>

    <!-- Total Amount (calculate in the backend) -->
    <p><strong>Total Amount:</strong> <span id="total_amount">To be calculated</span></p>

    <!-- Payment Due Date -->
    <label for="due_date">Payment Due Date:</label>
    <input type="date" name="due_date" id="due_date" required><br><br>

  

    <button type="submit">Create Invoice</button>
</form>
