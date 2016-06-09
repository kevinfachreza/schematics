<!DOCTYPE html>
<html>
<head>
	<script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
	<title></title>
</head>
<body>
	<table border="1">
		<thead>
			<tr>
				<td>NRP</td>
				<td>Nama</td>
				<td>Jabatan</td>
				<td>Pilihan 1</td>
				<td>Alasan Pilihan 1</td>
				<td>Pilihan 2</td>
				<td>Alasan Pilihan 2</td>
				<td>Pilihan 3</td>
				<td>Alasan Pilihan 3</td>
				<td>Pilihan 4</td>
				<td>Pilihan 5</td>
				<td>Ukuran Baju</td>
				<td>Ukuran Lengan</td>
				<td>Action</td>
			</tr>
		</thead>
		<tbody>
			<?php
				$counterDaftar = 0;
				foreach ($rows as $row)
				{
					echo "<tr><td>".$row->NRP."</td>";
					echo "<td>".$row->Nama_oprec."</td>";

					if($row->jabatan_oprec==2) echo "<td>Staff</td>";
					else echo "<td>BPH</td>";

					if($row->pilihan1_oprec==1) echo "<td>NLC</td>";
					elseif($row->pilihan1_oprec==2) echo "<td>NPC</td>";
					elseif($row->pilihan1_oprec==3) echo "<td>NST</td>";
					elseif($row->pilihan1_oprec==4) echo "<td>Reeva</td>";
					elseif($row->pilihan1_oprec==5) echo "<td>Webkestari</td>";
					elseif($row->pilihan1_oprec==6) echo "<td>Kamzin</td>";
					elseif($row->pilihan1_oprec==7) echo "<td>Danus</td>";
					elseif($row->pilihan1_oprec==8) echo "<td>Humas</td>";
					elseif($row->pilihan1_oprec==9) echo "<td>Perkaptrans</td>";
					elseif($row->pilihan1_oprec==10) echo "<td>3D</td>";
					elseif($row->pilihan1_oprec==11) echo "<td>Wakil Ketua</td>";
					elseif($row->pilihan1_oprec==12) echo "<td>Sekretaris</td>";
					elseif($row->pilihan1_oprec==13) echo "<td>Bendahara</td>";
					else echo "<td>Tidak Memilih</td>";

					echo "<td>".$row->alasan_pilihan1."</td>";

					
					if($row->pilihan2_oprec==1) echo "<td>NLC</td>";
					elseif($row->pilihan2_oprec==2) echo "<td>NPC</td>";
					elseif($row->pilihan2_oprec==3) echo "<td>NST</td>";
					elseif($row->pilihan2_oprec==4) echo "<td>Reeva</td>";
					elseif($row->pilihan2_oprec==5) echo "<td>Webkestari</td>";
					elseif($row->pilihan2_oprec==6) echo "<td>Kamzin</td>";
					elseif($row->pilihan2_oprec==7) echo "<td>Danus</td>";
					elseif($row->pilihan2_oprec==8) echo "<td>Humas</td>";
					elseif($row->pilihan2_oprec==9) echo "<td>Perkaptrans</td>";
					elseif($row->pilihan2_oprec==10) echo "<td>3D</td>";
					elseif($row->pilihan2_oprec==11) echo "<td>Wakil Ketua</td>";
					elseif($row->pilihan2_oprec==12) echo "<td>Sekretaris</td>";
					elseif($row->pilihan2_oprec==13) echo "<td>Bendahara</td>";
					else echo "<td>Tidak Memilih</td>";

					echo "<td>".$row->alasan_pilihan2."</td>";
					
					if($row->pilihan3_oprec==1) echo "<td>NLC</td>";
					elseif($row->pilihan3_oprec==2) echo "<td>NPC</td>";
					elseif($row->pilihan3_oprec==3) echo "<td>NST</td>";
					elseif($row->pilihan3_oprec==4) echo "<td>Reeva</td>";
					elseif($row->pilihan3_oprec==5) echo "<td>Webkestari</td>";
					elseif($row->pilihan3_oprec==6) echo "<td>Kamzin</td>";
					elseif($row->pilihan3_oprec==7) echo "<td>Danus</td>";
					elseif($row->pilihan3_oprec==8) echo "<td>Humas</td>";
					elseif($row->pilihan3_oprec==9) echo "<td>Perkaptrans</td>";
					elseif($row->pilihan3_oprec==10) echo "<td>3D</td>";
					elseif($row->pilihan3_oprec==11) echo "<td>Wakil Ketua</td>";
					elseif($row->pilihan3_oprec==12) echo "<td>Sekretaris</td>";
					elseif($row->pilihan3_oprec==13) echo "<td>Bendahara</td>";
					else echo "<td>Tidak Memilih</td>";

					echo "<td>".$row->alasan_pilihan3."</td>";

					if($row->pilihan4_oprec==1) echo "<td>NLC</td>";
					elseif($row->pilihan4_oprec==2) echo "<td>NPC</td>";
					elseif($row->pilihan4_oprec==3) echo "<td>NST</td>";
					elseif($row->pilihan4_oprec==4) echo "<td>Reeva</td>";
					elseif($row->pilihan4_oprec==5) echo "<td>Webkestari</td>";
					elseif($row->pilihan4_oprec==6) echo "<td>Kamzin</td>";
					elseif($row->pilihan4_oprec==7) echo "<td>Danus</td>";
					elseif($row->pilihan4_oprec==8) echo "<td>Humas</td>";
					elseif($row->pilihan4_oprec==9) echo "<td>Perkaptrans</td>";
					elseif($row->pilihan4_oprec==10) echo "<td>3D</td>";
					else echo "<td>Tidak Memilih</td>";

					if($row->pilihan5_oprec==1) echo "<td>NLC</td>";
					elseif($row->pilihan5_oprec==2) echo "<td>NPC</td>";
					elseif($row->pilihan5_oprec==3) echo "<td>NST</td>";
					elseif($row->pilihan5_oprec==4) echo "<td>Reeva</td>";
					elseif($row->pilihan5_oprec==5) echo "<td>Webkestari</td>";
					elseif($row->pilihan5_oprec==6) echo "<td>Kamzin</td>";
					elseif($row->pilihan5_oprec==7) echo "<td>Danus</td>";
					elseif($row->pilihan5_oprec==8) echo "<td>Humas</td>";
					elseif($row->pilihan5_oprec==9) echo "<td>Perkaptrans</td>";
					elseif($row->pilihan5_oprec==10) echo "<td>3D</td>";
					else echo "<td>Tidak Memilih</td>";

					if($row->ukuran_baju==1) echo "<td>S</td>";
					elseif($row->ukuran_baju==2) echo "<td>M</td>";
					elseif($row->ukuran_baju==3) echo "<td>L</td>";
					elseif($row->ukuran_baju==4) echo "<td>XL</td>";
					elseif($row->ukuran_baju==5) echo "<td>XXL</td>";
					elseif($row->ukuran_baju==6) echo "<td>XXXL</td>";
					else echo "<td>Kosong</td>";

					if($row->ukuran_lengan==1) echo "<td>Pendek</td>";
					elseif($row->ukuran_lengan==2) echo "<td>Panjang</td>";
					else echo "<td>Kosong</td>";					
					$counterDaftar++;
			?>
			<td><a href="#" class="delRegister" NRP="<?php echo $row->NRP; ?>">Delete</a></td></tr>
			<?php } ?>
		</tbody>
	</table>
	<br>
	<h4>Terdaftar >> <?php echo $counterDaftar; ?></h4>
	<br>
	<a href="<?php echo base_url()?>oprec/downloadToExcel">Download versi Excel</a>
</body>
<script type="text/javascript">
    $(document).ready(function() {
    $(".delRegister").click(function(e) {
        e.preventDefault();
        var NRP = $(this).attr('NRP');
        if (confirm('Are you sure delete this?')) 
		{
        	$.ajax({
            type:'POST',
            url:'<?php echo base_url();?>oprec/delRegister',
            data:'NRP='+NRP,
            success:function(response){
               alert("Data berhasil dihapus");
               window.location.reload();
            }
        	});

    	}
    	else
    	{
    		alert("Kok php sih :(");
    	}
          
        });
    });

</script>
</html>