<?php
namespace DHI\Helpers;

class utiles{

    public static function createDirs(){

        $current_year  = date('Y');
        $current_month = date('m');
        $file_path     = 'Items'.'/' . $current_year . '/' . $current_month;
        if( !file_exists( 'Items' ) ){
            mkdir( 'Items', 0777, true );
        }

        if ( !( file_exists ( $file_path ) ) ) {
            if ( file_exists ( 'Items'.'/' . $current_year ) ) {
                //Exist uploads/year
                mkdir( $file_path, 0777, true);
                chmod( $file_path, 0777);
            }
            else if ( file_exists ( 'Items'.'/' ) ){
                //At least exist the uploads folder
                mkdir( $file_path, 0777, true);
                chmod( 'Items'.'/' . $current_year, 0777);
                chmod( $file_path, 0777);
            }
            else {
                //Ok that is weird... well we create the uploads folder too
                mkdir( $file_path, 0777, true);
                chmod( 'Items'.'/', 0777);
                chmod( 'Items'.'/' . $current_year, 0777);
                chmod( $file_path, 0777);
            }
        }
    }
}

?>
