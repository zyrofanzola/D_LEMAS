<section>
    <h1 align=center>form output</h1>
        <center>
            <table> 
                <tr> 
                    <th colspan="3"> 
                        Tampil Data D-Lemas
                    </th> 
                </tr> 
                <tr> 
                    <td colspan="3"> 
                        <hr> 
                    </td> 
                </tr> 
                <tr> 
                    <th>Nama Siswa</th> 
                    <th>:</th> 
                    <td> 
                        <?= $nama; ?> 
                    </td> 
                </tr> 
                <tr> 
                    <td>NIS</td> 
                    <td>:</td> 
                    <td> 
                        <?= $nis; ?> 
                    </td> 
                </tr> 
                <tr> 
                    <td>Kelas</td> 
                    <td>:</td> 
                    <td> 
                        <?= $kelas; ?> 
                    </td> 
                </tr> 
                <tr> 
                    <td>Tanggal Lahir</td> 
                    <td>:</td> 
                    <td> 
                        <?= $tglh; ?> 
                    </td> 
                </tr> 
                <tr> 
                    <td>Tempat Lahir</td> 
                    <td>:</td> 
                    <td> 
                        <?= $tmplh; ?> 
                    </td> 
                </tr> 
                <tr> 
                    <td>Alamat</td> 
                    <td>:</td> 
                    <td> 
                        <?= $alamat; ?> 
                    </td> 
                </tr> 
                <tr> 
                    <td>Jenis Kelamin</td> 
                    <td>:</td> 
                    <td> 
                        <?= $gender; ?> 
                    </td> 
                </tr> 
                <tr> 
                    <td>Agama</td> 
                    <td>:</td> 
                    <td> 
                        <?= $agama; ?> 
                    </td> 
                </tr> 
                <tr> 
                    <td colspan="3" align="center"> 
                        <a href="<?= base_url('web/daftar'); 
                        ?>">Kembali Ke Form</a> 
                    </td>
                    <td colspan="3" align="center">
                        <a href="<?= base_url('web');
                        ?>">Kembali Ke Home</a>
                    </td>
                </tr> 
            </table> 
        </center> 
</section>