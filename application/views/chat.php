<html>
<head>
    <title>

    </title>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="public/sdk.js"></script>
<link rel="stylesheet" href="public/chat.css">

<body>
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
    <form action="<?php echo base_url('chat/message') ?>" actionget="<?php echo base_url('chat/getmessage') ?>">
        <input type="text" class="text-input" name="text_message"><button class="button">sent</button>
    </form>

</div>
</body>
<script src="public/chat.js"></script>
</html>
