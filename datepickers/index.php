<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title></title>
        <link rel="stylesheet" type="text/css" href="pikaday.css" />
        <style>
            
        </style>
        <script type="text/javascript" src="jQuery.js"></script>
        <script type="text/javascript" src="pikaday.jquery.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                // activate datepickers for all elements with a class of `datepicker`
                $('#pickaday').pikaday({
                    firstDay: 1,
                    i18n: {
                        months        : ['January','February','March','April','May','June','July','August','September','October','November','December'],
                        weekdays      : ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'],
                        weekdaysShort : ['Sun','Mon','Tue','Wed','Thu','Fri','Sat']
                    }
                });

                // chain a few methods for the first datepicker, jQuery style!
                //$('#pickaday').eq(0).pikaday('show').pikaday('gotoYear', 2042);
            });
        </script>
    </head>
    <body>
    <?php
    
    ?>  <h3>Pickaday</h3>
        <form>
            <input id="pickaday" type="text" value="" />
        </form>
    </body>
</html>
