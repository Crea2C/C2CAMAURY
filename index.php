<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>C2CAMAURY | INDEX</title>
        
        <link rel="stylesheet" type="text/css" href="c2camaury.css" />
        
    </head>
    <body>
        <div id="header">
            <div id="div_logo">
                <img src="logo_hdr-a.png" />
            </div>
            <h1 id="h1_sitename">C2CAMAURY : Un projet pour les boulets !</h1>
            <div class="clearfix"></div>
        </div>
        <div id="main">
            <h3>Projets :</h3>
            <div id="div_list_test">
                <ul id="ul_main_nav">
                <?php
                $dossier = './';
                if (is_dir($dossier)) {
                    if ($opDossier = opendir($dossier)) {
                        $b = 0;
                        $a = 0;
                        while (($fichier = readdir($opDossier)) !== false) {
                            if ($fichier != '..' && $fichier != '.' && $fichier != '.DS_Store' && substr($fichier, 0, 1) != '.') {
                                if(is_dir($fichier)) {
                                    $cheminFichier = $dossier.$fichier;
                                    //echo $cheminFichier . '<br />' . PHP_EOL;
                                    echo '<li class="li_main_nav"><a href="'. $fichier . '/">'. $fichier .'</a></li>' . PHP_EOL;
                                }
                                
                            }
                        }
                    }
                }
                ?>
                </ul>
            </div>
        </div>
        <div id="footer">
        
        </div>
	</body>
</html>
