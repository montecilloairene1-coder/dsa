<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST[“compute”])){
    $name = $_POST[“name”];
    $basic = $_POST[“basic”];
    $hours = $_POST[“hours”];
    $rate = $_POST[“rate”];
    //computation
    $overtimepay = $hours * $rate;
    $grosspay = $basic * $overtimepay;
    //condition for bonus
    if($grosspay >= 50000){
        $bonus = 5000;
    }
    elseif($grosspay >= 30000){
        $bonus = 2500;
    }
    else{
        $bonus = 1000;
    }
    //condition for tax
     if($grosspay > 50000){
        $tax = $grosspay * 0.15;
    }
    elseif($grosspay >= 30000){
        $tax = $grosspay * 0.10;
    }
    else{
        $tax = $grosspay * 0.5;
    }
    $np = $grosspay + $bonus - $tax;
    }
    ?>

    <table>
        <tr>
            <th colspan = “2”>Salary Summary <?php echo $name; ?> </th>
        </tr>
        <tr>
            <td>Employee Name</td>
            <td><?php echo $name; ?></td>
        </tr>

        <tr>
            <td>Basic Salary</td>
            <td>P <?php echo number_format($basic, 2); ?></td>
        </tr>

        <tr>
            <td>Overtime Pay</td>
            <td>P4,000.00</td>
        </tr>
        
        </tr>
        <tr>
            <td>Gross Pay</td>
            <td>P <?php echo number_format($grosspay, 2); ?></td>
        </tr>

        <tr>
            <td>Bonus</td>
            <td>P <?php echo number_format($bonus, 2); ?></td>

        </tr>
            <td>Tax Deduction</td>
            <td>P <?php echo number_format($tax, 2); ?></td>  
        </tr>
        
        <tr>
          <td><strong>Net Salary</strong></td>
          <td><strong>P42,100.00</strong></td>
        </tr>
        
    </table>
    
</body>
</html>