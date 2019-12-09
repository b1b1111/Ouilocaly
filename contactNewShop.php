<?php
    require('template.php');
?>
</header>

<?php
if(isset($_POST['mailform'])) {
   if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['message'])) {
      $header="MIME-Version: 1.0\r\n";
      $header.='From:"Ouilocaly"<benjamin.lefebvre04@gmail.com>'."\n";
      $header.='Content-Type:text/html; charset="uft-8"'."\n";
      $header.='Content-Transfer-Encoding: 8bit';
      $message='
      <html>
         <body>
            <div align="center">
               <img src="../public/images/Ouilocaly-logo-Couleur.png"/>
               <br />
               <u>Sujet du message :</u>'.'Demande Pro'.'<br />
               <u>Nom de l\'entreprise :</u>'.$_POST['entreprise'].'<br />
               <u>Nom de l\'expéditeur :</u>'.$_POST['nom'].'<br />
               <u>Mail de l\'expéditeur :</u>'.$_POST['mail'].'<br />
               <br />
               '.nl2br($_POST['message']).'
               <br />
            </div>
         </body>
      </html>
      ';
      mail("benjamin.lefebvre04@gmail.com", "Sujet du message", $message, $header);
      $msg="Votre message a bien été envoyé !";
    } 
    else {
        $msg="Tous les champs doivent être complétés !";
    }
}
?>

    <section id="hire">
      <h1>Proposez une boutique</h1>
      
      <form method="POST" action="" id="form_form">
            <div class="field entreprise-box">
                  <input type="text" name="entreprise" id="entreprise" placeholder="Indiquez le nom de la boutique" value="<?php if(isset($_POST['entreprise'])) { echo $_POST['entreprise']; } ?>" />
                  <label for="entreprise">Boutique</label>
                  <span class="ss-icon"></span>
            </div>
            <div class="field name-box">
                  <input type="text" name="nom" id="name" placeholder="Indiquez la ville de la boutique" value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>" />
                  <label for="name">Ville</label>
                  <span class="ss-icon"></span>
            </div>
  
            <div class="field email-box">
                  <input type="text" name="mail" id="email" placeholder="Indiquez votre e-mail" value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>"/>
                  <label for="email">Votre E-mail</label>
                  <span class="ss-icon"></span>
            </div>
  
            <input class="button" type="submit" value="Envoyer" name="mailform" onclick="SendMail()" />
    </form>
    </section>

<style>
body {
  background: #efefef;
  font-family: 'Lato', sans-serif;
  font-weight: 300;
  color: #B6B6B6;
}

#hire {
  font-size: 62.5%;
}
body section {
  background: white;
  margin: 60px auto 120px;
  text-align: center;
  padding: 50px 0 110px;
  width: 80%;
  max-width: 1100px;
}
body section h1 {
  margin-bottom: 40px;
  font-size: 4em;
  text-transform: uppercase;
  font-family: 'Lato', sans-serif;
  font-weight: 100;
}

form {
  width: 58.3333333333%;
  margin: 0 auto;
}
form .field {
  width: 100%;
  position: relative;
  margin-bottom: 15px;
}
form .field label {
  text-transform: uppercase;
  position: absolute;
  top: 0;
  left: 0;
  background: #313A3D;
  width: 100%;
  padding: 18px 0;
  font-size: 1.45em;
  letter-spacing: 0.075em;
  -webkit-transition: all 333ms ease-in-out;
  -moz-transition: all 333ms ease-in-out;
  -o-transition: all 333ms ease-in-out;
  -ms-transition: all 333ms ease-in-out;
  transition: all 333ms ease-in-out;
}
form .field label + span {
  font-family: 'SSStandard';
  opacity: 0;
  color: white;
  display: block;
  position: absolute;
  top: 12px;
  left: 7%;
  font-size: 2.5em;
  text-shadow: 1px 2px 0 rgb(192, 71, 60);
  -webkit-transition: all 333ms ease-in-out;
  -moz-transition: all 333ms ease-in-out;
  -o-transition: all 333ms ease-in-out;
  -ms-transition: all 333ms ease-in-out;
  transition: all 333ms ease-in-out;
}
form .field input[type="text"],
form .field textarea {
  border: none;
  background: #E8E9EA;
  width: 72.5%;
  margin: 0;
  padding: 18px 0;
  padding-left: 19.5%;
  color: #313A3D;
  font-size: 1.4em;
  letter-spacing: 0.05em;
  text-transform: uppercase;
}
form .field input[type="text"]#msg,
form .field textarea#msg {
  height: 18px;
  resize: none;
  -webkit-transition: all 333ms ease-in-out;
  -moz-transition: all 333ms ease-in-out;
  -o-transition: all 333ms ease-in-out;
  -ms-transition: all 333ms ease-in-out;
  transition: all 333ms ease-in-out;
}
form .field input[type="text"]:focus, form .field input[type="text"].focused,
form .field textarea:focus,
form .field textarea.focused {
  outline: none;
}
form .field input[type="text"]:focus#msg, form .field input[type="text"].focused#msg,
form .field textarea:focus#msg,
form .field textarea.focused#msg {
  padding-bottom: 150px;
}
form .field input[type="text"]:focus + label, form .field input[type="text"].focused + label,
form .field textarea:focus + label,
form .field textarea.focused + label {
  width: 22%;
  background: #FC766A;
  color: white;
}
form .field input[type="text"].focused + label,
form .field textarea.focused + label {
  color: #FC766A;
}
form .field:hover label {
  width: 22%;
  background: #313A3D;
  color: white;
}
form input[type="submit"] {
  background: #FC766A;
  color: white;
  -webkit-appearance: none;
  border: none;
  text-transform: uppercase;
  position: relative;
  padding: 13px 50px;
  font-size: 1.4em;
  letter-spacing: 0.1em;
  font-family: 'Lato', sans-serif;
  font-weight: 300;
  -webkit-transition: all 333ms ease-in-out;
  -moz-transition: all 333ms ease-in-out;
  -o-transition: all 333ms ease-in-out;
  -ms-transition: all 333ms ease-in-out;
  transition: all 333ms ease-in-out;
}
form input[type="submit"]:hover {
  background: #313A3D;
  color: #FC766A;
}
form input[type="submit"]:focus {
  outline: none;
  background: rgb(192, 71, 60);
}
</style>

<script>
// Input Lock
$('textarea').blur(function () {
    $('#hire textarea').each(function () {
        $this = $(this);
        if ( this.value != '' ) {
          $this.addClass('focused');
          $('textarea + label + span').css({'opacity': 1});
        }
        else {
          $this.removeClass('focused');
          $('textarea + label + span').css({'opacity': 0});
        }
    });
});

$('#hire .field:first-child input').blur(function () {
    $('#hire .field:first-child input').each(function () {
        $this = $(this);
        if ( this.value != '' ) {
          $this.addClass('focused');
          $('.field:first-child input + label + span').css({'opacity': 1});
        }
        else {
          $this.removeClass('focused');
          $('.field:first-child input + label + span').css({'opacity': 0});
        }
    });
});

$('#hire .field:nth-child(2) input').blur(function () {
    $('#hire .field:nth-child(2) input').each(function () {
        $this = $(this);
        if ( this.value != '' ) {
          $this.addClass('focused');
          $('.field:nth-child(2) input + label + span').css({'opacity': 1});
        }
        else {
          $this.removeClass('focused');
          $('.field:nth-child(2) input + label + span').css({'opacity': 0});
        }
    });
});
</script>

<script src="public/js/alert.js"></script>
