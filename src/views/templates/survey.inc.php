
<li class="media well">
	<div class="media-body">
		<h4 class="media-heading"><a href="<?php echo $_SERVER['PHP_SELF'].'?action=GetSurvey&id='. $survey->getId(); ?>"><?php echo $survey->getQuestion() ?></a></h4>
		<div class="" style="text-align: right">
			<a class="fa fa-pencil-square-o" href="#"></a>
			<a class="fa fa-trash" href="#"></a>
		</div>

		<br>
	  <?php
	  foreach ($survey->getResponses() as $response) {
		  echo '<div class="fluid-row">';
			  echo '<div class="span2">'. $response->getTitle() .'</div>';
			  echo '<div class="span2 progress progress-striped active">';
				  echo '<div class="bar" style="width: '. $response->getPercentage() .'%"></div>';
			  echo '</div>';
			  echo '<span class="span1">('. $response->getPercentage() .'%)</span>';
			  echo '<form class="span1" method="post" action="'. $_SERVER['PHP_SELF'].'?action=Vote">';
				  echo '<input type="hidden" name="responseId" value="'. $response->getId().'">';
				  echo '<input type="submit" style="margin-left:5px" class="span1 btn btn-small btn-danger" value="Voter">';
			  echo '</form>';
		  echo '</div>';
		}
		if ($_GET["action"] != "GetSurvey") {
			echo '<a href="'. $_SERVER['PHP_SELF'].'?action=GetSurvey&id='. $survey->getId() '.">Afficher les commentaires</a>';
		}
		?>

	</div>
</li>
