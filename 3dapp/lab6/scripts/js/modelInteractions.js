//adapted from example code 'benskitchen.com'

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
    if(document.getElementById('model__CokeTouchSensor-SENSOR').getAttribute('enabled')!= 'true')
        document.getElementById('model__CokeTouchSensor-SENSOR').setAttribute('enabled', 'true');
    else
        document.getElementById('model__CokeTouchSensor-SENSOR').setAttribute('enabled', 'false');
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
