<!DOCTYPE html>
<html>
<head>
  <title>TAXXY:  A TAX CALCULATOR WEB APP</title>
  <style>
      body {
        font-family: Arial, sans-serif;
        background: url(UST.jpg) no-repeat;
        background-size: cover;
        margin: 250;
        padding: 0;
        
      }

      #calculator {
        margin: 0 auto;
        width: 400px;
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      }

      label {
        display: block;
        margin-bottom: 10px;
      }

      input {
        display: block;
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: none;
        margin-bottom: 20px;
      }

      button {
        background-color: #4CAF50;
        color: #fff;
        padding: 10px;
        border-radius: 5px;
        border: none;
        cursor: pointer;
      }

      </style>
</head>
<body>
  <h2>TAXXY:  A TAX CALCULATOR</h2>
  <form action="Calculator.php" method="post">
    <label for="Salary">Salary Amount (PHP):</label>
    <input type="number" id="Salary" name="Salary" required>
    <br>
    <label for="Type">Salary Type:</label>
    <select id="Type" name="Type">
      <option value="monthly">Monthly</option>
      <option value="bi-monthly">Bi-Monthly</option>
    </select>
    <br>
    <button type="submit">Calculate Taxes</button>
  </form>

  <?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $salaryAmount = $_POST['Salary'];
    $salaryType = $_POST['Type'];

    $annualSalary;
    if ($salaryType === 'monthly') {
      $annualSalary = $salaryAmount * 12;
    } else {
      $annualSalary = $salaryAmount * 24;
    }

    $yearToDateTax;
    $monthlyTax;
    if ($annualSalary <= 250000) {
      $yearToDateTax = 0;
      $monthlyTax = 0;
    } else if ($annualSalary <= 400000) {
      $yearToDateTax = ($annualSalary - 250000) * 0.20;
      $monthlyTax = $yearToDateTax / 12;
    } else if ($annualSalary <= 800000) {
      $yearToDateTax = 30000 + ($annualSalary - 400000) * 0.25;
      $monthlyTax = $yearToDateTax / 12;
    } else if ($annualSalary <= 2000000) {
      $yearToDateTax = 130000 + ($annualSalary - 800000) * 0.30;
      $monthlyTax = $yearToDateTax / 12;
    } else if ($annualSalary <= 8000000) {
      $yearToDateTax = 490000 + ($annualSalary - 2000000) * 0.32;
      $monthlyTax = $yearToDateTax / 12;
    } else {
      $yearToDateTax = 2410000 + ($annualSalary - 8000000) * 0.35;
      $monthlyTax = $yearToDateTax / 12;
    }

    echo '<div>Estimated Annual Salary: PHP ' . number_format($annualSalary, 2) . '</div>';
    echo '<div>Year-to-Date Tax: PHP ' . number_format($yearToDateTax, 2) . '</div>';
    echo '<div>Monthly Tax: PHP ' . number_format($monthlyTax, 2) . '</div>';
  }
  ?>

</body>
</html>
