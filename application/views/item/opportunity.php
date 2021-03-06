<?php
$param = \common\Router::getInstance()->getParameters();
$id = $param['id'];
?>

<!DOCTYPE html>
<!--[if IE 7]><html class="no-js ie7 oldie" lang="en-US"> <![endif]-->
<!--[if IE 8]><html class="no-js ie8 oldie" lang="en-US"> <![endif]-->
<html lang="en">
<head>
    <meta charset="utf-8">

    <!-- TITLE OF SITE-->
    <title> SuiteCRM </title>

    <!-- META TAG -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="CRM">
    <meta name="author" content="Yaroslav Rosil">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="/public/css/style.css" rel="stylesheet">



</head>

<body>
<h2>My test SuiteCRM</h2>

<table>
    <tr>
        <td> Name </td>
        <td> <?php echo $data['entry_list'][$id]['name_value_list']['name']['value']?> </td>
    </tr>
    <tr>
        <td> Date entered </td>
        <td> <?php echo $data['entry_list'][$id]['name_value_list']['date_entered']['value']?> </td>
    </tr>
    <tr>
        <td> Date modified </td>
        <td> <?php echo $data['entry_list'][$id]['name_value_list']['date_modified']['value']?> </td>
    </tr>
    <tr>
        <td> Account name </td>
        <td> <?php echo $data['entry_list'][$id]['name_value_list']['account_name']['value']?> </td>
    </tr>
    <tr>
        <td> Amount </td>
        <td> <?php echo $data['entry_list'][$id]['name_value_list']['amount']['value']?> </td>
    </tr>
    <tr>
        <td> Currency name </td>
        <td> <?php echo $data['entry_list'][$id]['name_value_list']['currency_name']['value']?> </td>
    </tr>
</table>

<a href="/opportunities"><h4>Back</h4></a>
<a href="/"><h4>Home</h4></a>

</body>
</html>
