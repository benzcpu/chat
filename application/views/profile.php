<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<div class="user-profile">
    <form id="form-profile" method="post" action="<?php echo base_url('user/changename')?>">
        name:<span id="user-name"><?php if(isset($_SESSION['user']['id'])){echo $_SESSION['user']['name'];} ?></span>
        <input type="text" name="name">
        <button>เปลี่ยนชื่อ</button>
    </form>
</div>


<script>
    $('#form-profile').submit(function(event){
        event.preventDefault();
        var me=this;
        $.ajax({
            url:$(me).attr('action'),
            data:$(me).serialize(),
            method:'post',
            success:function(data){
                if(data!=""){
                    var data=JSON.parse(data);
                    $('#user-name').text(data.user_name);
                    alert("done.");
                }else{
                    alert("plase login");
                }
            }
        });
    });

</script>
