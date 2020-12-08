<?php
    namespace Woh\utility;
    include_once ($_SERVER['DOCUMENT_ROOT'].'/Woh/vendor/autoload.php');

    class Utility{
 
        const ProjectPath="/Woh";

        //Admin URL::
        const AdminWebUrl="http://localhost/woh/views/admin/";
        const AdminWebView = 'http://localhost/woh/views/admin/views/';
        const AdminAseets="http://localhost/woh/resource/admin/";
        const AdminElement="/woh/resource/admin/";

        /*For Fetch*/
        const AdminFetch = "http://localhost/woh/views/admin/views/controllers/";

        /*Users url*/
        const FronWebUrl="http://localhost/woh/views/front/";
        const FrontWebView = 'http://localhost/woh/views/front/views/';
        const FrontAseets="http://localhost/woh/resource/front/";
        const FrontElement="/woh/resource/front/";

        //Login url
        //const UserControl="/woh/src/usercontrol/";

        /*Image Folder Structure*/
        const WirelessFolder = "C:/laragon/www/woh/resource/front/img/wireless/";
        const WireFolder = "C:/laragon/www/woh/resource/front/img/SONY/";
        const CableFolder = "C:/laragon/www/woh/resource/front/img/cables/";

       /*Employee Folder Structure*/
        const EmployeeDP = "C:/laragon/www/woh/resource/admin/img/employee/dp/";
        const EmployeeID = "C:/laragon/www/woh/resource/admin/img/employee/idcard/";

        /*Employee See photos*/
        const EmployeeAsset="http://localhost/woh/resource/admin/img/employee/";

        /*Banners Folder Structure*/
        const BannersFolder="C:/laragon/www/woh/resource/front/img/banners/";

        /*See Banners*/
        const SeeBanners = "http://localhost/woh/resource/front/img/banners/";

        public static function redirect($path){
            header("location:$path");
        }
        static function getAdminElement($elementName){
            return $_SERVER["DOCUMENT_ROOT"].self::AdminElement."/".$elementName;
        }
        static function getFrontElement($elementName){
            return $_SERVER["DOCUMENT_ROOT"].self::FrontElement."/".$elementName;
        }

    }
?>