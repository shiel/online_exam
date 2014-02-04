<?php 
include 'links.php';
include 'ExamDAO.php';
include 'config.php';
session_start();
$ans = $_SESSION['answer'];
$result =ExamDAO::getResult($ans);
?>
<div class="row">
    <div class="span10 offset2">
        <div class="accordion" id="parent">
            <div class="accordion-group">
                <div class="accordion-heading">
                  	<h4>
                    	<a class="accordion-toggle" data-toggle="collapse" data-parent="#parent" href="#content">
                    		Result
                    	</a>
                  	</h4>
                </div>
                <div id="content" class="accordion-body collapse in">
                  <div class="accordion-inner">
                      <?= $result ?>
                      <input type='submit' value ='LogOut' class ='btn btn-primary' name='submit' id ='logout'>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$('#logout').click(function(){
	window.location.href='logout.php';
});
</script>
