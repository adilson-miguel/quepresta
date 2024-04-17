
<?php
if(isset($_POST['submit']))
{
    include_once('config.php');

  $nome=$_POST['nome'];
  $sobrenome=$_POST['sobrenome'];
  $numero_bi=$_POST['numero_bi'];
  $email=$_POST['email'];
  $telefone=$_POST['telefone'];
  $localidade=$_POST['localidade'];
  $comprovativo=$_POST['comprovativo'];

  $result = mysqli_query($conexao, "INSERT INTO inscricao(nome,sobrenome,numero_bi,email,telefone,localidade,comprovativo) values
  ('$nome','$sobrenome','$numero_bi','$email','$telefone','$localidade','$comprovativo')");
}

?>
<!-- 


 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Marte - Innovation</title>
</head>
<body>
    
    <div class="nav">
        <div class="nav-1">
            <a href="#">
                <img src="img/logotipo marte.png" alt="Logotipo">
            </a>
            <div class="menu">
                <ul>
                    <li><a href="">Contacto</a></li>
                    <li><a href="">Endereço</a></li>
                    <li><a href="">Sobre</a></li>
                </ul>
            </div>
        </div>
    </div>




    <div class="container">
        
        
        <div class="principal">

            <div class="welcome">
                <div>
                 <h1>marte innovation</h1><br>
                 <p>Faça a sua Inscrição e garanta uma Vaga para a Formação de Design Gráfico!</p>
                
                <h3><a href="">Saber mais...</a></h3>
                </div>
            </div>

           
            <div class="inscricao">
                <fieldset>
                    <legend>Formulario</legend>
                    <form action="index.php" method="POST">
                                <input type="text" name="nome" id="ipt-nome" placeholder="Informe Seu Nome*"
                                autofocus required autocomplete="on"><br>
                                
                                <input type="text" name="sobrenome" id="ipt-sobrenome"
                                required autocomplete="on" placeholder="Informe seu Sobrenome*"><br>
                                
                                <input type="text" name="numero_bi" id="ipt-bi" placeholder="Digite Nº do B.I*"> <br>
                                
                                <input type="email" name="email" id="ipt-email"
                                placeholder="Informe Seu E-mail*" autocomplete="on" required><br>
                                
                                <input type="tel" name="telefone" id="ipt-telefone"
                                required placeholder="Informe Seu Contacto*"><br>
                        
                        <select name="localidade" id="localidade">
                            <option value="PVA">---Escolha sua Localidade---</option>
                            <optgroup label="Cuanza Norte" id="cn">
                                <option value="Cazengo">Cazengo</option>
                                <option value="Lucala">Lucala</option>
                                <option value="Cambambe">Cambambe</option>
                                <option value="Golungo Alto">Golungo Alto</option>
                                <option value="Ambaca">Ambaca</option>
                            </optgroup>
                            <optgroup label="Luanda" id="lda">
                                <option value="Cazenga">Cazenga</option>
                                <option value="Viana">Viana</option>
                                <option value="Cacuaco">Cacuaco</option>
                                <option value="Benfica">Benfica</option>
                                <option value="Kilamba">Kilamba</option>
                            </optgroup>
                        </select> <br>

                        <input type="file" name="comprovativo" id="arquivo"><br>
                        
                            <input type="submit" name="submit" id="submit">
                       
                        
                    </form>
                </fieldset>
            </div>
        </div>
        
    </div>
    
    <section class="servicos">
        
        <hr>
        <section class="flyer">
            <article class="artes">
                <img src="img/grande-show-rir-angola2024-1.png" alt="flyer">
                <img src="img/a-ninja-do-mato_em-uma-família-muito-louca_by-kufikissa.png" alt="flyer">
                <img src="img/nossa-africa-festa2023.png" alt="flyer">
            </article>
            <article class="texto-1">
                <h1>Flyer - Banner</h1>
                <h3>Somos a solução para dar visibilidade aos seus eventos!</h3>
                <p>Estamos ligados às novidades do mundo gráfico e, trazemos para si, o melhor do Design Grafico.</p>
            </article>
        </section>
    </section>
    

    <div class="welcome-1">
            <hr>
        <div class="desenvolvedor">
            <!-- <marquee behavior="" direction=""> -->
                <div class="phone">
                    <img src="img/icons8_phone_message_77px.png" alt="">
                    <a href="">(+244) 946 975 803</a>
                </div>
                <div class="e-mail">
                    <img src="img/icons8_email_send_77px.png" alt="">
                    <a href="mailto:marte.innovation08@gmail.com">marte.innovation08@gmail.com</a>
                </div>
                <div class="insta">
                    <img src="img/icons8_instagram_77px.png" alt="">
                    <a href="instagram.com">marte_innovation</a>
                </div>
            <!-- </marquee> -->

        </div>

    </div>

</body>
</html>

