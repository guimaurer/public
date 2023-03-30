<?php 

function list_funcionarios(){
    $retorno = "
    <script>
    async function pegarUsers() {
        const req = await fetch('https://jsonplaceholder.typicode.com/users');
        const users = await req.json();
        
        const filterUsers = users.filter((user) => {
            return user.phone.includes('(');
        });

        filterUsers.forEach((item, index) => {
            
            const itemLista = '<div class=\"list-group-item\">' +
                              '<div class=\"media\">' +
                              '<img src=\"https://ui-avatars.com/api/?name=' + item.name + '\" class=\"mr-3\" alt=\"...\">' +
                              '<div class=\"media-body\">' +
                              '<h5 class=\"mt-0\">' + item.name + '</h5>' +
                              '<p>' + item.email + '</p>' +
                              '<p>' + item.phone + '</p>' +
                              '</div>' +
                              '</div>' +
                              '</div>';

            document.getElementById('lista-usuarios').insertAdjacentHTML('beforeend', itemLista);
        });
    }
    pegarUsers();

    </script>

    <div class='list-group' id='lista-usuarios'></div>";
    
    return $retorno;
}
add_shortcode('funcionarios', 'list_funcionarios');
?>