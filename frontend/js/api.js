function saveLayout() {
    const json = JSON.stringify(canvas.toJSON());

    fetch("../backend/save.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify({ data: json })
    })
    .then(res => res.text())
    .then(msg => alert("Saved!"));
}

function loadLayout() {
    fetch("../backend/get.php")
    .then(res => res.json())
    .then(data => {
        canvas.loadFromJSON(data, function() {
            canvas.renderAll();
        });
    });
}