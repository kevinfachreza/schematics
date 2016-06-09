<?php
if(isset($message))
{
    echo $message;
    unset($message);
}
?>


<section style="margin-bottom: 5em">
    <div class="progress-container">
        <div class="progress-info active"><span class="badge">1</span> <span><b>Isi Formulir Pendaftaran </b></span></div>
        <div class="progress-info"><span class="badge" style="margin-left: 2em">2</span> <span style="opacity:0.5">Konfirmasi Data </span></div>
        <div class="progress-info"><span class="badge" style="margin-left: 2em">3</span> <span style="opacity:0.5">Selesai</span></div>
    </div>
    <div class="row" style="min-height: 75vh;">
        <div class="container">
            <div class="col-sm-7 col-xs-12" id="col-reveal">
                <div class="col-xs-12" style="margin-bottom: 4em; margin-top:4em;">
                        <h3 style="border-bottom: solid 4px #404040; display: inline; font-weight: 700; padding-bottom: 0.4em">Deskripsi Biro</h3>
                </div>
                <div style="margin: 0 12px">
                    <div class="col-xs-4" style="padding: 3px;">
                        <a data-toggle="modal" href="#modal-biro" onclick="getDesc(1)" class="minidesctrigger nofade">
                            <img class="biro-thumb" src="<?php echo base_url()?>assets/img/logo-biro/1.jpg">
                            <div class="minidesc">
                                <b>NLC</b>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-4" style="padding: 3px">
                        <a data-toggle="modal" href="#modal-biro" onclick="getDesc(2)" class="minidesctrigger nofade">
                            <img class="biro-thumb" src="<?php echo base_url()?>assets/img/logo-biro/2.jpg">
                            <div id="minidesc2" class="minidesc">
                                <b>NPC</b>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-4" style="padding: 3px">
                        <a data-toggle="modal" href="#modal-biro" onclick="getDesc(3)" class="minidesctrigger nofade">
                            <img class="biro-thumb" src="<?php echo base_url()?>assets/img/logo-biro/3.jpg">
                            <div id="minidesc3" class="minidesc">
                                <b>NST</b>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-4" style="padding: 3px">
                        <a data-toggle="modal" href="#modal-biro" onclick="getDesc(4)" class="minidesctrigger nofade">
                            <img class="biro-thumb" src="<?php echo base_url()?>assets/img/logo-biro/4.jpg">
                            <div id="minidesc4" class="minidesc">
                                <b>REEVA</b>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-4" style="padding: 3px">
                        <a data-toggle="modal" href="#modal-biro" onclick="getDesc(5)" class="minidesctrigger nofade">
                            <img class="biro-thumb" src="<?php echo base_url()?>assets/img/logo-biro/5.jpg">
                            <div id="minidesc5" class="minidesc">
                                <b>HUMAS</b>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-4" style="padding: 3px">
                        <a data-toggle="modal" href="#modal-biro" onclick="getDesc(6)" class="minidesctrigger nofade">
                            <img class="biro-thumb" src="<?php echo base_url()?>assets/img/logo-biro/6.jpg">
                            <div id="minidesc6" class="minidesc">
                                <b>DANUS</b>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-4" style="padding: 3px">
                        <a data-toggle="modal" href="#modal-biro" onclick="getDesc(7)" class="minidesctrigger nofade">
                            <img class="biro-thumb" src="<?php echo base_url()?>assets/img/logo-biro/7.jpg">
                            <div id="minidesc7" class="minidesc">
                                <b>PERKAP</b>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-4" style="padding: 3px">
                        <a data-toggle="modal" href="#modal-biro" onclick="getDesc(8)" class="minidesctrigger nofade">
                            <img class="biro-thumb" src="<?php echo base_url()?>assets/img/logo-biro/8.jpg">
                            <div id="minidesc8" class="minidesc">
                                <b>3D</b>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-4" style="padding: 3px">
                        <a data-toggle="modal" href="#modal-biro" onclick="getDesc(9)" class="minidesctrigger nofade">
                            <img class="biro-thumb" src="<?php echo base_url()?>assets/img/logo-biro/9.jpg">
                            <div id="minidesc9" class="minidesc">
                                <b>WEBKES</b>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-4" style="padding: 3px">
                        <a data-toggle="modal" href="#modal-biro" onclick="getDesc(10)" class="minidesctrigger nofade">
                            <img class="biro-thumb" src="<?php echo base_url()?>assets/img/logo-biro/10.jpg">
                            <div id="minidesc10" class="minidesc">
                                <b>KAMZIN</b>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-4" style="padding: 3px">
                        <a data-toggle="modal" href="#modal-biro" onclick="getDesc(11)" class="minidesctrigger nofade">
                            <img class="biro-thumb" src="<?php echo base_url()?>assets/img/logo-biro/11.jpg">
                            <div id="minidesc11" class="minidesc">
                                <b>NON-BIRO</b>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-5 col-xs-12" id="form-reveal">
                <div class="col-xs-12" style="margin-top:4em">
                    <h3 style="border-bottom: solid 4px #404040; display: inline; font-weight: 700; padding-bottom: 0.4em">Form Pendaftaran</h3>
                </div>
                <div class="col-xs-12" id="ketentuan" style="width:100%;margin-bottom: 2em; margin-top:2em">
                    <div id="ketentuan-body" style="margin-top:2em;color: white; background-color: #5884e6; padding:1.5em; width: 100%">
                        <h4 style="display:inline">Ketentuan</h4>
                        <a href="#" class="pull-right" flag="0" id="showContentKetentuan" style="color: white; border-bottom: 1px solid;">Hide</a>
                        <div id="ketentuan-content">
                            <ul style="margin-top: 1.5em; margin-left:-20px">
                                <li>Tidak diperbolehkan memilih biro yang sama pada setiap pilihan biro</li>
                               <!-- <li>Untuk alasan pilihan biro ke-1, ke-2 dan ke-3 maksimal 255 karakter</li>-->
                                <li>Diwajibkan untuk mengisi semua form termasuk pilihan biro</li>
                                <li>Jika terjadi kesalahan/error silahkan hubungi Rina (081239679679 | line: rinawkw) / Thoni (line: fathoniadi)</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <form action="<?php echo base_url();?>oprec/doRegistrasi" method="post" id="formInput" class="form-horizontal" style="margin-left: 15px">
                        <div class="form-group">
                            <label for="usr"  class="col-sm-4" style="line-height: 2em">Nama</label>
                            <div class="col-sm-8">
                                <input value="<?php echo $this->session->userdata('nama'); ?>" title="Wajib diisi" required type="text" placeholder="Nama" name="nama" class="form-control" id="usr">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nrp" class="col-sm-4" style="line-height: 2em">NRP</label>
                            <div class="col-sm-8">
                                <input value="<?php echo $this->session->userdata('NRP'); ?>" title="Wajib diisi" pattern="[0-9]{10}"  required type="text" title="Diisi dulu ya dek hehe" name="NRP" placeholder="5115100***" class="form-control" id="nrp">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="jabatan" class="col-sm-4" style="line-height: 2em">Peran</label>
                            <div class="col-sm-8">
                                <select title="Wajib diisi"  required class="form-control" id="jabatan" name="pilJabatan" required>
                                    <option value="" selected disabled>Pilihan Peran</option>
                                    <option value="1">Badan Pengurus Harian</option>
                                    <option value="2">Staff</option>
                                </select>
                            </div>
                        </div>
                        <div id="pilihanOprec"></div>
                        <div class="form-group">
                            <label for="ukuranBaju" class="col-sm-4" style="line-height: 1.5em">Ukuran Kemeja</label>
                            <div class="col-sm-4">
                                <select title="Wajib diisi"  class="form-control" id="ukuranBaju" required="" name="ukuranbaju">
                                    <option value="" selected disabled>Pilihan Ukuran</option>
                                    <option value="1" <?php if($this->session->userdata('ukuranbaju')==1) echo "selected";?>>S</option>
                                    <option value="2" <?php if($this->session->userdata('ukuranbaju')==2) echo "selected";?> >M</option>
                                    <option value="3" <?php if($this->session->userdata('ukuranbaju')==3) echo "selected";?> >L</option>
                                    <option value="4" <?php if($this->session->userdata('ukuranbaju')==4) echo "selected";?> >XL</option>
                                    <option value="5" <?php if($this->session->userdata('ukuranbaju')==5) echo "selected";?> >XXL</option>
                                    <option value="6" <?php if($this->session->userdata('ukuranbaju')==6) echo "selected";?> >XXXL</option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <select title="Wajib diisi"  class="form-control" id="ukuranLengan" required="" name="ukuranlengan">
                                    <option value="" selected disabled>Panjang Lengan</option>
                                    <option value="1" <?php if($this->session->userdata('ukuranlengan')==1) echo "selected";?> >Pendek</option>
                                    <option value="2" <?php if($this->session->userdata('ukuranlengan')==2) echo "selected";?> >Panjang</option>
                                </select>
                            </div>
                        </div>
    <!--
                        <div class="form-group">
                            <label for="ukuranLengan" class="col-sm-4" style="line-height: 2em">Lengan Kemeja</label>
                            <div class="col-sm-8">
                                <select title="Diisi dulu ya dek hehe :)"  class="form-control" id="ukuranLengan" required="" name="ukuranlengan">
                                    <option value="">Pilihan Lengan</option>
                                    <option value="1" <?php if($this->session->userdata('ukuranlengan')==1) echo "selected";?> >Pendek</option>
                                    <option value="2" <?php if($this->session->userdata('ukuranlengan')==2) echo "selected";?> >Panjang</option>
                                </select>
                            </div>
                        </div>
    -->
                        <input name="submit" id="doChecking" type="submit" class="btn btn-sch-color anim nofade" style="width:100%; margin-top: 1em" value="DAFTAR">
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div id="modal-biro" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content" style="padding-top: 2em; padding-bottom: 2em">
                <div class="modal-body">
                    <div class="row">
                        
                        <div class="container">
                            <button type="button" class="close" data-dismiss="modal" style="font-size:3em; position:absolute; right:1em; top:0em">&times;</button>
                            <div class="col-xs-12" style="margin-bottom: 2em">
                                <h3 id="namabiro" style="font-weight: 700"></h3>
                            </div>
                            <div class="col-sm-4">
                                <img class="biro-thumb" id="logobiro" src="" style="margin-bottom:1.5em">
                            </div>
                            <div class="col-sm-8">
                                <p><b>Deskripsi Biro:</b></p>
                                <p id="descbiro"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</section>

