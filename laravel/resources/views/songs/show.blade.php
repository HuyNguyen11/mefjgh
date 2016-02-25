@extends('layouts.layout')


@section('content')


<div id="movieframe">
	<div id="mediaspace" style='width:640px;height:480px;'></div>
		<ul>
		    <li>State: <span id="stateText">IDLE</span></li>
		    <li>Elapsed time: <span id="elapsedText">0</span></li>
		</ul>
		<a href="#" onclick="updateValues(); return false;">Click here to update values</a> 
	</div>
</div>
<script type='text/javascript'>
    function setText(id, messageText) {
    	document.getElementById(id).innerHTML = messageText;
	}

	function updateValues() {
	    var state = jwplayer("mediaspace").getState();
	    var elapsed = jwplayer("mediaspace").getPosition();
	    setText("stateText", state);
	    setText("elapsedText", elapsed);
	}

    jwplayer("mediaspace").setup({
        controlbar : 'bottom',
        width : '640',
        height : '480',
        file: "http://www.youtube.com/watch?v=f71DWpgO9uw",
        tracks: [
          { file: "caption.vtt", label: "English", kind: "subtitles" }]
    });
</script>
@stop