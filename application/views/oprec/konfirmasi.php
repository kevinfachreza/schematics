<section style="background-image: url('<?php echo base_url();?>assets/img/pattern-kotak-trans.jpg'); background-size: cover; background-attachment: fixed;">
    <div class="progress-container">
        <div class="progress-info"><span class="badge">1</span> <span style="opacity:0.5">Isi Formulir Pendaftaran </span></div>
        <div class="progress-info active"><span class="badge" style="margin-left: 2em">2</span> <span><b>Konfirmasi Data </b></span></div>
        <div class="progress-info"><span class="badge" style="margin-left: 2em">3</span> <span style="opacity:0.5">Selesai</span></div>
    </div>
    <div class="row" style="margin-bottom: 2em">
        <div class="container" style="margin-top: 3em">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="panel panel-default" id="panel-reveal">
                    <div class="panel-body" style="padding: 2em">
                        <div style="height:6em; text-align: center"><h3 class="underlined-title">Konfirmasi Data</h3></div>
                        <table class="table" style="width:100%;table-layout:fixed">
                            <thead>
                                <tr>
                                    <th style="width: 25%">Form</th>
                                    <th>Data</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Nama Lengkap</td>
                                    <td><?php echo $this->session->userdata('nama'); ?></td>
                                </tr>
                                <tr>
                                    <td>NRP</td>
                                    <td><?php echo $this->session->userdata('NRP'); ?></td>
                                </tr>
                                <tr>
                                    <td>Peran</td>
                                    <td>
                                        <?php if($this->session->userdata('pilJabatan')==2) echo "Staff";
                                              else echo "Badan Pengurus Harian";
                                        ?>

                                    </td>
                                </tr>
                                <tr>
                                    <td>Pilihan 1</td>
                                    <td>
                                    <?php 
                                        if($this->session->userdata('pilihan1')==1) echo "NLC";
                                        elseif($this->session->userdata('pilihan1')==2) echo "NPC";
                                        elseif($this->session->userdata('pilihan1')==3) echo "NST";
                                        elseif($this->session->userdata('pilihan1')==4) echo "Reeva";
                                        elseif($this->session->userdata('pilihan1')==5) echo "Webkestari";
                                        elseif($this->session->userdata('pilihan1')==6) echo "Kamzin";
                                        elseif($this->session->userdata('pilihan1')==7) echo "Danus";
                                        elseif($this->session->userdata('pilihan1')==8) echo "Humas";
                                        elseif($this->session->userdata('pilihan1')==9) echo "Perkaptrans";
                                        elseif($this->session->userdata('pilihan1')==10) echo "3D";
                                        elseif($this->session->userdata('pilihan1')==11) echo "Wakil Ketua";
                                        elseif($this->session->userdata('pilihan1')==12) echo "Sekretaris";
                                        elseif($this->session->userdata('pilihan1')==13) echo "Bendahara";
                                        else echo "Kosong";
                                    ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Alasan Pilihan 1</td>
                                    <td style="width: 100%; word-wrap:break-word;">
                                        <p><?php echo $this->session->userdata('alasan_pilihan1'); ?></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Pilihan 2</td>
                                    <td>
                                    <?php 
                                        if($this->session->userdata('pilihan2')==1) echo "NLC";
                                        elseif($this->session->userdata('pilihan2')==2) echo "NPC";
                                        elseif($this->session->userdata('pilihan2')==3) echo "NST";
                                        elseif($this->session->userdata('pilihan2')==4) echo "Reeva";
                                        elseif($this->session->userdata('pilihan2')==5) echo "Webkestari";
                                        elseif($this->session->userdata('pilihan2')==6) echo "Kamzin";
                                        elseif($this->session->userdata('pilihan2')==7) echo "Danus";
                                        elseif($this->session->userdata('pilihan2')==8) echo "Humas";
                                        elseif($this->session->userdata('pilihan2')==9) echo "Perkaptrans";
                                        elseif($this->session->userdata('pilihan2')==10) echo "3D";
                                        elseif($this->session->userdata('pilihan2')==11) echo "Wakil Ketua";
                                        elseif($this->session->userdata('pilihan2')==12) echo "Sekretaris";
                                        elseif($this->session->userdata('pilihan2')==13) echo "Bendahara";
                                        else echo "Kosong";
                                    ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Alasan Pilihan 2</td>
                                    <td style="width: 100%; word-wrap:break-word;">
                                        <p><?php echo $this->session->userdata('alasan_pilihan2'); ?></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Pilihan 3</td>
                                    <td>
                                    <?php 
                                        if($this->session->userdata('pilihan3')==1) echo "NLC";
                                        elseif($this->session->userdata('pilihan3')==2) echo "NPC";
                                        elseif($this->session->userdata('pilihan3')==3) echo "NST";
                                        elseif($this->session->userdata('pilihan3')==4) echo "Reeva";
                                        elseif($this->session->userdata('pilihan3')==5) echo "Webkestari";
                                        elseif($this->session->userdata('pilihan3')==6) echo "Kamzin";
                                        elseif($this->session->userdata('pilihan3')==7) echo "Danus";
                                        elseif($this->session->userdata('pilihan3')==8) echo "Humas";
                                        elseif($this->session->userdata('pilihan3')==9) echo "Perkaptrans";
                                        elseif($this->session->userdata('pilihan3')==10) echo "3D";
                                        elseif($this->session->userdata('pilihan3')==11) echo "Wakil Ketua";
                                        elseif($this->session->userdata('pilihan3')==12) echo "Sekretaris";
                                        elseif($this->session->userdata('pilihan3')==13) echo "Bendahara";
                                        else echo "Kosong";
                                    ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Alasan Pilihan 3</td>
                                    <td style="width: 100%; word-wrap:break-word;">
                                        <p><?php echo $this->session->userdata('alasan_pilihan3'); ?></p>
                                    </td>
                                </tr>
                                <?php
                                    if($this->session->userdata('pilJabatan')==2)
                                    {
                                ?>
                                <tr>
                                    <td>Pilihan 4</td>
                                    <td>
                                    <?php 
                                        if($this->session->userdata('pilihan4')==1) echo "NLC";
                                        elseif($this->session->userdata('pilihan4')==2) echo "NPC";
                                        elseif($this->session->userdata('pilihan4')==3) echo "NST";
                                        elseif($this->session->userdata('pilihan4')==4) echo "Reeva";
                                        elseif($this->session->userdata('pilihan4')==5) echo "Webkestari";
                                        elseif($this->session->userdata('pilihan4')==6) echo "Kamzin";
                                        elseif($this->session->userdata('pilihan4')==7) echo "Danus";
                                        elseif($this->session->userdata('pilihan4')==8) echo "Humas";
                                        elseif($this->session->userdata('pilihan4')==9) echo "Perkaptrans";
                                        elseif($this->session->userdata('pilihan4')==10) echo "3D";
                                        elseif($this->session->userdata('pilihan4')==11) echo "Wakil Ketua";
                                        elseif($this->session->userdata('pilihan4')==12) echo "Sekretaris";
                                        elseif($this->session->userdata('pilihan4')==13) echo "Bendahara";
                                        else echo "Kosong";
                                    ?>
                                    </td>
                                </tr>
                                 <tr>
                                    <td>Pilihan 5</td>
                                    <td>
                                    <?php 
                                        if($this->session->userdata('pilihan5')==1) echo "NLC";
                                        elseif($this->session->userdata('pilihan5')==2) echo "NPC";
                                        elseif($this->session->userdata('pilihan5')==3) echo "NST";
                                        elseif($this->session->userdata('pilihan5')==4) echo "Reeva";
                                        elseif($this->session->userdata('pilihan5')==5) echo "Webkestari";
                                        elseif($this->session->userdata('pilihan5')==6) echo "Kamzin";
                                        elseif($this->session->userdata('pilihan5')==7) echo "Danus";
                                        elseif($this->session->userdata('pilihan5')==8) echo "Humas";
                                        elseif($this->session->userdata('pilihan5')==9) echo "Perkaptrans";
                                        elseif($this->session->userdata('pilihan5')==10) echo "3D";
                                        elseif($this->session->userdata('pilihan5')==11) echo "Wakil Ketua";
                                        elseif($this->session->userdata('pilihan5')==12) echo "Sekretaris";
                                        elseif($this->session->userdata('pilihan5')==13) echo "Bendahara";
                                        else echo "Kosong";
                                    ?>
                                    </td>
                                </tr>
                                <?php
                                    }
                                ?>
                                <tr>
                                    <td>Ukuran Kemeja</td>
                                    <td>
                                        <?php
                                            if($this->session->userdata('ukuranbaju')==1) echo "S";
                                            elseif($this->session->userdata('ukuranbaju')==2) echo "M";
                                            elseif($this->session->userdata('ukuranbaju')==3) echo "L";
                                            elseif($this->session->userdata('ukuranbaju')==4) echo "XL";
                                            elseif($this->session->userdata('ukuranbaju')==5) echo "XXL";
                                            elseif($this->session->userdata('ukuranbaju')==6) echo "XXXL";
                                            else echo "Kosong";
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ukuran Lengan</td>
                                    <td>
                                        <?php
                                            if($this->session->userdata('ukuranlengan')==1) echo "Pendek";
                                            elseif($this->session->userdata('ukuranlengan')==2) echo "Panjang";
                                            else echo "Kosong";
                                        ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <form action="#" method="POST" style="text-align:center; margin-top: 2em">
                            <div class="checkbox" style="margin-bottom: 2em">
                                <label><input type="checkbox" id="tosCheckbox" value="1"><b>Saya mengisi data ini dengan sebenar-benarnya dan bersedia untuk mengikuti semua alur kerja Schematics 2016</b></label>
                            </div>
                            <button class="btn btn-sch-color anim" id="doPost" style="width: 100%; color:white">SUBMIT</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            
          </div>
        </div>  
    </div>

<script type="text/javascript">
    window.sr = ScrollReveal({ duration: 1000 }).reveal('#panel-reveal');
//    alert("Pastikan inputmu tidak lebih dari 255 karakter untuk menghindari kesalahan teknis pada database Schematics");
    $(document).ready(function() {
    $("#doPost").click(function(e) {
        e.preventDefault();
        if ($('#tosCheckbox').is(":checked"))
        {
          $.ajax({
            type:'POST',
            url:'<?php echo base_url();?>oprec/dokonfirmasi',
            data:'submit=1',
            success:function(response){
                $('#myModal').modal({
                  backdrop: 'static',
                  keyboard: false
                });
                $(".modal-content").html(response);
            }
        });
          
        }
        else
        {
            alert("Silahkan centang checkbox untuk registrasi");
        }
        });
    });

</script>
