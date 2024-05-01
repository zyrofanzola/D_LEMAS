<section>
    <h1 align=center>pendaftaran siswa/muridbaru</h1>
        <center>
            <form action="<?php echo base_url('web/cetak'); ?>" method="post">
                <table> 
                    <tr> 
                        <th colspan="3"> 
                            Form Input D-Lemas 
                        </th> 
                    </tr>
                    <tr> 
                    <td colspan="3"> 
                        <hr><?php echo validation_errors(); ?>
                    </td> 
                    </tr>
                    <tr> 
                        <th>Nama Siswa</th> 
                        <td>:</td> 
                        <td> 
                            <input type="text" name="nama" id="nama"> 
                        </td> 
                    </tr> 
                    <tr> 
                        <th>NIS</th> 
                        <th>:</th> 
                        <td> 
                            <input type="text" name="nis" id="nis"> 
                        </td> 
                    </tr>
                    <tr> 
                        <th>Kelas</th> 
                        <th>:</th> 
                        <td> 
                            <input type="text" name="kelas" id="kelas"> 
                        </td> 
                    </tr>
                    <tr> 
                        <th>Tanggal Lahir</th> 
                        <th>:</th> 
                        <td> 
                            <input type="text" name="tglh" id="tglh"> 
                        </td> 
                    </tr> 
                    <tr> 
                        <th>Tempat Lahir</th> 
                        <th>:</th> 
                        <td> 
                            <input type="text" name="tmplh" id="tmplh"> 
                        </td> 
                    </tr> 
                    <tr> 
                        <th>Alamat</th> 
                        <th>:</th> 
                        <td> 
                            <input type="text" name="alamat" id="alamat"> 
                        </td> 
                    </tr> 
                    <tr>
                    <th>Jenis Kelamin</th>
                    <td>:</td>
                        <td>
                            <label>
                            <input type="radio" name="jk1" id="jk1" value="laki-laki"> Laki - laki
                            <input type="radio" name="jk2" id="jk2" value="perempuan"> Perempuan
                            </label>
                        </td>
                    </tr>
                    <tr> 
                        <th>Agama</th> 
                        <td>:</td> 
                        <td> 
                            <select name="agama" id="agama"> 
                                <option value="">Pilih Agama</option> 
                                <option value="Islam">Islam</option> 
                                <option value="Kristen">Kristen</option> 
                                <option value="Katolik">Katolik</option> 
                                <option value="Budha">Budha</option> 
                                <option value="Hindu">Hindu</option> 
                                <option value="Protestan">Protestan</option> 
                                <option value="Khonghucu">Khonghucu</option> 
                            </select> 
                        </td> 
                    </tr> 
                    <tr> 
                        <td colspan="3" align="center"> 
                            <input type="submit" value="Submit"> 
                        </td> 
                    </tr> 
                </table> 
            </form> 
        </center> 
</section>