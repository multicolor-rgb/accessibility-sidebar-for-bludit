
<link rel="stylesheet" href="<?php echo $this->domainPath();?>css/helpAccesibility.css">

<ul class="ha-menu <?php echo $this->getValue('position');?>">
    <li>
        <span><?php echo $this->getValue('highcontrast');?></span> <button class="ha-contrast first"><img src="<?php echo $this->domainPath();?>img/contrast.svg" alt=""></button>

    </li>
    <li><span><?php echo $this->getValue('Grayscalelabel');?></span><button class="ha-grayscale"><img src="<?php echo $this->domainPath();?>img/drop.svg" alt=""></button>
    </li>
    <li><span><?php echo $this->getValue('zoomlabel');?></span><button class="ha-text last"><img src="<?php echo $this->domainPath();?>img/text.svg" alt=""></button></li>

</ul>


<script src="<?php echo $this->domainPath();?>js/helpAccesibility.js"></script>