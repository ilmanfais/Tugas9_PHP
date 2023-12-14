<?php
    //tangkap request class_nilaiSantri.php 
    require_once 'class_nilai.php';

    $ns1 = new NilaiSantri ('Fulan',70);
    $ns2 = new NilaiSantri ('Badu',69);
    $ns3 = new NilaiSantri ('Usro', 85);
    $ns4 = new NilaiSantri ('Jarwo',40);
    $ar_santri = [$ns1,$ns2,$ns3,$ns4];
?>
<table border="1" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nilai</th>
            <th>Hasil</th>
        </tr>
    </thead>
    <tbody>
        <?php

            $nomor = 1 ;
            foreach ($ar_santri as $san) {
                echo '<tr align="center"><td>'.$nomor.'</td><td align="left">'.$san->nama.'</td>';
                echo '<td>'.$san->nilai.'</td><td>'.$san->getHasil().'</td></tr>';
                $nomor++;
            }
        ?>
    </tbody>
</table>