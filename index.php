<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $email="infaz9999@gmail.com";
        $default="localhost";
        $size=1000;
        
        $grav_url = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) )."?d=".urlencode( $default )."&s=".$size;
        $grav_url="http://www.gravatar.com/".md5($email);
        
        $str = file_get_contents( 'http://www.gravatar.com/46ab91522a3d3ea8fbb59831aecfb479.php' );
        $profile = unserialize( $str );
        if ( is_array( $profile ) && isset( $profile['entry'] ) ){
                echo $profile['entry'][0]['displayName'];   //Displaying My name
                echo "<br/>";
                echo $profile['entry'][0]['emails'][0]['value'];    //Displaying my email
                echo "<br/>";
                echo $profile['entry'][0]['ims'][0]['value'];
                echo "<br/>";
                print_r($profile); //Printing Keys in the $profile array
                
                
        }
        

        ?>
       
    </body>
</html>
