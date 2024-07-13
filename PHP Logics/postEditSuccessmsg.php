<?php

if(isset($_SESSION["updatePostSuccess"])){
    echo '
    <div class="alert_message_error_success alignment">
                    <P>
                        Post Updated Succesfully
                     </P>
                </div>
    ';
    unset($_SESSION["updatePostSuccess"]);
}
else if(isset($_SESSION["deletePostSuccess"])){
    echo '
    <div class="alert_message_error_success alignment">
                    <P>
                        Post Deleted Succesfully
                     </P>
                </div>
    ';
    unset($_SESSION["deletePostSuccess"]);

}
?>