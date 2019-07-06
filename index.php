<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FBR Tax Collector Pakistan 2019 - 2020</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body id="home">
<nav class="navbar navbar-expand-md navbar-light">
    <div class="container">
        <a href="index.php" class="navbar-brand">
            <img src="img/FBR-Logo.png" alt=""><h3 class="d-inline align-middle"></h3>
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="#showcase" class="nav-link">Employees</a>
                </li>
                <li class="nav-item">
                    <a href="#join" class="nav-link">Collect Tax</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- JOIN -->
<section id="join" class="bg-light py-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-lg-9">
                <h3>Filter Valid Employees </h3>
                <p class="lead">Tax Collector Pakistan 2019 - 2020</p>
                <form>
                    <div class="form-row">
                        <div class="col-md-12">
                            <textarea class="form-control"
                                      placeholder="Copy Employees data from 'data.txt' file and paste here to collect Tax ..."
                                      id="data" name="data" rows="16"></textarea>
                        </div>
                    </div>
                    <input type="submit" value="Filter" id="filter" name="filter" class="btn btn-dark btn-block btn-lg">
                </form>
            </div>
            <div class="col-lg-3 d-none d-lg-block align-self-center">
                <img src="img/FBR-Logo.png" alt="FBR" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<section id="showcase" class="py-5">
    <div class="primary-overlay text-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 text-center offset-lg-1">
                    <h4 class="display-4 mt-5">
                        Valid Tax Payer Employees List
                    </h4>
                    <p class="lead"></p>
                    <table class="table table-bordered table-responsive-sm table-hover table-sm">
                        <thead>
                        <tr>
                            <td> Name </td>
                            <td> CNIC </td>
                            <td> Monthly Salary </td>
                            <td> Yearly Salary </td>
                            <td> Tax Rate </td>
                            <td> Monthly Tax </td>
                            <td> Yearly Tax </td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php

$getTaxCharge = array(
    array(
        'amount_range_from' => 0,
        'amount_range_to' => 600000,
        'tax_percentage' => 0,
    ),
    array(
        'amount_range_from' => 600001,
        'amount_range_to' => 1200000,
        'tax_percentage' => 5,
    ),
    array(
        'amount_range_from' => 1200001,
        'amount_range_to' => 1800000,
        'tax_percentage' =>10,
    ),
    array(
        'amount_range_from' => 1800001,
        'amount_range_to' => 2500000,
        'tax_percentage' =>15,
    ),
    array(
        'amount_range_from' => 2500001,
        'amount_range_to' => 3500000,
        'tax_percentage' =>17.5,
    ),
    array(
        'amount_range_from' => 3500001,
        'amount_range_to' => 5000000,
        'tax_percentage' =>20,
    ),
    array(
        'amount_range_from' => 5000001,
        'amount_range_to' => 8000000,
        'tax_percentage' =>22.5,
    ),
    array(
        'amount_range_from' => 8000001,
        'amount_range_to' => 12000000,
        'tax_percentage' =>25,
    ),
    array(
        'amount_range_from' => 12000001,
        'amount_range_to' => 300000000,
        'tax_percentage' =>27.5,
    ),


);
$arrayAmount          = array();
foreach ($getTaxCharge as $key => $value) {
    $resultArray = array();
    if ($calculateTaxOnAmount > $value['amount_range_to']) {
        $sum                       = $value['amount_range_to'] - $value['amount_range_from'];
        $resultArray['amount']     = $sum;
        $resultArray['percentage'] = $value['tax_percentage'];
        array_push($arrayAmount, $resultArray);
        $remainingAmount = $remainingAmount - $sum;
    } else {
        $resultArray['amount']     = $remainingAmount;
        $resultArray['percentage'] = $value['tax_percentage'];
        array_push($arrayAmount, $resultArray);
        break;
    }
}
$resultantTaxAmount = 0;
foreach ($arrayAmount as $key => $value) {
    $cal                = (($value['amount'] * $value['percentage']) / 100);
    $resultantTaxAmount = $resultantTaxAmount + $cal;
}
echo round($resultantTaxAmount);
?>
                        <?
                        $price = 4.9;
                        $tax = .04;

                        function calculate_cost($tax, $price) {
                            $sales_tax = $tax;
                            return $price + ($price * $sales_tax);
                        }

                        $total_cost = calculate_cost ($tax, $price);
                        $total_cost = round($total_cost, 2);

                        print "Total cost: ".$total_cost;
                        ?>

                        </tbody>
                        <tfoot>
                        <!--Question 2: Part 02:  Write the code below accordingly-->
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<footer id="main-footer" class="py-3 bg-primary text-white">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-6 ml-auto">
                <p class="lead">Copyright &copy; 2019</p>
            </div>
        </div>
    </div>
</footer>
</body>
</html>