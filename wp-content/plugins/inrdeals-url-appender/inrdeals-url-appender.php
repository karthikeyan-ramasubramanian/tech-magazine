<?php
/*
Plugin Name:INRDeals - All in One Auto Affiliate Linker
Plugin URI: https://wordpress.org/plugins/inrdeals-url-appender
Description: INRDeals-All in One Auto Affiliate Linker plugin replaces any link with your custom affiliate link automatically.
Version: 5.0
Author: INRDEALS
Author URI: http://inrdeals.com
License: GPL2
*/
?>
<?php
function add_inrupp_script(){
    wp_enqueue_script( 'jquery' );
}
function add_inrupp_style(){
		wp_enqueue_style( 'inrupp_style', plugin_dir_url( __FILE__ ) . 'css/style.css' );
		wp_enqueue_script( 'inrupp_style', plugin_dir_url( __FILE__ ) . 'js/script.js' );
		wp_enqueue_style( 'inrupp_jquery_ui_styles', plugin_dir_url( __FILE__ ) . 'css/jquery-ui.css' );
		wp_enqueue_script('jquery-ui-tabs');
		wp_enqueue_script('jquery-ui-sortable');
}
function inrupp_myscript()
{
    ?>
<script src= "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                        <script type="text/javascript" >
                            var subID = '<?php echo $GLOBALS['inrupp_new_url']; ?>';
                            (function(d, t) {
                                var script   = document.createElement("script");script.type  = "text/javascript";
                                script.async = true;script.src   = 'https://cdn.jsdelivr.net/gh/inrdeals/inrdeals-js@latest/inrdeals.js';
                                document.body.appendChild(script);
                            }());
                        </script>
<?php
    }
