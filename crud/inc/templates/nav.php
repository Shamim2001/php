<div>
    <div class="float-left">
        <p>
            <a href="index.php?task=report">All Students</a> |
            <a href="index.php?task=add">Add New Students</a> 
            <?php
            if (isAdmin()):
            ?>
            |
            <a href="index.php?task=seed">Seed</a>
            <?php
            endif;
            ?>
        </p>
    </div>

    <div class="float-right">
        <?php
        if (!$_SESSION['loggedin']):
        ?>
        <a href="crud/login.php">login</a>
        <?php
        else:
        ?>
        <a href="index.php">LOG OUT</a>
        <?php
        endif;
        ?>
    </div>
</div>