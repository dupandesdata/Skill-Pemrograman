<?php
  // Pengulangan
  
  // for loop
for ($i = 0; $i < 5; $i++) {
  echo "hallo world ";
};
  
echo "<table border='1'>";
for ($i = 1; $i <= 5; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 5; $j++) {
        echo "<td>Baris $i Kolom $j</td>";
    }
    echo "</tr>";
}
echo "</table>";
echo "<br>";
  //logika if else
 echo "<table border='1'>";
for ($i = 1; $i <= 5; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 5; $j++) {
        if($i % 2 == 1){
            echo "<td class='silver'>Baris $i Kolom $j</td>";
        }else{
            echo "<td>Baris $i Kolom $j</td>";
        }
    }
    echo "</tr>";
}
echo "</table>";

?>
<style>
.silver{
  background-color: silver;
}

</style>
