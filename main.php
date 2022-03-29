<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Практическая работа </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div class="container">

        <div class="header">     
               <?php include 'menu.php' ?>	   
        </div>       
     
        <div class="about_me">
         
          <h1>  <?php  echo $p  ?> </h1>

            <div class="knowledge">
                                   
                    <?php  include 'knowledge.php'; ?>
                    <?php   echo $a, ' ', $b, ' ', $c; ?> <br>
                                       
            </div>
			
			 <div>
                <div class="img">
                    <?php  echo '<img src="/img/0e81460d0ea4eaf9466790bbdcd0dcf0.jpg">'; ?>                    
                </div>

                <div class="info">
                    <p> Меня зовут 
                    <?php echo $name, ' ', $surname . '<br>'; 
                          echo 'город', ' ', $city; ?>                                      
                    </p> 
           
                    <p> Мне
                    <?php  echo $age;   ?>          
                    лет </p>
                    <p> Изучил html разметку, css стили, создание переменных и работа с ними в js и php </p>
                </div>
            </div>

        </div>

    </div>


</body>
</html>
