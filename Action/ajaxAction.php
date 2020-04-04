<?php
    require_once("action/CommonAction.php");

    class AjaxAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_MEMBER);
        }

        protected function executeAction() {
            if($_POST["data"]["which"] == "PLAY")
                $data["uid"] = $_POST["data"]["uid"];

            $data["key"] = $_SESSION["key"];
            $data["type"] = $_POST["data"]["which"];
            $returned = parent::callAPI("games/action",$data);
            return compact("returned");
        }
    }
?>