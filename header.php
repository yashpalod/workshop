<div class="container">
    <div class="jumbotron" style="background-color: #CF9; padding:20px;">
        <div class="container text-left" style="background-color: maroon; padding-top:20px;">
            <img src="admin/image/bg.jpg" alt="" class="img-circle" width="200" height="135" align="left" />
            <h1>
                <font color="ffff33">My Website</font>
            </h1>
            <div class="col-md-12 text-right text-primary">
                <font color=#FFFFFF>
                    <marquee direction="right" behavior="scroll">
                        <?php
                        if (isset($_SESSION['USNM'])) {
                            echo "welcome " . $_SESSION['USNM'];
                        }
                        ?>
                    </marquee>
                </font>
            </div>
        </div>
    </div>
</div>