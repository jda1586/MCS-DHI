var treeAllowEnroll = false; //make this validation by serverside in the enroll page too
var treeLanguage = "en"; //pt-br, es, en 
var treeShowDownNumbersLevels = false; //Show the base line numbers
var prefixUrlImage = "/assets/BinaryTree SourceCode/"; //folderImage
var treeEnrollPageUrlParameters = "http://www.pagetest.com/index.php?position=[var1]&parentId=[var2]&enrollerId=[var3]";
var treeTreePage = "http://www.pagetest.com/treepage.php?currentMemberId=[var1]&memberToView=[var2]";

if (treeLanguage == "pt-br") {
    var txtEmpty = "Vazio";
    var txtEmptyDescription = "(Clique aqui para cadastrar)";
    var txtRegisteredIn = "Inscrito em";
    var txtEnroller = "Cadastrador";
    var txtLeft = "Esquerda";
    var txtRight = "Direita";
    var txtSeeMyPosition = "Ver minha posição";
    var txtSeeTheLastLeftMember = "Posicionar no último membro da esquerda";
    var txtSeeTheLastRightMember = "Posicionar no último membro da direita";
    var txtEnrollAtTheLastLeftPosition = "Cadastrar na última posição da esquerda";
    var txtEnrollAtTheLastRightPosition = "Cadastrar na última posição da direita";
    var txtSeeTreeFromThisPosition = "Ver a árvore a partir desta posição";
} else if (treeLanguage == 'es') {
    var txtEmpty = "Empty";
    var txtEmptyDescription = "(Click here to enroll)";
    var txtRegisteredIn = "Enroll date";
    var txtEnroller = "Enroller";
    var txtLeft = "izquierda";
    var txtRight = "Derecha";
    var txtSeeMyPosition = "See my position";
    var txtSeeTheLastLeftMember = "See the last left member";
    var txtSeeTheLastRightMember = "See the last right member";
    var txtEnrollAtTheLastLeftPosition = "Enroll at the last left position";
    var txtEnrollAtTheLastRightPosition = "Enroll at the last Right position";
    var txtSeeTreeFromThisPosition = "See tree from this position";
} else {
    var txtEmpty = "Empty";
    var txtEmptyDescription = "(Click here to enroll)";
    var txtRegisteredIn = "Enroll date";
    var txtEnroller = "Enroller";
    var txtLeft = "Left";
    var txtRight = "Right";
    var txtSeeMyPosition = "See my position";
    var txtSeeTheLastLeftMember = "See the last left member";
    var txtSeeTheLastRightMember = "See the last right member";
    var txtEnrollAtTheLastLeftPosition = "Enroll at the last left position";
    var txtEnrollAtTheLastRightPosition = "Enroll at the last Right position";
    var txtSeeTreeFromThisPosition = "See tree from this position";
}

function LoadTree(memberId,sequence, parentId) {
    
    //Finding the first
    if (memberId == 0) {
        memberId = findChildIdByMemberId(memberId)[0];
    }
    
    var level = (sequence.length + 1) / 2;
    if (level > 5) { 
        return;
    }
    var member = findMemberById(memberId);
    
    if (member != null) {
        memberId = member.memberId;
    }
    
    LoadCard(member, sequence, level, parentId);
    
    //Loading childs
    var ChildIds = findChildIdByMemberId(memberId);
    for(var i = 0; i <= 1 ; i++)
    {
        var childSequence = sequence + '-' + (i + 1);        
        LoadTree(ChildIds[i], childSequence, memberId);   
    }
    
}

function LoadCard(member, CardIdSequence, level, parentId) {
    
    if (member == null) {
        if (parentId == null) {
            $( "#card-" + CardIdSequence ).addClass("empityCard empityCardBlocked" );
        } else {
            $( "#card-" + CardIdSequence ).addClass("empityCard empityCardBlocked" );
            $( "#card-" + CardIdSequence ).filter("[rel='allowEnroll']").removeClass("empityCardBlocked" );
            $( "#card-" + CardIdSequence ).filter("[rel='allowEnroll']").click(function() {
                window.location.href = treeEnrollPageUrlParameters.replace("[var1]",findMemberById(parentId).position.toString()).replace('[var2]',parentId).replace('[var3]',$('input[name=currentSessionMemberId]').val());  
            });
        }
    } 
    else 
    {
        var iconType = '';
        switch (member.type) {
            case 1:
                iconType = '/assets/BinaryTree SourceCode/icon-gold.png';
                break;
            case 2:
                iconType = '/assets/BinaryTree SourceCode/icon-silver.png';
                break;
            case 3:
                iconType = '/assets/BinaryTree SourceCode/icon-copper.png';
                break;
            default:
                iconType: '';
        }
        
        var htmlBlock = 
        '<div class="c-side">' +
            '<span class="c-id-hidden">' + member.memberId + '</span>' +                
            '<div class="c-img-profile">' +
                '<img src="' + prefixUrlImage + member.img + '" />' +
            '</div>' +
            
            '<div class="c-level">' +
                '<img src="'+iconType+'" />' +
            '</div>' +
            
        '</div>' +
        
        '<div class="c-content">' +
            
            '<div class="c-name ">' +
                (level == 5 ? member.name.split(' ')[0] : member.name) +
            '</div>' +
            
            '<div class="c-description ">' +
                '<span class="c-small">'+txtRegisteredIn+': </span> '+member.initialDate +'<br/>' +
                '<span class="c-small">'+txtEnroller+': </span>' + member.enroller +
            '</div>' +
            
        '</div>';
    }
    
    
    $( "#card-" + CardIdSequence).append(htmlBlock);
    
    $( "#card-" + CardIdSequence).click(function() {
        //window.location.href = treeEnrollPageUrlParameters.replace("[var1]",  ).replace('[var2]',member.parentId).replace('[var3]','enrollerId');  
        window.location.href = treeTreePage.replace("[var1]", $('input[name=currentSessionMemberId]').val()).replace('[var2]',member.memberId);  
    });
    
    
    if (level == 5) {
        try {
            $( "#card-" + CardIdSequence).parent().find(".treeMoreItems").html(member.NumMembersDown);
        } catch (error) {
            
        }
        
    }
    
}


function findMemberById(memberId) {     
     for(var i = 0; i < members.length; i++) 
     {
        var member = members[i];
        if(member.memberId == memberId) {
            return member;
        }
    }
    
    return null;
}


function findChildIdByMemberId(memberId) {
     var ChildIds = [null,null];
     var k = 0;
     
     for(var i = 0; i < members.length; i++) 
     {
        var member = members[i];
        if(member.parentId == memberId) {
            ChildIds[member.position - 1] = member.memberId;
            k++;
        }
    }
    
    return ChildIds;
}

var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};

$(document).ready(function() {
        
    $( ".empityCard" ).click(function() {
        //Bootstrap window      
    });
    
    LoadTree(0,"1");
    
    if (treeAllowEnroll) {
        $(".empityCard").filter("[rel='allowEnroll']").append('<span class="title">' + txtEmpty + '</span><div class="description">'+txtEmptyDescription+'</div>');
    }
    
    if (!treeShowDownNumbersLevels) {
        $(".treeMoreItems, .treeMIL").addClass('hidden');  
    }
    
    if(getUrlParameter("currentMemberId") == undefined) {
        $(".linkSeeMyPosition").addClass('hidden');
    }
});

