<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('userguide/parent-navigation', $this->data);

?>
   <div class="col-md-9">
        <div class="box box-solid">
            <div class="box-body box-userguide">
            	<h4>Surat apa yang paling sering diajukan oleh Masyarakat?</h4>
                <p>Untuk melihat seberapa banyak surat yang diajukan oleh Masyarakat, anda dapat melihatnya dengan mengikuti beberapa langkah berikut :</p>
                <ol class="list-angka">
                    <li><p>Pilih menu <strong class="text-orange"><i class="fa fa-bar-chart"></i> Statistik</strong> yang terletak pada navigasi utama pada bagian kiri aplikasi.</p>
                    </li>
                    <li><p>Kemudian pilih sub menu <strong class="text-orange"><i class="fa fa-angle-double-right"></i> Surat Non Perizinan</strong> atau <strong class="text-orange"><i class="fa fa-angle-double-right"></i> Surat Perizinan</strong>.</p>
                    </li>
                    <li>
                        <p>Setelah muncul halaman statistik pelayanan, lakukan penyaringan data melalui form-form yang terletak pada box penyaringan disebelah kiri grafik. (<small>Lihat gambar dibawah ini</small>)</p>
                        <img src="<?php echo base_url("public/image/userguide/box-saring-stats.png") ?>" alt="">
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>

<?php
/* End of file proses-9.php */
/* Location: ./application/views/userguide/proses-9.php */