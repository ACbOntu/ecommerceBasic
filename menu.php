
                        <li><a href="index.php">Home</a></li>
							<li><a href="products.php">Products</a></li>
							<li><a href="">About</a></li>
							<li><a href="">Contact</a></li>
                            
     
                            
                            <?php session_start();
        
        if(isset($_SESSION['name'])) { ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['name'];?></a>
              <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="logout.php">Logout</a>
                
              </div> -->
            
            </li>
                <?php } else{ ?>
                    <li><a href="account.php">Accounts</a></li>
        <?php } ?>