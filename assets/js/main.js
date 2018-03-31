/*
Copyright 2017 Google Inc.

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
*/

'use strict';

var videoElement = document.querySelector('video');
var videoSelect = document.querySelector('select#videoSource');
var debug = document.querySelector('#debug');

navigator.mediaDevices.enumerateDevices()
	.then(gotDevices).then(getStream).catch(handleError);

videoSelect.onchange = getStream;
getLocation();

function gotDevices(deviceInfos) {
	for (var i = 0; i !== deviceInfos.length; ++i) {
		var deviceInfo = deviceInfos[i];
		var option = document.createElement('option');
		option.value = deviceInfo.deviceId;
		// if (deviceInfo.kind === 'audioinput') {
		// 	option.text = deviceInfo.label ||
		// 		'microphone ' + (audioSelect.length + 1);
		// 	audioSelect.appendChild(option);
		// } 
		if (deviceInfo.kind === 'videoinput') {
			option.text = deviceInfo.label || 'camera ' +
				(videoSelect.length + 1);
			videoSelect.appendChild(option);
		} else {
			// console.log('Found one other kind of source/device: ', deviceInfo);
		}
	}
}

function getStream() {
	if (window.stream) {
		window.stream.getTracks().forEach(function (track) {
			track.stop();
		});
	}

	var constraints = {
		video: {
			deviceId: {
				exact: videoSelect.value
			}
		}
	};

	navigator.mediaDevices.getUserMedia(constraints).
	then(gotStream).catch(handleError);
}

function gotStream(stream) {
	window.stream = stream; // make stream available to console
	videoElement.srcObject = stream;
}

videoElement.onchange = function () {
	console.log(videoElement.videoHeight, videoElement.videoWidth);
}

function handleError(error) {
	console.log('Error: ', error);
}

function getLocation() {
	if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(showPosition);
	} else {
		debug.innerHTML = "Geolocation is not supported by this browser.";
	}
}

function showPosition(position) {
	debug.innerHTML = "Latitude: " + position.coords.latitude +
		"<br>Longitude: " + position.coords.longitude;
	getFullAddress(position.coords.latitude, position.coords.longitude);
}

function getFullAddress(lat, long) {
	$.get("https://maps.googleapis.com/maps/api/geocode/json?latlng=" + lat + "," + long + "&key=AIzaSyCZoe_t6CAz1uRhnUFLRenTiuo4k9YdBLg").done(res => {
		console.log(res);
		var address = res.results[0].formatted_address;
		var pincode = "";
		var x = res.results[0].address_components.filter((comp, i) => {
			return comp.types.indexOf('postal_code') != -1;
		});
		pincode = x[0].long_name;

		$(debug).append(`<br><p>Address: ${address}</p><p>Pincode: ${pincode}</p>`);
	});
}

$(function () {
	document.getElementById("snap").addEventListener("click", function () {
		var video = document.getElementById('video');
		var canvas = document.getElementById('canvas');
		canvas.width = video.videoWidth;
		canvas.height = video.videoHeight;
		var context = canvas.getContext('2d');
		context.drawImage(video, 0, 0, video.videoWidth, video.videoHeight);
		var selectedQuestion = $('#count-state').val();
		var image = $('.preview-image[data-count="' + selectedQuestion + '"]')
		image.attr('src', canvas.toDataURL());
		image.show();
		$('#image-selector').hide();
		$('#inspectionForm').show();
	});
})