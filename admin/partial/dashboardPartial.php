<aside>
                <ul>
                
                    <?php
                    if(isset($_SESSION["admin"])){
                        echo '
                        <li class="LIdiff">
                        <a href="add-post.php"><i class="fa-solid fa-pen"></i></a>
                        <h5>Add Post</h5>
                    </li>
                    <li class="active">
                        <a href="dashboard.php"><i class="fa-solid fa-pen-to-square"></i></i></a>
                        <h5>Manage Post</h5>
                    </li>
                    <li class="LIdiff">
                        <a href="addUser.php"><i class="fa-solid fa-user-plus"></i></i></a>
                        <h5>Add User</h5>
                    </li>
                    <li class="LIdiff active">
                        <a href="manageUser.php"><i class="fa-solid fa-pen"></i></a>
                        <h5>Manage Users</h5>
                    </li>
                    <li class="LIdiff">
                        <a href="addCategory.php"><i class="fa-solid fa-pen"></i></a>
                        <h5>Add Category</h5>
                    </li>
                    <li class="LIdiff">
                        <a href="manageCategory.php"><i class="fa-solid fa-bars"></i></a>
                        <h5>Manage Category</h5>
                    </li>
                        ';
                    }else{
                        echo '
                        <li class="LIdiff">
                        <a href="add-post.php"><i class="fa-solid fa-pen"></i></a>
                        <h5>Add Post</h5>
                    </li>
                    <li class="active">
                        <a href="dashboard.php"><i class="fa-solid fa-pen-to-square"></i></i></a>
                        <h5>Manage Post</h5>
                    </li>
                        ';
                    }
                    
                    
                    ?>
                    
                  
                    
                </ul>
            </aside>