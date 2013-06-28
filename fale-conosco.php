<?php 
	include("includes/header.php");
	include("includes/menu_esq.php");
	include("includes/menu_dir.php");
?>

<br />
<br />
<h1>Fale Conosco</h1>
<h2>Utilize esse espaço para nos enviar dúvidas, comentários ou sugestões.</h2>
<br />
                <form  id="contato" name="contato" method="post" action="">
				<table>
                <tr>
                    <td>Nome:</td>
                    <td><input  class="input" type="text" name="nome" id="nome" /></td>
                </tr>
                <tr>
                    <td>E-mail:</td>
                    <td><input class="input" type="text" name="emailremetente" id="emailremetente"/></td>
                </tr>
                <tr>
                	<td>Assunto:</td>
                    <td><input class="input" type="text" name="assunto" id="assunto"/></td>
                </tr>
                <tr>
                    <td>Cidade:</td>
                    <td>
                    	<input class="input" type="text" name="cidade" id="cidade">
                    </td>
				<tr>
                	<td>Estado:</td>
                    <td>
                    	<select name="estado" id="estado" class="select">
							<option>Selecione</option>
                            <option>AC</option>
                            <option>AL</option>
                            <option>AP</option>
                            <option>AM</option>
                            <option>BA</option>
                            <option>CE</option>
                            <option>DF</option>
                            <option>GO</option>
                            <option>ES</option>
                            <option>MA</option>
                            <option>MT</option>
                            <option>MS</option>
                            <option>MG</option>
                            <option>PA</option>
                            <option>PB</option>
                            <option>PR</option>
                            <option>PE</option>
                            <option>PI</option>
                            <option>RJ</option>
                            <option>RN</option>
                            <option>RS</option>
                            <option>RO</option>
                            <option>RR</option>
                            <option>SP</option>
                            <option>SC</option>
                            <option>SE</option>
                            <option>TO</option>      
                        </select>
                    </td>
                </tr>
                </tr>
                <tr>
                    <td>Mensagem:</td>
                    <td>
                    	<textarea class="textareaemail" name="mensagem" id="mensagem" /></textarea>
                    </td>
                </tr>
                </table>
                      <table width="400">
                <tr>
                   
                
<?php
        if(isset($_SERVER['REQUEST_METHOD']) AND ($_SERVER['REQUEST_METHOD'] == 'POST')){
            
            extract($_POST);
			
//"fernanda.afonseca@hotmail.com";			
//"suporte@institutorazaosocial.org.br";
            //Definimos para quem será enviado o email
            $para = "suporte@institutorazaosocial.org.br";
			$testeassunto = "[Contato - Alem das Letras] - ";

             //Definimos o corpo da mensagem resgatando os inputs
            $corpoMensagem ="<body>
								<div style='font-family:calibri;
											font-size: 14px;
											color:#363636;
											padding:5px;'>
									<p style='text-align: center; font-size:22px;'>
										<b>Suporte técnico à partir do site</b>
									</p>
									<hr size='1' color='C0C0C0' width:'500px'></hr>
									<br /><br />
									<b>Nome:</b><br />" .$nome;
									$corpoMensagem .= "<br /><br /><b>E-mail:</b><br />" .$emailremetente;
									$corpoMensagem .= "<br /><br /> <b>Assunto:</b><br />" .$assunto;
									$corpoMensagem .= "<br /><br /> <b>Cidade:</b><br />" .$cidade;
									$corpoMensagem .= "<br /><br /><b>Estado:</b>" .$estado;
									$corpoMensagem .= "<br /><br /><b>Mensagem: </b><br />" .$mensagem;
									$corpoMensagem .= "<br /><br /><hr size='1' color='C0C0C0' width:'500px'></hr>
									<p style='text-align: center; font-size:16px;'><b>Além das Letras</b>&nbsp&nbsp - &nbsp&nbsp 
										<a href='http://www.alemdasletras.org.br'>www.alemdasletras.org.br </a>
									</p>
								</div>
							</body>";


            //5 � agora inserimos as codifica��es corretas e  tudo mais.
            $headers =  "Content-Type:text/html; charset=UTF-8\n";
            $headers .= "From:  ".$nome." <".$emailremetente.">\n"; //Vai ser //mostrado que  o email partiu deste email e seguido do nome
            $headers .= "X-Sender:  <sistema@dominio.com.br>\n"; //email do servidor //que enviou
            $headers .= "X-Mailer: PHP  v".phpversion()."\n";
            $headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
            $headers .= "Return-Path:  <".$emailremetente.">\n"; //caso a msg //seja respondida vai para  este email.
            $headers .= "MIME-Version: 1.0\n";

            if(mail($para, "$testeassunto" .$assunto, $corpoMensagem, $headers)){
				echo "<td><div id='msg_enviada'>Mensagem enviada com sucesso!<a href='javascript: fechar();'><img src='img/fechar_black.png' align='right'/></a></div></td>";
		}
		
			else{
				echo "<td><div id='msg_nao_enviada'>Mensagem não enviada!<a href='javascript: fechar_red();'><img src='img/fechar_red.png' align='right'/></a></div></td>";
				}//função que faz o envio do email.
		}
?>
				<td align="right"><input class="btn" type="submit" value="Enviar &raquo" />&nbsp;&nbsp;&nbsp;</td>
                </tr>
                </table>
    	</form>
        
<?php
	include("includes/footer.php");
?>