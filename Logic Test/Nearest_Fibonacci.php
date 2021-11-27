<?php

function fibonacci ($data) {
  $fibonacci = [];
  
  $hasil = 0;
  for ($i=0; $i <count($data) ; $i++) { 
    $hasil = $hasil + $data[$i]; 
  }
  $jumlahBilangan = $hasil;
  
  if ($jumlahBilangan < 0) {
    return $fibonacci; 
  }

  for ($i = 0; $i < $jumlahBilangan; $i++) {
    if ($i < 2) {
      $bilangan = $i;
    } else {
      $bilangan = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    array_push($fibonacci, $bilangan);
  }

  foreach ($fibonacci as $i) {
    $smallest[$i] = abs($i - $jumlahBilangan);
  }
  asort($smallest);
  $c = key($smallest);
  $selisih = abs($c - $jumlahBilangan); // 23
  echo "Selisih: {$selisih}";
}

fibonacci(array(15,1,3)) . '<br>';