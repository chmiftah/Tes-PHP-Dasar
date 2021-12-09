<?php



echo "CASE 1 <br/><br/>";
$data = array(72, 65, 73, 78, 75, 74, 90, 81, 87, 65, 55, 69, 72, 78, 79, 91, 100, 40, 67, 77, 86);
$nilai_rata = 0;
$nilai_tinggi = 0;
$nilai_rendah = $data;
foreach ($data as $value) {


    if ($value <=  $nilai_rendah) {
        $nilai_rendah = $value;
    }

    if ($value >  $nilai_tinggi) {
        $nilai_tinggi = $value;
    }

    $total = count($data);
    $nilai_rata = array_sum($data) / $total;
}


echo "nilai tertinggi = " . $nilai_tinggi . "<br/>";
echo "nilai rendah = " . $nilai_rendah . "<br/>";
echo  "nilai rata = " . $nilai_rata . "<br/><br/>";

echo "nilai tertinggi : " . max($data) . "<br/>";
echo "nilai terendah : " . min($data) . "<br/>";
echo "nilai terendah : " . array_sum($data) / count($data) . "<br/>";
echo "=========================================<br/><br/>";
















//=======================================
echo "CASE 2 <br/><br/>";
$string = "TranSISI";
$huruf_capital = strtoupper($string);
$hasil = similar_text($string, $huruf_capital);
$total = strlen($string) - $hasil;
echo  $string . " Mengandung " . $total . " buah huruf kecil<br/>";


function huruf_kecil($string)
{

    $uppercase = mb_strtoupper($string);
    return strlen($uppercase) - similar_text($string, $uppercase);
}
echo "TranSISI Mengandung " . huruf_kecil($string) . " buah huruf kecil<br/>";
echo "=========================================<br/><br/>";





















//=======================================

function string($input)
{
    $input = explode(' ', $input);

    // unigram
    $unigram = '';
    foreach ($input as $item) {
        $unigram .= $item . ', ';
    }
    $unigram = substr($unigram, 0, -2);

    // bigram
    $x = 0;
    $bigram = '';
    foreach ($input as $item) {
        if ($x < 1) {
            $bigram .= $item . ' ';
            $x++;
        } else {
            $bigram .= $item . ', ';
            $x = 0;
        }
    }
    $bigram = substr($bigram, 0, -2);

    // trigram
    $y = 0;
    $trigram = '';
    foreach ($input as $item) {
        if ($y < 2) {
            $trigram .= $item . ' ';
            $y++;
        } else {
            $trigram .= $item . ', ';
            $y = 0;
        }
    }
    $trigram = substr($trigram, 0, -2);



    $result = 'Unigram : ' . $unigram . '<br>';
    $result .= 'Bigram : ' . $bigram . '<br>';
    $result .= 'Trigram : ' . $trigram . '<br><br/>';;

    return $result;
}
echo "CASE 3 <br/><br/>";
echo string('Jakarta adalah ibukota negara Republik Indonesia');
echo "=========================================<br/><br/>";

////////////////////////////////////////////////////////////////////////










$g = 0;
$rowcount = 0;
$data1 = [1, 2, 5, 7, 10, 11, 13, 14, 17, 19, 22, 23, 25, 26, 29, 31, 34, 35, 37, 38, 41, 43, 46, 47, 49, 50, 53, 55, 58, 59, 61, 62];
$data2 = [3, 4, 6, 8, 9, 12, 15, 16, 18, 20, 21, 24, 27, 28, 30, 32, 33, 36, 39, 40, 42, 44, 45, 48, 51, 52, 54, 56, 57, 60, 63, 64];

echo "CASE 4 <br/><br/>";
echo "<table cellspacing='0'>\r";
for ($i = 1; $i < 64;) {
    $rowcount++;
    echo "    <tr>\r";
    $g = $i + 8;
    for (; $i < $g; $i++) {
        if (!isset($g)) {
            break;
        }
        for ($k = 0; $k < 46; $k++) {
            if ($i == $data1[$k]) {
                echo " <td style='background:black; text-align:center; padding:20'>\r";
                echo "<span style='background:black; color:white;'>$i</span>";
                echo "        </td>\r";
            }
            if ($i == $data2[$k]) {
                echo " <td style='text-align:center; padding:20px'>\r";
                echo "<span style='color:black; text-align:center'>$i</span>";
                echo "   </td>\r";
            }
        }
    }

    echo "</tr> \r";
}
echo "</table>\r";

echo "<br/><br/>=========================================<br/><br/>";








///////////////////////////////////////////////////////////
function toInt($huruf){
    $alphabet = range('a', 'z');
    $alpha_flip = array_flip($alphabet);
    $lower = strtolower($huruf);
    $hasil = $alpha_flip["$lower"];
    return $hasil;
  }

  function toStr($angka){
    $alphabet = range('A', 'Z');
    if($angka <= 25){
      return $alphabet[$angka];
    }
  }

function enkripsi($input){
    $string = str_split($input);
    for($i=0;$i<count($string);$i++){
      echo $string[$i]." => ";
      $angka = toInt($string[$i]);
      echo $angka." => ";
      if($i==0){
        $data = $angka + 1;
        echo $data." => ";
      } elseif($i%2==1){
        $data = $angka - ($i+1);
        echo $data." => ";
      } else{
        $data = $angka + ($i+1);
        echo $data." => ";
      }
      $balik = toStr($data);
      echo $balik."<br/>";
      $string[$i] = $balik;
    }


    return implode($string);
   
  }

  echo "CASE 5 <br/><br/>";
  $input = 'DFHKNQ';
  $enkripsi = enkripsi($input);
  echo "Hasil Enkripsi $input adalah $enkripsi ";

  echo "<br/><br/>=========================================<br/><br/>";














  /////////////////////////////////////////////////
 $arr = [
    ['f','g','h','i'],
    ['j','k','p','q'],
    ['r','s','t','u'],
  ];



  function cari($arr, $input){

    $string = str_split($input);
    foreach($string as $value){
      foreach($arr[0] as $data1){
        if($value == $data1){
            return true;

        } 
      }

      foreach($arr[1] as $data2){
        if($value == $data2){
            return true;
        } else {
            return false;
        }
      }

      foreach($arr[2] as $data3){
        if($value == $data3){
            return true;
        } else {
            return false;
        }
      }

 
    }

  
  }
  echo "CASE 6 <br/><br/>";
  echo cari($arr, 'fghi') ? 'true <br/>' : 'false <br>';

  echo cari($arr, 'fghp')? 'true <br/>' : 'false <br/>';

  echo cari($arr, 'fjrstp') ? 'true <br/>' : 'false <br/>';

  echo cari($arr, 'pqr') ? 'true <br/>' : 'false <br/>';

  echo cari($arr, 'fst') ? 'true <br/>' : 'false <br/>';

  echo cari($arr, 'pqr') ? 'true <br/>' : 'false <br/>';

  echo cari($arr, 'abc') ? 'true <br/>' : 'false <br/>';

?>
