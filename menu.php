<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Workshop</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="product.php">Product</a></li>
            <li><a href="#">Page 2</a></li>
            <li>
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                        Category
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="addcategory.php">Add</a></li>
                        <li><a href="viewcategory.php">View</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                        Product
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="addproduct.php">Add</a></li>
                        <li><a href="viewproduct.php">View</a></li>
                    </ul>
                </div>
            </li>

            <li>
                <?php
                session_start();
                if (isset($_SESSION['CUNM'])) {
                    echo '<a href="logout.php?logout">Logout</a>';
                } else {
                    echo '<a href="login.php?login">Sign In/Sign up</a>';
                }
                ?>
            </li>

        </ul>
    </div>
</nav>