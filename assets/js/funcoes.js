function abreChate(){
    window.open("/chat", "chatWindows", "width=500, height=400");
}
function iniciarSuporte(){
    setTimeout(getChamado, 2000);
}
function getChamado(){
    $.ajax({
        url:'/ajax/getChamado',
        dataType: 'json',
        success:function(json){
            
            resetChamados();
            if(json.chamados.length > 0){
                for(var i in json.chamados){
                    
                    if(json.chamados[i].status == '1'){
                        
                        $('#areadechamados').append("<tr class='chamados' data-id='"+json.chamados[i].id+"'><td>"+json.chamados[i].data_inicio+"</td><td>"+json.chamados[i].nome+"</td><td>Em atendimento</td></tr>") 
                    }else {
                        
                    $('#areadechamados').append("<tr class='chamados' data-id='"+json.chamados[i].id+"'><td>"+json.chamados[i].data_inicio+"</td><td>"+json.chamados[i].nome+"</td><td><button onclick='abrirChamado(this)'>Abri Chamado</button></td></tr>")
                    }
                }
            }
            
            setTimeout(getChamado, 2000);
        },
        error:function(){
            setTimeout(getChamado, 2000);
        }
        
    });
}
function resetChamados(){
    $('.chamados').remove();
}

function abrirChamado(obj){
    var id = $(obj).closest('.chamados').attr('data-id');
    window.open('/chat?id='+id, 'chatWindow','width=500, height=400' );
}

function keyUpChat(obj, event) {
    if(event.keyCode == 13){ //13 tecla enter
        var msg = obj.value;
        obj.value = '';
        var dt = new Date();
        var hr = dt.getHours()+':'+dt.getMinutes();
        var nome = '...';
        
        $('.chatarea').append('<div class="msgitem">'+hr+'<strong>'+nome+'</strong>'+msg+'</div>');
    }
}


