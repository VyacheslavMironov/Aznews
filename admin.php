<?php require_once "./function/connect.php"; ?>
<?php require_once "./elements/header.php"; ?>

<main>
    <!-- Trending Area Start -->
    <div class="trending-area fix">
        <div class="container">
            <div class="trending-main">
                <!-- Trending Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-5 mx-auto card p-3">
                            <?php echo DB_DRIVER; ?>
                            <!-- 
                            <ul>
                                <li>
                                    <a href="#"></a>
                                </li>
                            </ul> 
                            -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require_once './elements/footer.php'; ?>