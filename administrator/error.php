 <?php 
                                    if(isset($_SESSION['msg'])){?>
                                    <div class="alert alert-success"><?= $_SESSION['msg']?></div>
                                <?php unset($_SESSION['msg']);}?>