		//set up markers
		var myMarkers = {"markers": [
				{"latitude": "-6.8183895917174535", "longitude":"39.28701232492765", "icon": "img/map-marker.png"}
			]
		};

		//set up map options
		$(".map_contact").mapmarker({
			zoom	: 14,
			center	: 'LuxTechTz, NHC House Samora',
            destination: 'LuxTechTz, NHC House Samora',
			markers	: myMarkers
		});

