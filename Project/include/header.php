<header>
            <div class="logo">
                <a href="./../index.php">
                    <img src="./../photo/logo.svg" width="320px" height="90px">
                </a>
            </div>
            <div class="info">
                <div class="phone">
                    <img src="./../photo/phone.png" width="30px" height="30px"> <p>+7 777 777 77 77</p>
                </div>
                <div class="hours">
                    <img src="./../photo/hours.png" width="30px" height="30px"><p>9:00 – 21:00</p>
                </div>
            </div>
            <div class="polzovateli">
            <div class="lk">
                <a href="./../scripts/test.php" class="lka">
                    <img src="./../photo/lk.svg" width="30px" height="30px"><p><?php
                    if(isset($_SESSION['logged']) == true){
                        echo $_SESSION['login'];
                    }
                    else{
                        echo 'Личный кабинет';
                    }
                    ?>
                    </p>
                </a>
            </div>
            <div class="mess">
                <a href="./../scripts/adress.php" class="messa">
                    <img src="./../photo/adress.svg" width="30px" height="30px"><p>
                        <?php
                        if(isset($_SESSION['adress']) == true){
                            echo $_SESSION['adress'];
                        }
                        else{
                            echo 'Укажите в ЛК';
                        }
                        ?>
                    </p>
                </a>
            </div>
            </div>
        </header>