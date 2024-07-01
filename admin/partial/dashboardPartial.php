<aside>
                <ul>
                
                    <?php
                    if(isset($_SESSION["admin"])){
                        echo '
                        
                        <li class="LIdiff">
                        <a href="add-post.php"><i class="fa-solid fa-pen"></i></a>
                        <h5>Add Post</h5>
                    </li>
                    <li  onclick="function2()" class="active">
                        <a href="dashboard.php"><i class="fa-solid fa-pen-to-square"></i></i></a>
                        <h5>Manage Post</h5>
                    </li>
                    
                    <li onclick="function3()" class="LIdiff">
                        <a href="addUser.php" target=blank><i class="fa-solid fa-user-plus"></i></i></a>
                        <h5>Add User</h5>
                    </li>
                    <li  onclick="function4()" class="LIdiff active">
                        <a href="manageUser.php"><i class="fa-solid fa-pen"></i></a>
                        <h5>Manage Users</h5>
                    </li>
                    <li onclick="function5()" class="LIdiff">
                        <a href="addCategory.php"><i class="fa-solid fa-pen"></i></a>
                        <h5>Add Category</h5>
                    </li>
                    <li onclick="function6()" class="LIdiff">
                        <a href="manageCategory.php"><i class="fa-solid fa-bars"></i></a>
                        <h5>Manage Category</h5>
                    </li>
                        ';
                    }else{
                        echo '
                        <li onclick="function7()" class="LIdiff">
                        <a href="add-post.php"><i class="fa-solid fa-pen"></i></a>
                        <h5>Add Post</h5>
                    </li>
                    <li  onclick="function8()" class="active">
                        <a href="dashboard.php"><i class="fa-solid fa-pen-to-square"></i></i></a>
                        <h5>Manage Post</h5>
                    </li>
                        ';
                    }
                    
                    
                    ?>
                    
                  
                    
                </ul>
            </aside>