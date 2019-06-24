<meta http-equiv="Content-Type" content="text/html; <?php echo _ISO; ?>" />

<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/css/template.css" rel="stylesheet" type="text/css" />

<link rel="shortcut icon" href="<?php echo $this->baseurl; ?>/images/favicon.ico" />

<?php 
if($this->countModules("left")&&!$this->countModules("right")){ $contentwidth="left";}
if($this->countModules("right")&&!$this->countModules("left")){ $contentwidth="right";}
if($this->countModules("left")&&$this->countModules("right")) {$contentwidth="middle"; }
if($this->countModules("user1")&&!$this->countModules("user2")) {$topuserwidth="one";}
if($this->countModules("user1")&&$this->countModules("user2")) {$topuserwidth="two";}
?>

<style type="text/css">
	#container { width: <?php echo $template_width; ?>; }
</style>