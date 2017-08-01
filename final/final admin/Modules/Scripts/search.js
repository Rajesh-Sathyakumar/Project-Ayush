function dosearch(){

	var SearchBy= $('#searchToggle li[class=active]').attr('id');

	if(SearchBy == "drugtab"){
		var searchfilter= $("#drug label[class='btn btn-primary active']").attr('id');
		var FilterValue = $('#drugSearchValue').val();
		var settings = {
  "url": "http://localhost/final/Modules/search.php?SearchBy="+SearchBy+"&SearchFilter="+searchfilter+"&FilterValue="  + FilterValue,
  "method": "GET"
}

$.ajax(settings).done(function (response) {
  	 $('#tableValues').html(response);
});

	}
	else if(SearchBy == "companytab"){
		var searchFilter = $("#company label[class='btn btn-primary active']").attr('id');
		var FilterValue = $('#companySearchValue').val();
		var settings = {
  "url": "http://localhost/final/Modules/search.php?SearchBy="+SearchBy+"&SearchFilter="+searchFilter+"&FilterValue="  + FilterValue,
  "method": "GET"
}

$.ajax(settings).done(function (response) {
  $('#tableValues').html(response);
});

	}
}