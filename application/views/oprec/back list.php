<?php
if(isset($message))
{
    echo $message;
    unset($message);
}
?>


<section style="margin-bottom: 5em">
    <div class="row" style="margin-top: 4em; min-height: 75vh;">
        <div class="container">
            <div class="col-sm-8">
                <div class="col-xs-12" style="margin-bottom: 4em; margin-top:4em;">
                        <h3 style="border-bottom: solid 4px #404040; display: inline; font-weight: 700; padding-bottom: 0.4em">Deskripsi biro</h3>
                </div>
                <div style="margin: 0 12px">
                    <div class="col-xs-4" style="padding: 3px">
                        <a data-toggle="modal" href="#modal-biro">
                            <img class="biro-thumb" src="<?php echo base_url()?>assets/img/logo-biro/1.jpg">
                        </a>
                    </div>
                    <div class="col-xs-4" style="padding: 3px">
                        <a data-toggle="modal" href="#modal-biro">
                            <img class="biro-thumb" src="<?php echo base_url()?>assets/img/logo-biro/2.jpg">
                        </a>
                    </div>
                    <div class="col-xs-4" style="padding: 3px">
                        <a data-toggle="modal" href="#modal-biro">
                            <img class="biro-thumb" src="<?php echo base_url()?>assets/img/logo-biro/3.jpg">
                        </a>
                    </div>
                    <div class="col-xs-4" style="padding: 3px">
                        <a data-toggle="modal" href="#modal-biro">
                            <img class="biro-thumb" src="<?php echo base_url()?>assets/img/logo-biro/4.jpg">
                        </a>
                    </div>
                    <div class="col-xs-4" style="padding: 3px">
                        <a data-toggle="modal" href="#modal-biro">
                            <img class="biro-thumb" src="<?php echo base_url()?>assets/img/logo-biro/5.jpg">
                        </a>
                    </div>
                    <div class="col-xs-4" style="padding: 3px">
                        <a data-toggle="modal" href="#modal-biro">
                            <img class="biro-thumb" src="<?php echo base_url()?>assets/img/logo-biro/6.jpg">
                        </a>
                    </div>
                    <div class="col-xs-4" style="padding: 3px">
                        <a data-toggle="modal" href="#modal-biro">
                            <img class="biro-thumb" src="<?php echo base_url()?>assets/img/logo-biro/7.jpg">
                        </a>
                    </div>
                    <div class="col-xs-4" style="padding: 3px">
                        <a data-toggle="modal" href="#modal-biro">
                            <img class="biro-thumb" src="<?php echo base_url()?>assets/img/logo-biro/8.jpg">
                        </a>
                    </div>
                    <div class="col-xs-4" style="padding: 3px">
                        <a data-toggle="modal" href="#modal-biro">
                            <img class="biro-thumb" src="<?php echo base_url()?>assets/img/logo-biro/9.jpg">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="col-xs-12" style="margin-bottom: 4em; margin-top:4em">
                    <h3 style="border-bottom: solid 4px #404040; display: inline; font-weight: 700; padding-bottom: 0.4em">Form pendaftaran</h3>
                </div>
                <form action="#" method="post" id="formInput" class="form-horizontal" style="margin-left: 15px">
                    <div class="form-group">
                        <label for="usr"  class="col-sm-4" style="line-height: 2em">Nama</label>
                        <div class="col-sm-8">
                            <input title="Diisi dulu ya dek hehe :)" required type="text" placeholder="Nama" name="nama" class="form-control" id="usr">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nrp" class="col-sm-4" style="line-height: 2em">NRP</label>
                        <div class="col-sm-8">
                            <input title="Diisi dulu ya dek hehe :)"  required type="text" title="Diisi dulu ya dek hehe" name="NRP" placeholder="5115100***" class="form-control" id="nrp">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="jabatan" class="col-sm-4" style="line-height: 2em">Jabatan</label>
                        <div class="col-sm-8">
                            <select title="Diisi dulu ya dek hehe :)"  required class="form-control" onchange="getForm()" id="jabatan" name="pilJabatan" required>
                                <option value="">Pilihan Jabatan</option>
                                <option value="1">BPH</option>
                                <option value="2">Staff</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="p1" class="col-sm-4" style="line-height: 2em">Pilihan 1</label>
                        <div class="col-sm-8">
                            <select  title="Diisi dulu ya dek hehe :)"  class="form-control" id="p1" required="" name="pilihan1">
                                <option value="">Pilihan Divisi</option>
                                <option value="1">NLC</option>
                                <option value="2">NPC</option>
                                <option value="3">NST</option>
                                <option value="4">Reeva</option>
                                <option value="5">Webkes</option>
                                <option value="6">Perizinan</option>
                                <option value="7">Danus</option>
                                <option value="8">Humas</option>
                                <option value="9">Perlengkapan</option>
                                <option value="10">3D</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="pilihan1" class="col-sm-4" style="line-height: 2em">Alasan</label>
                        <div class="col-sm-8">
                            <textarea title="Diisi dulu ya dek hehe :)"  required="" id="pilihan1" placeholder="Alasan pilihan 1" class="form-control"  name="alasan_pilihan1" cols="50" rows="4"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="p2" class="col-sm-4" style="line-height: 2em">Pilihan 2</label>
                        <div class="col-sm-8">
                            <select  title="Diisi dulu ya dek hehe :)"  class="form-control" id="p2" required="" name="pilihan2">
                                <option value="">Pilihan Divisi</option>
                                <option value="1">NLC</option>
                                <option value="2">NPC</option>
                                <option value="3">NST</option>
                                <option value="4">Reeva</option>
                                <option value="5">Webkes</option>
                                <option value="6">Perizinan</option>
                                <option value="7">Danus</option>
                                <option value="8">Humas</option>
                                <option value="9">Perlengkapan</option>
                                <option value="10">3D</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="pilihan2" class="col-sm-4" style="line-height: 2em">Alasan</label>
                        <div class="col-sm-8">
                            <textarea title="Diisi dulu ya dek hehe :)"  required="" id="pilihan2" class="form-control" placeholder="Alasan pilihan 2"  name="alasan_pilihan2" cols="50" rows="4"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="p3" class="col-sm-4" style="line-height: 2em">Pilihan 3</label>
                        <div class="col-sm-8">
                            <select title="Diisi dulu ya dek hehe :)"  class="form-control" id="p3" required="" name="pilihan3">
                                <option value="">Pilihan Divisi</option>
                                <option value="1">NLC</option>
                                <option value="2">NPC</option>
                                <option value="3">NST</option>
                                <option value="4">Reeva</option>
                                <option value="5">Webkes</option>
                                <option value="6">Perizinan</option>
                                <option value="7">Danus</option>
                                <option value="8">Humas</option>
                                <option value="9">Perlengkapan</option>
                                <option value="10">3D</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="pilihan3" class="col-sm-4" style="line-height: 2em">Alasan</label>
                        <div class="col-sm-8">
                            <textarea title="Diisi dulu ya dek hehe :)"  required id="pilihan3" class="form-control" placeholder="Alasan pilihan 3"  name="alasan_pilihan3" cols="50" rows="4"></textarea>
                        </div>
                    </div>

                    <div id="divPilihan4" class="form-group"></div>
                    <div id="divPilihan5" class="form-group"></div>
                    <div class="form-group">
                        <label for="ukuranBaju" class="col-sm-4" style="line-height: 2em">Ukuran Baju Schematics</label>
                        <div class="col-sm-8">
                            <select title="Diisi dulu ya dek hehe :)"  class="form-control" id="ukuranBaju" required="" name="ukuranbaju">
                                <option value="">Pilihan Ukuran</option>
                                <option value="1">S</option>
                                <option value="2">M</option>
                                <option value="3">L</option>
                                <option value="4">XXL</option>
                                <option value="5">XXL</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ukuranLengan" class="col-sm-4" style="line-height: 2em">Ukuran Lengan</label>
                        <div class="col-sm-8">
                            <select title="Diisi dulu ya dek hehe :)"  class="form-control" id="ukuranLengan" required="" name="ukuranlengan">
                                <option value="">Pilihan Lengan</option>
                                <option value="1">Pendek</option>
                                <option value="2">Panjang</option>
                            </select>
                        </div>
                    </div>
                    <input name="submit" id="doChecking" type="submit" class="btn btn-sch-grey-inv pull-right anim" value="DAFTAR">
                </form>
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
                            <div class="col-xs-12" style="margin-bottom: 4em">
                                <h3 style="border-bottom: solid 4px #404040; display: inline; font-weight: 700; padding-bottom: 0.4em">desain, dekorasi, dokumentasi</h3>
                            </div>
                            <div class="col-sm-4">
                                <img class="biro-thumb" src="<?php echo base_url()?>assets/img/logo-biro/8.jpg">
                            </div>
                            <div class="col-sm-8">
                                <p><b>Deskripsi</b></p>
                                <p style="margin-left:1.5em">
                                    Kamu tertarik di dunia game? Sejauh apa kamu tau tentang industri game di Indonesia? Ingin melihat lebih dalam perkembangan industri game di Indonesia? Indie Game Ignite adalah tempat yang pas untuk kamu!
                                </p>
                                <p><b>Jobdesc</b></p>
                                <ul>
                                    <li>Lorem ipsum</li>
                                    <li>Dekorasi panggung</li>
                                    <li>Dolor sit amet</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Checking Data</h4>
        </div>
        <div class="modal-body">
            <p>Apa kamu yakin akan mengirim ini?</p>
            <form>
                <div class="form-group">
                    <label for="nrp" class="col-sm-4" style="line-height: 2em">Nama</label>
                    <input readonly="" value="" title="Close untuk edit hehe"  required type="text" name="Cnama" placeholder="Nama" class="form-control" id="CNama">
                </div>
                <div class="form-group">
                    <label for="nrp" class="col-sm-4" style="line-height: 2em">NRP</label>
                    <input readonly="" itle="Close untuk edit hehe"  required type="text"  name="CNRP" placeholder="5115100***" value="" class="form-control" id="CNRP">
                </div>
                <div class="form-group">
                    <label for="jabatan" class="col-sm-4" style="line-height: 2em">Jabatan</label>
                    <select readonly title="Diisi dulu ya dek hehe :)"  required class="form-control" id="Cjabatan" name="pilJabatan">
                        <option value="">Pilihan Jabatan</option>
                        <option value="1">BPH</option>
                        <option value="2">Staff</option>
                    </select>
                </div>
        </div>
        <div class="modal-footer">
            <input type="submit" value="Submit" class="btn btn-default"></input>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        </form> 
      </div>
    </div>
    </div>
    
