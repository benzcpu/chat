<html>
<head>
    <title>

    </title>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<link rel="stylesheet" href="public/chat.css">

<body>
<?php
$config['chat']['facebook_app_id']="923467898045142";
$config['chat']['getchatTimeDelay']="2000";
$config['chat']['css_boxchat']['header-box-color']="#66bfff";
$config['chat']['css_boxchat']['body-box-color']="#ecf0ff";
$config['chat']['css_boxchat']['you-background-text-color']="#e8d578";
$config['chat']['css_boxchat']['you-text-color']="#000";
$config['chat']['css_boxchat']['me-background-text-color']="#66bfff";
$config['chat']['css_boxchat']['me-text-color']="#FFF";
?>
<?php
$this->load->view("chat_css_color",$config['chat']);
?>
<div id="chat_config"
     facebook_id="<?php echo $config['chat']['facebook_app_id'];?>"
     getchatTimeDelay="<?php echo $config['chat']['getchatTimeDelay'];?>"

>
</div>
<div>
    <form method="POST" action="<?php echo base_url('user/login');?>">
        <input type="text" name="name">
        <input type="hidden" name="uri" value="<?php echo base_url($_SERVER['REQUEST_URI']);?>">
        <button>submit</button>
    </form>
</div>
<div class="ch-chatbox">
    <div class="head">
        <div class="icon hover">
            -
        </div>
    </div>
    <div class="body">

    </div>
    <form <?php   if(!isset($_SESSION['user']['id'])){ echo "login='true'";} ?> action="<?php echo base_url('chat/message') ?>" actionget="<?php echo base_url('chat/getmessage') ?>">
        <input type="text" class="text-input" name="text_message"><button class="button">sent</button>
    </form>

</div>
</body>

<script src="public/sdk.js"></script>
<script src="public/chat.js"></script>
</html>
