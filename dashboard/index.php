<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sistem Pakar Penyakit Seksual | Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>

    <body class="sb-nav-fixed">
        <!-- nav bar -->
        <?php require '../section/navbar.php'; ?>

        <div id="layoutSidenav">
            <!-- side bar -->
            <?php require '../section/sidebar.php'; ?>

            <!-- container -->
            <div id="layoutSidenav_content">
                <main>
                    <?php require '../config/routes.php'; ?>
                </main>
                
                <!-- footer -->
                <?php require '../section/footer.php'; ?>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
        <script src="../js/jquery-3.6.0.js"></script>

        <script type="text/javascript">
            $('#editModalGejala').on('show.bs.modal', function(event) {
                let button = $(event.relatedTarget);

                let id = button.data('id');
                let kode = button.data('kode');
                let gejala = button.data('gejala');
                let probab = button.data('probab');

                let input = $(this);

                input.find('#id').val(id);
                input.find('#kode').val(kode);
                input.find('#gejala').val(gejala);
                input.find('#probab').val(probab);
            });

            $('#editModalPenyakit').on('show.bs.modal', function(event) {
                let button = $(event.relatedTarget);

                let id = button.data('id');
                let kode = button.data('kode');
                let penyakit = button.data('penyakit');

                let input = $(this);

                input.find('#id').val(id);
                input.find('#kode').val(kode);
                input.find('#penyakit').val(penyakit);
            });

            $('#editBasis').on('show.bs.modal', function(event) {
                let button = $(event.relatedTarget);

                let id = button.data('id');
                let kode = button.data('kode');
                let penyakit = button.data('penyakit');
                let gejala = button.data('gejala');
                let pertanyaan = button.data('pertanyaan');

                let input = $(this);

                input.find('#id').val(id);
                input.find('#kode').val(kode);
                input.find('#penyakit').val(penyakit);
                input.find('#gejala').val(gejala);
                input.find('#pertanyaan').val(pertanyaan);
            });

        </script>
    </body>
</html>
