$(function(){
	$('.europe_map').mobilymap({
		position: 'center',
		popupClass: 'bubble',
		markerClass: 'point',
		popup: true,
		cookies: true,
		caption: false,
		setCenter: true,
		navigation: false,
		navSpeed: 1000,
		navBtnClass: 'navBtn',
		outsideButtons: '.map_buttons a',
		onMarkerClick: function(){},
		onPopupClose: function(){},
		onMapLoad: function(){}
	});
});
