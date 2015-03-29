<?php $this->inc('elements/header.php'); ?>


<div id="slider_fond">
        <div class="row">
            <div class="w-12">
                <?php
                $a = new Area('diaporama');
                $a->display($c);
                ?>
            </div>
    <p class="clear"></p>        
        </div>
</div>
    
        
<div class="page">   
    <div class="row">
        <div class="w-12">               
            <?php
                $a = new Area('titre');
                $a->display($c);
            ?>                               
        </div>
    <p class="clear"></p>
    </div>
                
        <div class="row">
            <div class="w-4">
                <?php
                $a = new Area('colonne1');
                $a->display($c);
                ?>                      
            </div>
        
            <div class="w-4">
                <?php
                $a = new Area('colonne2');
                $a->display($c);
                ?>                      
            </div> 
    
            <div class="w-4">
                <?php
                $a = new Area('colonne3');
                $a->display($c);
                ?>                                    
            </div> 
          <p class="clear"></p>
          <br><hr>
        </div>    
    </div>
        
        
    <div class="reseaux">
        <div class="row">
            <div class="w-4">
                <?php
                $a = new Area('social');
                $a->display($c);
                ?>                      
            </div>
        
            <div class="w-4">
                <?php
                $a = new Area('contact');
                $a->display($c);
                ?>                      
            </div> 
    
            <div class="w-4">
                <?php
                $a = new Area('actu');
                $a->display($c);
                ?>                      
            </div> 
          <p class="clear"></p>
        </div>               
    </div>
    
<?php $this->inc('elements/footer.php'); ?>