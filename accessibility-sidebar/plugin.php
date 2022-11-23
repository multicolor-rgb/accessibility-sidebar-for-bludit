<?php
    class pluginHello extends Plugin {

        public function init()
        {
            $this->dbFields = array(
                'highcontrast'=>'',
                'Grayscalelabel'=>'',
                'zoomlabel'=>'',
                'position'=>''
              
            );
        }

        public function form() {
        
            $html = '
            
            <label>High Contrast Label</label>
            <input type="" placeholder="High Contrast Label" class="form-control" value="'.$this->getValue('highcontrast').'" name="highcontrast">
            
         
            <label>Grayscale Label</label>
            <input type="" placeholder="Grayscale Label" class="form-control" value="'.$this->getValue('Grayscalelabel').'" name="Grayscalelabel">

           
            <label>Bigger font Label</label>
            <input type="" placeholder="Bigger font Label" class="form-control" value="'.$this->getValue('zoomlabel').'" name="zoomlabel">



            <label> Choose position</label>
            <select name="position">
            <option value="ha-menu-left" '.($this->getValue('position')== 'ha-menu-left' ?"selected":"").'>left</option>
            <option value="" '.($this->getValue('position') !== 'ha-menu-left' ?"selected":"").'>right</option>
            </select>


            <div class="shadow-sm bg-light border text-dark" style="padding:20px;text-align:center;box-sizing:border-box;margin-top:20px;" id="paypal">

<p>buy me ☕ if you like my plugin:) </p>

<a target="_blank" href="https://www.paypal.com/donate/?hosted_button_id=TW6PXVCTM5A72">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif"  />
</a>


</div>

            ';

            return $html;

        }

        public function siteBodyBegin(){

            include($this->phpPath().'php/frontToolbar.php');
            
        }

    }
?>