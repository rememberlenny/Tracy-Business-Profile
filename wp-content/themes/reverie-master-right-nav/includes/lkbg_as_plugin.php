<?php

/*-------------------------------------------------------------------------------------

TABLE OF CONTENTS

- Style GForm Button 

-------------------------------------------------------------------------------------*/


//
// Styles GForm Button
//

add_filter("gform_submit_button", "form_submit_button", 10, 2);
function form_submit_button($button, $form){
    return "<input type='submit' id='gform_submit_button_{$form["id"]}' class='button gform_button radius small success' value='Submit' tabindex='7'>";
}


?>