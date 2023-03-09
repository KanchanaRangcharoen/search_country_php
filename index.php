<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find the name of an Asian country.</title>
</head>

<body>
    <?php
    $Asia = array(
        "Kazakhstan", "Kyrgyzstan", "Tajikistan", "Turkmenistan",
        "Uzbekistan", "China", "China, Hong Kong Special Administrative", "Region", "China, Macao Special Administrative",
        "Region", "North Korea", "Japan", "Mongolia", "South Korea", "Afghanistan", "Bangladesh",
        "Bhutan", "India", "Iran (Islamic Republic of)", "Maldives", "Nepal", "Pakistan", "Sri Lank", "Brunei Darussalam",
        "Cambodia", "Indonesia", "Lao People's Democratic Republic", "Malaysia",
        "Myanmar", "Philippines", "Singapore", "Thailand", "Timor-Leste", "Viet Nam", "Armenia",
        "Azerbaijan", "Bahrain", "Cyprus", "Georgia", "Iraq", "Israel", "Jordan", "Kuwait", "Lebanon", "Oman", "Qatar", "Saudi Arabia",
        "State of Palestine", "Syrian Arab Republic", "Turkey", "United Arab Emirates", "Yemen"
    );

    $file = array("hw-doc01.txt", "hw-doc02.txt", "hw-doc03.txt");
    $wordf = '';
    for ($i = 0; $i <= 2; $i++) {
        $wordf = file_get_contents($file[$i]);
        $as = [];    //อาร์เรย์ว่างสำหรับเก็บประเทศในAsia
        foreach ($Asia as $a) {
            if (stripos($wordf, $a) != null) {     //ถ้ามีประเทศในสตริง
                $as[] = $a;                                //ถ้าพบประเทศในAsiaให้เก็บไว้ในอาร์เรย์
            }
        }
        $c = array_unique($as);
        sort($c);
        if (count($c) > 0) {
            $s = implode(',', $c);
            echo "รายชื่อประเทศที่อยู่โซนเอเซีย: <br>$s<br>";
        }
    }
    ?>
</body>

</html>