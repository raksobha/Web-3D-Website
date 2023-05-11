var spinning = false;

function spin()
{
	spinning = !spinning;
	document.getElementById('model__CokeTouchSensor-SENSOR').setAttribute('enabled', spinning.toString());
}

function stopRotation()
{
	spinning = false;
	document.getElementById('model__CokeTouchSensor-SENSOR').setAttribute('enabled', spinning.toString());
}


function animateModel()
{
    if(document.getElementById('model__AnimateTimer').getAttribute('enabled')!= 'true')
        document.getElementById('model__AnimateTimer').setAttribute('enabled', 'true');
    else
        document.getElementById('model__AnimateTimer').setAttribute('enabled', 'false');
}

function wireframe()
{
	document.getElementById('wire').runtime.togglePoints(true)
}

var lightOn = true;

function headlight()
{
	lightOn = !lightOn;
	document.getElementById('model__headlight').setAttribute('headlight', lightOn.toString());
}

function cameraFront()
{
	document.getElementById('model__Front').setAttribute('bind', 'true');
}

function cameraBack()
{
	document.getElementById('model__Back').setAttribute('bind', 'true');
}

function cameraLeft()
{
	document.getElementById('model__Left').setAttribute('bind', 'true');
}

function cameraRight()
{
	document.getElementById('model__Right').setAttribute('bind', 'true');
}

function cameraTop()
{
	document.getElementById('model__Top').setAttribute('bind', 'true');
}

//Change coke can texture
function cokeChange(cokeId)
{
		switch(cokeId) {
		case '0':
			urlMap = '../x3d/maps/can_texture.jpg';
			break;
		case '1':
			urlMap = '../x3d/maps/can_texture2.jpg';
			break;
		case '2':
			urlMap = '../x3d/maps/can_texture3.jpg';
			break;
		default:
			urlMap = '../x3d/maps/can_texture.jpg';
	}
	document.getElementById('model__Texture').setAttribute('url', urlMap);
}
