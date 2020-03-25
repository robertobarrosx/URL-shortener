<!DOCTYPE HTML>
<html>
	<head>
		<title>Abro.ga Seu encurtador de links!</title>
		<meta charset="utf-8" />
		<link rel="icon" href="favicon.png" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">
	
		<!-- Header -->
	<div id="header">
		<span class="logo icon"><i class="fas fa-link"></i></span>
		<div class="d-flex justify-content-center h-100">
        			<form class="searchbar shorturl" method="post" autocomplete="off"> 
					<h1>Abro.ga Seu Encurtador de links.</h1>
					<label class="text-success"> Link </label>
					<input id="url" pattern="https?://.+" class="search_input" type="text" name="" placeholder="http://github.com">
					<label class="text-success"> Personalizar</label>
					<input pattern="[a-zA-Z0-9._-]+" class="search_input" type="text" id="text" placeholder="blabla (opcional)">
					<label></label>
					<button class="col btn btn-green-moon">
						Encurtar
					</button>
					<a id="ver" href="#link" style="display: none" class="btn">Ver</a>
	</div>
     		 </div>
	 </div>
		<!-- Main -->
			<div id="main">
				<header class="major container medium">
					<blockquote class="blockquote text-center">
 					<p class="mb-0">"O fluxo do tempo é sempre cruel,sua velocidade é distinta para cada pessoa,
					mas ninguém pode mudar isto..."</p>
  					<footer class="blockquote-footer">The Legend Of Zelda: Ocarina of Time <cite title="Título da fonte">(Sheik)</cite></footer>					
					</blockquote>
				</header>
			</div>

		<!-- Footer -->
			<div id="footer">
				<div class="container medium">
					<ul class="icons">
						<li><a href="https://www.twitter.com/robertobarrosx" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="https://fb.com/robertobarrosx" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="https://instagram.com/robertobarrox" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="https://github.com/robertobarrosx" class="icon brands fa-github"><span class="label">Github</span></a></li>
						<li><a href="https://www.youtube.com/user/MrBlackFox8" class="icon brands fa-youtube"><span class="label">Youtube</span></a></li>
					</ul>

					<ul class="copyright">
						<li>&copy;Abro.ga. All rights reserved.</li><li>Design: <a href="http://github.com/robertobarrosx">Roberto Barros</a> para a materia de redes de <a href="http://diegohoss.tk">Diego Hoss</a></li>
					</ul>

				</div>
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script type="text/javascript" src="script.js"></script>
			<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
 </body>

 </html>





<div id="link" class="wrapper overlay">  
	<div class="content popup text-light">
    		<div class="shareUrl ">
   	   		<header class="shareUrl-header">
				<a class="close text-danger" href="#">&times;</a>
       	 			<h1 class="shareUrl-headerText">Prontinho aqui esta seu link!</h1>
        			<p class="shareUrl-headerSubtext">Em breve podera ver os detalhes do seu link. </p>
      			</header>
      		<div class="shareUrl-body">
        		<div class="container">
          			<input id="shortin" unselectable="on" class="success-help naoSelecionavel text-center text-success js-shareUrl" type="text" value="https://abro.ga" readonly="readonly" />
          			<p class="text-center shareUrl-subtext">Clique acima para copiar o link.</p>
       			</div>
      		</div>
    	</div>
</div>
<!-- CSS DE COPIAR E COLAR -->

<script>

$('#shortin').click(function(){
        //Visto que o 'copy' copia o texto que estiver selecionado, talvez você queira colocar seu valor em um txt escondido
    $('#shortin').select();
    try {
            var ok = document.execCommand('copy');
            if (ok) { alert('Copiado com Sucesso!'); }
        } catch (e) {
        alert(e)
    }
   $('#url').select();
});
</script>

<style>

.shareUrllex {
  cursor: pointer;
}

p {
  line-height: 1.3;
}

// Share URL Component
.shareUrl {
  width: 40%;
  padding: 40px 20px;
  text-align: center;
}
.shareUrl-header {
  margin-bottom: 40px;
}
.shareUrl-headerText {
  margin-top: 0;
  margin-bottom: 10px;
  font-size: 22px;
}
.shareUrl-subtext {
  margin-top: 10px;
  font-size: 14px;
}
.shareUrl-body {
  margin-bottom: 70px;
}
.shareUrllex {
  cursor: pointer;
  width: 100%;
  padding: 10px 0;
  border: 2px solid rgba(0,0,0,.09);
  text-align: center;
  font-size: 26px;
  font-weight: bold;
  color: rgba(255,255,255,0.9);
  border-radius: 3px;
  transition: all 300ms ease;

  &:hover,
  &:focus,
  &:active {
    border-color: rgba(0,0,0,.3);
    background: rgba(255,255,255,.1);
  }
}

// Media Queries
@media (min-width: 568px) {
  .shareUrl {
    padding: 70px 20px;
  }
  .shareUrl-input {
    max-width: 100%;
    font-size: 56px;
  }
  .shareUrl-headerText {
    font-size: 32px;
  }
}
.naoSelecionavel {
    cursor: pointer;
    -webkit-touch-callout: none;  /* iPhone OS, Safari */
    -webkit-user-select: none;    /* Chrome, Safari 3 */
    -khtml-user-select: none;     /* Safari 2 */
    -moz-user-select: none;       /* Firefox */
    -ms-user-select: none;        /* IE10+ */
    user-select: none;            /* Possível implementação no futuro */
    /* cursor: default; */
}
</style>






<!--
	<div id="link" class="overlay">
		<div class="popup text-dark">
			<p class="text-center text-dark display-4 success-help">Nada para ver aqui.</p>
			<a class="close text-danger" href="#">&times;</a>
		</div>
	</div>
-->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<style>
   .btn-green-moon {
    background: #56ab2f; /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #a8e063, #56ab2f); /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #a8e063, #56ab2f); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, 
Opera 12+, Safari 7+ */
    color: #fff;
    border: 3px solid #eee;
}


.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
  z-index:20;
}

#main{
  position: relative;
  z-index: 1;
}

.popup {
  margin:70px auto;
  padding: 50px;
  background: #111111;
  border-radius: 5px;
  width: 80%;
  position: relative;
  transition: all 500ms ease-in-out;
  z-index:4;
}
.popup:before{
  z-index:4;
}
.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: #06D85F;
}
.popup .content {
  max-height: 30%;
  overflow: auto;
}

 </style>
