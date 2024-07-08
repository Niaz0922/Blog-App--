<?php if(isset($_SESSION["editcatSuccess"])){
        echo '
                <div class="alert_message_error_success alignment">
                    <P>
                        Category Updated Succesfully
                     </P>
                </div>
        ';
        unset($_SESSION['editcatSuccess']);
    }else if(isset($_SESSION["deleteCat"])){
        echo '
        <div class="alert_message_error_success alignment">
            <P>
                Category Deleted Succesfully
             </P>
        </div>
';
    unset($_SESSION['deleteCat']);
    }else if(isset($_SESSION["addedCat"])){
        echo '
        <div class="alert_message_error_success alignment">
            <P>
                Category Added Succesfully
             </P>
        </div>
';
    unset($_SESSION['addedCat']);
    }
          
    ?>

    