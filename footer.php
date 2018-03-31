<footer class="sticky-footer">
            <div class="container">
                <div class="text-center">
                    <small>BVICAM_007 2018 </br> 
                            <?php 
                                    if($_COOKIE["language"]=="english") {
                            ?>
                            भाषा बदलें: <a href="/switch.php?ln=hi">हिंदी </a>
                            <?php
                        }
                        else{
            
                                ?>
                                Change Language: <a href="/switch.php?ln=en">English </a>
                                <?php
                        }
                        ?>
                                </small>
                </div>
                
            </div>
        </footer>