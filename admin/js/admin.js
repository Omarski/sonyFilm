var _popupManager;
var _admin;

function Admin(){

	this._dbJSON;
	this._toDelete;
	this.passPop();
	//this.getData(function(){_admin.makeTable(null);});
}

$(document).ready(function(){
  _popupManager = new PopupManager();
  _admin = new Admin();
});

//-------------------------------------------------------------------------------------------------------------
//                                     			PASSPOP
//-------------------------------------------------------------------------------------------------------------
Admin.prototype.passPop = function(returnFunc){

	var bodyHTML= "<div class='form-group'>"+
    "<label for='pwd'>Password:</label>"+
    "<input type='password' class='form-control' id='pwd'>"+
    "<button type='button' id='pwdBtn' style='margin-top:20px' class='btn btn-default'>Submit</button>"+
    "<div id='passMessage'></div></div>";

	_popupManager.makeSimplePopup({popupId:"passPop", bodyId:"passBody", body:bodyHTML,
	popCont:"passPopCont", custFrameClass:"popPassFrame", custContClass:"popPassCont",closeBtn:false, btnStyle:null});

	_popupManager.launchPopup({popupId:"passPop", options:null, onShow:function(){_admin.passListeners()}, 
	onHide:function(){$("#passPop").remove();}});
}

//-------------------------------------------------------------------------------------------------------------
//                                     			DELETE LISTEN
//-------------------------------------------------------------------------------------------------------------
Admin.prototype.passListeners = function(){
	$('#pwdBtn').click(function(){
		_admin.getPassword(null);
	});
}

//-------------------------------------------------------------------------------------------------------------
//                                     			PASS
//-------------------------------------------------------------------------------------------------------------
Admin.prototype.getPassword = function(returnFunc){

  var data = {"queryName":"getPassword"};

  $.ajax({
      type: "POST",
      dataType: "text",
      url: "../scripts/queries.php",
      data: data,
      success: function(resultData) {
  		pwd=jQuery.parseJSON(resultData);
       	_admin.checkPassword(pwd.pass);
      },
      error: function(jqXHR, textStatus, errorThrown){alert(jqXHR+ "\n" + textStatus + "\n" + errorThrown);}
    });
    return false;
}

//-------------------------------------------------------------------------------------------------------------
//                                     			CHECK PASS
//-------------------------------------------------------------------------------------------------------------
Admin.prototype.checkPassword = function(fetchedPass){

	$("#passMessage").html("");
	
	if ($("#pwd").val() == fetchedPass+""){
		$("#passPop").modal("hide");
		_admin.getData(function(){_admin.makeTable(null);});
	}else{
		$("#passMessage").html("<p style='margin-top:15px'>Please reenter password.</p>");
	}
}


//-------------------------------------------------------------------------------------------------------------
//                                     			GET ALL USER DATA
//-------------------------------------------------------------------------------------------------------------

Admin.prototype.getData = function(returnFunc){

	var data = {id:10};

	$.ajax({
      type: "POST",
      dataType: "text",
      url: "../scripts/get_user_data.php",
      data: data,
      success: function(resultData) {
        _admin._dbJSON=jQuery.parseJSON(resultData);
        returnFunc();
      },
      error: function(jqXHR, textStatus, errorThrown){alert(jqXHR+ "\n" + textStatus + "\n" + errorThrown);}
    });
    return false;
}

//-------------------------------------------------------------------------------------------------------------
//                                     			MAKE TABLE
//-------------------------------------------------------------------------------------------------------------

Admin.prototype.makeTable = function(returnFunc){

	var tableHtml = "<table class='table table-bordered'><thead><tr><th>user ID</th><th>Submit Date</th>"+
					"<th>Card Art</th><th>Card Location</th><th>Slide Number</th><th>Delete</th></thead><tbody>";

	$.each(this._dbJSON, function(user, userObj) {
		tableHtml+= "<tr id='row"+userObj.userId+"'><td>"+userObj.userId+"</td><td>"+userObj.postDate+"</td><td><img src='"+
		_imgPath+userObj.urlMain+"' class='artPreview'></td><td>"+userObj.wallSpot+"</td><td>"+userObj.slideNumber+
		"</td><td><button type='button' name='deleteBtn' class='btn btn-default' id='"+userObj.userId+"'>DELETE</button></td>"+
		"</tr>";
	});

	tableHtml+= "</tbody></table>";

	$("#adminTableCont").html(tableHtml);

	$('[name^="deleteBtn"]').click(function(){
		
		_toDelete = $(this).attr("id");

		var bodyHTML= "<p class='warningText'>You are about to delete this entry.</p>"+
		"<button type='button' id='deleteConfirm' class='btn btn-default' style='margin-right:20px'>Confirm deletion</button>"+
		"<button type='button' id='deleteCancel' class='btn btn-default'>Cancel</button>";

		_popupManager.makeSimplePopup({popupId:"deletePop", bodyId:"deleteBody", body:bodyHTML,
		popCont:"deletePopCont", custFrameClass:"popDeleteFrame", custContClass:"popDeleteCont",closeBtn:false, btnStyle:null});

		_popupManager.launchPopup({popupId:"deletePop", options:null, onShow:function(){_admin.deletePopListeners()}, 
		onHide:function(){$("#deletePop").remove();}});
	});
}

//-------------------------------------------------------------------------------------------------------------
//                                     			DELETE LISTEN
//-------------------------------------------------------------------------------------------------------------
Admin.prototype.deletePopListeners = function(){

	$('#deleteConfirm').click(function(){
		
		_admin.removeItem(_toDelete,function(){

			$("#deleteBody").append("&nbsp;&nbsp;&nbsp;Item sucessfully deleted!");
			window.setTimeout(function(){$("#deletePop").modal("hide")},1000);
			$('[id^="row'+_toDelete+'"]').remove();
		});
	});

	$('#deleteCancel').click(function(){
		_toDelete = null;
		$("#deletePop").modal("hide");
	});
}

//-------------------------------------------------------------------------------------------------------------
//                                     			REMOVE ID
//-------------------------------------------------------------------------------------------------------------
Admin.prototype.removeItem = function(userId,returnFunc){

  var data = {"queryName":"removeItem","removeId":userId};

  $.ajax({
      type: "POST",
      dataType: "text",
      url: "../scripts/queries.php",
      data: data,
      success: function(resultData) {
       returnFunc();
      },
      error: function(jqXHR, textStatus, errorThrown){alert(jqXHR+ "\n" + textStatus + "\n" + errorThrown);}
    });
    return false;
}
