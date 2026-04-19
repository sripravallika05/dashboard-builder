// TEXT
function addText() {
    const text = new fabric.IText("Edit me", {
        left: 100,
        top: 100,
        fontSize: 20
    });
    canvas.add(text);
}

// IMAGE
function addImage(event) {
    const file = event.target.files[0];
    const reader = new FileReader();

    reader.onload = function(e) {
        fabric.Image.fromURL(e.target.result, function(img) {
            img.set({ left: 150, top: 150, scaleX: 0.5, scaleY: 0.5 });
            canvas.add(img);
        });
    };

    reader.readAsDataURL(file);
}

// CHART
function addChart() {
    const tempCanvas = document.createElement("canvas");
    tempCanvas.width = 300;
    tempCanvas.height = 200;

    const ctx = tempCanvas.getContext("2d");

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['A', 'B', 'C'],
            datasets: [{
                label: 'Demo',
                data: [10, 20, 30]
            }]
        }
    });

    setTimeout(() => {
        const img = new fabric.Image(tempCanvas, {
            left: 200,
            top: 200
        });
        canvas.add(img);
    }, 500);
}