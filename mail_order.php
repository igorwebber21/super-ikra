<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>

    <style>
      table#order-table  {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        max-width: 500px;
        margin: 15px 0 25px;
          background: #ffffff;
      }

      #order-table td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
      }

      #order-table tr:nth-child(even) {
        background-color: #dddddd;
      }
    </style>

</head>
<body style="    background: #F6F8FC;
    padding: 20px;">

<h3 >Новый заказ в магазине <span style="color: #FF1500;">«Super Ikra»</span></h3>
<table id="order-table">
  <tr>
    <td>Товар</td>
    <td><?=$_POST['Quantity']?> </td>
  </tr>
  <tr>
    <td>Имя клиента</td>
    <td><?=$_POST['Name']?> </td>
  </tr>
  <?php if(isset($_POST['lastName'])): ?>
  <tr>
    <td>Фамилия клиента</td>
    <td><?=$_POST['lastName']?> </td>
  </tr>
  <?php endif; ?>
  <tr>
    <td>Телефон клиента</td>
    <td><?=$_POST['Phone']?> </td>
  </tr>
  <?php if(isset($_POST['Department']) && isset($_POST['City'])): ?>
    <tr>
      <td>Адрес отправки</td>
      <td>город <?=$_POST['City']?>, отделение Новой Почты  <?=$_POST['Department']?></td>
    </tr>
  <?php endif; ?>
  <tr>
    <td>Форма отправки</td>
    <td><?=$_POST['comm']?> (<?=$_POST['formId']?>)</td>
  </tr>
</table>

<p style="font-size: 16px;">Интернет магазин по продаже икры
    <a href="https://super-ikra.com.ua/" style="color: #FF1500; text-decoration: none; font-weight: bold;">super-ikra.com.ua</a>
</p>

</body>
</html>