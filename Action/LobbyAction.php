<?php
	require_once("action/CommonAction.php");

	class LobbyAction extends CommonAction {

		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_MEMBER);
		}

		protected function executeAction() {
			$key = $_SESSION["key"];
			$username = $_SESSION["username"];
			if(!empty($_GET)){
				$data["key"] = $_SESSION["key"];
				$gotoJeu = false;
				switch ($_GET["next"]) {
					case 'practice':
						$data["type"] = "TRAINING";
						$gotoJeu = true;
						break;
					case 'logout':
						session_destroy();
						header("location:index.php");
						exit;
				}
				parent::callApi("games/auto-match",$data);
				if($gotoJeu){
					header("location:jeu.php");
					exit;
				}
			}
			return compact("key","username");
		}
	}