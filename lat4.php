<HTML>
<HEAD>
<TITLE> Contoh Skirp PHP </TITLE>
<BODY>
<? 
$nilai = 85;
$nama = "Amir";
if ($nilai >= 80)
        {
                echo $nama. "Mendapatkan nilai A";
        }
elseif ($nilai >=70)
        {
                echo $nama. " Mendapatkan nilai B";
        }
elseif ($nilai >= 60)
        {
                echo $nama. " Mendapatkan nilai C";
        }
else 
        {
                echo $nama. " Mendapatkan nilai D";
        }
?>
</BODY>
</HTML>