<header>
    <h2 class="logo"><a href="/cnpm/login.html"><img = src="logobk.png"></h2></a>
    <nav class="navigation">
        <a href="/cnpm/home.php">Home</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Contact</a>
        <a href="/cnpm/login.php"><button class="btnLogin-popup" style=
            <?php 
                if(isset($_SESSION['username'])){
                    echo "'display: none'";
                }
                else echo "";
            ?>
            >Login</button></a>
        <div class="header-username" style=
            <?php
                if(!isset($_SESSION['username'])){
                    echo "'display: none'";
                }else echo "";
            ?>
        >
            <?php 
                if(isset($_SESSION['username'])){
                    echo "hello " . $_SESSION['username'];
                }
            ?>
            <a href="logout.php" style=
            <?php
                if(!isset($_SESSION['username'])){
                    echo "'display: none'";
                }else echo "";
            ?>
            >
                <?php
                    if(isset($_SESSION['username'])){
                        echo "logout";
                    }
                ?>
            </a>
        </div>
    </nav>
</header>