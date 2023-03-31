<!doctype html>
<html lang="en">
  <head>
  <title>inicio</title>

    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/css/bootstrap.css">

    <style>
         body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        main {
            background-color: #222;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .btn {
            background-color: #fff;
            color: #333;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #333;
            color: #fff;
        }

        /* Media queries para adaptar el diseño a diferentes tamaños de pantalla */

        @media only screen and (max-width: 768px) {
            h1 {
                font-size: 28px;
            }

            p {
                font-size: 16px;
            }

            .btn {
                font-size: 16px;
            }
        }

        @media only screen and (max-width: 480px) {
            header {
                padding: 10px;
            }

            main {
                padding: 10px;
            }

            h1 {
                font-size: 24px;
            }

            p {
                font-size: 14px;
            }

            .btn {
                font-size: 14px;
                padding: 8px 16px;
            }
        }
      .footer {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 30px 10px;
        position: absolute;
        bottom: 0;
        width: 100%;
      }
      .footer a {
        color: #fff;
        text-decoration: none;
      }
      .footer a:hover {
        text-decoration: underline;
      }
    </style>

  </head>
  
  <body>

<script src="<?php echo base_url(); ?>/js/jquery-3.6.4.min.js"></script>
<script src="<?php echo base_url(); ?>/js/popper.min.js"></script>
<script src="<?php echo base_url() ?>/js/bootstrap.js"></script>

<?= $this->include('layouts/menu') ?>
<?= $this->renderSection('contenido') ?>

