<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['send'])){
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' 
   AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');

   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'Mensagem já enviada!';
   }else{
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES 
      ('$name','$email','$number','$msg')") or die('query failed');
      $message[] = 'Mensagem enviada com sucesso!';
   }

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Design de site de portfólio pessoal responsivo completo</title>
   <!-- font awesome cdn link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">


   <!-- aos css link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

   <!-- Custom css file link -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" data-aos="zoom-out">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>
<!-- header section starts -->

<header class="header">


   <div id="menu-btn" class="fas fa-bars"></div>

   <a href="#home" class="logo">Portifolio</a>

   <nav class="navbar">
      <a href="#home" class="active">home</a>
      <a href="#about">sobre</a>
      <a href="#services">seviços</a>
      <a href="#portfolio">portifólio</a>
      <a href="#contact">contato</a>
   </nav>

   <div class="follow">
      <a href="#" class="fab fa-facebook-f"></a>
      <a href="#" class="fab fa-twitter"></a>
      <a href="#" class="fab fa-instagram"></a>
      <a href="#" class="fab fa-linkedin"></a>
      <a href="#" class="fab fa-github"></a>
   </div>
</header>
<!-- header section ends -->

<!-- home section starts -->

<section class="home" id="home">

   <div class="image" data-aos="fade-right">
      <img src="images/users-img.jpg" alt="">
   </div>

   <div class="content">
      <h3 data-aos="fade-up">Olá, eu sou Luan Aleixo!</h3>
      <span data-aos="fade-up">Desenvolvedor e Web Designer</span>
      <p data-aos="fade-up">Segue abaixo agumas informações sobre mim</p>
      <a data-aos="fade-up" href="#about" class="btn">Sobre mim</a>
   </div>

</section>
<!-- home section ends -->

<!-- about section starts -->
<section class="about" id="about">
   <h1 class="heading" data-aos="fade-up"> <span>biografia</span> </h1>

   <div class="biography">

      <p data-aos="fade-up">Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
         Asperiores id atque voluptatibus numquam autem eos cum beatae.</p>

      <div class="bio">
         <h3 data-aos="zoom-in"><span>nome : </span> Luan Aleixo</h3>
         <h3 data-aos="zoom-in"><span>email : </span> almeidaluan631@gmail.com</h3>
         <h3 data-aos="zoom-in"><span>endereço : </span> Rio de Janeiro, Brasil</h3>
         <h3 data-aos="zoom-in"><span>telefone : </span> +55 2197954-7284</h3>
         <h3 data-aos="zoom-in"><span>idade : </span> 31 anos</h3>
         <h3 data-aos="zoom-in"><span>experiência : </span> + 2 anos</h3>
      </div>

      <a href="#" class="btn" data-aos="fade-up">Download CV</a>
   </div>

   <div class="skills" data-aos="fade-up">

      <h1 class="heading"> <span>Skills</span> </h1>

      <div class="progress">
         <div class="bar" data-aos="fade-left"><h3><span>HTML</span><span> 90%</span></h3></div>
         <div class="bar" data-aos="fade-right"><h3><span>CSS</span><span> 80%</span></h3></div>
         <div class="bar" data-aos="fade-left"><h3><span>JavaScript</span><span> 60%</span></h3></div>
         <div class="bar" data-aos="fade-right"><h3><span>React</span><span> 50%</span></h3></div>
         <div class="bar" data-aos="fade-left"><h3><span>NodeJS</span><span> 50%</span></h3></div>
         <div class="bar" data-aos="fade-right"><h3><span>PHP</span><span> 80%</span></h3></div>
         <div class="bar" data-aos="fade-left"><h3><span>Python</span><span> 80%</span></h3></div>

      </div>

   </div>


   <div class="edu-exp">

      <h1 class="heading" data-aos="fade-up"><span>Educação e Experiência</span></h1>

      <div class="row">
         <div class="box-container">

            <h3 class="title" data-aos="fade-right">Educação</h3>

            <div class="box" data-aos="fade-right">
               <span>(2019 - 2020)</span>
               <h3>Desenvolvedor web</h3>
               <p>Curabitur ut interdum sapien. Nam quis viverra lorem. 
                  Donec quis posuere ante, quis sollicitudin eros.</p>
            </div>
            
            <div class="box" data-aos="fade-right">
               <span>(2020 - 2021)</span>
               <h3>Web Designer</h3>
               <p>Curabitur ut interdum sapien. Nam quis viverra lorem. 
                  Donec quis posuere ante, quis sollicitudin eros.</p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>(2021 - 2022)</span>
               <h3>Desenvolvedor Full-stack</h3>
               <p>Curabitur ut interdum sapien. Nam quis viverra lorem. 
                  Donec quis posuere ante, quis sollicitudin eros.</p>
            </div>

         </div>

         <div class="box-container">

            <h3 class="title" data-aos="fade-left">Experiência</h3>

            <div class="box" data-aos="fade-left">
               <span>(2019 - 2020)</span>
               <h3>Desenvolvedor Front-end</h3>
               <p>Curabitur ut interdum sapien. Nam quis viverra lorem. 
                  Donec quis posuere ante, quis sollicitudin eros.</p>
            </div>
            
            <div class="box" data-aos="fade-left">
               <span>(2020 - 2021)</span>
               <h3>Desenvolvedor Back-end</h3>
               <p>Curabitur ut interdum sapien. Nam quis viverra lorem. 
                  Donec quis posuere ante, quis sollicitudin eros.</p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>(2021 - 2022)</span>
               <h3>Desenvolvedor Full-stack</h3>
               <p>Curabitur ut interdum sapien. Nam quis viverra lorem. 
                  Donec quis posuere ante, quis sollicitudin eros.</p>
            </div>

         </div>

      </div>   
   </div>
