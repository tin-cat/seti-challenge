<html>
<head>
</head>
<body>

	<script>

		var data = '<?= file_get_contents("SETI_message.txt") ?>';
		var columns = 358;
		var pixelSize = 2;

		var rows = data.length / columns;

		// Create the canvas element
		var canvas = document.createElement('canvas');
		canvas.id = 'canvas';
		canvas.width = columns * pixelSize;
		canvas.height = rows * pixelSize;


		document.write('<p>Canvas size: ' + columns + 'x' + rows + '</p>');

		document.body.appendChild(canvas);

		var context = canvas.getContext('2d');

		context.beginPath();
		context.fillStyle = "black";

		var x = y = 0;
		for (i=0; i<data.length; i++) {
			if (data.charAt(i) == '1')
				context.rect(x * pixelSize, y * pixelSize, pixelSize, pixelSize);
			if (x >= columns) {
				x = 0;
				y ++;
			}
			else
				x ++;
		}

		context.fill();
	</script>

</body>
</html>