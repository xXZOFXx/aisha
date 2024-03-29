<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="images/aisha.png" width="20" height"10">
        <script src="js/jquery.js" charset="utf-8"></script>
        <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/index.css">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <title>Aisha</title>

    <!-- Facebook Pixel Code -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '2068288506617035');
      fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=2068288506617035&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->
  </head>
  <body>

    <div class="row">


      <div class="col-md-4 contenido1">

        <div class="col ">
          <div class="imagen">

            <img src="images/aisha.svg" width="250" height="350"  style="padding-top: 0px;padding-bottom: 17%;" alt="">

          </div>

        </div>

        <h1> <b>¡Estamos</b> </h1>
        <h1> <b>mejorando</b> </h1>
        <h1> <b>para ti!</b> </h1>


      </div>
      <div class="col-md-8 contenido">
        <div class="col">

          <div class="box-form" >




            <form class="container box" id="form-validation" name="myForm">
              <h2>Si deseas más información, déjanos tus datos y nos pondremos en contacto a la brevedad.</h2>
              <div class="row formulario">
                <div class="col-md-6 mb-3" style="margin-top: -21px;">
                  <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm"></span></label>
                  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="*Nombre" required>
                </div>
                <div class="col-md-6 mb-3" style="margin-top: -21px;">
                  <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm"></label>
                  <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="*Apellidos"  required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3" style="margin-top: -21px;">
                  <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm"><!--<span class="text-danger">*</span>Empresa/Negocio--></label>
                  <input type="text" class="form-control" id="cp" name="cp" placeholder="*C.P" required>
              </div>
                  <!--<div class="invalid-feedback">

                  </div>-->

                  <!--div class="row"-->
                    <div class="col-md-6 mb-3" style="margin-top: -21px;">
                      <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm"></label>
                      <input type="text" class="form-control" id="telefono" name="telefono" placeholder="*Teléfono">
                      <!--<div class="invalid-feedback">

                      </div>-->
                    </div>
                  <!--/div-->
              </div>
                <div class="row">

                  <div class="col-md-6 mb-3"style="margin-top: -21px;">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm"></label>
                    <input type="mail" class="form-control" id="correo" name="correo" placeholder="*Correo" required>
                    <div class="invalid-feedback">

                    </div>
                  </div>

                  <div class=" row col-md-6" style="text-align:center;" >
                    <div class="col form-check">
                      <input class="form-check-input exRadio" type="radio" name="exampleRadios" id="socio" value="1">
                      <label class="form-check-label" for="exampleRadios1">
                        Soy socio
                      </label>
                        </div>
                      <div class=" col form-check">
                        <input class="form-check-input exRadio" type="radio" name="exampleRadios" id="nosocio" value="0" checked>
                          <label class="form-check-label" for="exampleRadios1" >
                            No soy Socio
                            </label>
                          </div>
                  </div>

                  <!--<div class="col-md-6" style="margin-top: -21px;">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm"></label>
                    <select class="custom-select custom-select mb-2" id="pais" name="pais">
                          <option >País</option>
                          <option value="AFG">Afghanistan</option>
                        <option value="ALA">Åland Islands</option>
                        <option value="ALB">Albania</option>
                        <option value="DZA">Algeria</option>
                        <option value="ASM">American Samoa</option>
                        <option value="AND">Andorra</option>
                        <option value="AGO">Angola</option>
                        <option value="AIA">Anguilla</option>
                        <option value="ATA">Antarctica</option>
                        <option value="ATG">Antigua and Barbuda</option>
                        <option value="ARG">Argentina</option>
                        <option value="ARM">Armenia</option>
                        <option value="ABW">Aruba</option>
                        <option value="AUS">Australia</option>
                        <option value="AUT">Austria</option>
                        <option value="AZE">Azerbaijan</option>
                        <option value="BHS">Bahamas</option>
                        <option value="BHR">Bahrain</option>
                        <option value="BGD">Bangladesh</option>
                        <option value="BRB">Barbados</option>
                        <option value="BLR">Belarus</option>
                        <option value="BEL">Belgium</option>
                        <option value="BLZ">Belize</option>
                        <option value="BEN">Benin</option>
                        <option value="BMU">Bermuda</option>
                        <option value="BTN">Bhutan</option>
                        <option value="BOL">Bolivia, Plurinational State of</option>
                        <option value="BES">Bonaire, Sint Eustatius and Saba</option>
                        <option value="BIH">Bosnia and Herzegovina</option>
                        <option value="BWA">Botswana</option>
                        <option value="BVT">Bouvet Island</option>
                        <option value="BRA">Brazil</option>
                        <option value="IOT">British Indian Ocean Territory</option>
                        <option value="BRN">Brunei Darussalam</option>
                        <option value="BGR">Bulgaria</option>
                        <option value="BFA">Burkina Faso</option>
                        <option value="BDI">Burundi</option>
                        <option value="KHM">Cambodia</option>
                        <option value="CMR">Cameroon</option>
                        <option value="CAN">Canada</option>
                        <option value="CPV">Cape Verde</option>
                        <option value="CYM">Cayman Islands</option>
                        <option value="CAF">Central African Republic</option>
                        <option value="TCD">Chad</option>
                        <option value="CHL">Chile</option>
                        <option value="CHN">China</option>
                        <option value="CXR">Christmas Island</option>
                        <option value="CCK">Cocos (Keeling) Islands</option>
                        <option value="COL">Colombia</option>
                        <option value="COM">Comoros</option>
                        <option value="COG">Congo</option>
                        <option value="COD">Congo, the Democratic Republic of the</option>
                        <option value="COK">Cook Islands</option>
                        <option value="CRI">Costa Rica</option>
                        <option value="CIV">Côte d'Ivoire</option>
                        <option value="HRV">Croatia</option>
                        <option value="CUB">Cuba</option>
                        <option value="CUW">Curaçao</option>
                        <option value="CYP">Cyprus</option>
                        <option value="CZE">Czech Republic</option>
                        <option value="DNK">Denmark</option>
                        <option value="DJI">Djibouti</option>
                        <option value="DMA">Dominica</option>
                        <option value="DOM">Dominican Republic</option>
                        <option value="ECU">Ecuador</option>
                        <option value="EGY">Egypt</option>
                        <option value="SLV">El Salvador</option>
                        <option value="GNQ">Equatorial Guinea</option>
                        <option value="ERI">Eritrea</option>
                        <option value="EST">Estonia</option>
                        <option value="ETH">Ethiopia</option>
                        <option value="FLK">Falkland Islands (Malvinas)</option>
                        <option value="FRO">Faroe Islands</option>
                        <option value="FJI">Fiji</option>
                        <option value="FIN">Finland</option>
                        <option value="FRA">France</option>
                        <option value="GUF">French Guiana</option>
                        <option value="PYF">French Polynesia</option>
                        <option value="ATF">French Southern Territories</option>
                        <option value="GAB">Gabon</option>
                        <option value="GMB">Gambia</option>
                        <option value="GEO">Georgia</option>
                        <option value="DEU">Germany</option>
                        <option value="GHA">Ghana</option>
                        <option value="GIB">Gibraltar</option>
                        <option value="GRC">Greece</option>
                        <option value="GRL">Greenland</option>
                        <option value="GRD">Grenada</option>
                        <option value="GLP">Guadeloupe</option>
                        <option value="GUM">Guam</option>
                        <option value="GTM">Guatemala</option>
                        <option value="GGY">Guernsey</option>
                        <option value="GIN">Guinea</option>
                        <option value="GNB">Guinea-Bissau</option>
                        <option value="GUY">Guyana</option>
                        <option value="HTI">Haiti</option>
                        <option value="HMD">Heard Island and McDonald Islands</option>
                        <option value="VAT">Holy See (Vatican City State)</option>
                        <option value="HND">Honduras</option>
                        <option value="HKG">Hong Kong</option>
                        <option value="HUN">Hungary</option>
                        <option value="ISL">Iceland</option>
                        <option value="IND">India</option>
                        <option value="IDN">Indonesia</option>
                        <option value="IRN">Iran, Islamic Republic of</option>
                        <option value="IRQ">Iraq</option>
                        <option value="IRL">Ireland</option>
                        <option value="IMN">Isle of Man</option>
                        <option value="ISR">Israel</option>
                        <option value="ITA">Italy</option>
                        <option value="JAM">Jamaica</option>
                        <option value="JPN">Japan</option>
                        <option value="JEY">Jersey</option>
                        <option value="JOR">Jordan</option>
                        <option value="KAZ">Kazakhstan</option>
                        <option value="KEN">Kenya</option>
                        <option value="KIR">Kiribati</option>
                        <option value="PRK">Korea, Democratic People's Republic of</option>
                        <option value="KOR">Korea, Republic of</option>
                        <option value="KWT">Kuwait</option>
                        <option value="KGZ">Kyrgyzstan</option>
                        <option value="LAO">Lao People's Democratic Republic</option>
                        <option value="LVA">Latvia</option>
                        <option value="LBN">Lebanon</option>
                        <option value="LSO">Lesotho</option>
                        <option value="LBR">Liberia</option>
                        <option value="LBY">Libya</option>
                        <option value="LIE">Liechtenstein</option>
                        <option value="LTU">Lithuania</option>
                        <option value="LUX">Luxembourg</option>
                        <option value="MAC">Macao</option>
                        <option value="MKD">Macedonia, the former Yugoslav Republic of</option>
                        <option value="MDG">Madagascar</option>
                        <option value="MWI">Malawi</option>
                        <option value="MYS">Malaysia</option>
                        <option value="MDV">Maldives</option>
                        <option value="MLI">Mali</option>
                        <option value="MLT">Malta</option>
                        <option value="MHL">Marshall Islands</option>
                        <option value="MTQ">Martinique</option>
                        <option value="MRT">Mauritania</option>
                        <option value="MUS">Mauritius</option>
                        <option value="MYT">Mayotte</option>
                        <option selected="true" value="MEX">Mexico</option>
                        <option value="FSM">Micronesia, Federated States of</option>
                        <option value="MDA">Moldova, Republic of</option>
                        <option value="MCO">Monaco</option>
                        <option value="MNG">Mongolia</option>
                        <option value="MNE">Montenegro</option>
                        <option value="MSR">Montserrat</option>
                        <option value="MAR">Morocco</option>
                        <option value="MOZ">Mozambique</option>
                        <option value="MMR">Myanmar</option>
                        <option value="NAM">Namibia</option>
                        <option value="NRU">Nauru</option>
                        <option value="NPL">Nepal</option>
                        <option value="NLD">Netherlands</option>
                        <option value="NCL">New Caledonia</option>
                        <option value="NZL">New Zealand</option>
                        <option value="NIC">Nicaragua</option>
                        <option value="NER">Niger</option>
                        <option value="NGA">Nigeria</option>
                        <option value="NIU">Niue</option>
                        <option value="NFK">Norfolk Island</option>
                        <option value="MNP">Northern Mariana Islands</option>
                        <option value="NOR">Norway</option>
                        <option value="OMN">Oman</option>
                        <option value="PAK">Pakistan</option>
                        <option value="PLW">Palau</option>
                        <option value="PSE">Palestinian Territory, Occupied</option>
                        <option value="PAN">Panama</option>
                        <option value="PNG">Papua New Guinea</option>
                        <option value="PRY">Paraguay</option>
                        <option value="PER">Peru</option>
                        <option value="PHL">Philippines</option>
                        <option value="PCN">Pitcairn</option>
                        <option value="POL">Poland</option>
                        <option value="PRT">Portugal</option>
                        <option value="PRI">Puerto Rico</option>
                        <option value="QAT">Qatar</option>
                        <option value="REU">Réunion</option>
                        <option value="ROU">Romania</option>
                        <option value="RUS">Russian Federation</option>
                        <option value="RWA">Rwanda</option>
                        <option value="BLM">Saint Barthélemy</option>
                        <option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
                        <option value="KNA">Saint Kitts and Nevis</option>
                        <option value="LCA">Saint Lucia</option>
                        <option value="MAF">Saint Martin (French part)</option>
                        <option value="SPM">Saint Pierre and Miquelon</option>
                        <option value="VCT">Saint Vincent and the Grenadines</option>
                        <option value="WSM">Samoa</option>
                        <option value="SMR">San Marino</option>
                        <option value="STP">Sao Tome and Principe</option>
                        <option value="SAU">Saudi Arabia</option>
                        <option value="SEN">Senegal</option>
                        <option value="SRB">Serbia</option>
                        <option value="SYC">Seychelles</option>
                        <option value="SLE">Sierra Leone</option>
                        <option value="SGP">Singapore</option>
                        <option value="SXM">Sint Maarten (Dutch part)</option>
                        <option value="SVK">Slovakia</option>
                        <option value="SVN">Slovenia</option>
                        <option value="SLB">Solomon Islands</option>
                        <option value="SOM">Somalia</option>
                        <option value="ZAF">South Africa</option>
                        <option value="SGS">South Georgia and the South Sandwich Islands</option>
                        <option value="SSD">South Sudan</option>
                        <option value="ESP">Spain</option>
                        <option value="LKA">Sri Lanka</option>
                        <option value="SDN">Sudan</option>
                        <option value="SUR">Suriname</option>
                        <option value="SJM">Svalbard and Jan Mayen</option>
                        <option value="SWZ">Swaziland</option>
                        <option value="SWE">Sweden</option>
                        <option value="CHE">Switzerland</option>
                        <option value="SYR">Syrian Arab Republic</option>
                        <option value="TWN">Taiwan, Province of China</option>
                        <option value="TJK">Tajikistan</option>
                        <option value="TZA">Tanzania, United Republic of</option>
                        <option value="THA">Thailand</option>
                        <option value="TLS">Timor-Leste</option>
                        <option value="TGO">Togo</option>
                        <option value="TKL">Tokelau</option>
                        <option value="TON">Tonga</option>
                        <option value="TTO">Trinidad and Tobago</option>
                        <option value="TUN">Tunisia</option>
                        <option value="TUR">Turkey</option>
                        <option value="TKM">Turkmenistan</option>
                        <option value="TCA">Turks and Caicos Islands</option>
                        <option value="TUV">Tuvalu</option>
                        <option value="UGA">Uganda</option>
                        <option value="UKR">Ukraine</option>
                        <option value="ARE">United Arab Emirates</option>
                        <option value="GBR">United Kingdom</option>
                        <option value="USA">United States</option>
                        <option value="UMI">United States Minor Outlying Islands</option>
                        <option value="URY">Uruguay</option>
                        <option value="UZB">Uzbekistan</option>
                        <option value="VUT">Vanuatu</option>
                        <option value="VEN">Venezuela, Bolivarian Republic of</option>
                        <option value="VNM">Viet Nam</option>
                        <option value="VGB">Virgin Islands, British</option>
                        <option value="VIR">Virgin Islands, U.S.</option>
                        <option value="WLF">Wallis and Futuna</option>
                        <option value="ESH">Western Sahara</option>
                        <option value="YEM">Yemen</option>
                        <option value="ZMB">Zambia</option>
                        <option value="ZWE">Zimbabwe</option>
                      </select>

                        </div>-->




                </div>


                <div class="row">

                  <div class="col">

                <br>


                  <div class="row">
                    <div class="col" style="margin-top: -31px;">
                      <div class="form-group">
                        <label for="colFormLabelSm" class="col-sm-7 col-form-label col-form-label-sm"></label>

                        <div class="col-xs-7">
                            <textarea class="form-control" id="comentarios" name="comentarios" placeholder="¿En que podemos ayudarte?" required  rows="6"></textarea>

                        </div>

                    </div>
                    </div>
                  </div>


                  </div>


                </div>

                    <div class="row">
                        <input type="hidden" id="oculto" name="oculto">
                        </div>

                        <div class="row box">

                          <div class="col-md-12 btnEnviar" style="margin-top: -11px;">
                            <button onclick="enviarBtn();" class="btn-lg btn-dark">Enviar</button>
                              </div>
                              </div>

                            </form>
                            </div>
                              </div>
                              </div>








  </div>








  </body>

  <!--<footer id="myFooter">
      <div class="">
          <div class="row">




              <div class="col-md-6"  style="text-align:center">
                  <div class="col contacto" >
                    <img class="logo" src="images/eclipse-logo.svg" width="300" height="300" alt="">
                  </div>
              </div>







              <div class="col-md-6">

            <div class="row align-items-center" style="margin-left: auto !important; margin-right: auto !important;">
              <div class="col contacto" >
                <div class="texto1">
                  <h5>Contacto</h5>
                  <ul>
                    <h6><i class="fa fa-envelope" aria-hidden="true"></i> contacto@eclipsemex.com</h6>
                    <h6><i class="fa fa-envelope" aria-hidden="true"></i> samuel.mejia@eclipsemex.mx</h6>
                      <h6><i class="fa fa-phone" aria-hidden="true"></i> 55 5532.2480</h6>
                      <h6><i class="fa fa-phone" aria-hidden="true"></i> 55 3685.2090</h6>


                  </ul>
                </div>
              </div>

              </div>

            </div>
  </footer>

  -->

  <script src="js/bootstrap.js" charset="utf-8"></script>







  <script>

    function checabtn(){
        //var valor = document.getElementsByClassName('exRadio');


    }

    function enviarBtn(){
        var nombre=document.getElementById('nombre').value;
        var apellidos=document.getElementById('apellidos').value;
        var cp=document.getElementById('cp').value;
        var telefono=document.getElementById('telefono').value;
        var correo=document.getElementById('correo').value;
        //var pais=document.getElementById('pais').value;
        var comentarios=document.getElementById('comentarios').value;
        var oculto=document.getElementById('oculto').value;
        var socio = "0";

        var soc = document.getElementById('socio');
        if(soc.checked){
            socio = "1";
        }else{
            socio = "0";
        }

        if (nombre=="" || apellidos=="" || cp=="" || correo=="" || comentarios=="") {
            alert("Llenar los campos requeridos");
            console.log("Llenar los campos requeridos");
        } else{
          $.ajax({
              url: 'ingresarDatos.php',
              type: 'POST',
              data: {
                  nombre: nombre,
                  apellidos: apellidos,
                  cp: cp,
                  telefono: telefono,
                  correo: correo,
                  socio: socio,
                  comentarios: comentarios,
                  oculto: oculto
              },
              async:false,
              success: function(msg) {
                alert('Registro enviado.');
                window.location.replace("https://www.eclipsemex.com");
              }
          });
        }
    }
  </script>
</html>
