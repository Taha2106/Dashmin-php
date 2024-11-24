<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<?php
for($i = 1; $i<=10; $i++){
  
$result = $i * 7;
if($result % 2 == 0){
    $color = "green";
}
else{
    $color = "red";
}
echo "<div
    class='table-responsive'>

    <table
        class='table table-primary'>
    
        
        <tbody>
            <tr class=''>
                <td scope='row'>7</td>
                  <td> x </td>
                 <td>=</td>
                <td style='color: $color;'> $result </td>
            </tr>
        </tbody>
    </table>
</div>";

}


?>
