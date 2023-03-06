<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Biodata</title>
        <link rel="stylesheet" type="text/css" href="profil.css">
    </head>
    <body>
        <div class="container">
                <table>
                    <tr>
                        <td class="onekiri">
                            <center>
                                <img src="fotoa.jpeg">
                                <p><h3>
                                <?php 
                                    $nama_awal = "ADELIA";
                                    $nama_tengah = "PUTRI";
                                    $nama_akhir = "ADYANI";
                                    echo $nama_awal . ' '.$nama_tengah . ' '.$nama_akhir;
                                ?>
                                </h3></p>
                                <p><b>
                                    <?php
                                        $tls_notelp = "No Telp :";
                                        echo $tls_notelp;
                                    ?>
                                </b><br>
                                    <?php 
                                        $notelp = "083125320830";
                                        echo $notelp;
                                    ?>
                                <br><b>
                                    <?php
                                        $tls_email = "E-mail :";
                                        echo $tls_email;
                                    ?>
                                </b><br>
                                    <?php
                                        $email = "delaputri811@gmail.com";
                                        echo $email;
                                    ?>
                                </p>
                            </center>
                        </td>

                        <td class="onekanan">
                            <table>
                                <tr>
                                    <td colspan="3" class="datadiri"><b><u>
                                        <?php 
                                            $judul1 = "Data Diri";
                                            echo $judul1;
                                        ?>
                                    </u></b></td>
                                </tr>

                                <tr>
                                    <td>
                                        <?php 
                                            $tls_nama = "Nama ";
                                            echo $tls_nama;
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                            $tls_titikdua = " : ";
                                            echo $tls_titikdua;
                                        ?> 
                                    </td>
                                    <td>
                                        <?php 
                                            $nama = "Adelia Putri Adyani";
                                            echo $nama;
                                        ?>
                                        Adelia Putri Adyani
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <?php
                                            $tls_npm = "NPM ";
                                            echo $tls_npm;
                                        ?>    
                                    </td>
                                    <td>
                                        <?php 
                                            $tls_titikdua = " : ";
                                            echo $tls_titikdua;
                                        ?> 
                                    </td>
                                    <td>
                                        <?php 
                                            $npm = "21081010046";
                                            echo $npm;
                                        ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <?php 
                                            $tls_progdi = "Program Studi ";
                                            echo $tls_progdi;
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                            $tls_titikdua = " : ";
                                            echo $tls_titikdua;
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                            $progdi = "Informatika";
                                            echo $progdi;
                                        ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <?php 
                                            $tls_ttl = "Tempat, Tanggal Lahir ";
                                            echo $tls_ttl;
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                            $tls_titikdua = " : ";
                                            echo $tls_titikdua;
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                            $ttl = "Surabaya, 08 November 2003";
                                            echo $ttl;
                                        ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <?php
                                            $kosong = " ";
                                            echo $kosong
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                            $kosong = " ";
                                            echo $kosong
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                            $tgl_lahir = date("2003-11-08");
			                                $hari_ini = date("Y-m-d");
                                            $umur = date_diff(date_create($tgl_lahir), date_create($hari_ini))->y;
                                            $umur = "Umur $nama adalah $umur tahun.";
                                            echo $umur;
                                        ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <?php 
                                            $tls_jk = "Jenis Kelamin ";
                                            echo $tls_jk;
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                            $tls_titikdua = " : ";
                                            echo $tls_titikdua;
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                            $jk = "Perempuan";
                                            echo $jk;    
                                        ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <?php 
                                            $tls_agama = "Agama";
                                            echo $tls_agama;
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                            $tls_titikdua = " : ";
                                            echo $tls_titikdua;
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                            $agama = "Islam";
                                            echo $agama;
                                        ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <?php
                                            $tls_alamat = "Alamat ";
                                            echo $tls_alamat;
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                            $tls_titikdua = " : ";
                                            echo $tls_titikdua;
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                            $alamat = "Jl. Karang Rejo 4 No 39, Wonokromo, Surabaya";
                                            echo $alamat;
                                        ?>
                                       </td>
                                </tr>

                                <tr>
                                    <td colspan="3" class="datapen"><b><u>
                                        <?php 
                                            $judul2 = "Data Pendidikan";
                                            echo $judul2;
                                        ?>
                                    </u></b></td>
                                </tr>

                                <tr>
                                    <td>
                                        <?php 
                                            $tls_sd = "Sekolah Dasar ";
                                            echo $tls_sd;
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                            $tls_titikdua = " : ";
                                            echo $tls_titikdua;
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                            $sd = "SDN Wonokromo III Surabaya (2009-2015)";
                                            echo $sd;
                                        ?>    
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <?php
                                            $tls_smp = "SMP ";
                                            echo $tls_smp;
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                            $tls_titikdua = " : ";
                                            echo $tls_titikdua;
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                            $smp = "SMP Negeri 32 Surabaya (2015-2018)";
                                            echo $smp;
                                        ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <?php
                                            $tls_smk = "SMK ";
                                            echo $tls_smk;
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                            $tls_titikdua = " : ";
                                            echo $tls_titikdua;
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                            $smk = "SMK Negeri 12 Surabaya ";
                                            echo $smk;
                                        ?>    
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <?php
                                            $kosong = " ";
                                            echo $kosong
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                            $kosong = " ";
                                            echo $kosong
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                            $jurusan = " Jurusan MultiMedia (2018-2021) ";
                                            echo $jurusan;
                                        ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <?php
                                            $tls_univ = "Perguruan Tinggi ";
                                            echo $tls_univ;
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                            $tls_titikdua = " : ";
                                            echo $tls_titikdua;
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                            $univ = " Universitas Pembangunan Nasional ''VETERAN'' Jawa Timur";
                                            echo $univ;
                                        ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <?php
                                            $kosong = " ";
                                            echo $kosong
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                            $kosong = " ";
                                            echo $kosong
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                            $studi = " Program Studi Informatika (2021-Hingga saat ini) ";
                                            echo $studi;
                                        ?>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
        </div>
    </body>
</html>