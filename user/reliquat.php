<?php
$sql = "SELECT * FROM SF where id ='reliquat'";
$query = $conn->query($sql);
while($row = $query->fetch_assoc()){
  echo "
  <td>".$row['n_complet']."</td>
      Solde actuelle ".$row['reliquat']."
  ";
}
?>