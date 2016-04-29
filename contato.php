<!DOCTYPE HTML>
<html class="no-js" lang="pt-br">

    <head>    	
		<title>Dr. Rafael Ribeiro - Cirurgião Plástico</title>        
		<meta name="description" content="Dr. Rafael Ribeiro Cirurgião Plástico em Salvador" />
		<meta name="keywords" content="Rafael Ribeiro, cirurgião plástico, Cirurgia plástica, Blefaroplastia, Ritidoplastia, Implante de cabelo, Abdominoplastia, Lipoaspiração, Prótese de mama, Prótese de glúteo, Prótese de panturrilha, Toxina botulínica, BOTOX"/>
    	<?php include("incs/inc-head.php"); ?>	 
    	<link rel="stylesheet" href="js/form/form.css"/>
    </head>
	
    <body id="contato">

		<!-- Container -->
		<div class="container">	

			<!-- Header -->
			<?php include("incs/inc-header.php"); ?>			
			<!-- / Header -->

		</div>
		<!-- / Container -->
		
		<!-- Pop-Up -->
		<?php include("incs/inc-popup.php"); ?>
		<!-- / Pop-Up -->

		<!-- Header -->
		<header class="header-internas"></header>
		<!-- / Header -->  
			
		<!-- Main -->
		<main id="main">
			
			<!-- Container -->
			<div class="container">
				<!-- Row -->
				<div class="row">
					
					<div class="col-sm-5">
						
						<article class="content">
							<h2 class="titulo">Contatos</h2>
							<section class="section-contatos">
							<?php include("incs/section-contato.php"); ?>
							</section>
						</article>

					</div>

					<div class="col-sm-6 col-sm-offset-1">
						<aside class="aside">
							<form name="form" action="" method="POST">
								<p>Entre em contato, preenchendo o formulário abaixo:</p>
							    <input class="required" type="text" name="nome" placeholder="seu nome..." />
							    <input class="required email" type="text" name="email" placeholder="seu email..."/>
							    <input class="required" type="text" name="assunto" placeholder="o assunto aqui..."/>
							    <textarea name="mensagem" class="required" placeholder="sua mensagem..."></textarea>
							    <input class="enviar" name="enviarContato" type="submit" value="Enviar"/>
							</form>
						</aside>
					</div>					

				</div>
				<!-- / Row -->

			</div>
			<!-- / Container -->
			
			<!-- BG -->
			<div class="bg-section-home-box">

				<!-- Container -->
				<div class="container">

					<!-- Row -->
					<div class="row">
						<?php include("incs/section-home-box.php"); ?>
					</div>
					<!-- / Row -->

				</div>
				<!-- / Container -->

			</div>
			<!-- / BG -->

		</main>
		<!-- / Main -->

		<!-- Footer -->
		<?php include("incs/inc-footer.php"); ?>
		<!-- / Footer -->

		<!-- Js -->
		<?php include("incs/inc-js.php"); ?>
		<script src="js/form/jquery.validate.js"></script>
		<script>
			$(function(){
				$("form").each(function() {
					$(this).validate();
				});
			})
		</script>
		<!-- / Js -->

    </body>
</html>
