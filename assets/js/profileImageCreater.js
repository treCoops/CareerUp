function generateAvatar(text, foregroundColor, backgroundColor) {

	let color;

	const canvas = document.createElement("canvas");
	const context = canvas.getContext("2d");

	canvas.width = 200;
	canvas.height = 200;

	// Draw background
	// context.fillStyle = '#'+(Math.random() * 0xFFFFFF << 0).toString(16).padStart(6, '0');
	context.fillStyle = backgroundColor;
	context.fillRect(0, 0, canvas.width, canvas.height);

	// Draw text
	context.font = "bold 80px Assistant";
	context.fillStyle = foregroundColor;
	context.textAlign = "center";
	context.textBaseline = "middle";
	context.fillText(text, canvas.width / 2, canvas.height / 2);

	return canvas.toDataURL("image/png");
}
