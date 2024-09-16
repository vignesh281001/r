<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Place Order</title>
  <style>
    body {
  font-family: sans-serif;
  margin: 2rem;
}

h1 {
  text-align: center;
}

form {
  display: flex;
  flex-wrap: wrap;
  gap: 1rem;
}

.order-details, .order-summary, .payment-details {
  flex: 1 1 30%;
  padding: 1rem;
  border: 1px solid #ccc;
  border-radius: 5px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"], input[type="email"] {
  width: 100%;
  padding: 5px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

select {
  width: 100%;
  padding: 5px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

button {
  width: 100%;
  padding: 10px;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

button:hover {
  background-color: #3e8e41;
}

    </style>
</head>
<body>
  <h1>Place Your Order</h1>
  <form action="process_order.php" method="post">
    <div class="order-details">
      <h2>Billing Information</h2>
      <label for="name">Name:</label>
      <input type="text" name="name" id="name" required>
      <label for="email">Email:</label>
      <input type="email" name="email" id="email" required>
      <label for="address">Address:</label>
      <input type="text" name="address" id="address" required>
      <label for="city">City:</label>
      <input type="text" name="city" id="city" required>
      <label for="state">State:</label>
      <input type="text" name="state" id="state" required>
      <label for="zip">Zip Code:</label>
      <input type="text" name="zip" id="zip" required>
    </div>
    <div class="order-summary">
      <h2>Order Summary</h2>
      <p>Product 1: $20.00 (Qty: 1)</p>
      <p>Subtotal: $20.00</p>
      <p>Tax: $1.80</p>
      <p>Total: $21.80</p>
    </div>
    <div class="payment-details">
      <h2>Payment Method</h2>
      <select name="payment_method" id="payment_method">
        <option value="credit_card">Credit Card</option>
        <option value="debit_card">Debit Card</option>
        <option value="upi">upi</option>
      </select>
    </div>
    <button type="submit">Place Order</button>
  </form>
</body>
</html>
