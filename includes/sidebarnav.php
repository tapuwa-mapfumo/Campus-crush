<div class="sidebar-nav">
        <nav>
            <ul>
                <div <?php if ($page == 'home'){ echo 'class="active"';} ?>> 
                    <a href="../index/index.php" class='nav-a'> <?php if ($page == 'home'){ echo '<span></span>';} ?>
                       <span></span><span></span>  <li> Home</li>
                    </a>
                </div>
                <div <?php if ($page == 'linkups'){ echo 'class="active"';} ?>>
                    <a href="../linkups/linkups.php" class="nav-a"><?php if ($page == 'linkups'){ echo '<span></span>';} ?>
                        <span></span><span></span><li>Link Ups</li>
                    </a>
                </div>
                <div <?php if ($page == 'hot'){ echo 'class="active"';} ?>>
                    <a href="../Hot/hots.php" class="nav-a"><?php if ($page == 'hot'){ echo '<span></span>';} ?>
                        <span></span><span></span><li>Thrilling</li>
                    </a>
                </div>
                <div <?php if ($page == 'bookmarks'){ echo 'class="active"';} ?>>
                    <a href="../bookmarks/bookmarks.php" class="nav-a"><?php if ($page == 'bookmarks'){ echo '<span></span>';} ?>
                        <span></span><span></span><li>Bookmarks</li>
                    </a>
                </div>
                <?php if($userLogged){ ?>
                <div <?php if ($page == 'profile'){ echo 'class="active"';} ?>>
                    <a href="../userProfile/profileUserCurrent.php" class='nav-a'>
                    <span></span><span></span><li>Profile</li> <?php if ($page == 'profile'){ echo '<span></span>';} ?><?php if ($page == 'profile'){ echo '<span></span>';} ?>
                    </a>
                 </div>
                 <?php } ?>
             
            </ul>
        </nav>
    </div>