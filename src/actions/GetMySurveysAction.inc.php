<?php

require_once("actions/Action.inc.php");

class GetMySurveysAction extends Action {

	/**
	 * Construit la liste des sondages de l'utilisateur et le dirige vers la vue "ServeysView"
	 * de façon à afficher les sondages.
	 *
	 * Si l'utilisateur n'est pas connecté, un message lui demandant de se connecter est affiché.
	 *
	 * @see Action::run()
	 */
	public function run() {
		$pseudo = $this->getSessionLogin();
		if ($pseudo !== null) {
			$this->setView(getViewByName("Surveys"));
			$this->getView()->setSurveys($this->database->loadSurveysByOwner($pseudo));
		}
		else {
			$this->setView(getViewByName("Message"));
			$this->getView()->setMessage("Veuillez vous connecter.");
		}
	}

}

?>
