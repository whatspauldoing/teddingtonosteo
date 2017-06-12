            <div class="container grey-top content" style='margin-top:20px;'>
                <div class="row accreditations">
                    <div class="col-md-1"></div>
                    <div class="col-md-2 center-accred">
                        <img src='/wp-content/uploads/2015/10/GOs-reg-MAIN1.jpg' class='accred' />
                    </div>
                    <div class="col-md-2 center-accred">
                        <img src='/wp-content/uploads/2012/11/smae-institute-logo.png' class='accred' />
                    </div>        
                    <div class="col-md-2 center-accred">
                        <img src='/wp-content/uploads/2016/04/HPC_reg-logo_CMYK.jpg' class='accred' />
                    </div>      
                    <div class="col-md-2 center-accred">
                        <img src='/wp-content/uploads/2017/03/IRSM-logo-300w.png' class='accred' />
                    </div>    
                    <div class="col-md-2 center-accred">
                        <img src='/wp-content/uploads/2016/04/societychiropodists_1.png' class='accred' />
                    </div>   
                    <div class="col-md-1"></div>
                </div>
            </div>
        </div>
        <script>
            jQuery(document).ready(function() {
                jQuery("ul.sub-menu").append("<div class='clearfix'></div>");
                jQuery(".menu-item").mouseover(function() {
                    jQuery(".sub-menu").css("display","none");
                });
                jQuery(".menu-item-has-children").mouseover(function() {
                    jQuery(".sub-menu").css("display","none");
                    jQuery(this).find(".sub-menu").css("display","block");
                    jQuery(this).find(".sub-menu").css("left",jQuery(this).position().top);
                    jQuery(this).find(".sub-menu").css("left",jQuery(this).position().left);
                });
                jQuery(".sub-menu").mouseout(function() {
                    jQuery(this).css("display","none");
                });  
                jQuery("hr").before("<div class='clearfix'></div>");          
                jQuery(".content > h1").each(function() {
                    from = parseInt(jQuery(this).nextAll("hr:first").position().top); 
                    to = parseInt(jQuery(this).position().top);
                    newHeight = from - to;
                    jQuery(this).height(newHeight);
                });                
            });
        </script>
        <?php wp_enqueue_script("jquery"); ?>
        <?php wp_footer(); ?>
    </body>
</html>