</section>
<!-- about section ends -->

<!-- service section starts -->

<section class="services" id="services">

   <h1 class="heading" data-aos="fade-up"><span>serviços</span></h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-code"></i>
         <h3>Desenvolvimento web</h3>
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Suspendisse quis accumsan leo. Donec eu lorem in ante 
            sollicitudin semper vitae at magna.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-paint-brush"></i>
         <h3>Web Designer</h3>
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Suspendisse quis accumsan leo. Donec eu lorem in ante 
            sollicitudin semper vitae at magna.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fab fa-bootstrap"></i>
         <h3>bootstrap</h3>
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Suspendisse quis accumsan leo. Donec eu lorem in ante 
            sollicitudin semper vitae at magna.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-chart-line"></i>
         <h3>seo marketing</h3>
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Suspendisse quis accumsan leo. Donec eu lorem in ante 
            sollicitudin semper vitae at magna.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-bullhorn"></i>
         <h3>Marketing digital</h3>
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Suspendisse quis accumsan leo. Donec eu lorem in ante 
            sollicitudin semper vitae at magna.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fab fa-wordpress"></i>
         <h3>Wordpress</h3>
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Suspendisse quis accumsan leo. Donec eu lorem in ante 
            sollicitudin semper vitae at magna.</p>
      </div>

   </div>

</section>

<!-- service section ends -->

<!-- portifolio section starts -->

<section class="portfolio" id="portfolio">

   <h1 class="heading" data-aos="fade-up"> <span>portifólio</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <img src="images/img-1.jpg" alt="">
         <h3>Desenvolvimento Web</h3>
         <span>( 2020 - 2022)</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img-2.jpg" alt="">
         <h3>Desenvolvimento Web</h3>
         <span>( 2020 - 2022)</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img-3.jpg" alt="">
         <h3>Desenvolvimento Web</h3>
         <span>( 2020 - 2022)</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img-4.jpg" alt="">
         <h3>Desenvolvimento Web</h3>
         <span>( 2020 - 2022)</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img-5.jpg" alt="">
         <h3>Desenvolvimento Web</h3>
         <span>( 2020 - 2022)</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img-6.jpg" alt="">
         <h3>Desenvolvimento Web</h3>
         <span>( 2020 - 2022)</span>
      </div>

   </div>

</section>

<!-- portifolio section ends -->

<!-- contact section starts -->

<section class="contact" id="contact">

   <h1 class="heading" data-aos="fade-up"> <span>Entre em Contato</span> </h1>

   <form action="" method="post">
      <div class="flex">
         <input data-aos="fade-right" type="text" name="name" placeholder="Seu nome" class="box" required>
         <input data-aos="fade-left" type="email" name="email" placeholder="Seu e-mail" class="box" required>
      </div>
      <input data-aos="fade-up" type="number" min="0" name="number" placeholder="Seu número" class="box" required>
      <textarea data-aos="fade-up" name="message" class="box" required placeholder="Digite sua mensagem" cols="30" rows="10"></textarea>
      <input type="submit" data-aos="zoom-in" value="Enviar mensagem" name="send" class="btn">
   </form>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-phone"></i>
         <h3>Telefone</h3>
         <p>+55 (21)97954-7285</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-envelope"></i>
         <h3>E-mail</h3>
         <p>almeidaluan631@gmail.com</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-map-marker-alt"></i>
         <h3>Endereço</h3>
         <p>Rio de Janeiro/RJ - Brasil</p>
      </div>

   </div>

</section>

<!-- contact section ends -->

<div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>Luan Developer</span> </div>
























<!-- custom js file link -->
<script src="js/script.js"></script>

<!-- aos js link -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

   AOS.init({
      duration:800,
      delay:300
   });

</script>

</body>
</html>