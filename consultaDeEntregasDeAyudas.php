<!DOCTYPE html>
<html>
  <head>




    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../vendor/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="../datatables/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="../info/buttons.dataTables.min.css">


    <style type="text/css">
      .gm-style .gm-style-mtc label,.gm-style .gm-style-mtc div{
        font-weight:400
      }
    </style>
    <link type="text/css" rel="stylesheet" href="css/css_002.css">
    <style type="text/css">
      .gm-style .gm-style-cc span,.gm-style .gm-style-cc a,.gm-style .gm-style-mtc div{
        font-size:10px
      }
    </style>
    <style type="text/css">
      @media print {
          .gm-style .gmnoprint, .gmnoprint {
            display:none
            }
      }
      @media screen {
        .gm-style .gmnoscreen, .gmnoscreen {
          display:none
          }
      }
    </style>
    <style type="text/css">
      .gm-style-pbc{
        transition:opacity ease-in-out;background-color:rgba(0,0,0,0.45);text-align:center
        }
        .gm-style-pbt{font-size:22px;color:white;font-family:Roboto,Arial,sans-serif;position:relative;margin:0;top:50%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%)}
    </style>
    <title>Ayudas | Alcaldía Bolivariana Municipio Alberto Adriani</title>
    <style type="text/css">
      img.wp-smiley,
      img.emoji {
      	display: inline !important;
      	border: none !important;
      	box-shadow: none !important;
      	height: 1em !important;
      	width: 1em !important;
      	margin: 0 .07em !important;
      	vertical-align: -0.1em !important;
      	background: none !important;
      	padding: 0 !important;
      }
    </style>
    <link rel="stylesheet" id="divi-fonts-css" href="css/css.css" type="text/css" media="all">
    <link rel="stylesheet" id="divi-style-css" href="css/style.css" type="text/css" media="all">
    <link rel="stylesheet" id="dashicons-css" href="css/dashicons.css" type="text/css" media="all">

    <style>
      [data-columns]::before{visibility:hidden;position:absolute;font-size:1px;}
    </style>
    <style id="fit-vids-style">
      .fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}
    </style>
    <style type="text/css">.gm-style {
            font: 400 11px Roboto, Arial, sans-serif;
            text-decoration: none;
          }
          .gm-style img { max-width: none; }
    </style>

    <!-- <link rel="stylesheet" href="css/estilos.css"> -->
    <link rel="stylesheet" id="dashicons-css" href="css/myModal.css" type="text/css" media="all">

  </head>

  <body class="page-template-default page page-id-80 et_color_scheme_red et_pb_button_helper_class et_fullwidth_nav et_fullwidth_secondary_nav et_fixed_nav et_show_nav et_hide_primary_logo et_cover_background et_pb_gutter linux et_pb_gutters3 et_primary_nav_dropdown_animation_fade et_secondary_nav_dropdown_animation_fade et_pb_footer_columns4 et_header_style_centered et_pb_pagebuilder_layout et_right_sidebar et_divi_theme et_minified_js et_minified_css gecko">
    <div id="et-main-area">
      <div id="main-content">
        <article id="post-80" class="post-80 page type-page status-publish hentry">
          <div class="entry-content">


            <div class="et_pb_section  et_pb_section_2 et_section_regular">
              <div class=" et_pb_row et_pb_row_0">
                <!-- LADO 1 -->
                <div class="et_pb_column  et_pb_column_0 et_pb_css_mix_blend_mode_passthrough">
                  <div id="et_pb_contact_form_0" class="et_pb_module et_pb_contact_form_container clearfix  et_pb_contact_form_0" data-form_unique_num="0">
                    <ul>
                      <li>
                        <a href="index.php">Inicio</a>
                      </li>
                    </ul>
                    <h1 class="et_pb_contact_main_title">Consulta de ayudas entregadas</h1>
                    <div class="et-pb-contact-message"></div>
                    <div class="et_pb_contact">
                      <div >
                        <table id="tablaAyudas" class="display nowrap" style="width:100%">
                          <thead>
                            <tr>
                              <th>N°</th>
                              <th>Cedula</th>
                              <th>Nombres</th>
                              <th>Apellidos</th>
                              <th>Monto Aprobado</th>
                              <th>Fecha Aprobado</th>
                              <th>Ente que asigno recurso</th>
                            </tr>
                          </thead>
                          <tfoot>
                            <tr>
                              <th>N°</th>
                              <th>Cedula</th>
                              <th>Nombres</th>
                              <th>Apellidos</th>
                              <th>Monto Aprobado</th>
                              <th>Fecha Aprobado</th>
                              <th>Ente que asigno recurso</th>
                            </tr>
                          </tfoot>
                        </table>
                      </div>

                      <div id="informacionConsultas">


                      </div>
                      <div id='openModal' class="miModal">
                        <div class="">
                          <a href="#" title="Cerrar"  id="btnCerra" class="closeModal">X</a>
                          <div class="tituloModal text-center">

                          </div>
                          <div class="cuerpoModal">
                          </div>
                          <div class="pieModal">

                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>

                <!-- LADO 2 -->
                <!-- <div class="et_pb_column et_pb_column_1_3  et_pb_column_1 et_pb_css_mix_blend_mode_passthrough et-last-child">
                  <div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_left  et_pb_text_0">
                    <div class="et_pb_text_inner">
                      <h3>Mas informacion</h3>
                      <p>sit amet, consectetur adipiscing elit. Integer placerat metus id orci
                       facilisis, in luctus eros laoreet. Mauris interdum augue varius,
                      faucibus massa id, imperdiet tortor. Donec vel tortor molestie,
                      hendrerit sem a, hendrerit arcu. Aliquam erat volutpat. Proin varius
                      eros eros, non condimentum nis.</p>
                      <p>
                        <strong>Address:</strong> 890 Lorem Ipsum Street #12<br>
                      San Francisco, California 65432</p>
                      <p><strong>Phone:</strong> 123.4567.890</p>
                      <p><strong>Business Hours:</strong> 8a-6:30p M-F, 9a-2p S-S</p>
                    </div>
                  </div> <!-- .et_pb_text -
                 </div> <!-- .et_pb_column -->


              </div>
            </div>



          </div>
        </article>



      </div><!-- main-content -->
    </div><!-- et-main-content -->
    <script type="text/javascript" src="../vendor/jquery/jquery.js"></script>
    <script type="text/javascript" src="../vendor/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="../datatables/datatables.min.js"></script>
    <script type="text/javascript" src="../info/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="../info/buttons.flash.min.js"></script>
    <script type="text/javascript" src="../info/jszip.min.js"></script>
    <script type="text/javascript" src="../info/pdfmake.min.js"></script>
    <script type="text/javascript" src="../info/vfs_fonts.js"></script>
    <script type="text/javascript" src="../info/buttons.html5.min.js"></script>
    <script type="text/javascript" src="../info/buttons.print.min.js"></script>

    <script type="text/javascript" src="js/funciones.js"></script>
    <script type="text/javascript" src="js/consultaAyudas.js"></script>
  </body>
</html>
