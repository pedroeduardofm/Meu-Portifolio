<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sobre Mim</title>
  <link rel="stylesheet" href="sobre.css">
</head>
<body>
  <header class="header">
    <a href="#" class="logo">Pedro Eduardo</a>

    <nav class="navbar">
      <a href="index.html">Home</a>
      <a href="sobremim.php" class="active">Sobre mim</a>
      <a href="#">Projetos</a>
      <a href="portfolio.html" >Portfólio</a>
      <a href="contato.html">Contato</a> 
    </nav>

  </header>

  <section id="home">
    <div class="home-content">
      <h1>Sobre Mim</h1>
      <p>Olá! Meu nome é Pedro Eduardo, tenho <?php include_once 'idade.php'; echo $idade;?> anos, moro em Montes Claros. Sou um desenvolvedor <b>web</b> e <b>mobile</b> e tenho experiência em várias tecnologias.</p>
      <p>Minhas habilidades incluem:</p>
        <ul>
          <li>HTML</li>
          <li>CSS</li>
          <li>PHP</li>
          <li>Java</li>
          <li>SQL</li>
          <li>Word</li>
          <li>Excel</li>
          <li>PowerPoint</li>
        </ul>
      <p>Estou constantemente aprendendo e me atualizando com as últimas tendências e práticas de desenvolvimento. Adoro criar sites interativos e responsivos que proporcionam uma ótima experiência ao usuário.</p>
      <p>Além da programação, também tenho interesse em design de interface de usuário e usabilidade, buscando sempre criar soluções intuitivas e visualmente atraentes.</p>
      <p>Estou disponível para projetos desafiadores e oportunidades de trabalho. Se você precisa de um desenvolvedor experiente e dedicado, entre em contato comigo. Será um prazer trabalhar com você!</p>
  </div>
  </section>

</body>
</html>