<style>
    
    .biro-thumb {
        width: 100%;
        margin-bottom: 0px;
    }
    .form-border {
        border:none;
        box-shadow:none;
        padding-left: 7%;
        padding-right: 7%;
    }
    .minidesc {
        position: absolute;
        z-index:5;
        top:2%; 
        text-align:center;
        padding-top:40%;
        width:97%;
        height:96%;
        color:white;
        background-color: #404040;
        font-size: 150%;
    }
    
    @media (min-width: 750px) {
        .form-border {
/*
            border-width: 0 0 0 1px;
            border-image: linear-gradient(to bottom, rgba(0, 0, 0, 0), lightgrey, rgba(0, 0, 0, 0.05)) 1 100%;
*/
            -webkit-box-shadow: -11px 0px 50px -36px rgba(0,0,0,0.77);
            -moz-box-shadow: -11px 0px 50px -36px rgba(0,0,0,0.77);
            box-shadow: -11px 0px 50px -36px rgba(0,0,0,0.77);
            padding-left: 30px;
            padding-right: 0;
        }
    }
</style>
<script type="text/javascript">
    $(document).ready(function() {
        $(document).on('click','#showContentKetentuan',function(e) {
            $('#ketentuan-content').slideToggle("medium");
            e.preventDefault();
            var flag=$(this).attr('flag');
            if(flag==0)
            {
                $(this).attr('flag',1)
                $(this).text("Show");
            }
            else if(flag==1)
            {
                $(this).attr('flag',0)
                $(this).text("Hide");
            }
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $(document).on('change','#jabatan',function() {
            var jabatan = $("#jabatan").val();
            if(jabatan==1)
            {
                $("#pilihanOprec").show();
                $("#pilihanOprec").load("bph");

            }
            else if(jabatan==2)
            {
                $("#pilihanOprec").show();
                $("#pilihanOprec").load("staff");
            }
            else $("#pilihanOprec").slideUp();
        });
        
        $(".minidesc").hide();
        $(".minidesctrigger").mouseover(function(){
            $(this).children(".minidesc").fadeIn("fast");
        });
        $(".minidesctrigger").mouseleave(function(){
            $(this).children(".minidesc").fadeOut("fast");
        });
    });
</script>
<script>
    window.sr = ScrollReveal({ duration: 1000 }).reveal('#col-reveal, #form-reveal');
    function getDesc(biro) {
        var namabiro = document.getElementById('namabiro');
        var logobiro = document.getElementById('logobiro');
        var descbiro = document.getElementById('descbiro');
        
        switch (biro) {
            case  1: 
                namabiro.innerHTML="National Logic Competition";
                logobiro.src="<?php echo base_url();?>assets/img/logo-biro/1.jpg";
                descbiro.innerHTML="NLC bukan hanya acara lomba logika untuk anak SMA sederajat dengan peserta 2000 tim. Di balik itu semua terdapat keceriaan dan tawa panitianya. Di setiap rapat kita selalu tertawa bersama sambil mendiskusikan konsep acara yang akan kita jalankan. Di kepanitiaan NLC sendiri terdapat 4 tim yang dikoordinasikan oleh orang-orang keren dengan anggota tim yang tak kalah kecenya.";
                break;
            case  2: 
                namabiro.innerHTML="National Programming Contest";
                logobiro.src="<?php echo base_url();?>assets/img/logo-biro/2.jpg";
                descbiro.innerHTML="Jadilah bagian dari orang-orang pemikir. Kita adalah suatu komunitas penggemar logika yang siap bekerja keras, problem solving, dan analisa. Orang - orang pemikir ini pun akan di petakan menjadi beberapa divisi khusus seperti : Scientific Committee, External Committee, Quality Control and Checking, Technical Group. Suka bermain logika dan mengimplentasikan dalam bentuk program? Welcome to the gank!";
                break;
            case  3: 
                namabiro.innerHTML="National Seminar of Technology";
                logobiro.src="<?php echo base_url();?>assets/img/logo-biro/3.jpg";
                descbiro.innerHTML="National Seminar of Technology atau biasa disingkat NST merupakan salah satu seminar teknologi berskala nasional yang dipadukan dengan dengan acara pameran teknologi. Buat teman-teman yang penasaran dan ingin mengonsep event NST tahun ini, ayo daftar dan bergabung di NST 2016! Kami tunggu ide-ide kreatif dan inovasi dari kalian!";
                break;
                
            case  4: 
                namabiro.innerHTML="Revolutionary Entertainment Expo with Various Arts";
                logobiro.src="<?php echo base_url();?>assets/img/logo-biro/4.jpg";
                descbiro.innerHTML="Di sini kalian akan menyusun konsep tentang apa yang akan dibawakan REEVA tahun ini dan promosi ke hampir seluruh penjuru di Surabaya. Jadi, kalian akan jalan-jalan sembari promosi dan menjadi orang di balik panggung suksesnya REEVA. Punya ide untuk REEVA tahun ini? Mau jalan-jalan keliling Surabaya? Yuk, masuk REEVA!";
                break;
                
            case  5: 
                namabiro.innerHTML="Hubungan Masyarakat";
                logobiro.src="<?php echo base_url();?>assets/img/logo-biro/5.jpg";
                descbiro.innerHTML="Humas cocok banget buat kamu yang suka jalan-jalan dan memberi informasi untuk orang lain. Kenapa? Karena di sini kita bakal mengadakan presentasi di tiap-tiap SMA dan pastinya kamu bakal mendapat pengalaman yang nggak bisa didapatkan di biro lain.So, tunggu apa lagi? Yuk, masuk Humas!";
                break;
                
            case  6: 
                namabiro.innerHTML="Dana Usaha";
                logobiro.src="<?php echo base_url();?>assets/img/logo-biro/6.jpg";
                descbiro.innerHTML="Mendukung keuangan Schematics dengan mencari dana melalui sponsor dan melakukan usaha. Bagi yang suka berwirausaha, yuk gabung dengan kita!";
                break;
            case  7: 
                namabiro.innerHTML="Perlengkapan dan Transportasi";
                logobiro.src="<?php echo base_url();?>assets/img/logo-biro/7.jpg";
                descbiro.innerHTML="Mencari tahu, menangani, dan mengontrol semua kebutuhan serta transportasi dari biro-biro lain dengan sigap dan tanggap. Ingin duduk bersebelahan langsung dengan bintang-bintang terkenal? Ingin mengerti tempat barang yang murah? Punya rasa kepedulian tinggi terhadap biro lain? Bergabunglah dengan kami, PERKAPTRANS";
                break;
            case  8: 
                namabiro.innerHTML="Desain, Dekorasi, Dokumentasi";
                logobiro.src="<?php echo base_url();?>assets/img/logo-biro/8.jpg";
                descbiro.innerHTML="Sesuai dengan namanya, divisi ini memiliki 3 tugas utana yaitu :<br>1. Menghasilkan hasil karya yang memiliki nilai estetis alias desain yang menggambarkan tema dan kemeriahan Schematics 2016<br>2. Mendokumentasikan keseluruhan acara Schematics melalui fotografi dan videografi<br>3. Mendekorasi setiap event dengan sentuhan seni khas Schematics 2016<br> Kami tunggu jiwa-jiwa senimu di 3D!";
                break;
            case  9: 
                namabiro.innerHTML="Website & Kesekretariatan";
                logobiro.src="<?php echo base_url();?>assets/img/logo-biro/9.jpg";
                descbiro.innerHTML="Kamu orang yang teliti dan cekatan? Cocok tuh masuk Webkes (Web dan Kesekretariatan). Di sini kamu akan mengelola web Schematics dan mendata peserta dari four big sub-event Schematics 2016. Pekerjaan ini juga bisa dikerjakan di mana saja loh. Ingin mengerjakan di kosan? Bisa. Di kampus? Bisa. Di rumah? Bisa.Jangan ragu lagi untuk masuk Webkes!";
                break;
            case  10: 
                namabiro.innerHTML="Keamanan & Perizinan";
                logobiro.src="<?php echo base_url();?>assets/img/logo-biro/10.jpg";
                descbiro.innerHTML="Orang-orang berani yang menangani masalah keamanan acara, ketersediaan tempat dan kelancaran acara, maka kitalah orangnya. Bekerja dengan semangat pantang menyerah, hati yang takkan goyah, dan kemauan setinggi langit kami akan selalu mengusahakan yang terbaik bagi Schematics. Go Kamzin!!! Hurrah hurrah hurrah!";
                break;
            case  11: 
                namabiro.innerHTML="Non-Biro";
                logobiro.src="<?php echo base_url();?>assets/img/logo-biro/11.jpg";
                descbiro.innerHTML="Divisi Non-biro terdiri dari <ul><li>Wakil Ketua</li><li>Sekretaris</li><li>Bendahara</li></ul>";
                break;
        }
    }
</script>
