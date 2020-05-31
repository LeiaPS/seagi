// Campo de Busca
$(function(){
	$(".input-search").keyup(function(){
//pega o css da tabela 
let tabela = $(this).attr('alt');
if( $(this).val() != ""){
	$("."+tabela+" tbody>tr").hide();
	$("."+tabela+" td:contains-ci('" + $(this).val() + "')").parent("tr").show();
} else{
	$("."+tabela+" tbody>tr").show();
}
});	
});
$.extend($.expr[":"], {
	"contains-ci": function(elem, i, match, array) {
		return (elem.textContent || elem.innerText || $(elem).text() || "").toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
	}
});

//Requisição Ajax Povoar Campos Cidade

// Naturalidade
let cidade = document.querySelector('#editCidade');
let estado = document.querySelector('#editEstado');
let idEstado = document.querySelector('#editEstado').value;
let cidades;
fetch(BASE_URL+'pessoas/cidadesPorEstadoJson/'+idEstado)
.then(r=>r.json())
.then(json=>TratarResultado(json));
const TratarResultado = (r)=>{
	cidade.innerHTML = '';
	cidades = '';
	for(let i in r){
		if (id_cidade_naturalidade == r[i]['id']) {
			cidades += '<option value="'+r[i]['id']+'" selected>'+r[i]['nome']+'</option>';
		} else {
			cidades += '<option value="'+r[i]['id']+'">'+r[i]['nome']+'</option>';		
		}
	}
	cidade.innerHTML = cidades;
}
estado.addEventListener("change", (e)=> {
	let idEstado = document.querySelector('#editEstado').value;
	fetch(BASE_URL+'pessoas/cidadesPorEstadoJson/'+idEstado)
	.then(r=>r.json())
	.then(json=>TratarResultado(json));
});
//residencial
let cidadeResidencial = document.querySelector('#editCidadeResidencial');
let estadoResidencial = document.querySelector('#editEstadoResidencial');
let idEstadoResidencial = document.querySelector('#editEstadoResidencial').value;
let cidadesResidencial;
fetch(BASE_URL+'pessoas/cidadesPorEstadoJson/'+idEstadoResidencial)
.then(r=>r.json())
.then(json=>TratarResultadoResidencial(json));
const TratarResultadoResidencial = (r)=>{
	cidadeResidencial.innerHTML = '';
	cidadesResidencial = '';
	for(let i in r){
		if (id_cidade_residencial == r[i]['id']) {
			cidadesResidencial += '<option value="'+r[i]['id']+'" selected>'+r[i]['nome']+'</option>';
		} else {
			cidadesResidencial += '<option value="'+r[i]['id']+'">'+r[i]['nome']+'</option>';		
		}
	}
	cidadeResidencial.innerHTML = cidadesResidencial;
}
estadoResidencial.addEventListener("change", (e)=> {
	let idEstadoResidencial = document.querySelector('#editEstadoResidencial').value;
	fetch(BASE_URL+'pessoas/cidadesPorEstadoJson/'+idEstadoResidencial)
	.then(r=>r.json())
	.then(json=>TratarResultadoResidencial(json));
});
