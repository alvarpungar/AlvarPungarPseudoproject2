<html>
<head>
    <link rel="stylesheet" type="text/css"
          href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8"
            src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" charset="utf8"
            src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

</head>
<body>
<table id="example">
    <thead>
    <tr>
        <th>country</th>
        <th>official languages</th>
        <th>population</th>
        <th>currency</th>
        <th>area</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Estonia</td>
        <td>Estonian</td>
        <td>1,313,271</td>
        <td>Euro (€) (EUR)</td>
        <td>45,339 km2</td>
    </tr>
    <tr>
        <td>Latvia</td>
        <td>Latvian</td>
        <td>1,997,500 </td>
        <td>Euro (€) (EUR)</td>
        <td>64,589 km2</td>
    </tr>
    <tr>
        <td>Lithuania</td>
        <td>Lithuanian</td>
        <td>2,895,993</td>
        <td>Euro (€) (EUR)</td>
        <td>65,300 km2</td>
    </tr>
    <tr>
        <td>Russia</td>
        <td>Russian</td>
        <td>143,975,923</td>
        <td>Russian ruble (₽) (RUB)</td>
        <td>17,098,242 km2</td>
    </tr>
    <tr>
        <td>Finland</td>
        <td>Finnish</td>
        <td>5,489,097</td>
        <td>Euro (€) (EUR)</td>
        <td>338,424 km2</td>
    </tr>
    </tbody>
</table>
<script>
    $(function () {
        $("#example").dataTable();
    })
</script>
</body>
</html>
