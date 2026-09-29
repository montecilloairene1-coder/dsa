<?php 

$name = $_POST[“name”];
$hourly_rate = $_POST[“hourly_rate”];
$hours_worked = $_POST[“hours_worked”];
$Overtime = $_POST[“OT”];

echo “=========================================================<br>”;
echo “EMPLOYEE PAYROLL SYSTEM”;
echo “=========================================================<br>”;
echo “Employee Name: $name <br>”;
echo “Hourly Rate: $hourly_rate <br>”;
$OTrate = 1.5 * $hourly_rate;
echo “Overtime Rate: P” .number_format(OTrate,2).“<br>”;
echo “Hours Worked: $hours_worked <br>”;
echo “Overtime Hours: OT <br>”;

echo “========================================================<br>”;
echo “ PAYROLL SUMMARY <br>”;
echo “=========================================================<br>”;

$basic = $hourly_rate * $hours_worked;
echo “Basic Salary: P ” .number_format($basic,2). “<br>”;
$overtimepay = $OTrate * $OT;
echo “Overtime Pay: P ” .number_format($overtimepay,2). “<br>”;
$gp = $basic + $overtimepay;
echo “Gross pay: P ” .number_format($gp,2). “<br>”;
$tax = gp * 0.03;
echo “Tax (3%): P ” .number_format($tax,2). “<br>”;
$sss = $gp * 0.02;
echo “SSS (2%): P ” .number_format($sss,2). “<br>”;
$ph = 150;
echo “PHILHEALTH (150): P: ” .number_format($ph,2). “<br>”;
$pagibig = 850;
echo “PAGIBIG (150): P: ” .number_format($pagibig,2). “<br>”;
echo “-------------------------------------------------------<br>”;
$total_deduc = $tax + $sss + $ph + $pagibig;
echo “Total Deduction: P ” .number_format($np,2). “<br>”;
echo “=========================================================<br>”;
$np = $gp - $total_deduc;
echo “Net Pay: P: ” .number_format($np,2). “<br>”;
echo “=========================================================<br>”;
?>