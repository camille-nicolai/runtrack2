<?php
    $str1 = '45';
    $str2 = 'salut';
    $str3 = true;
    $str4 = '5.15';

    $array = array($str1, $str2, $str3, $str4);
?>


<html>

<style>
    table{padding:2%;}
td {
    border: 1px solid #333;
}

thead,
tfoot {
    background-color: #333;
    color: #fff;
}

</style>


<table>
    <thead>
        <tr>
            <th colspan="1,3">Type</th>
            <th colspan="1">Nom</th>
            <th colspan="1">Valeur</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>int</td> 
            <td>str1</td> 
            <td><?php echo($array[0]);?></td>      
        </tr>

        <tr>
            <td>string</td>
            <td>str2</td>  
            <td><?php echo($array[1]);?></td>       
        </tr>

        <tr>
            <td>bol</td>
            <td>str2</td> 
            <td><?php echo($array[2]);?></td>
        </tr>

        <tr>
            <td>float</td>
            <td>str3</td> 
            <td><?php echo($str4);?></td>   
        </tr>

    </tbody>
</table>


</html>