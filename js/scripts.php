<script>

    function redirect_login(elem) {
        window.location.href = 'actions_login/' + elem
    }

    function showMenssage() {
        alert("Foi encaminhado um e-mail com a nova senha!")
    }

    function showMenssageCadastro() {
        alert("Cadastro Realizado com sucesso! Redirecionando para a tela de login.")
    }

    function verificaSelect(elem) {
        var usuario = document.getElementById(elem).value;
        //elem.setAttributeOfElement('class', 'data-dismiss: modal');
        window.location.href = '?report=' + usuario

    }

    function redirect_perfil(elem) {
        alert(elem);die();
        window.location.href = 'law/perfil_lawyer.php?' + elem
    }
    
</script>
