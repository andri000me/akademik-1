<div class="container">


      <h1 class="text-center"><b>DATA SISWA DITERIMA</b></h1>

      <table class="table table-bordered table-striped" id="mydata">

            <thead>

                  <tr>

                        <td>NIS</td>

                        <td>NAMA SISWA</td>

                        <td>TANGGAL LAHIR</td>

                        <td>TANGGAL DAFTAR</td>

                        <td>STATUS</td>

                  </tr>

            </thead>

            <tbody>

                  <?php

                        foreach($data->result_array() as $i):

                              $nis=$i['nis'];

                              $nama=$i['nama_siswa'];

                              $tgl_lahir=$i['tanggal_lahir'];

                              $tgl_daftar=$i['CreatedOn'];
                              $status=$i['status'];

                  ?>

                  <tr>

                        <td><?php echo $nis;?> </td>

                        <td><?php echo $nama;?> </td>

                        <td><?php echo $tgl_lahir;?> </td>

                        <td><?php echo $status;?> </td>

                  </tr>

                  <?php endforeach;?>

            </tbody>

      </table>

     

</div>

 

<script src="https://code.jquery.com/jquery-2.2.4.min.js"> </script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'?>"> </script>

<script src="https://cdn.datatables.net/v/dt/dt-1.10.23/datatables.min.js"> </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"> </script>

<script>

      $(document).ready(function(){

            $('#mydata').DataTable();

      });

</script>

</body>

</html>