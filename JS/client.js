var urlServico = 'https://api.github.com';
//https://github.com/secaoweb/teste-vaga-estagio-php

$("#srch-term").on('input',function(e){
    //urlServico buscarNomes
    $.getJSON(urlServico + '/search/users?q=' + $("#srch-term").val(),
        function (json) {
        //alert(json.items[0].login);
	       var availableTags = [];
/*
        for (var i = 0; i < json.length; i++) {
            availableTags[i] = json[i].nome;
        }
*/
        availableTags[0] = json.items[0].login;
        //alert( availableTags );
	       $("#srch-term").autocomplete({
            source: availableTags
        });
        i++;
        }
    );
});

$("#frmBuscar").on("submit", function(e){
    e.preventDefault();
    var nome = $("#nome").val();
    buscarPorNome(nome);
});

function buscarQueryPorNome (nome){
    $.ajax({
        url: urlServico + '/search/users?q=' + nome,
        data:"",
        dataType:json,
        success:function(data){
			
        }
    });
}

function buscarPorNome(nome){

    $("#grid").empty();
    $.ajax({
        url: urlServico + '/users/' + nome,
        data:"",
        dataType:'json',
        success:function(data){
            var tr = $('<tr/>');
				       tr.append("<td>" + data.name + "</td>");
				       tr.append("<td>" + data.login + "</td>");
				       tr.append("<td><a href=" + data.repos_url + ">Repositórios</a></td>");
            $("#grid").append(tr);
            var tr2 = $('<tr/>');
            tr2.append('<img class="img-responsive" src="' + data.avatar_url + '"/>');
            $("#grid").append(tr2);
        },
        error:function(err){
            alert("erro");
        }
    });
}