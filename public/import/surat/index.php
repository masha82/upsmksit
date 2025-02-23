<?php

session_start();
if (!isset($_SESSION['username'])) {
  header("Location: ../index.php");
}

?>


<?php include '../layout/header.php'; ?>

<!doctype html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://cdn.tiny.cloud/1/adzervpztsbosy207x3us80ycn3c6ic8n4i74l1lwrln5b20/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>


<body>

  <div class="container-fluid">
    <div class="row">
      <?php include '../layout/menu.php'; ?>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Data Peserta Didik</h1>

          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalLong">
            + Import
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Pilih File Excel</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form method="post" enctype="multipart/form-data" action="upload_aksi.php">
                    Pilih File:
                    <input name="filesiswa" type="file" required="required">
                    <input name="upload" type="submit" value="Import">
                  </form>


                </div>
                <!--      <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div> -->
              </div>
            </div>
          </div>
        </div>




        <?php
        // Create database connection using config file
        include_once("../conf/config.php");

        // Fetch all users data from database
        $result = mysqli_query($mysqli, "SELECT * FROM kelulusan ORDER BY id DESC ");
        ?>


        <div class="table-responsive">
          <table class="table table-striped table-sm">
            <tr>
              <th>No</th>
              <th>NISN</th>
              <th>No Ujian</th>
              <th>Nama PD / TTL</th>
              <th>Kelas / Jurusan</th>

              <th>Action</th>
            </tr>
            <?php
            $bil = 1;
            while ($posts = mysqli_fetch_array($result)) {

              echo "<tr>";
              echo "<td>" .  $bil++ . "</td>";
              echo "<td>" . $posts['nisn'] . "</td>";
              echo "<td>" . $posts['no_peserta'] . "</td>";
              echo "<td>" . $posts['namasiswa'] . "<br>" . $posts['ttl'] . "</td>";
              echo "<td>" . $posts['kelas'] . "<br>" . $posts['jurusan'] . "</td>";

              echo "<td>
   
              <a href='delete.php?id=$posts[id]'><button type='button' class='btn btn-danger'>
            Delete
          </button></a>
          </td></tr>";
            }
            ?>
          </table>
        </div>
      </main>
    </div>
  </div>



  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
  <script src="dashboard.js"></script>

  <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'code anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
      toolbar: 'link image | code | undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
      /* enable title field in the Image dialog*/
      image_title: true,
      /* enable automatic uploads of images represented by blob or data URIs*/
      automatic_uploads: true,
      /*
        URL of our upload handler (for more details check: https://www.tiny.cloud/docs/configure/file-image-upload/#images_upload_url)
        images_upload_url: 'postAcceptor.php',
        here we add custom filepicker only to Image dialog
      */
      file_picker_types: 'image',
      /* and here's our custom image picker*/
      file_picker_callback: (cb, value, meta) => {
        const input = document.createElement('input');
        input.setAttribute('type', 'file');
        input.setAttribute('accept', 'image/*');

        input.addEventListener('change', (e) => {
          const file = e.target.files[0];

          const reader = new FileReader();
          reader.addEventListener('load', () => {
            /*
              Note: Now we need to register the blob in TinyMCEs image blob
              registry. In the next release this part hopefully won't be
              necessary, as we are looking to handle it internally.
            */
            const id = 'blobid' + (new Date()).getTime();
            const blobCache = tinymce.activeEditor.editorUpload.blobCache;
            const base64 = reader.result.split(',')[1];
            const blobInfo = blobCache.create(id, file, base64);
            blobCache.add(blobInfo);

            /* call the callback and populate the Title field with the file name */
            cb(blobInfo.blobUri(), {
              title: file.name
            });
          });
          reader.readAsDataURL(file);
        });

        input.click();
      },
      content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
    });
  </script>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>