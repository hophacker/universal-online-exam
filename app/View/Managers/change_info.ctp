<label class='larger_label'>您来自:<?= $this->request->data['Department']['dept_name']; ?> </label>
<?php
echo $this->Form->create('Manager');
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->input('m_name', array('label' => '姓名'));
echo $this->Form->input('m_user', array('label' => '用户名'));
echo $this->Form->input('m_pwd', array('label' => '密码', 'type' => 'password', 'value' => ''));
echo $this->Form->input('m_pwd_confirm', array('label' => '密码确认', 'type' => 'password', 'value' => ''));
echo $this->Form->end('确认修改');
?>
<script>
    $(document).ready(function(){
        $('input[type="submit"]').click(function(){
           if ($('#ManagerMPwd').val() != $('#ManagerMPwdConfirm').val()){
                artWarning('您两次输入的密码不相同，请重新输入');
                return false;
           }
        });
    });
</script>