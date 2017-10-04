<?php

require_once("actions/Action.inc.php");

class GetSurveyAction extends Action {

	/**
	* Affiche un sondage
	*
	* @see Action::run()
	*/
	public function run() {
		$this->setView(getViewByName("Surveys"));
		$this->getView()->setSurveys($this->database->loadSurvey($_GET["id"]));
	}

}

?>
