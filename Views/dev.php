<?php require_once SYS_PATH.INCLUDES.'header.php' ?>

<div class="swiper-container main-swiper">

	<div class="swiper-wrapper">

		<div class="swiper-slide landing">

			<a href="#" class="logo-link">

				<img src="<?php echo BASE_PATH.IMG ?>logo-alt.png" alt="Agência 7etti" class="logo">

			</a>

			<div class="scroll-down clearfix">

				<?php echo file_get_contents(SYS_PATH.SVG.'double-chevron.svg') ?>

				<?php echo file_get_contents(SYS_PATH.SVG.'mouse.svg') ?>

				<?php echo file_get_contents(SYS_PATH.SVG.'double-chevron.svg') ?>

			</div>

			<div class="social-icons-container">

				<ul class="social-icons clearfix">

					<li class="social-icon"><a href="<?php echo LINK_FACEBOOK; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>

					<li class="social-icon"><a href="<?php echo LINK_INSTAGRAM; ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>

					<li class="social-icon"><a href="<?php echo LINK_LINKEDIN; ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>

				</ul>

			</div>

		</div>

		<div class="swiper-slide about-us">

			<div class="swiper-container about-us-swiper">

				<div class="swiper-wrapper">

					<div class="swiper-slide about-agency clearfix">

						<div class="msg">

							<div class="left">

								<p class="sobre-nos">Sobre<br> <span>Nós</span></p>

							</div>

							<div class="texto">

								<p>Trabalhamos na oferta de soluções rápidas para <br>os nossos clientes, visando a qualidade material <br>e a excelência das campanhas realizadas. <br><br>Muito mais que uma agência, a 7etti busca fortalecer <br>os vínculos com o mercado e assegurar a comunicação com todos os públicos, através de seu vasto repertório de ações e campanhas.</p>

							</div>

						</div>

					</div>

				</div>

				

				<?php require SYS_PATH.INCLUDES.'nav.php' ?>

			</div>

		</div>



		<div class="swiper-slide o-que-fazemos">

			<div class="swiper-container newsteps-swiper">

				<div class="swiper-wrapper">

					<div class="swiper-slide newsteps step-1 clearfix">

						<div class="left-content">

							<div class="main-icon"></div>

						</div>

						<div class="right-content">

							<span class="step-text">

								<h1 class="title">Pilares:</h1>

								<p class="desc">

								Desenvolvemos projetos exclusivos e <br>inovadores, por meio de 7 expertises:<br><strong> branding, marketing, digital, promo & ativação,<br> eventos, produção gráfica e trade marketing.</strong>

								</p>

								<a class="newsteps-switcher slide-switcher" data-index="1">

									<i class="fa fa-caret-right"></i>

								</a>

								<a class="portfolio-link">Portfolio em Atualização</a>

							</span>

						</div>

					</div>

					<div class="swiper-slide newsteps step-2 clearfix">

						<div class="left-content">

							<div class="main-icon brand"></div>

						</div>

						<div class="right-content">

							<span class="step-text">

								<h1 class="title"><span class="index">1.</span>Branding:</h1>

								<p class="desc">

									Criamos e inovamos o envolvimento emocional <br> da sua marca com o público, garantindo a interação <br>  efetiva entre eles. Tudo isso, garantindo pontos de contato <br> concretos e assertivos. Tornamos a experiência com <br> a marca algo realmente inesquecível.

								</p>

								<a class="newsteps-switcher slide-switcher2" data-index="0">

									<i class="fa fa-caret-left"></i>

								</a>

								<a class="newsteps-switcher slide-switcher" data-index="2">

									<i class="fa fa-caret-right"></i>

								</a>

							</span>

						</div>

					</div>

					<div class="swiper-slide newsteps step-3 clearfix">

						<div class="left-content">

							<div class="main-icon"></div>

						</div>

						<div class="right-content">

							<span class="step-text">

					<!--Modelo imagem a esquerda

						<div class="swiper-slide newsteps step-1 alt-step clearfix">

						<div class="right-content">

							<span class="step-text">-->

								<h1 class="title"><span class="index">2.</span>Marketing:</h1>

								<p class="desc">

									Solucionamos e antecipamos as necessidades da sua marca, <br> produto e serviço. Integramos melhorias na criação, <br> posicionamento, comunicação e usabilidade do seu  <br> endereço online e mídias sociais.

								</p>

								<a class="newsteps-switcher slide-switcher2" data-index="1">

									<i class="fa fa-caret-left"></i>

								</a>

								<a class="newsteps-switcher slide-switcher" data-index="3">

									<i class="fa fa-caret-right"></i>

								</a>

							</span>

						</div>

						<div class="left-content">

							<div class="main-icon"></div>

						</div>

					</div>

					<div class="swiper-slide newsteps step-4 clearfix">

						<div class="left-content">

							<div class="main-icon"></div>

						</div>

						<div class="right-content">

							<span class="step-text">

								<h1 class="title"><span class="index">3.</span>Promo & Ativação: </h1>

								<p class="desc">

									Criamos experiências únicas entre sua marca <br>  e os mais diversos públicos, através de:<br> SAMPLING;<br> PROMOÇÃO;<br>LICENCIAMENTO PROMOCIONAL;<br>MOBILE / DIGITAL;<br>AÇÕES DE ATIVAÇÃO.

								</p>

								<a class="newsteps-switcher slide-switcher2" data-index="2">

									<i class="fa fa-caret-left"></i>

								</a>

								<a class="newsteps-switcher slide-switcher" data-index="4">

									<i class="fa fa-caret-right"></i>

								</a>

							</span>

						</div>

					</div>

					<div class="swiper-slide newsteps step-5 clearfix">

						<div class="left-content">

							<div class="main-icon"></div>

						</div>

						<div class="right-content">

							<span class="step-text">

					<!--Imagem a esquerda

						<div class="swiper-slide newsteps step-4 alt-step clearfix">

						<div class="right-content">

							<span class="step-text">-->

								<h1 class="title"><span class="index">4.</span>Eventos:</h1>

								<p class="desc">

									Produzimos e criamos eventos corporativos,  <br> festas, recepções, dinâmicas, treinamentos e <br> muito mais! Produções preparadas para receber todos<br>os tipos de convidados, criar estruturas únicas e<br>promover experiências diferenciadas.

								</p>

								<a class="newsteps-switcher slide-switcher2" data-index="3">

									<i class="fa fa-caret-left"></i>

								</a>

								<a class="newsteps-switcher slide-switcher" data-index="5">

									<i class="fa fa-caret-right"></i>

								</a>

							</span>

						</div>

						<div class="left-content">

							<div class="main-icon"></div>

						</div>

					</div>

					<div class="swiper-slide newsteps step-6 clearfix">

						<div class="left-content">

							<div class="main-icon"></div>

						</div>

						<div class="right-content">

							<span class="step-text">

								<h1 class="title"><span class="index">5.</span>Trade: </h1>

								<p class="desc">

									Ativamos a marca e, consequentemente, <br> despertamos o interesse de compra. Para isso, <br> contamos com ações, direcionadas no ponto<br> de venda ou canal de distribuição, como:<br>Campanhas de incentivo;<br>Lançamentos & Convenções;<br>PDV Merchandising;<br>Marketing de relacionamento;<br>Campanhas de treinamento.

								</p>

								<a class="newsteps-switcher slide-switcher2" data-index="4">

									<i class="fa fa-caret-left"></i>

								</a>

								<a class="newsteps-switcher slide-switcher" data-index="6">

									<i class="fa fa-caret-right"></i>

								</a>

								

							</span>

						</div>

					</div>

					<div class="swiper-slide newsteps step-7 clearfix">

						<div class="left-content">

							<div class="main-icon"></div>

						</div>

						<div class="right-content">

							<span class="step-text">

								<h1 class="title"><span class="index">6.</span>Digital: </h1>

								<p class="desc">

								Nos comunicamos também no ambiente digital.<br> Planejamos e fazemos a gestão das ferramentas<br>  estratégicas que possibilitam a consolidação<br>  de marcas na internet.

                                Criamos e analisamos<br> as ações de comunicação do mundo digital.

								</p>

								<a class="newsteps-switcher slide-switcher2" data-index="5">

									<i class="fa fa-caret-left"></i>

								</a>

								<a class="newsteps-switcher slide-switcher" data-index="7">

									<i class="fa fa-caret-right"></i>

								</a>								

							</span>

						</div>

					</div>

					<div class="swiper-slide newsteps step-8 clearfix">

						<div class="left-content">

							<div class="main-icon"></div>

						</div>

						<div class="right-content">

							<span class="step-text">

								<h1 class="title"><span class="index">7.</span>Produção Gráfica: </h1>

								<p class="desc">

								Adequamos materiais à identidade visual do cliente<br>

								propondo a melhor forma de apresentação de seus<br>

								produtos e serviços de maneira institucional.<br>

								Estes materiais podem servir, também, como apoio<br>

								para ações promocionais.

								</p>

								<a class="newsteps-switcher slide-switcher2" data-index="6">

									<i class="fa fa-caret-left"></i>

								</a>

								<a class="main-switcher slide-switcher" data-index="3">

									<i class="fa fa-caret-down"></i>

								</a>

							</span>

						</div>

					</div>

				</div>

			</div>

			

			<?php require SYS_PATH.INCLUDES.'nav.php' ?>

		</div>

		

		<div class="swiper-slide como-fazemos">

			<div class="swiper-container steps-swiper">

				<div class="swiper-wrapper">

					<div class="swiper-slide steps step-1 clearfix">

						<div class="left-content">

							<div class="main-icon"></div>

						</div>

						<div class="right-content">

							<span class="step-text">

								<h1 class="title"><span class="index">1.</span>Proposta</h1>

								<p class="desc">

									Como podemos te ajudar? Nosso time comercial de atendimento<br> está pronto para buscar o melhor para o seu negócio, preparados<br>  para antecipar necessidades e o que pudermos fazer por você.  <br> Temos certeza que você irá admirar as nossas métricas <br> e se beneficiará com nossos valores competitivos.

								</p>

								<a class="steps-switcher slide-switcher" data-index="1">

									<i class="fa fa-caret-right"></i>

								</a>

							</span>

						</div>

					</div>

					<div class="swiper-slide steps step-2 alt-step clearfix">

						<div class="right-content">

							<span class="step-text">

								<h1 class="title"><span class="index">2.</span>Briefing</h1>

								<p class="desc">

									Você quer um material clean com texturas e ícones?<br> Olha, acreditamos que podemos melhorar este ou <br> até mesmo seguir por outro caminho. <br> Podemos propor algo diferente e inovador?

								</p>

								<a class="steps-switcher slide-switcher2" data-index="0">

									<i class="fa fa-caret-left"></i>

								</a>

								<a class="steps-switcher slide-switcher" data-index="2">

									<i class="fa fa-caret-right"></i>

								</a>

							</span>

						</div>

						<div class="left-content">

							<div class="main-icon"></div>

						</div>

					</div>

					<div class="swiper-slide steps step-3 clearfix">

						<div class="left-content">

							<div class="main-icon"></div>

						</div>

						<div class="right-content">

							<span class="step-text">

								<h1 class="title"><span class="index">3.</span>Brainstorming</h1>

								<p class="desc">

									Bacana, fechado! Vamos levantar uma <br> reunião agora, com a nossa equipe de criação, e você <br> pode ter certeza que virá algo surpreendente.<br> Nossa equipe é viciada em boas ideias!

								</p>
							
								<a class="steps-switcher slide-switcher2" data-index="1">

									<i class="fa fa-caret-left"></i>

								</a>

								<a class="steps-switcher slide-switcher" data-index="3">

									<i class="fa fa-caret-right"></i>

								</a>

							</span>

						</div>

					</div>

					<div class="swiper-slide steps step-4 alt-step clearfix">

						<div class="right-content">

							<span class="step-text">

								<h1 class="title"><span class="index">4.</span>Execução</h1>

								<p class="desc">

									O seu material ficará incrível! Vamos entregar <br> tudo no deadline pré-definido. Aposto que você,<br> e seu público-alvo, irão adorar!

								</p>

								<a class="steps-switcher slide-switcher2" data-index="2">

									<i class="fa fa-caret-left"></i>

								</a>

								<a class="steps-switcher slide-switcher" data-index="4">

									<i class="fa fa-caret-right"></i>

								</a>

							</span>

						</div>

						<div class="left-content">

							<div class="main-icon"></div>

						</div>

					</div>

					<div class="swiper-slide steps step-5 clearfix">

						<div class="left-content">

							<div class="main-icon"></div>

						</div>

						<div class="right-content">

							<span class="step-text">

								<h1 class="title"><span class="index">5.</span>Aprovação</h1>

								<p class="desc">

									Aprovado? Ótimo! Passamos horas <br> estudando sobre seu mercado de atuação<br> e buscando referências. Demos até uma espiada<br> nos concorrentes, para realizarmos<br>algo ainda mais surpreendente, acredita?

								</p>

								<a class="steps-switcher slide-switcher2" data-index="3">

									<i class="fa fa-caret-left"></i>

								</a>

								<a class="steps-switcher slide-switcher" data-index="5">

									<i class="fa fa-caret-right"></i>

								</a>

							</span>

						</div>

					</div>

					<div class="swiper-slide steps step-6 alt-step clearfix">

						<div class="right-content">

							<span class="step-text">

								<h1 class="title"><span class="index">6.</span>Considerações</h1>

								<p class="desc">

									Que feedback maravilhoso! <br> Vamos acrescentar suas considerações, sim. <br> Com a sua opinião conseguimos<br> alcançar o sucesso, juntos.

								</p>

								<a class="steps-switcher slide-switcher2" data-index="4">

									<i class="fa fa-caret-left"></i>

								</a>

								<a class="steps-switcher slide-switcher" data-index="6">

									<i class="fa fa-caret-right"></i>

								</a>

							</span>

						</div>

						<div class="left-content">

							<div class="main-icon"></div>

						</div>

					</div>

					<div class="swiper-slide steps step-7 clearfix">

						<div class="left-content">

							<div class="main-icon"></div>

						</div>

						<div class="right-content">

							<span class="step-text">

								<h1 class="title"><span class="index">7.</span>

									Bem vindo(a) à 7etti!

								</h1>

								<p class="desc">

									UHUUUUL! Fico contente que você tenha gostado.<br> Seja bem-vindo a cartela de clientes 7etti.<br> A nossa história só está começando!<br> Vamos recomeçar. O que nós podemos fazer por você?

								</p>

								<a class="steps-switcher slide-switcher2" data-index="5">

									<i class="fa fa-caret-left"></i>

								</a>

								<a class="main-switcher slide-switcher" data-index="4">

									<i class="fa fa-caret-down"></i>

								</a>

							</span>

						</div>

					</div>

				</div>

			</div>

			<?php require SYS_PATH.INCLUDES.'nav.php' ?>

		</div>



		<div class="swiper-slide our-stats">

			<!--

			<h1 class="title">

				Veja nossas<br><span class="featured">estatísticas</span>

				<small>

					São diversos cafés e brainstorms para tornar os<br> sonhos dos nossos clientes reais. Comemoramos<br> cada conquista e nos reinventamos com novas<br> ideias todos os dias.

				</small>

				<a class="main-switcher slide-switcher" data-index="5">

					<i class="fa fa-caret-down"></i>

				</a>

			</h1>

			-->

			<?php require SYS_PATH.INCLUDES.'nav.php' ?>

		</div>

		<div class="swiper-slide contact">

			<div class="left-content">

				<h1 class="title">

					Ficou com<br>alguma <span class="featured">dúvida?</span><br>Escreva para a gente.

				</h1>

                <form class="contact-form" id="contact-form">

                    <input type="hidden" name="token" value="<?php echo FINGERPRINT ?>">

                    <input type="text" name="name" id="name" placeholder="Nome">

                    <input type="text" name="email" id="email" placeholder="Email">

                    <input type="text" name="phone" id="phone" placeholder="Telefone">

                    <textarea rows="3" name="message" id="message" placeholder="Mensagem..."></textarea>

                    <button type="submit" class="button-submit" id="button-submit">Enviar</button>

                </form>

			</div>

			<div class="right-content">

				<span class="contact-infos">

					<p class="contact-info">Segunda a sexta das 09h00 às 18h00 <i class="fa fa-clock-o"></i></p>

					<p class="contact-info"><a href="mailto:contato@agencia7etti.com.br">contato@agencia7etti.com.br</a> <i class="fa fa-envelope"></i></p>

					<p class="contact-info">+55 (11) 5081-5053 <i class="fa fa-phone"></i></p>

				</span>

			</div>

			<div class="social-icons-container">

				<ul class="social-icons clearfix">

					<li class="social-icon"><a href="<?php echo LINK_FACEBOOK; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>

					<li class="social-icon"><a href="<?php echo LINK_INSTAGRAM; ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>

					<li class="social-icon"><a href="<?php echo LINK_LINKEDIN; ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>

				</ul>

			</div>

			<a class="main-switcher slide-switcher" data-index="6">

				<i class="fa fa-caret-down"></i>

			</a>

			<?php require SYS_PATH.INCLUDES.'nav.php' ?>

		</div>

		<div class="swiper-slide where clearfix">

			<h1 class="title">

				Venha tomar<br>um <span class="featured">café</span> com<br>a gente.

				<a href="https://www.google.com.br/maps/place/R.+Fernandes+Moreira,+432+-+Chacara+Santo+Antonio+(Zona+Sul),+S%C3%A3o+Paulo+-+SP,+04716-001/@-23.6339058,-46.7014522,17z/data=!3m1!4b1!4m5!3m4!1s0x94ce50ef6120aa2d:0xa172e3c5bcd247f1!8m2!3d-23.6339107!4d-46.6992635" target="_blank" style="color:inherit;text-decoration:none">

					<small>

						Rua Fernandes Moreira, 432<br>Chácara Santo Antônio<br>São Paulo / SP<br>04716-001

					</small>

				</a>

			</h1>

			<div class="copyright-box">

				<span class="copyright">Copyright &bull; <?php echo date('Y') ?></span>

			</div>

			<?php require SYS_PATH.INCLUDES.'nav.php' ?>

		</div>

	</div>

</div>

<?php require_once SYS_PATH.INCLUDES.'scripts.php' ?>

<?php require_once SYS_PATH.INCLUDES.'footer.php' ?>

