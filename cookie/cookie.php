<?php
    if(isset($_GET['zoby']) && $_GET['zoby'] == "reset"){
        unset($_COOKIE['mon_cookie']);
    }
    
    /*
    création du cookie
    
    http://php.net/manual/fr/function.setcookie.php
    
    bool setcookie ( string $name [, string $value [, int $expire = 0 [, string $path [, string $domain [, bool $secure = false [, bool $httponly = false ]]]]]] )
    
    */
    
    if(isset($_COOKIE['mon_cookie']) && $_COOKIE['mon_cookie'] >= 1){
    
        //si le visiteur est déjà venu on incremente la valeur du cookie de 1
        $value = $_COOKIE['mon_cookie'] +1;
        
        setcookie("mon_cookie", $value, time()+3600);
    
    }
    else {
        
        //Si le visiteur vient la premiere fois on crée un cookie avec valeur 2
        $value = 2; // 2 parceque on ne peut afficher le cookie qu'a la prochaine visite
        
        setcookie("mon_cookie", $value, time()+3600);/* expire dans 1 heure */
    }
?>
<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>les cookies</title>
	
    <style type="text/css">
        #div_anim {
            display: none;
            position: absolute;
            width: 800px;
            height: 600px;
            top: 0px;
            left: 0px;
            z-index: 1000;
            border: 1px solid #880000;
            background-color: #FFE491;
        }
        #div_anim_contenu{
            height: 554px;
            margin: 10px;
            margin-bottom: 0px;
        }
        #div_anim_bottom {
            text-align: center;
            height: 25px;
            line-height: 25px;
            background-color: #fff;
        }
    </style>
    
    <script type="text/javascript" src="jQuery.js"></script>
    <script type="text/javascript" charset="utf-8">
        function reset(url){
            window.location = url;
        }
        
        $(document).ready(function(){
        //var contenu = "";
        
        /*positionnement de la div qui affiche l'anim*/
        if($.browser.opera) {
            windowHeight = window.innerHeight;
            windowWidth = window.innerWidth;
        }else{
            windowHeight = $(window).height();
            windowWidth = $(window).width();
        };
        
        var topPos = 0;
        var leftPos = 0;
        topPos = ( windowHeight - $("#div_anim").height() )/2;
        leftPos = ( windowWidth - $("#div_anim").width() )/2;
        /*fin positionnement*/
        
        function affichAnim(){
            $('#div_anim').css('display', 'block');
            $('#div_anim').css('top', topPos+"px");
            $('#div_anim').css('left', leftPos+"px");
            // Si tu veux mettre le contenu par javascript il faut decommenter var contenu plus haut et lui assigner une valeur
            //$('#div_anim').html(contenu);
        }
        function cacheAnim(){
        $('#div_anim').css('display', 'none');
        value = 2;
        setCookie("mon_cookie", value);
            // si on veut effacer le contenu de la div qui contient l'anim il faut decommenter ce qui suit
            //$('#div_anim').html('');
        }
        
        $("#div_anim_bottom").click(function(){
            cacheAnim();
        
            return false;
        });
        <?php
        echo (!isset($_COOKIE['mon_cookie']) or $_COOKIE['mon_cookie'] == 1) ? "affichAnim()" : "" ;
        ?>
        });
    </script>
	
</head>
<body>
    <!-- c'est la div qui contiendra l'animation //--> 
    <div id="div_anim">
        <div id="div_anim_contenu">
            <!-- c'est ici qu'il faut mettre le contenu (l'animation) //-->
            <h1>C'est ici qu'il y aura une Animation !</h1>
            <p>
                Ce code est largement optimisable (fait en 10 min), bien sûr, mais doit etre largement suffisant pour ce que tu as a faire.
                <br />
                Et oui ma gueule.....
            </p>
            <p>
                <input id='btn_reset' type='button' value='Recharger la page' onclick='javascript: reset("cookie.php");' />
            </p>
        <!-- Fin de l'animation //-->
        </div>
        <div id="div_anim_bottom" onclick='javascript: reset("cookie.php"); return false;'>
            <a href="">X Fermer l'animation</a>
        </div>
    </div>
    <!-- fin de la div animation //-->
    <div id="main">
        <h1>
            <?php 
            echo (isset($_COOKIE['mon_cookie']) && $_COOKIE['mon_cookie'] >> 1) ? "Un cookie est stocké" : "Aucun cookie !"; 
            ?>
        </h1>
        <p>
            <?php
            if (isset($_COOKIE['mon_cookie'])) { //Si le cookie est present
            
                echo "<h2>la valeur du cookie est ".$_COOKIE['mon_cookie']."</h2>";
            
                if ($_COOKIE['mon_cookie'] >> 1) {
                
                    echo "<p>";
                    echo "Vous visitez le site pour la ".$_COOKIE['mon_cookie']." ème fois !";
                    echo "</p>";
                
                }
                echo "<p>";
                    echo "<input id='btn_delete' type='button' value='Supprimer le cookie' onclick='javascript: reset(\"cookie.php?zoby=reset\");' />";
                    echo "<input id='btn_reset' type='button' value='Recharger la page' onclick='javascript: reset(\"cookie.php\");' />";
                echo "</p>";
            } else {
            
                echo "<h2>Aucun cookie n'est stocké sur votre ordinateur</h2>";
                echo "<p>";
                
                echo "en fait il est crée et stocké mais ne sera utilisé qu'a votre prochaine visite.<br /><br />";
                echo "Vous visitez le site pour la 1 ère fois !";
                echo "</p>";
                echo "<p>";
                echo "<input id='btn_reset' type='button' value='Recharger la page' onclick='javascript: reset(\"cookie.php\");' />";
                echo "</p>";
            }
            ?>
        </p>
    </div>

</body>
</html>
