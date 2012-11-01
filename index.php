<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>C2CAMAURY | INDEX</title>
    <link rel="stylesheet" type="text/css" href="c2camaury.css" />
</head>
<body>
    <div id="header">
        <div id="div_logo">

        </div>
        <!--<h1 id="h1_sitename">C2CAMAURY</h1>-->
        <div class="clearfix"></div>
    </div>
    <div id="main">
        <h3>Dossiers de test :</h3>
        <div id="div_list_test">
            <table>
            <?php
            date_default_timezone_set('Europe/Paris');
            $dossier = './';
            if (is_dir($dossier)) {
                if ($opDossier = opendir($dossier)) {
                    $i = 0;
                    while (($fichier = readdir($opDossier)) !== false) {
                        $oddEvenColor = ($i % 2 == 0) ? 'even' : 'odd';
                        if ($fichier != 'nbproject' && strpos($fichier, '.') !== 0) {
                            if(is_dir($fichier)) {
                                $cheminFichier = $dossier.$fichier;
                                //echo $cheminFichier . '<br />' . PHP_EOL;
                                echo '<tr class="'. $oddEvenColor .'">';
                                echo '<td class="td_list_test0">';
                                echo ($i+1) .' - <a href="'. $fichier . '/">'
                                        . $fichier .'</a></td><td class="td_list_test1">crée le : '
                                        . date("d/m/Y-H:i:s", filectime($fichier));
                                echo '</td>';
                                echo '</tr>';
                                $i ++;
                            }
                        }

                    }
                }
            }
            ?>
            </table>
        </div>
    </div>
    <div id="footer">

    </div>
</body>
</html>