function inrupp_fetchurl()
{

    global $wpdb;
	// creates my_table in database if not exists
    $table = $wpdb->prefix . "inrupp_appender_db";
    $charset_collate = $wpdb->get_charset_collate();
    $sql = "CREATE TABLE IF NOT EXISTS $table (
        `id` mediumint(9) NOT NULL AUTO_INCREMENT,
        `name` text NOT NULL,`idstatus` text not null,
    UNIQUE (`id`)
    ) $charset_collate;";
    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );
    global $inrupp_new_url;
    $active='active';
    $myrow = $wpdb->get_results("select * from $table where idstatus= '$active' " ,OBJECT);
	if($myrow == null)
	{
		$wpdb->insert( 
            $table, 
            array(
                'name' => 'inrdeals',
                'idstatus'=>'active'
            )
        );
	}
	else
	{
		foreach ($myrow as $dat)
        {
          $newurl = $dat->name;
          $inrupp_new_url = $newurl;
        }
	}
}
function inrupp_plugin_menu() {
  add_menu_page( 'INRDeals', 'INRDeals', 'manage_options', 'my-inrupp-slider-identifier', 'inrupp_menu' );
}
function inrupp_menu() {
  if ( !current_user_can( 'manage_options' ) )  {
    wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
  }
    global $wpdb;
    $table = $wpdb->prefix . "inrupp_appender_db";
    $rows = $wpdb->get_results("select * from $table where idstatus= 'active'",OBJECT);
echo '
<div id="tabs">
    <ul>
        <li><a href="#tabs-1">INRDeals Username</a>
        </li>
        <li><a href="#tabs-2">Dynamic Ad Code</a>
        </li>
		<li><a href="#tabs-3">Deals Page Code</a>
        </li>
        <li><a href="#tabs-4">INRDeals Help</a>
        </li>
    </ul>
    <div id="tabs-1">
		<!-- Form Module-->
			<div class="padding-top-50">
			<div class="module form-module margin-bottom-50">
				<div class="toggle">
				</div>
				<div class="form">';
				echo '<img class="imgctr" src="' . plugins_url( 'img/inrdeals.png', __FILE__ ) . '" > ';
		echo '
					<h2 class="padding-top-10">Enter Your INRDeals Username here</h2>
					<form method="post">
					';
					wp_nonce_field('inrdeals_take_subids');
					echo '
					<input type="text" placeholder="Enter INRDeals Username" name="url" maxlength="25" required/>
					<button name="url_add">Submit</button><br>
					</form>
			</div>
			<div class="cta"><span>Your Current INRDeals Username is : 

    ';
		foreach ($rows as $dat)
        {
            echo $dat->name;
        }
    echo '</span> <strong><a href="#" id="help" style="text-decoration:none;text-shadow: 0px 1.5px 0px #8b8ebc; float:right;color:#0f177a;">Get Started</a></strong>
            </div>
		</div>   
			</div>
		
			</div>
			<div id="tabs-2">
				
				<div class="padding-top-50">
			<div class="module form-module margin-bottom-50" style="max-width:1200px;">
				<div class="toggle">
				</div>
				<div class="form">';
				echo '<img style="padding-left:450px;" class="imgctr" src="' . plugins_url( 'img/inrdeals.png', __FILE__ ) . '" >';
				echo '
					<h2 style="font-size:20px;" class="padding-top-10">Paste the Below HTML Code in Your Website&apos;s Widget Panel:</h2>
					<h2>Ad Size : 300 * 250</h2>
					<textarea rows="3" cols="50" style="resize:none;" readonly><iframe src=&apos;https://inrdeals.com/dynamic/ad-300x250?user=';
						foreach ($rows as $dat)
						{
							echo $dat->name;
						}
					echo '&apos; height=&apos;250px&apos; width=&apos;100%&apos; frameborder=&apos;0&apos; allowTransparency=&apos;true&apos; scrolling=&apos;no&apos;></iframe></textarea>
					<h2>Ad Size : 728 * 90</h2>
					<textarea rows="3" cols="50" style="resize:none;" readonly><iframe src=&apos;https://inrdeals.com/dynamic/ad-728x90?user=';
					foreach ($rows as $dat)
					{
						echo $dat->name;
					}
				echo '&apos; height=&apos;90px&apos; width=&apos;100%&apos; frameborder=&apos;0&apos; allowTransparency=&apos;true&apos; scrolling=&apos;no&apos;></iframe></textarea>
				<h2>Ad Size : 300 * 600</h2>
					<textarea rows="3" cols="50" style="resize:none;" readonly><iframe src=&apos;https://inrdeals.com/dynamic/ad-300x600?user=';
				foreach ($rows as $dat)
				{
					echo $dat->name;
				}
			echo '&apos; height=&apos;600px&apos; width=&apos;100%&apos; frameborder=&apos;0&apos; allowTransparency=&apos;true&apos; scrolling=&apos;no&apos;></iframe></textarea>
					
			</div>
			<div class="cta"><span style="font-size:15px">

    </span>
            </div>
		</div>   
			</div>
				
				
			</div>
			<div id="tabs-3">';
//Request for a deal
echo '

<div class="padding-top-50">
			<div class="module form-module margin-bottom-50" style="background-color:#e6e6ff;max-width:1200px;">
				<div class="toggle">
				</div>
				<div class="form">';
				echo '<img style="padding-left:450px;" class="imgctr" src="' . plugins_url( 'img/inrdeals.png', __FILE__ ) . '" >';
				echo '
					<h2 style="font-size:20px;color:#676767;" class="padding-top-10">Paste the Below HTML Code in Your Website&apos;s Widget Panel:</h2>
					<h2 style="color:#676767;">Panel Size : 100 * 1500</h2>
					<textarea rows="2" cols="50" style="resize:none;font-size:15px;" readonly><center><iframe src= "https://inrdeals.com/embed/deals?user=';
				foreach ($rows as $dat)
				{
					echo $dat->name;
				}
			echo '" width= "100%" height= "1500" frameborder= "0" allowTransparency= "true"> </iframe></center></textarea>
				
					<div>
					<center><iframe src= "https://inrdeals.com/embed/deals?user=';
				foreach ($rows as $dat)
				{
					echo $dat->name;
				}
			echo '" width= "100%" height= "1500" frameborder= "0" allowTransparency= "true"> </iframe></center>
					</div>
					</div>
					</div>
					</div>	
';	
echo 	'</div>
						<div id="tabs-4">
				<div class="urlappender padding-top-100" style="padding-left:60px">   
            <h2>How to use INRDeals - All in One Auto Affiliate Linker:</h2>
			<p><b>Get Sub ID:</b></p>
            <p>You have to add your INRDeals Username and it will automatically generate URL with your affiliate ID.</p>
			<p>Register on INRDeals.com to get your INRDeals Username or Click here to <a href="https://inrdeals.com/signup"><b>Sign Up</b></a>.</p>
			<p>For Example:- </p>
			<p>INRDeals Username: inrdeals</p>
            <p>Here, inrdeals is the INRDeals username.</p>
			<p>The value of id is set by you by Adding ID Name in the above field.</p>
			<p>Now, all the posted links are converted into affiliate links.</p>
			<p><b>Dynamic Ad Code :</b></p>
			<p>Copy the given Dynamic Ad HTML Code with your affiliate and paste it into your web page.</p>
			<p><b>Deals Page :</b></p>
			<p>Copy the given Deal HTML Code with your affiliate and paste it into your web page.</p>
			<p>If you have any questions or suggestions about this plugin, reach out us at <b>info@inrdeals.com</b></p>
            </div>
			</div>
		</div>
    ';        
	

}

function inrupp_addtodb()
{
    if(isset($_POST['url_add']))
    {
		$retrieved_nonce = $_POST['_wpnonce'];
		if (!wp_verify_nonce($retrieved_nonce, 'inrdeals_take_subids' ) ){
		die( 'Failed Security Check' );
		}
		else
		{
		global $wpdb;
        $i=0;
        $gettext = sanitize_text_field($_POST['url']);
            $table = $wpdb->prefix . "inrupp_appender_db";
            $disable = 'disable';
            $active = 'active';
            $rows_affected = $wpdb->query("UPDATE $table SET idstatus = '$disable'",OBJECT);
        $rows = $wpdb->get_results("select * from $table ",OBJECT);
        foreach ($rows as $dat)
        {
            if($gettext == $dat->name)
            {
                $i=1;
                $row_update = $wpdb->query("UPDATE $table SET idstatus = '$active' where name= '$gettext'",OBJECT);
                // if($row_update){echo '<script>alert("Successfully Updated !!");</script>';}
            }  
        }
        if($i == 0)
        {
          $success= $wpdb->insert( 
            $table, 
            array(
                'name' => $gettext,
                'idstatus'=>$active
            )
        );
            // if($success){echo '<script>alert("Successfully Added !!");</script>';}
        }
		}
   }
}
ob_start();
add_action('init','inrupp_addtodb');
add_action('init','inrupp_fetchurl');
add_action('admin_enqueue_scripts','add_inrupp_style',0);
add_action('wp_footer','inrupp_myscript');
add_action('wp_enqueue_scripts','add_inrupp_script',0);
add_action( 'admin_menu', 'inrupp_plugin_menu' );
ob_end_flush();
?>