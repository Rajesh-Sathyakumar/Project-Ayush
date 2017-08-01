$(document).ready(function(){
		var settings = {

			  "url": "http://localhost:8080/admin/admindashboard.php",
			  "method": "GET",
			  "headers": {
			    "content-type": "application/json",
			  }
			}

	$.ajax(settings).done(function (response) {
	  var dashBoardData  = JSON.parse(response);
	  $('#totalApproved').html(dashBoardData.total_approved);
	  $('#totalRejected').html(dashBoardData.total_rejected);
	  $('#totalPending').html(dashBoardData.total_pending_approval);
	  $('#isoCount').html(dashBoardData.iso_certification);
	  $('#gmpCount').html(dashBoardData.gmp_certification);
		$('#ayurvedaApprovedCount').html(dashBoardData.ayurveda_approved);
	  $('#ayurvedaRejectedCount').html(dashBoardData.ayurveda_rejected);
		$('#ayurvedaPendingCount').html(dashBoardData.ayurveda_pending);
	  $('#unaniApprovedCount').html(dashBoardData.unani_approved);
		$('#unaniRejectedCount').html(dashBoardData.unani_rejected);
	  $('#unaniPendingCount').html(dashBoardData.unani_pending);
		$('#siddhaApprovedCount').html(dashBoardData.siddha_approved);
	  $('#siddhaRejectedCount').html(dashBoardData.siddha_rejected);
		$('#siddhaPendingCount').html(dashBoardData.siddha_pending);
	  $('#homeopathyApprovedCount').html(dashBoardData.homeopathy_approved);
		$('#homeopathyRejectedCount').html(dashBoardData.homeopathy_rejected);
	  $('#homeopathyPendingCount').html(dashBoardData.homeopathy_pending);


	  var totalWidth = parseInt(dashBoardData.total_approved) +  parseInt(dashBoardData.total_rejected) + parseInt(dashBoardData.total_pending_approval);
	  
	  $('#totalApprovedWidth').attr('style','width:'+ (parseInt(dashBoardData.total_approved).toFixed(2) / totalWidth) * 100 +'%' );
	  $('#totalRejectedWidth').attr('style','width:'+ (parseInt(dashBoardData.total_rejected).toFixed(2) / totalWidth) * 100 +'%' );
	  $('#totalPendingWidth').attr('style','width:'+ (parseInt(dashBoardData.total_pending_approval).toFixed(2) / totalWidth) * 100 +'%' );



	  var ayurvedaWidth = parseInt(dashBoardData.ayurveda_approved) +  parseInt(dashBoardData.ayurveda_rejected) + parseInt(dashBoardData.ayurveda_pending);
	  
	  $('#ayurvedaApprovedWidth').attr('style','width:'+ (parseInt(dashBoardData.ayurveda_approved).toFixed(2) / ayurvedaWidth) * 100 +'%' );
	  $('#ayurvedaRejectedWidth').attr('style','width:'+ (parseInt(dashBoardData.ayurveda_rejected).toFixed(2) / ayurvedaWidth) * 100 +'%' );
	  $('#ayurvedaPendingWidth').attr('style','width:'+ (parseInt(dashBoardData.ayurveda_pending).toFixed(2) / ayurvedaWidth) * 100 +'%' );


	  var unaniWidth = parseInt(dashBoardData.unani_approved) +  parseInt(dashBoardData.unani_rejected) + parseInt(dashBoardData.unani_pending);
	  
	  $('#unaniApprovedWidth').attr('style','width:'+ (parseInt(dashBoardData.unani_approved).toFixed(2) / unaniWidth) * 100 +'%' );
	  $('#unaniRejectedWidth').attr('style','width:'+ (parseInt(dashBoardData.unani_rejected).toFixed(2) / unaniWidth) * 100 +'%' );
	  $('#unaniPendingWidth').attr('style','width:'+ (parseInt(dashBoardData.unani_pending).toFixed(2) / unaniWidth) * 100 +'%' );


	  var siddhaWidth = parseInt(dashBoardData.siddha_approved) +  parseInt(dashBoardData.siddha_rejected) + parseInt(dashBoardData.siddha_pending);
	  
	  $('#siddhaApprovedWidth').attr('style','width:'+ (parseInt(dashBoardData.siddha_approved).toFixed(2) / siddhaWidth) * 100 +'%' );
	  $('#siddhaRejectedWidth').attr('style','width:'+ (parseInt(dashBoardData.siddha_rejected).toFixed(2) / siddhaWidth) * 100 +'%' );
	  $('#siddhaPendingWidth').attr('style','width:'+ (parseInt(dashBoardData.siddha_pending).toFixed(2) / siddhaWidth) * 100 +'%' );


	  var homeopathyWidth = parseInt(dashBoardData.homeopathy_approved) +  parseInt(dashBoardData.total_rejected) + parseInt(dashBoardData.homeopathy_pending);
	  
	  $('#homeopathyApprovedWidth').attr('style','width:'+ (parseInt(dashBoardData.homeopathy_approved).toFixed(2) / homeopathyWidth) * 100 +'%' );
	  $('#homeopathyRejectedWidth').attr('style','width:'+ (parseInt(dashBoardData.homeopathy_rejected).toFixed(2) / homeopathyWidth) * 100 +'%' );
	  $('#homeopathyPendingWidth').attr('style','width:'+ (parseInt(dashBoardData.homeopathy_pending).toFixed(2) / homeopathyWidth) * 100 +'%' );
	});
 }
) 