</section>

<style>
    .biro-thumb {
        width: 100%;
        margin-bottom: 0px;
    }
</style>
<script type="text/javascript">
    $(document).ready(function() {
    $("#doChecking").click(function(e) {
        e.preventDefault();
        $("#myModal").modal();
        var nama = $('#usr').val();
        var nrp = $('#nrp').val();
        var jabatan = $('#jabatan').val();
        $("#myModal").modal();
        $('#CNama').attr('value',nama);
        $('#CNRP').attr('value',nrp);
        $("#Cjabatan option[value=" + jabatan + "]")
        .prop("selected",true);

        });
    });

</script>
<script type="text/javascript">
    function getForm()
    {
        var flag = document.getElementById('jabatan').value;
        if(flag==2)
        {
            document.getElementById('divPilihan4').innerHTML="<label for='p4' class='col-sm-4' style='line-height: 2em'>Pilihan 4</label>\
                        <div class='col-sm-8'>\
                            <select title='Diisi dulu ya dek hehe :)' class='form-control' id='p4' required='' name='pilihan4'>\
                                <option value='0'>Pilihan Divisi</option>\
                                <option value='1'>NLC</option>\
                                <option value='2'>NPC</option>\
                                <option value='3'>NST</option>\
                                <option value='4'>Reeva</option>\
                                <option value='5'>Webkes</option>\
                                <option value='6'>Perizinan</option>\
                                <option value='7'>Danus</option>\
                                <option value='8'>Humas</option>\
                                <option value='9'>Perlengkapan</option>\
                                <option value='10'>3D</option>\
                            </select>\
                        </div>";
            document.getElementById('divPilihan5').innerHTML="<label for='p5' class='col-sm-4' style='line-height: 2em'>Pilihan 5</label>\
                        <div class='col-sm-8'>\
                            <select itle='Diisi dulu ya dek hehe :)' class='form-control' id='p5' required='' name='pilihan5'>\
                                <option value='0'>Pilihan Divisi</option>\
                                <option value='1'>NLC</option>\
                                <option value='2'>NPC</option>\
                                <option value='3'>NST</option>\
                                <option value='4'>Reeva</option>\
                                <option value='5'>Webkes</option>\
                                <option value='6'>Perizinan</option>\
                                <option value='7'>Danus</option>\
                                <option value='8'>Humas</option>\
                                <option value='9'>Perlengkapan</option>\
                                <option value='10'>3D</option>\
                            </select>\
                        </div>";
        }
        else
        {
            document.getElementById('divPilihan4').innerHTML="";
            document.getElementById('divPilihan5').innerHTML="";
        }
    }
</script>