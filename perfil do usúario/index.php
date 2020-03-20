<html>
    <head>
        <style>
            body{
                background-color: #ffff99;
                text-align: center;
            }
            img{
                width:200px;
                height:200px;

            }
         </style>
    </head>
    <body>
        <?php   
                $v1 = array( 
                    'img' => 'https://i.ya-webdesign.com/images/vector-avatars-human-5.png',
                    'nome' => '<b>Nome:</b> Micaelle',
                    'apelido' => '<b>Apelido:</b> Mica',
                    'idade' => '<b>Idade:</b> 17 anos',
                    'endereço' => array ('Rua Castro Alves', 'Mutans', 'Guanambi'),
                    'curso' => '<b>Curso:</b> Técnico em Informática para internet',
                    
                    

                    
                 );
                 echo('<br>');
                 echo( '<h1> <b>Perfil do usúario</b></h1>');
                 echo('<br>');
                 echo('<img src=' . $v1['img'] .'>');
                 echo('<br>');
                 echo($v1[ 'nome']); 
                 echo('<br>');
                 echo($v1[ 'apelido']);
                 echo('<br>');
                 echo($v1['idade']) ;
                 echo('<br>');
                 echo('<b>Endereço:</b> ');
                 echo('<br>');
                 echo('<b>Rua:</b> '.$v1['endereço'][0]);
                 echo('<br>');
                 echo('<b>Distrito:</b>'.$v1['endereço'][1]);
                 echo('<br>');
                 echo('<b>Cidade:</b>'.$v1['endereço'][2]);
                 echo('<br>');
                 echo($v1['curso']);
                 echo('<br>');
                 



        ?>

      

    </body>
</html>