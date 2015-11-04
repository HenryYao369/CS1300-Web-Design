<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Ad Revenue Portal</title>
    <link rel="stylesheet" type="text/css" href="css/revenuer.css">
    <!-- <script language="javascript" type="text/javascript" src="scripts/validate.js"></script> -->
</head>

<body>

    <?php include "components/banner.php"; ?>
    <?php include "scripts/revenueCalculator.php";?>
    
    <div id="container">
        <h1>Monthly Ad Revenue for <?php echo "$salesAssoc"; ?></h1>
        <table id="revenueTable">
            <tr>
                <th>Customer</th>
                <th>Revenue in Dollars</th>
            </tr>
            <tr>
                <td>Acme</td>
                <td><?php echo "$AcmeValue";?></td>
            </tr>
            <tr>
                <td>Beta</td>
                <td><?php echo "$BetaValue";?></td>
            </tr>
            <tr>
                <td>Catnip</td>
                <td><?php echo "$CatnipValue";?></td>
            </tr>
        </table>
        <p class="credit">Calculator image adapted from <a href="https://openclipart.org/detail/202386/calculator-icon">openclipart.org</a></p>
        <p class="credit">Background image adapted from <a href="http://bgfons.com/download/1393">bgfons.com</a></p>
    </div> <!-- end of container div -->
    
</body>

</html>
