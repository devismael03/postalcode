<?php

error_reporting(0);
$street=$_POST['str'];
$nativeurl="http://data.e-gov.az/api/v1/IEGOVService.svc/GetPostalCodeByStreetName/".urlencode($street);

$search=str_replace('+',"%20",$nativeurl);

$data=file_get_contents($search);
$data=json_decode($data);
$neticesay=count($data->response);
echo "<div class='well text-center '>Axtardığınız söz : <b>".trim(htmlentities($street))."</b> <br>
       Nəticə : <b>$neticesay</b>

        </div>";

echo '<table class="table table-striped">';
echo '<thead>
      <tr>
        <th>Küçə</th>
        <th>Şəhər</th>
        <th>Poçt kodu</th>
      </tr>
    </thead>';
echo '<tbody>';
for($i=0;$i<count($data->response);$i++){
echo '<tr>';
echo "<td>";
echo $data->response[$i]->address;
 echo "</td>";
 echo "<td>";
 echo $data->response[$i]->city;
  echo "</td>";
  echo "<td>";
  echo $data->response[$i]->postalCode;
   echo "</td>";

echo "</tr>";
}
echo "</tbody>";
echo "</table>";

 ?>
