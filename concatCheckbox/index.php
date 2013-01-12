<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title></title>
        <style>
            
        </style>
        <script type="text/javascript">

            function addToTreatmentField(inputValue, idOut){
                if (document.getElementById(idOut).value.length > 1) {
                    document.getElementById(idOut).value += '/';
                    document.getElementById(idOut).value += inputValue.value;
                } else {
                    document.getElementById(idOut).value = inputValue.value;
                }
            }

            function removeFromTreatmentField(inputValue, idOut){
                var stringValue = document.getElementById(idOut).value;
                if (stringValue.indexOf(inputValue.value) >= 0) {
                    //alert(stringValue.indexOf(inputValue.value));
                    if (
                        stringValue.charAt(stringValue.indexOf(inputValue.value) - 1) == '/'
                    ) {
                        document.getElementById(idOut)
                                .value = stringValue.replace('/'+inputValue.value, '');

                    } else {
                        document.getElementById(idOut)
                                .value = stringValue.replace(inputValue.value, '');
                    }

                    if (document.getElementById(idOut).value.charAt(0) == '/') {
                        document.getElementById(idOut)
                                .value = document.getElementById(idOut)
                                                 .value
                                                 .replace(
                                                        document.getElementById(idOut)
                                                                .value
                                                                .charAt(0),
                                                        ''
                                                    );
                    }
                }
            }

            function isChecked(elem) {
                if (elem.checked) {
                    addToTreatmentField(elem, 'treatmentField');
                } else {
                    removeFromTreatmentField(elem, 'treatmentField');
                }
            }

        </script>
        
    </head>
    <body>
        <h3>concatCheckbox</h3>
        
        <input type="text" id="treatmentField" value="" 
               style="width: 500px;" />

        <br /><br />

        <input id="check1" type="checkbox" value="check 1" 
               onchange="isChecked(this)" />
        <label for="check1">Check 1</label>
        &nbsp;&nbsp;&nbsp;
        <input id="check2" type="checkbox" value="check 2" 
               onchange="isChecked(this)" />
        <label for="check2">Check 2</label>
        &nbsp;&nbsp;&nbsp;
        <input id="check3" type="checkbox" value="check 3" 
               onchange="isChecked(this)" />
        <label for="check3">Check 3</label>
        &nbsp;&nbsp;&nbsp;
        <input id="check4" type="checkbox" value="check 4" 
               onchange="isChecked(this)" />
        <label for="check4">Check 4</label>

    </body>
</html>